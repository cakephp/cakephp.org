# CakePHP Main Website #

This is the [CakePHP](http://cakephp.org) main website.

## Building Assets ##

Ensure that submodules have been initialised.

Once initialised, run the following console to generate assets:

    cake AssetCompress.asset_compress build

## Setting up git path ##

The path to git needs to be setup in `Config/core.php`.

## Deployment ##

Deployment is controlled via Fabric (A Python tool).

Deploying stage site:

    fab

Deploying production site:

    fab deploy:environment=production


