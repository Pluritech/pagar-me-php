<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;

use \Exception;

class CreditCard 
{

	private $card_hash     = null;
    private $customer_id   = null;

    /**
     * Construct
     */
    public function __construct($data){

        $this->setCardHash($data['card_hash']);
        $this->setCustomerId($data['customer_id']);
    }

    public function setCardHash($card_hash)
    {
    	$this->card_hash = $card_hash;
    }

    public function setCustomerId($customer_id)
    {
    	$this->customer_id = $customer_id;
    }


    public function getCardHash()
    {
    	return $this->card_hash;
    }

    public function getCustomerId()
    {
    	return $this->customer_id;
    }

    /**
     * get CreditCard
     * @return void
     */
    public function getCreditCard(){

        $params = array(
             'card_hash'     => $this->getCardHash()
            ,'customer_id'   => $this->getCustomerId()

        );

       return $params;
    }


}
