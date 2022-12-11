<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard as ComponentsWizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Wizard extends Component implements HasForms
{

    use InteractsWithForms;

    public $name, $email, $bio, $github_url, $twitter_url;

    public function mount() {
        $this->form->fill();
    }

    public function getFormSchema() {
        return [
            ComponentsWizard::make()
                ->schema([
                    Step::make('Details')
                        ->description('Enter your details below.')
                        ->icon('heroicon-o-user')
                        ->schema([
                            TextInput::make('name')
                                ->required(),
                            TextInput::make('email')
                                ->required()
                                ->email(),
                        ]),
                    Step::make('Bio')
                        ->description('Tell us a bit about yourself.')
                        ->icon('heroicon-o-pencil')
                        ->schema([
                            MarkdownEditor::make('bio')
                                ->required(),
                        ]),
                    Step::make('Social')
                        ->description('Social medias.')
                        ->icon('heroicon-o-chat')
                        ->schema([
                            TextInput::make('github_url')
                                ->label('Github'),
                            TextInput::make('twitter_url')
                                ->label('Twitter'),
                        ]),
                ])
        ];
    }

    public function submit() {
        dd($this->form->getState());
    }

    public function render()
    {
        return view('livewire.wizard');
    }
}
