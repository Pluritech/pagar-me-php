<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Customer as CustomerEntity;
use PagarMePHP\CURL\CurlPost as CurlPost;
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

    public function setCustomerEntity($customer_entity){
        $this->customer_entity = new CustomerEntity($customer_entity);
    }

    public function getCustomerEntity(){

        return $this->customer_entity->getCustomer();
    }
    
    public function create(){

        $data = array_merge(array('api_key'=> $this->api_key), $this->getCustomerEntity());
        return CurlPost::post($this->url_customer, $data);

    }
}