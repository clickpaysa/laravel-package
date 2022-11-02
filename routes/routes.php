<?php

Route::post('/paymentIPN', [\Clickpaysa\Laravel_clickpay\Controllers\ClickpayLaravelListenerApi::class, 'paymentIPN'])->name('payment_ipn');
