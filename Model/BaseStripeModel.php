<?php
namespace CRS\StripeBundle\Model;

/**
 * Created by PhpStorm.
 * User: cyx-sanjay
 * Date: 1/01/2018
 * Time: 10:25 PM
 */
class BaseStripeModel
{
    /**
     * @var string
     */
    /*
     * customer		=> 'cus_9sa17ZpK3Q5WtG',
     * amount			=> 20.00,
     * currency		=> usd,
     * card_number		=> '4242424242424242',
     * exp_month		=> 8,
     * exp_year		=> 2018,
     * cvc			=> "314",
     * email			=> 'example@example.com',
     * cus_id			=> 'cus_9sa17ZpK3Q5WtG',
     * card_id			=> 'card_19YqFdFbry7lKsmPEgZ955q4'
    */
    private $name;
    private $customer;
    private $amount;
    private $currency;
    private $card_number;
    private $exp_month;
    private $exp_year;
    private $cvc;
    private $email;
    private $cus_id;
    private $card_id;

    /**
     * Set customer
     *
     * @param string $customer
     *
     * @return string
     */
    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set customer
     *
     * @param string $customer
     *
     * @return string
     */
    public function setCustomer($value)
    {
        $this->customer = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer_id
     *
     * @param string $customer_id
     *
     * @return string
     */
    public function setCustomerId($value)
    {
        $this->customer_id = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }
    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return string
     */
    public function setAmount($value)
    {
        $this->amount = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return string
     */
    public function setCurrency($value)
    {
        $this->currency = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set card_number
     *
     * @param string $card_number
     *
     * @return string
     */
    public function setCardNumber($value)
    {
        $this->card_number = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->card_number;
    }
    /**
     * Set exp_month
     *
     * @param string $exp_month
     *
     * @return string
     */
    public function setExpMonth($value)
    {
        $this->exp_month = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getExpMonth()
    {
        return $this->exp_month;
    }
    /**
     * Set exp_year
     *
     * @param string $exp_year
     *
     * @return string
     */
    public function setExpYear($value)
    {
        $this->exp_year = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getExpYear()
    {
        return $this->exp_year;
    }
    /**
     * Set cvc
     *
     * @param string $cvc
     *
     * @return string
     */
    public function setCVC($value)
    {
        $this->cvc = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getCVC()
    {
        return $this->cvc;
    }
    /**
     * Set email
     *
     * @param string $email
     *
     * @return string
     */
    public function setEmail($value)
    {
        $this->email = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set card_id
     *
     * @param string $card_id
     *
     * @return string
     */
    public function setCardId($value)
    {
        $this->card_id = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->card_id;
    }


}