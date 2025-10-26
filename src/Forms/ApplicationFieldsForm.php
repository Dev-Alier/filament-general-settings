<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Forms;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;

class ApplicationFieldsForm
{
    public static function get(): array
    {
        return [
                          TextInput::make('site_name')
                                    ->label(__('filament-general-settings::default.site_name'))
                                    ->autofocus()
                                    ->columnSpanFull(),
                                Textarea::make('site_description')
                                    ->label(__('filament-general-settings::default.site_description'))
                                    ->columnSpanFull(),
                                Grid::make()->schema(components: [
                                    FileUpload::make('site_logo')
                                        ->label(fn() => __('filament-general-settings::default.site_logo'))
                                        ->image()
                                        ->directory('assets')
                                        ->visibility('public')
                                        ->moveFiles()
                                        ->imageEditor()
                                        ->getUploadedFileNameForStorageUsing(fn(): string => 'site_logo.png')
                                        ->columnSpan(2),
                                    FileUpload::make('site_favicon')
                                        ->label(fn() => __('filament-general-settings::default.site_favicon'))
                                        ->image()
                                        ->directory('assets')
                                        ->visibility('public')
                                        ->moveFiles()
                                        ->getUploadedFileNameForStorageUsing(fn() => 'site_favicon.ico')
                                        ->acceptedFileTypes(['image/x-icon', 'image/vnd.microsoft.icon'])
                                        ->columnSpan(2),
                                    FileUpload::make('default_image')
                                        ->label(fn() => __('Default Görsel'))
                                        ->image()
                                        ->directory('uploads')
                                        ->moveFiles()
                                        ->imageEditor()
                                        ->getUploadedFileNameForStorageUsing(fn() => 'default.png')
                                        ->columnSpan(2),

                                ])
                                    ->columns(4),
                                // ->visible(fn() => config('filament-general-settings.show_logo_and_favicon')),

                                Grid::make()->schema(components: [

                                    TextInput::make('address')
                                        ->label(__('filament-general-settings::default.address'))
                                        ->prefixIcon('heroicon-o-home')
                                        ->columnSpan(3),
                                    TextInput::make('map_iframe')
                                        ->label(__('filament-general-settings::default.map_iframe'))
                                        ->prefixIcon('heroicon-o-map-pin')
                                        ->columnSpan(3),
                                    TextInput::make('support_email')
                                        ->label(__('filament-general-settings::default.support_email'))
                                        ->prefixIcon('heroicon-o-envelope')
                                        ->columnSpan(1),
                                    TextInput::make('support_phone')
                                        ->prefixIcon('heroicon-o-phone')
                                        ->label(__('filament-general-settings::default.support_phone'))
                                        ->columnSpan(1),

                                    ColorPicker::make('theme_color')
                                        ->label(__('filament-general-settings::default.theme_color'))
                                        ->prefixIcon('heroicon-o-swatch')
                                        //->formatStateUsing(fn(?string $state): string => $state ?? config('filament.theme.colors.primary'))
                                        ->helperText(__('filament-general-settings::default.theme_color_helper_text'))
                                        ->columnSpan(1),

                                ])->columns(3)

        ];
    }
}
