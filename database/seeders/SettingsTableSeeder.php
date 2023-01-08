<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                "group" => "github",
                "name" => "repository",
                "locked" => false,
                "deletable" => false,
                "payload" => "Mathsyo/Starter-Kit",
            ],
            [
                "group" => "github",
                "name" => "token",
                "locked" => false,
                "deletable" => false,
                "payload" => "ghp_XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
            ],
            [
                "group" => "site",
                "name" => "name",
                "locked" => false,
                "deletable" => false,
                "payload" => "Starter Kit",
            ],
            [
                "group" => "site",
                "name" => "description",
                "locked" => false,
                "deletable" => false,
                "payload" => "A starter kit for Laravel 8 with Filament 2",
            ],
            [
                "group" => "site",
                "name" => "keywords",
                "locked" => false,
                "deletable" => false,
                "payload" => "laravel,filament,starter-kit",
            ],
            [
                "group" => "site",
                "name" => "author",
                "locked" => false,
                "deletable" => false,
                "payload" => "Mathsyo",
            ],
            [
                "group" => "site",
                "name" => "email",
                "locked" => false,
                "deletable" => false,
                "payload" => "mathias.debarros@deokonai.fr",
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
