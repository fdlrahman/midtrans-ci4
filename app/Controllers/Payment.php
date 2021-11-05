<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index() {
        \Midtrans\Config::$serverKey = 'YOUR_SERVER_KEY';
 
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'payment_type' => 'gopay',
            'gopay' => array(
                'enable_callback' => true,                // optional
                'callback_url' => 'someapps://callback'   // optional
            )
        );
         
        $data = [
            'snapToken' => \Midtrans\Snap::getSnapToken($params)
        ];

        return view('payment/pay', $data);
    }
}