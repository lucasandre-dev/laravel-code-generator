<?php

namespace LucasandreDev\LaravelCodeGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use LucasandreDev\LaravelCodeGenerator\Commands\CodeGeneratorCommand;

class CodeGeneratorProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../Configs/templates-code-generator.php' => config_path('templates-code-generator.php')
        ], 'templates-code-generator-config');

        $this->publishes([
            __DIR__.'/../Mockups/' => base_path('templates/Mockups'),
        ], 'templates-code-generator-mockups');

        if ($this->app->runningInConsole()) {
            $this->commands([
                CodeGeneratorCommand::class,
            ]);
        }
    }
}
