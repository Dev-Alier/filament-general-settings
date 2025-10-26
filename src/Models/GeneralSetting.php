<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        'site_name',
        'site_description',
        'site_logo',
        'site_favicon',
        'default_image',
        'theme_color',
        'support_email',
        'support_phone',
        'google_analytics_id',
        'posthog_html_snippet',
        'seo_title',
        'address',
        'map_iframe',
        'seo_keywords',
        'seo_metadata',
        'social_network',
        'email_settings',
        'email_from_name',
        'email_from_address',
        'more_configs',
        'sms_settings'
        
    ];

    protected $casts = [
       'seo_metadata' => 'array',
        'email_settings' => 'array',
        'sms_settings' => 'array',
        'social_network' => 'array',
        'more_configs' => 'array',
    ];
}
