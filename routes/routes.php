<?php

Route::post('/paymentIPN', [\Clickpaysa\Laravel_package\Controllers\ClickpayLaravelListenerApi::class, 'paymentIPN'])->name('payment_ipn');
