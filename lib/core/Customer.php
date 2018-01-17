<?php
namespace CRS\StripeBundle\lib\core;

use Exception;

/**
 * Created by PhpStorm.
 * User: cyx-sanjay
 * Date: 2/01/2018
 * Time: 11:09 PM
 */
class Customer
{
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function Create($email){
        try {
            $customer = \Stripe\Customer::create(array(
                "email" => $email,
                "description" => "Customer for ".$email,
                "source" => $this->token // obtained with Stripe.js
            ));
            return $customer;
        }catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            return $e->getMessage();
        }
    }
    public function get($customer_id){
        try {
            $customer = \Stripe\Customer::retrieve($customer_id);
            return $customer;
        }catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            return $e->getMessage();
        }
    }
}