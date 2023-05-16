# farmos-ddev-template

A template for farmOS development with [DDEV](https://ddev.com).

Includes:
- PostgreSQL 13
- PHP-GEOS
- Reference settings.ddev.php

## Setup

1. [Install DDEV](https://ddev.com/get-started)
1. Copy the `.ddev` folder from this template to the root of your project directory.
1. Update your `settings.php` file to include `settings.ddev.php` (see examples in [web/sites/default](web/sites/default)).
1. Optionally update the DDEV project name in `.ddev/config.yml`
1. Start DDEV: `ddev start`

### Composer
1. Create a composer project (if you do not already have a `composer.json`): `ddev composer create "farmos/project:2.x-dev"`
1. Install composer dependencies: `ddev composer install`
1. Add dependency (exmple `farm_organic`): `ddev composer require drupal/farm_organic`
1. Updating dependencies: `ddev composer update`

### Install farmOS:
- Using Drush: `ddev drush si farm`
- Using the UI: `ddev launch` and follow the onscreen instructions.

## Usage

### Useful DDEV commands:
- Start: `ddev start`, Stop: `ddev stop`
- Completely stop: `ddev poweroff`
- Drush: `ddev drush {drush command}`
- PHP CLI: `ddev php`

### PostgreSQL Commands:
- TODO: Since DDEV v1.19 Postgres is a first-class DB. Update this.
- Based on [ddev-contrib PostgreSQL](https://github.com/ddev/ddev-contrib/blob/master/docker-compose-services/postgres/README.md)
- Import: `ddev pgsql_import`, Export: `ddev pgsql_export`
- See PostgreSQL [readme](.ddev/commands/postgres/README.md)

