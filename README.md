# Laravel Indonesian Language
Indonesian language localization for Laravel 5 PHP framework

## Installation
To install this localization, you can install using Composer in terminal:
```
composer require silalahi/laravel-id-lang dev-master
```

Once localization installed, you need to register Laravel service provider in your ```config/app.php```:
```php
'providers' => [

      // ...

      /*
       * Localization Service Providers
       */
      Silalahi\Laravel\IDLangServiceProvider::class,

    ],
```

Use the following Artisan command to publish the localization file into your ```resource\lang``` directory:
```
php artisan vendor:publish
```

You're good to go!
