<?php

namespace Vaugenwake\MysqlPilot;

use Illuminate\Support\ServiceProvider;
use Vaugenwake\MysqlPilot\Commands\MySQLBackupCommand;
use Vaugenwake\MysqlPilot\Commands\MySQLListCommand;
use Vaugenwake\MysqlPilot\Commands\MySQLRestoreCommand;

class MysqlPilotServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishableAssets();
        $this->registerConsoleCommands();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'mysqlpilot');
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
                __DIR__ . '/../config/config.php' => config_path('mysqlpilot.php')
            ], 'config');
        }
    }

    private function registerConsoleCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MySQLBackupCommand::class,
                MySQLRestoreCommand::class,
                MySQLListCommand::class
            ]);
        }
    }
}
