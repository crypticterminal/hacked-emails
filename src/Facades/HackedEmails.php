<?php

namespace Daniesy\HackedEmails\Facades;

use Illuminate\Support\Facades\Facade;


class HackedEmails extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "HackedEmails";
    }
}
