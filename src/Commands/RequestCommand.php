<?php

namespace Dol\Commands;

use Dol\Traits\AppGeneratorTrait;
use Dol\Contracts\AppGeneratorContract;
use Illuminate\Foundation\Console\RequestMakeCommand;

class RequestCommand extends RequestMakeCommand implements AppGeneratorContract
{
    use AppGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:request';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an request for a given App';
}
