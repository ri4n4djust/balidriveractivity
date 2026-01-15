<?php

namespace App\Http\Services\Checkout;

// use Xendit\Xendit;
use Xendit\Invoice\InvoiceApi;
use Xendit\Configuration;


class CheckoutService {

    function __construct() {
        // Xendit::setApiKey(env('API_KEY'));
        Configuration::setXenditKey(env('API_KEY'));
    }

    public function createInvoice1($args) {
        $date = new \DateTime();
        $redirectUrl = '';
        // $defParams = [
        //     'external_id' => 'lar8-checkout-demo-' . $date->getTimestamp(),
        //     'payer_email' => 'invoice+demo@xendit.co', 
        //     'description' => 'Laravel 8 Checkout Demo', 
        //     'failure_redirect_url' => $redirectUrl, 
        //     'success_redirect_url' => $redirectUrl
        // ];

        $data = json_decode(json_encode($args), true);

        // var_dump($data);
        // $defParams['failure_redirect_url'] = $data['redirect_url'];
        // $defParams['success_redirect_url'] = $data['redirect_url'];
        // $params = array_merge($defParams, $data);
        $response = [];

        // var_dump($data);

        $apiInstance = new InvoiceApi();

        try {
            // $response = InvoiceApi::createInvoice($params);
            
            $response = $apiInstance->createInvoice($data);
            // print_r($result);
            // print_r($response);
            

        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        logger($response);
        // var_dump($params);
        return $response;
    }
}