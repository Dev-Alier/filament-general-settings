<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Forms;

use App\Models\UsershipStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class LoginFieldsForm
{
    public static function get(): array
    {
        return [
           Select::make('not_login_ids')
           ->options(UsershipStatus::pluck('name','id'))
           ->multiple()
           ->helperText('Giriş Yapamayacak Olan Üye Tiplerini Seçiniz'),
        ];
    }
}
