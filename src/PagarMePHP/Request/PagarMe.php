<?php

namespace PagarMePHP\Request;


use \Exception;

class PagarMe 
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

}

