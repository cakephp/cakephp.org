import json
import time
from fabric.api import env, task
from deploy.common import *

env.hosts = ['cakephp@cakephp.org']

environmentfile = openenvfile(__file__)
environments = json.loads(environmentfile.read())

timestr = ''
deployconf = {}

@task(default=True)
def deploy(environment='3.0'):
    global deployconf, timestr
    timestr = str(time.time()).split('.')[0]
    envs = init_environments(environments)
    deployconf = envs[get_environment(environment, envs)]
    clone(deployconf, timestr)
    delete(deployconf, timestr)
    fullwritable(deployconf, timestr)
    composer(deployconf, timestr)
    asset_generate(deployconf, timestr)
    current_link(deployconf, timestr)

def asset_generate(deployconf, timestr):
    run('{0}{1}/bin/cake AssetCompress.asset_compress build'.format(deployconf['site_dir'], timestr))

def composer(deployconf, timestr):
    run('cd {0}{1} && (curl -s https://getcomposer.org/installer | php && php composer.phar global require fxp/composer-asset-plugin:~1.0 && php composer.phar install --prefer-dist --no-dev --optimize-autoloader --ignore-platform-reqs)'.format(deployconf['site_dir'], timestr))

