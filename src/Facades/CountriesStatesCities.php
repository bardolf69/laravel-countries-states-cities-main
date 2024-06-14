<?php

namespace Bardolf69\CountriesStatesCities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bardolf69\CountriesStatesCities\CountriesStatesCities
 */
class CountriesStatesCities extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bardolf69\CountriesStatesCities\CountriesStatesCities::class;
    }
}
