## Installation

### Requirement

Laramanager requires Laravel 5.5 or greater. It also uses `/admin` so if your application is currently using this uri there could be conflicts.

### Install Laramanager

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

![LaraManager Install Screen](/images/original/ZIxTCTFXbYnuxnniOLFLJIeXbRSHVY8qhILXUOfQS7j6mIAcd53R97SqamLuUp4tKH4oZXWNsf61dXJntyWYVsLonjFzLgVqCyAg.png)

Done.