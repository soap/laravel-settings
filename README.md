# Application settings storage and retrieval package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/soap/laravel-settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/soap/laravel-settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-settings)

This package lets you save and store application settings in database. 

This package is 95% forked from [qcod/laravel-settings](https://github.com/qcod/laravel-settings). I made this one to acheive some goals that I cannot do with original package.

## Installation

You can install the package via composer:

```bash
composer require soap/laravel-settings
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="settings-config"
```

This is the contents of the published config file:

```php
return [
    'table' => 'settings',
];
```
You can change table name used to store application settings.
Then you can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="settings-migrations"
php artisan migrate
```

## Usage
You can use helper function `settings('app_name')` or `Settings::get('app_name')` to use laravel settings. The later is via Facacde.
### Available methods
```php
// Pass `true` to ignore cached settings
settings()->all($fresh = false);

// Get a single setting
settings()->get($key, $default = null);

// Set a single setting
settings()->set($key, $value);

// Set a multiple settings
settings()->set([
   'app_name' => 'Laravel',
   'app_email' => 'info@email.com',
   'app_type' => 'SaaS'
]);

// check for setting key
settings()->has($key);

// remove a setting
settings()->remove($key);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
