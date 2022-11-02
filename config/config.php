<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Merchant profile id
     |--------------------------------------------------------------------------
     |
     | Your merchant profile id , you can find the profile id on your ClickPay Merchant’s Dashboard- profile.
     |
     */

    'profile_id' => env('clickpay_profile_id', null),

    /*
   |--------------------------------------------------------------------------
   | Server Key
   |--------------------------------------------------------------------------
   |
   | You can find the Server key on your ClickPay Merchant’s Dashboard - Developers - Key management.
   |
   */

    'server_key' => env('clickpay_server_key', null),

    /*
   |--------------------------------------------------------------------------
   | Currency
   |--------------------------------------------------------------------------
   |
   | The currency you registered in with ClickPay account
     you must pass value from this array ['SAR','AED','EGP','OMR','JOD','US']
   |
   */

    'currency' => env('clickpay_currency', null),

];
