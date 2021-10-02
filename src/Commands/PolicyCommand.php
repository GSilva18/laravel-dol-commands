<?php

namespace Dol\Commands;

use Dol\Traits\DomainGeneratorTrait;
use Dol\Contracts\DomainGeneratorContract;
use Illuminate\Foundation\Console\PolicyMakeCommand;

class PolicyCommand extends PolicyMakeCommand implements DomainGeneratorContract
{
    use DomainGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:policy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new policy for a given domain';
}
