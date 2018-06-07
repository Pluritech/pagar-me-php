<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use PagarMePHP\Entity\TransactionItem as TransactionItem;
use PagarMePHP\Entity\TransactionSplitRules as TransactionSplitRules;
use PagarMePHP\Entity\Address as Address;
use PagarMePHP\Entity\customer as customer;
use PagarMePHP\Entity\Billing as Billing;
use \Exception;

class Transaction 
{

    private $amount          = null;
    private $capture         = null;
    private $card_id         = null;
    private $customer        = null;
    private $payment_method  = null;
    private $soft_descriptor = null;
    private $installments    = null;
    private $billing         = null;
    private $split_rules     = null;
    private $items           = null;
    private $async           = null;
    private $postback_url    = null;

    /**
     * Construct
     */
    public function __construct($data){

    }

    public function setAmount($amount)
    {
        $this->amount = $amount * 100; //a api somente aceita o valor inteiro, ou seja, em centavos
    }

    public function setCapture($capture)
    {
        $this->capture = !empty($capture) ? $capture : 'true';
    }
    public function setCardId($card_id)
    {
        $this->card_id = $card_id;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
    }

    public function setSoftDescriptor($soft_descriptor)
    {
        $this->soft_descriptor = $soft_descriptor;
    }
    public function setInstallments($installments)
    {
        $this->installments = !empty($installments) ? $billing : 1;// número de parcelas a serem descontadas no cartão - default 1
;
    }

    public function setBilling($billing)
    {
        
        $this->billing = $billing

    }
    public function setSplitRules($split_rules)
    {
        $this->split_rules = $split_rules;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }
    public function setAsync($async)
    {
        $this->async = empty($async) ? false : true;
    }

    public function setPostbackUrl($postback_url)
    {
        $this->postback_url = $postback_url;
    }


    public function getAmount()
    {
        return $this->amount;
    }

    public function getCapture()
    {
        return $this->capture;
    }
    public function getCardId()
    {
        return $this->card_id;
    }

    public function getCustomer()
    {
        return $this->customer;
    }
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    public function getSoftDescriptor()
    {
        return $this->soft_descriptor;
    }
    public function getInstallments()
    {
        return $this->installments;
    }

    public function getBilling()
    {
        return $this->billing;
    }
    public function getSplitRules()
    {
        return $this->split_rules;
    }

    public function getItems()
    {
        return $this->items;
    }
    public function getAsync()
    {
        return $this->async;
    }

    public function getPostbackUrl()
    {
        return $this->postback_url;
    }

    /**
     * get Transaction
     * @return void
     */
    public function getTransaction(){

        $params = array(
             'amount'           => $this->getAmount()
            ,'capture'          => $this->getCapture()
            ,'card_id'          => $this->getCardId()
            ,'customer'         => $this->getCustomer()
            ,'payment_method'   => $this->getPaymentMethod()
            ,'soft_descriptor'  => $this->getSoftDescriptor()
            ,'installments'     => $this->getInstallments()
            ,'billing'          => $this->getBilling()
            ,'split_rules'      => $this->getSplitRules()
            ,'items'            => $this->getItems()
            ,'async'            => $this->getAsync()
            ,'postback_url'     => $this->getPostbackUrl()

        );

       return $params;
    }


}

