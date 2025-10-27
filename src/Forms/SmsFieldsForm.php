<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Forms;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class SmsFieldsForm
{
    public static function get(): array
    {
        return [
            TextInput::make('netgsm_username')
                ->label(__('filament-general-settings::default.netgsm_username')),
            TextInput::make('netgsm_password')
                ->label(__('filament-general-settings::default.netgsm_password')),
            TextInput::make('netgsm_header')
                ->label(__('filament-general-settings::default.netgsm_header')),
        ];
    }
}
