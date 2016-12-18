*Since it's not a stable package, first of all you should avoid of using this. *


## Installation


Set minimum stability and prefer-stable options on your `composer.json` file.

```json
    "minimum-stability": "dev",
    "prefer-stable": true,
```


Install package and dev-dependencies via composer

```
composer require barryvdh/laravel-ide-helper barryvdh/laravel-debugbar --dev

composer require shibby/loilerplate

```

Add service provider to config/app.php
 
 ``` php
 'providers' => [
    // ...
    \Shibby\Loilerplate\LoilerplateServiceProvider::class,
 ]
 ```

Also add Facades to config/app.php

 ``` php
 'aliases' => [
    // ...
    'Agent' => Jenssegers\Agent\Facades\Agent::class,
    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
 ]
 ```

Publish vendors

```
php artisan vendor:publish
```
