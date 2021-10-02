<?php

namespace Dol\Commands;

use Dol\Traits\DomainGeneratorTrait;
use Dol\Contracts\DomainGeneratorContract;
use Illuminate\Foundation\Console\EventMakeCommand;

class EventCommand extends EventMakeCommand implements DomainGeneratorContract
{
    use DomainGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an event for a given domain';
}
