<?php

namespace Svnwa\InertiaVuePaginator\Facades;

use Illuminate\Support\Facades\Facade;

class InertiaVuePaginator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'inertiavuepaginator';
    }
}
