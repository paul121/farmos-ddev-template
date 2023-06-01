# farmos-ddev-template

A template for farmOS development with [DDEV](https://ddev.com).

Includes:
- PostgreSQL 13
- PHP-GEOS
- Reference settings.ddev.php

## ⚠️ Archived!!! ⚠️ 

The approach described in this repo is now deprecated:
- The latest version of DDEV has first-class support for postgres
- Use [wotnak/ddev-php-geos](https://github.com/wotnak/ddev-php-geos) DDEV add-on to install php-geos.

Run farmOS in DDEV in 5 lines:

```
ddev config --project-type=drupal9 --docroot=web --create-docroot --database=postgres:15 --php-version=8.1
ddev get wotnak/ddev-php-geos
ddev start
ddev composer create farmos/project:2.x-dev
ddev drush site:install farm
```

## Setup

1. [Install DDEV](https://ddev.com/get-started)
1. Copy the `.ddev` folder from this template to the root of your project directory.
1. Optionally update the DDEV project name in `.ddev/config.yml`
1. Start DDEV: `ddev start`

### Composer
1. Create a composer project (if you do not already have a `composer.json`): `ddev composer create "farmos/project:2.x-dev"`
1. Install composer dependencies: `ddev composer install`
1. After installing codebase, Update your Drupal `settings.php` file to include a `settings.ddev.php` override (see `settings-example.php`).

### Install farmOS:
- Intall farmOS once the codebase is installed and properly configured via `settings.php`:
- Using Drush: `ddev drush si farm`
- Using the UI: `ddev launch` and follow the onscreen instructions.

## Usage

### Composer:

1. Add dependency (exmple `farm_organic`): `ddev composer require drupal/farm_organic`
1. Updating dependencies: `ddev composer update`

### Useful DDEV commands:
- Start: `ddev start`, Stop: `ddev stop`
- Completely stop: `ddev poweroff`
- Launch: `ddev launch`
- Drush: `ddev drush {drush command}`
  - Login link: `ddev drush uli`
- PHP CLI: `ddev php`

### PostgreSQL Commands:
- TODO: Since DDEV v1.19 Postgres is a first-class DB. Update this.
- Based on [ddev-contrib PostgreSQL](https://github.com/ddev/ddev-contrib/blob/master/docker-compose-services/postgres/README.md)
- Import: `ddev pgsql_import`, Export: `ddev pgsql_export`
- See PostgreSQL [readme](.ddev/commands/postgres/README.md)

