<?php

namespace Dol\Providers;

use Illuminate\Support\ServiceProvider;
use Dol\Commands\DTOCommand;
use Dol\Commands\EnumCommand;
use Dol\Commands\RuleCommand;
use Dol\Commands\EventCommand;
use Dol\Commands\ModelCommand;
use Dol\Commands\ActionCommand;
use Dol\Commands\PolicyCommand;
use Dol\Commands\RequestCommand;
use Dol\Commands\ObserverCommand;
use Dol\Commands\ControllerCommand;


class DomainServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/dol-commands.php' => config_path('dol-commands.php'),
            ], 'dol-commands-config');

            $this->commands([
                ActionCommand::class,
                ControllerCommand::class,
                DTOCommand::class,
                EnumCommand::class,
                EventCommand::class,
                ModelCommand::class,
                ObserverCommand::class,
                PolicyCommand::class,
                RequestCommand::class,
                RuleCommand::class,
            ]);
        }

        $this->mergeConfigFrom(__DIR__ . '/../../config/dol-commands.php', 'dol-commands');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
