<?php

namespace Clickpaysa\Laravel_package\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Clickpaysa\Laravel_package\Services\IpnRequest;

class ClickpayLaravelListenerApi extends BaseController
{

    /**
     * RESTful callable action able to receive: callback request\IPN Default Web request from the payment gateway after payment is processed
     */
    public function paymentIPN(Request $request){
        try{
            $ipnRequest= new IpnRequest($request);

            $callbackClass = config('clickpay.callback');
            $callback = new $callbackClass();
            if(is_object($callback) && method_exists($callback, 'updateCartByIPN') ){
                $callback->updateCartByIPN($ipnRequest);
            }
            $response= 'valid IPN request. Cart updated';
            return response($response, 200)
                ->header('Content-Type', 'text/plain');
        }catch(\Exception $e){
            return response($e, 400)
                ->header('Content-Type', 'text/plain');        
        }
    }

}