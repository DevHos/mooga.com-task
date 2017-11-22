<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '5c8de7f087d865f1f5f17191893463ce',         // Your facebook Client ID
        'client_secret' => '0fa69582112db80c7d8579f4cf11a59d', // Your facebook Client Secret
        'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],

    'linkedin' => [
        'client_id' => env('LINKEDIN_CLIENT_ID'),         // Your linkedin Client ID
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'), // Your linkedin Client Secret
        'redirect' => '/',
    ],

];
