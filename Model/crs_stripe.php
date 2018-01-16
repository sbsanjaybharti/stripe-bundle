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
    public $key;
    private $status = 'live';
    private $card;
    public function __construct()
    {
        global $kernel;
        $this->status = $kernel->getContainer()->getParameter('crs_stripe.status');
        $this->key = $kernel->getContainer()->getParameter('crs_stripe.key');
        \Stripe\Stripe::setApiKey($this->key);

    }
    public function Customer(){
        return new Customer();

    }
    public function Card(){
        if($this->card)
            return $this->card;
        else
            return $this->card = new Cards();

    }
}