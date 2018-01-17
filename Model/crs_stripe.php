<?php
namespace CRS\StripeBundle\Model;

use CRS\StripeBundle\lib\core\Customer;
use CRS\StripeBundle\lib\payment\Cards;
use Exception;


/**
 * Created by PhpStorm.
 * User: cyx-sanjay
 * Date: 1/01/2018
 * Time: 10:25 PM
 */
class crs_stripe extends BaseStripeModel
{
    public $publishable_key;
    private $secret_key;
    private $card;
    public function __construct()
    {
        global $kernel;
        $this->secret_key = $kernel->getContainer()->getParameter('crs_stripe.secret_key');
        $this->publishable_key = $kernel->getContainer()->getParameter('crs_stripe.publishable_key');
        \Stripe\Stripe::setApiKey($this->secret_key);

    }
    public function token(){
        try {
            return $token = \Stripe\Token::create(array(
                "card" => array(
                    "name" => $this->getName(),
                    "number" => $this->getCardNumber(),
                    "exp_month" => $this->getExpMonth(),
                    "exp_year" => $this->getExpYear(),
                    "cvc" => $this->getCVC()
                )
            ));
        }catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            return $e->getMessage();
        }
    }
    public function Customer(){
        return new Customer($this->token());

    }
    public function Card(){
        if($this->card)
            return $this->card;
        else
            return $this->card = new Cards($this->token());

    }
}