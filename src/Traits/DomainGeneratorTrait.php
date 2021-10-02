<?php

namespace Dol\Traits;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

trait DomainGeneratorTrait
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

        $defaultNamespace = config('dol-commands.default_namespace');

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
        return 'Domain\\';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('dol-commands.stubs.model');

        if (!is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return parent::getStub();
    }

    protected function getOptions()
    {
        return array_merge(parent::getOptions(), [
            ['domain', 'd', InputOption::VALUE_OPTIONAL, 'Set the domain name'],
        ]);
    }
}
