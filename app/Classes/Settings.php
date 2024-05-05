<?php

namespace App\Classes;

use Spatie\Valuestore\Valuestore;

class Settings extends Valuestore
{
    /**
     * @param array $defaultSettings
     * @return void
     */
    public static function initSettings(array $defaultSettings) : void
    {
        app(Settings::class)->put($defaultSettings);
    }


    /**
     * @param string $key
     * @return string|int|null
     */
    public final function uiSettings(string $key) : string|int|null
    {
        if(auth()->check()){
            if(isset(auth()->user()->{$key}) and !is_null((auth()->user()->{$key}))){
                return auth()->user()->{$key};
            }
        }

        return app(Settings::class)->get($key) ?? null;
    }

}
