<?php

namespace Dol\Commands;

use Illuminate\Console\GeneratorCommand;
use Dol\Traits\DomainGeneratorTrait;
use Dol\Contracts\DomainGeneratorContract;

class EnumCommand extends GeneratorCommand implements DomainGeneratorContract
{
    use DomainGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:enum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an enum for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Enum';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('dol-commands.stubs.enum');

        if (!is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__ . '/stubs/enum.stub';
    }
}
