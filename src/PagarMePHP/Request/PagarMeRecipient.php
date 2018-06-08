<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Recipient as RecipientEntity;
use PagarMePHP\CURL\Curl as Curl;
use \Exception;

class PagarMeRecipient extends PagarMe
{

    private $url_recipient;
    private $recipient_entity;

    /**
     * Construct
     */

    public function __construct($config){
        parent::__construct($config);
        $this->url_recipient = $this->url . '/recipients';
    }

    public function setDataEntity($data){
        $this->recipient_entity = new RecipientEntity($data);
    }

    public function getDataEntity(){

        return $this->recipient_entity->getRecipient();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getDataEntity());
        return Curl::post($this->url_recipient, $data);

    }
}