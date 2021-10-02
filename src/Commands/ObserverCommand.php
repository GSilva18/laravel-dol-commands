<?php

namespace Dol\Commands;

use Dol\Traits\DomainGeneratorTrait;
use Dol\Contracts\DomainGeneratorContract;
use Illuminate\Foundation\Console\ObserverMakeCommand;

class ObserverCommand extends ObserverMakeCommand implements DomainGeneratorContract
{
    use DomainGeneratorTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:observer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new observer class for a given domain';
}
