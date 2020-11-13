<?php

namespace App\Models;

use Illuminate\Support\Facades\Facade as FacadesFacade;
use Illuminate\Support\Facades\Facade;


class ExampleFacade extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return Example::class;   
    }
}