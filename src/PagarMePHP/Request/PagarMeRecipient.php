PagarMeRecipient.php
<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Recipient as RecipientEntity;
use PagarMePHP\CURL\CurlPost as CurlPost;
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

    public function setRecipientEntity($recipient_entity){
        $this->recipient_entity = new RecipientEntity($recipient_entity);
    }

    public function getRecipientEntity(){

        return $this->recipient_entity->getRecipient();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getRecipientEntity());
        return CurlPost::post($this->url_recipient, $data);

    }
}