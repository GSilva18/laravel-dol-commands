<?php

namespace Dol\Commands;

use Dol\Traits\DomainGeneratorTrait;
use Illuminate\Foundation\Console\RuleMakeCommand;
use Dol\Contracts\DomainGeneratorContract;

class RuleCommand extends RuleMakeCommand implements DomainGeneratorContract
{
    use DomainGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:rule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new validation rule for a given domain';
}
