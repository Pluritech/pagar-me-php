<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Transaction as TransactionEntity;
use PagarMePHP\CURL\CurlPost as CurlPost;
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

    public function setTransactionEntity($transaction_entity){
        $this->transaction_entity = new TransactionEntity($transaction_entity);
    }

    public function getTransactionEntity(){

        return $this->transaction_entity->getTransaction();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getTransactionEntity());
        return CurlPost::post($this->url_transaction, $data);

    }
}