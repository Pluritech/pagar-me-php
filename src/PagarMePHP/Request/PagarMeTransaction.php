<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Transaction as TransactionEntity;
use PagarMePHP\Util\Curl as Curl;
use \Exception;

class PagarMeTransaction extends PagarMe
{

    private $url_transaction;
    private $transaction_entity;

    /**
     * Construct
     */

    public function __construct($config){
        parent::__construct($config);
        $this->url_transaction  = $this->url . '/transactions';
    }

    public function setDataEntity($data){
        $this->transaction_entity = new TransactionEntity($data);
    }

    public function getDataEntity(){

        return $this->transaction_entity->getTransaction();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getDataEntity());
        return Curl::post($this->url_transaction, $data);

    }
}