<?php

namespace Shibby\Loilerplate;

use Illuminate\Support\ServiceProvider;

class LoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        \Blade::directive('datetime', function ($expression) {
            return "<?php echo \Shibby\Loilerplate\Util\DateUtil::formatDate({$expression}, 'datetime'); ?>";
        });
        \Blade::directive('date', function ($expression) {
            return "<?php echo \Shibby\Loilerplate\Util\DateUtil::formatDate({$expression}, 'date'); ?>";
        });
        \Blade::directive('dd', function ($expression) {
            return "<?php dd({$expression}); ?>";
        });
        \Blade::directive('dump', function ($expression) {
            return "<?php dump({$expression}); ?>";
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(\Collective\Html\HtmlServiceProvider::class);
        $this->app->register(\Sofa\Revisionable\Laravel\ServiceProvider::class);
        $this->app->register(\Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class); //todo: share routes and password config
        $this->app->register(\Jenssegers\Agent\AgentServiceProvider::class);
        $this->app->register(\Kris\LaravelFormBuilder\FormBuilderServiceProvider::class);
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
