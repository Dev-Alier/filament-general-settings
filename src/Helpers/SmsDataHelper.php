<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Helpers;

class SmsDataHelper
{
    public static function getSmsConfigFromDatabase(array $data): array
    {
        $newValues = $data;

        $newValues['netgsm_username'] = $data['sms_settings']['netgsm_username'] ?? null;
        $newValues['netgsm_password'] = $data['sms_settings']['netgsm_password'] ?? null;
        $newValues['netgsm_header'] = $data['sms_settings']['netgsm_header'] ?? null;

        return $newValues;
    }

    public static function setSmsConfigToDatabase($data): mixed
    {
        $data['sms_settings'] = [
            'netgsm_username' => $data['netgsm_username'] ?? null,
            'netgsm_password' => $data['netgsm_password'] ?? null,
            'netgsm_header' => $data['netgsm_header'] ?? null,
        ];

        return $data;
    }
}
