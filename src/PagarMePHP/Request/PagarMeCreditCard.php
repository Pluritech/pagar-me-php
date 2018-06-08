<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\CreditCard as CreditCardEntity;
use PagarMePHP\CURL\Curl as Curl;
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

    public function setDataEntity($data){
        $this->credit_card_entity = new CreditCardEntity($data);
    }

    public function getDataEntity(){

        return $this->credit_card_entity->getCreditCard();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getDataEntity());
        return Curl::post($this->url_credit_card, $data);

    }
}