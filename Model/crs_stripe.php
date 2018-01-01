<?php
namespace CRS\StripeBundle\Model;
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
    public function __construct()
    {

        global $kernel;
        $this->status = $kernel->getContainer()->getParameter('crs_stripe.status');
        $this->key = $kernel->getContainer()->getParameter('crs_stripe.key');
        \Stripe\Stripe::setApiKey($this->key);

    }

}