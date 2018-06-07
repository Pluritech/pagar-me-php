<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use PagarMePHP\Entity\Document;
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

    public public function setCardHash($card_hash)
    {
    	$this->card_hash = $card_hash;
    }

    public public function setCustomerId($customer_id)
    {
    	$this->customer_id = $customer_id;
    }


    public public function getCardHash($card_hash)
    {
    	return $this->card_hash;
    }

    public public function getCustomerId($customer_id)
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
