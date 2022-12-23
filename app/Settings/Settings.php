<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings as LaravelSettingsSettings;

class Settings extends LaravelSettingsSettings
{

    protected string $name;
    protected string $slogan;
    protected string $logo;

    public static function group(): string
    {
        return 'site';
    }
}
