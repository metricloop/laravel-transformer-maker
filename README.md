# A quick way to create Fractal Transformers

[![Latest Version](https://img.shields.io/github/release/metricloop/laravel-transformer-maker.svg?style=flat-square)](https://github.com/metricloop/laravel-transformer-maker/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/metricloop/laravel-transformer-maker/master.svg?style=flat-square)](https://travis-ci.org/metricloop/laravel-transformer-maker)
[![Total Downloads](https://img.shields.io/packagist/dt/metricloop/laravel-transformer-maker.svg?style=flat-square)](https://packagist.org/packages/metricloop/laravel-transformer-maker)

This package gives you a quick way to create [Transformers](http://fractal.thephpleague.com/transformers/) for your Eloquent models when using [Fractal](http://fractal.thephpleague.com/).

## Installation And Usage

Issue the command:

```
composer require "metricloop/laravel-transformer-maker"
```

Then register the service provider:

```
// config/app.php

'providers' => [
    // ...
    MetricLoop\TransformerMaker\TransformerMakerServiceProvider::class,
];
```

Then just use it like any other Artisan `make` command:

```
php artisan make:transformer Person
```

And get the stubbed out `PersonTransformer.php` in `App/Transformers`!

## Shout Out
To Phil Sturgeon and the team at the PHP League for Fractal. And if you haven't already, go check out Phil's book about building APIs: [Build APIs You Won't Hate](https://apisyouwonthate.com/).

## About Metric Loop
Metric Loop is an Austin based technology company that strives to create value by helping its clients reduce overhead, simplify their hardware procurement, and run their businesses more efficiently.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.