![StyleCi](https://styleci.io/repos/76726509/shield?style=plastic)

_Since it's not a stable package, first of all you should avoid of using this._

## What?

It's a Boilerplate for [Laravel](http://github.com/laravel/laravel) framework.

It contains and registers these packages by default:

* [kris/laravel-form-builder](https://github.com/kristijanhusak/laravel-form-builder)
* [laravelcollective/html](https://github.com/LaravelCollective/html)
* [doctrine/dbal](https://github.com/doctrine/dbal)
* [sofa/revisionable](https://github.com/jarektkaczyk/revisionable)
* [jenssegers/agent](https://github.com/jenssegers/agent)

* [rap2hpoutre/laravel-log-viewer --dev](https://github.com/rap2hpoutre/laravel-log-viewer)
* [barryvdh/laravel-ide-helper --dev](https://github.com/barryvdh/laravel-ide-helper)
* [barryvdh/laravel-debugbar --dev](https://github.com/barryvdh/laravel-debugbar)


## Installation

Install package and dev-dependencies via composer

``` bash

composer require barryvdh/laravel-ide-helper barryvdh/laravel-debugbar rap2hpoutre/laravel-log-viewer --dev

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

``` bash
php artisan vendor:publish
```
