<?php

Route::post('/paymentIPN', [\Clickpaysa\Laravel_clickpay\src\Controllers\ClickpayLaravelListenerApi::class, 'paymentIPN'])->name('payment_ipn');
