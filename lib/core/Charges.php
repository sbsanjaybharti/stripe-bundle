<?php
/**
 * Created by PhpStorm.
 * User: cyx-sanjay
 * Date: 2/01/2018
 * Time: 11:12 PM
 */

namespace CRS\StripeBundle\lib\core;


class Charges
{
    public function __construct($token, $currency)
    {
        $this->token = $token;
        $this->currency = $currency;
    }
    public function Pay($amount){
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $amount,
                "currency" => $this->currency,
                "source" => $this->token // obtained with Stripe.js
            ));
            return $charge;
        }catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            return $e->getMessage();
        }
    }

}