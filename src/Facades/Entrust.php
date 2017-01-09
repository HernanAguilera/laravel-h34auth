<?php namespace H34\Facades;


use Illuminate\Support\Facades\Facade;

class Entrust extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'entrust';
    }
}
