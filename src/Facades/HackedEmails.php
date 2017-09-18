<?php

namespace Daniesy\HackedEmails\Facade;

use Illuminate\Support\Facades\Facade;


class HackedEmails extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "HackedEmails";
    }
}