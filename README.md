# CakePHP.org website

## Dependencies

This app uses Composer to manage PHP dependencies, as well as
`composer-asset-plugin` to manage Javascript/CSS dependencies (without requiring
Bower or Node to be installed on the system.)

To install all required dependencies, run:

    $ composer global require fxp/composer-asset-plugin:~1.0
    $ composer install

To add new PHP dependencies, run:

    $ composer require user/repo:version
    $ git add composer.*

To add new Javascript/CSS dependencies, run:

    $ composer require bower-asset/asset-name
    $ git add composer.*

Don't forget to add your new dependencies to the correct section of
`app/Config/asset_compress.ini` (sections are named after corresponding layout
files found in `app/View/Layout`).

## Building assets

Once dependencies are in place, run the following console to generate assets:

    $ bin/cake AssetCompress.asset_compress build

## Setting up git path

The changelog functionality works using Git. Paths to the git executable and the
repository can be configured in `Config/changelog.php` if neededthese. You then
need to create a clone of the `cakephp` repository like this (assuming default
configuration):

    $ (cd tmp && git clone --bare git@github.com:cakephp/cakephp.git)

## Deployment

Deployment is controlled via Fabric (a Python tool).

Deploying stage site:

    $ fab

Deploying production site:

    $ fab deploy:environment=production
