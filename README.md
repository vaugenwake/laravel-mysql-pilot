# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vendor_slug/package_slug.svg?style=flat-square)](https://packagist.org/packages/vendor_slug/package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vendor_slug/package_slug/tests?label=tests)](https://github.com/vendor_slug/package_slug/actions?query=workflow%3Atests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/vendor_slug/package_slug.svg?style=flat-square)](https://packagist.org/packages/vendor_slug/package_slug)

[](delete) 1) manually replace `:author_name, :author_username, auhor@domain.com, :vendor_name, vendor_slug, Vendor Name, :package_name, package_slug, skeleton, Skeleton, :package_description` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, Skeleton.php, SkeletonCommand.php, SkeletonFacade.php, SkeletonServiceProvider.php, TestCase.php, composer.json, create_skeleton_table.php.stub`
[](delete) and delete `configure-skeleton.sh`

[](delete) 2) You can also run `./configure-skeleton.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

This template is inspired by the spatie [package skeleton template](https://github.com/spatie/package-skeleton-laravel)

## Installation

You can install the package via composer:

```bash
composer require vendor_slug/package_slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="VendorName\Skeleton\SkeletonServiceProvider" --tag="package_slug-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="VendorName\Skeleton\SkeletonServiceProvider" --tag="package_slug-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$skeleton = new VendorName\Skeleton();
echo $skeleton->helloworld();
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

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
