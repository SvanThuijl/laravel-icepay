<?php

return [
    'icepay' => [
        'api_key' => env('ICEPAY_API_KEY'),
        'api_secret' => env('ICEPAY_API_SECRET'),
        'completed_url' => env('ICEPAY_COMPLETED_URL'),
        'error_url' => env('ICEPAY_ERROR_URL'),
    ],
];
