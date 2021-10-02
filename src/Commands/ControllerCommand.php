<?php

namespace Dol\Commands;

use Dol\Traits\AppGeneratorTrait;
use Dol\Contracts\AppGeneratorContract;
use Illuminate\Routing\Console\ControllerMakeCommand;

class ControllerCommand extends ControllerMakeCommand implements AppGeneratorContract
{
    use AppGeneratorTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'dol:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an controler for a given App';
}
