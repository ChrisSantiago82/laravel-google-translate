<?php

namespace ChrisSantiago82\GoogleTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisSantiago82\GoogleTranslate\GoogleTranslate
 */
class GoogleTranslateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-google-translate';
    }
}
