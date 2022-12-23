<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class Settings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationGroup = "Settings";

    protected static ?string $navigationLabel = 'Settings';

    // protected static string $settings = SiteSettings::class;

    protected function getFormSchema(): array
    {
        return [
            Tabs::make('Heading')
                ->tabs([
                    Tab::make('Site')
                        ->icon('heroicon-o-cog')
                        ->schema([
                            Section::make('General')
                                ->schema([
                                    TextInput::make('name')
                                        ->required(),
                                    TextInput::make('slogan'),
                                    FileUpload::make('logo')
                                        ->avatar()
                                ])
                        ]),
                    Tab::make('Mail')
                        ->icon('heroicon-o-at-symbol')
                        ->schema([
                            // ...
                        ]),
                    Tab::make('GitHub')
                        ->icon('heroicon-o-cloud')
                        ->schema([
                            // ...
                        ]),
                ])->columnSpanFull()
        ];
    }
}
