# Installation

## Requirement

Laramanager requires Laravel 5.5 to 5.6.27 (Currently an issue with the Laravel 5.6.28 update). It also uses `/admin` so if your application is currently using this uri there could be conflicts.

## Install Laramanager

Installing Laramanager is a breeze. First, grab the package.

```console
composer require philmareu/laramanager
```

Then publish the assets and migration files.

```console
php artisan vendor:publish
```

Now run the migrations.

```console
php artisan migrate
```

Finally, visit `/admin` in your project and add your initial admin user.

![LaraManager Install Screen](/images/original/laramanager-install.jpg)

Done.