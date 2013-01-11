from fabric.api import env, run, local, task, settings, sudo
import json
from deploy.common import *

env.hosts = ['cakephp@cakephp.org']

environmentfile = openenvfile(__file__)
environments = json.loads(environmentfile.read())

timestr = ''
deployconf = {}

@task(default=True)
def deploy(environment='stage'):
	global deployconf, timestr
	timestr = run('date +%Y%m%d.%H%M').strip()
	envs = init_environments(environments)
	deployconf = envs[get_environment(environment, envs)]

	clone(deployconf, timestr)
	delete(deployconf, timestr)
	config(deployconf, timestr)
	# links(deployconf, timestr)
    fullwritable(deployconf, timestr)
	current_link(deployconf, timestr)
	asset_generate(deployconf, timestr)
	services(deployconf, timestr)

def asset_generate(deployconf, timestr):
	run('{0}lib/Cake/Console/cake -app {0}{1} AssetCompress.asset_compress build'.format(deployconf['site_dir'], deployconf['current_dir']))
