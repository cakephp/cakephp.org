# CakePHP Official Website - cakephp.org

This is the repository for the official [CakePHP Website](https://cakephp.org).

## Requirements

The `master` branch has the following requirements:

* PHP 5.6.0 or greater.

## Installation

* Clone the repository
```sh
git clone git@github.com:cakephp/cakephp.org.git
```

* [Download composer](https://getcomposer.org/download/) and install dependencies
```php
php composer.phar install
```

* Copy `config/app.default.php` to `config/app.php` and configure the database

* Run migrations:
```ssh
bin/cake migrations migrate -p CakeDC/Users
bin/cake migrations migrate -p Muffin/Tags
bin/cake migrations migrate
```

## Reporting Issues

If you see an issue in the [CakePHP Website](https://cakephp.org) or something to improve please open an issue on [GitHub](https://github.com/cakephp/cakephp.org/issues).

## Contributing

If you'd like to contribute to the CakePHP Website, you can [fork](https://help.github.com/articles/fork-a-repo) the project, add features, and send [pull requests](https://help.github.com/articles/using-pull-requests) or open [issues](https://github.com/cakephp/cakephp.org/issues).
