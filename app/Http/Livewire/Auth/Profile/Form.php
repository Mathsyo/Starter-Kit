<?php

namespace App\Http\Livewire\Auth\Profile;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Livewire\Component;

class Form extends Component implements HasForms
{

    use InteractsWithForms;

    public $user;

    public function getFormSchema() {
        return [
            Section::make("General")
            ->schema([
                TextInput::make('user.name')
                    ->required(),
                TextInput::make('user.email')
                    ->required()
                    ->email(),
            ]),
            Section::make("Password")
                ->schema([
                    TextInput::make('user.password')
                        ->password(),
                ]),
        ];
    }

    public function submit() {
        $datas = $this->form->getState();
        $this->user->name = $datas['user']['name'];
        $this->user->email = $datas['user']['email'];
        $this->user->password = bcrypt($datas['user']['password']);
        // $this->user->profile_picture = explode('users/profile_pictures/', $datas['profile_picture'])[1];
        $this->user->save();

        Notification::make()
            ->title('Saved successfully.')
            ->success()
            ->send();
    }

    public function render()
    {
        return view('livewire.auth.profile.form');
    }
}
