<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\CreditCard as CreditCardEntity;
use PagarMePHP\CURL\CurlPost as CurlPost;
use \Exception;

class PagarMeCreditCard extends PagarMe
{

    private $url_credit_card;
    private $credit_card_entity;

    /**
     * Construct
     */

    public function __construct($config){
        parent::__construct($config);
        $this->url_credit_card = $this->url . '/cards';
    }

    public function setCreditCardEntity($credit_card_entity){
        $this->credit_card_entity = new CreditCardEntity($credit_card_entity);
    }

    public function getCreditCardEntity(){

        return $this->credit_card_entity->getCreditCard();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getCreditCardEntity());
        return CurlPost::post($this->url_credit_card, $data);

    }
}