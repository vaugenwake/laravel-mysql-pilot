# A simple set of commands to backup :package_description restore mysql in your Laravel app.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vaugenwake/laravel_mysql_pilot.svg?style=flat-square)](https://packagist.org/packages/vaugenwake/laravel_mysql_pilot)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vaugenwake/laravel_mysql_pilot/tests?label=tests)](https://github.com/vaugenwake/laravel_mysql_pilot/actions?query=workflow%3Atests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/vaugenwake/laravel_mysql_pilot.svg?style=flat-square)](https://packagist.org/packages/vaugenwake/laravel_mysql_pilot)

[](delete) 1) manually replace `Vaugen Wakeling, vaugenwake, auhor@domain.com, vaugenwake, vaugenwake, Vendor Name, laravel-mysql-pilot, laravel_mysql_pilot, laravel_mysql_pilot, MysqlPilot, A simple set of commands to backup :package_description restore mysql in your Laravel app.` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, MysqlPilot.php, MysqlPilotCommand.php, MysqlPilotFacade.php, MysqlPilotServiceProvider.php, TestCase.php, composer.json, create_laravel_mysql_pilot_table.php.stub`
[](delete) and delete `configure-laravel_mysql_pilot.sh`

[](delete) 2) You can also run `./configure-laravel_mysql_pilot.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

This template is inspired by the spatie [package laravel_mysql_pilot template](https://github.com/spatie/package-laravel_mysql_pilot-laravel)

## Installation

You can install the package via composer:

```bash
composer require vaugenwake/laravel_mysql_pilot
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Vaugenwake\MysqlPilot\MysqlPilotServiceProvider" --tag="laravel_mysql_pilot-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Vaugenwake\MysqlPilot\MysqlPilotServiceProvider" --tag="laravel_mysql_pilot-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel_mysql_pilot = new Vaugenwake\MysqlPilot();
echo $laravel_mysql_pilot->helloworld();
```

## Testing

```bash
composer test
```

# Sniffing

```bash
composer sniff
```

```bash
composer sniff-fix
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Vaugen Wakeling](https://github.com/vaugenwake)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
