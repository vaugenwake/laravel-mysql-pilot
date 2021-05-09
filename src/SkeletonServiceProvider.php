<?php

namespace VendorName\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishableAssets();
        $this->loadPackageViews();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('skeleton', function ($app) {
            return new Skeleton();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'skeleton');
    }

    /**
     * This method sets up all the assets that are publishable via artisan for your package.
     * If your application does not require any of these feel free to delete them and the relevant dirs/files.
     */
    private function registerPublishableAssets()
    {
        if ($this->app->runningInConsole()) {
            // Config
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('skeleton.php')
            ], 'config');

            // Views
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/skeleton')
            ], 'views');

            // Migrations
            if (! class_exists('CreateSkeletonTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_skeleton_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_skeleton_table.php')
                ], 'migrations');
            }
        }
    }

    /**
     * Load package views
     * @return void
     */
    private function loadPackageViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'skeleton');
    }
}
