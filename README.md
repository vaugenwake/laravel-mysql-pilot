# Laravel MySQL Pilot

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vaugenwake/laravel_mysql_pilot.svg?style=flat-square)](https://packagist.org/packages/vaugenwake/laravel_mysql_pilot)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vaugenwake/laravel_mysql_pilot/tests?label=tests)](https://github.com/vaugenwake/laravel_mysql_pilot/actions?query=workflow%3Atests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/vaugenwake/laravel_mysql_pilot.svg?style=flat-square)](https://packagist.org/packages/vaugenwake/laravel_mysql_pilot)

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
