<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Customer as CustomerEntity;
use PagarMePHP\Util\Curl as Curl;
use \Exception;

class PagarMeCustomer extends PagarMe
{

    private $url_customer;
    private $customer_entity;

    /**
     * Construct
     */

    public function __construct($config){
        parent::__construct($config);
        $this->url_customer = $this->url . '/customers';
    }

    public function setDataEntity($data){
        $this->customer_entity = new CustomerEntity($data);
    }

    public function getDataEntity(){

        return $this->customer_entity->getCustomer();
    }
    
    public function create(){
        try {
            $data = array_merge(array('api_key'=> $this->api_key), $this->getDataEntity());
            return Curl::post($this->url_customer, $data);    
        } catch (Exception $e) {
            return array('http_code' => 400, 'errors' => array('status' => 'ErrorOnPagarMeCustomer', 'message' => $e->getMessage));
        }
        

    }
}