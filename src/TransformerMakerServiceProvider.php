<?php

namespace MetricLoop\TransformerMaker;

use Illuminate\Support\ServiceProvider;
use MetricLoop\TransformerMaker\Commands\MakeTransformer;
use Symfony\Component\Console\Output\ConsoleOutput;

class TransformerMakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('command.make:transformer', MakeTransformer::class);

        $this->commands([
            'command.make:transformer',
        ]);

        // $this->app->singleton(ConsoleOutput::class);
    }
}