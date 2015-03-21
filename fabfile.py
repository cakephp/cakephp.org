from fabric.api import env, run, local, task, settings, sudo
import json
from deploy.common import *

env.hosts = ['cakephp@cakephp.org']

environmentfile = openenvfile(__file__)
environments = json.loads(environmentfile.read())

timestr = ''
deployconf = {}

@task(default=True)
def deploy(environment='3.0'):
    global deployconf, timestr
    timestr = run('date +%Y%m%d.%H%M').strip()
    envs = init_environments(environments)
    deployconf = envs[get_environment(environment, envs)]
    clone(deployconf, timestr)
    delete(deployconf, timestr)
    fullwritable(deployconf, timestr)
    current_link(deployconf, timestr)
    composer(deployconf, timestr)
    asset_generate(deployconf, timestr)

def asset_generate(deployconf, timestr):
    run('{0}{1}/bin/cake AssetCompress.asset_compress build'.format(deployconf['site_dir'], deployconf['current_dir']))

def composer(deployconf, timestr):
    run('cd {0}{1} && (curl -s https://getcomposer.org/installer | php && php composer.phar install --prefer-dist --optimize-autoloader --ignore-platform-reqs)'.format(deployconf['site_dir'], deployconf['current_dir']))

