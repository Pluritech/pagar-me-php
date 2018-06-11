<?php

namespace PagarMePHP\Request;


use \Exception;

abstract class PagarMe 
{
    
    protected $api_key = null;
    protected $url     = null;

    /**
     * Get service
     */
    public function init(){
    }

    public function __construct($account){

        $this->api_key = $account['api_key'];
        $this->url     = $account['url'];
    }

    abstract public function setDataEntity($data);
    abstract public function getDataEntity();
    abstract public function create();
}

