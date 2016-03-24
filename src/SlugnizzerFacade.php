<?php namespace Slugnizzer\Slugnizzer;

use Illuminate\Support\Facades\Facade;

class SlugnizzerFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'slugnizzer';
    }
}