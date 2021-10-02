<?php

namespace Dol\Commands;


use Dol\Traits\DomainGeneratorTrait;
use Dol\Contracts\DomainGeneratorContract;
use Illuminate\Foundation\Console\ModelMakeCommand;

class ModelCommand extends ModelMakeCommand implements DomainGeneratorContract
{

    use DomainGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Eloquent model for a given domain';
}
