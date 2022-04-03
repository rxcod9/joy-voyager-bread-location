# Joy VoyagerBreadLocation

This [Laravel](https://laravel.com/)/[Voyager](https://voyager.devdojo.com/) module adds VoyagerBreadLocation support to Voyager.

By 🐼 [Ramakant Gangwar](https://github.com/rxcod9).

[![Screenshot](https://raw.githubusercontent.com/rxcod9/joy-voyager-bread-location/main/cover.jpg)](https://joy-voyager.herokuapp.com/)

[![Latest Version](https://img.shields.io/github/v/release/rxcod9/joy-voyager-bread-location?style=flat-square)](https://github.com/rxcod9/joy-voyager-bread-location/releases)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/rxcod9/joy-voyager-bread-location/run-tests?label=tests)
[![Total Downloads](https://img.shields.io/packagist/dt/joy/voyager-bread-location.svg?style=flat-square)](https://packagist.org/packages/joy/voyager-bread-location)

---

## Prerequisites

*   Composer Installed
*   [Install Laravel](https://laravel.com/docs/installation)
*   [Install Voyager](https://github.com/the-control-group/voyager)
*   [Install JoyVoyagerDatatable Package](https://github.com/rxcod9/joy-voyager-datatable)

---

## Installation

```bash
# 1. Require this Package in your fresh Laravel/Voyager project
composer require joy/voyager-bread-location

# 2. Publish
php artisan vendor:publish --provider="Joy\VoyagerBreadLocation\VoyagerBreadLocationServiceProvider" --force

# 3. Migrations && Seeders
php artisan migrate
# 4. Seeders
php artisan db:seed --class="\Joy\VoyagerBreadLocation\Database\Seeders\VoyagerDatabaseSeeder" --force
# 4. Dummy Seeders
php artisan db:seed --class="\Joy\VoyagerBreadLocation\Database\Seeders\VoyagerDummyDatabaseSeeder" --force
# 4. Optimize [Mostly to clear cache/route cache]
php artisan optimize
```

---


## Working Example

You can try laravel demo here [https://joy-voyager.herokuapp.com/admin/users](https://joy-voyager.herokuapp.com/admin/users).

## Documentation

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving the joy voyager-bread-location? Feel free to [create an issue on GitHub](https://github.com/rxcod9/joy-voyager-bread-location/issues), we'll try to address it as soon as possible.

If you've found a bug regarding security please mail [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

## Upgrading

Please see [UPGRADING](UPGRADING.md) for details.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email [gangwar.ramakant@gmail.com](mailto:gangwar.ramakant@gmail.com) instead of using the issue tracker.

## Credits

- [Ramakant Gangwar](https://github.com/rxcod9)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
