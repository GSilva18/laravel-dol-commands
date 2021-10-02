<?php

namespace Dol\Traits;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

trait AppGeneratorTrait
{
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        $type = Str::plural($this->type);

        if ($domain = $this->option('domain')) {
            return "{$rootNamespace}\\{$domain}\\{$type}";
        }

        $defaultNamespace = config('dol-commands.app_default_namespace');

        return "{$rootNamespace}\\{$defaultNamespace}\\{$type}";
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return $this->laravel->basePath() . '/' . config('dol-commands.app_folder_location') . '/' . str_replace('\\', '/', $name) . '.php';
    }

    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        if ($app = $this->option('app')) {
            return "App\\{$app}\\";
        }

        return 'App\\Api\\';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['domain', 'd', InputOption::VALUE_REQUIRED, 'Set the domain name'],
            ['app', 'a', InputOption::VALUE_REQUIRED, 'Set the app name'],
        ];
    }
}
