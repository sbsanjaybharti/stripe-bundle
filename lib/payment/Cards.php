<?php
/**
 * Created by PhpStorm.
 * User: sanjay
 * Date: 2/01/2018
 * Time: 11:16 PM
 */

namespace CRS\StripeBundle\lib\payment;


use CRS\StripeBundle\Model\BaseStripeModel;

class Cards extends BaseStripeModel
{
//    private $cardNumber = '444';
//    private $name;
//    private $exp_month;
//    private $exp_year;
//    private $cvc;
//    private $token;
//
//    public function setName($value){
//        $this->name = $value;
//        return $this;
//    }
//    public function getName()
//    {
//        return $this->name;
//    }
//    public function setCardNumber($value){
//        $this->cardNumber = $value;
//        return $this;
//    }
//    public function getCardNumber()
//    {
//        echo $this->cardNumber;
//        exit;
//        return $this->cardNumber;
//    }
//    public function setExpMonth($value){
//        $this->exp_month = $value;
//        return $this;
//    }
//    public function getExpMonth()
//    {
//        return $this->exp_month;
//    }
//    public function setExpYear($value){
//        $this->exp_year = $value;
//        return $this;
//    }
//    public function getExpYear()
//    {
//        return $this->exp_year;
//    }
//    public function setCVC($value){
//        $this->cvc = $value;
//        return $this;
//    }
//    public function getCVC()
//    {
//        return $this->cvc;
//    }

    public function Token(){
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

}