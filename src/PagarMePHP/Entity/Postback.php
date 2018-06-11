<?php

namespace PagarMePHP\Entity;

use \Exception;

class Postback
{
    

    /**
     * Get service
     */

    private $payload       = null;
    private $headers       = null;
    private $model         = null;
    private $model_id      = null;

    public function init(){
    
    }
    
    public function __construct($data){
    	$this->setPayload($data['payload']);
        $this->setHeaders($data['headers']);
  
    }

    /**
     * Set payload
     */
    public function setPayload($payload)
    {
    	$this->payload = $payload;
    }

    /**
     * Set headers
     */
    public function setHeaders($headers)
    {
    	$this->headers = $headers;
    }


    /**
     * Set payload
     */
    public function setPayload($payload)
    {
    	$this->payload = $payload;
    }

    /**
     * Set model
     */
    public function setModel($model)
    {
    	$this->model = $model;
    }


    /**
     * Set model_id
     */
    public function setModelId($model_id)
    {
    	$this->model_id = $model_id;
    }


    public function getPayload()
    {
    	return $this->payload;
    }


    public function getModel()
    {
    	return $this->model;
    }

    public function getModelId()
    {
    	return $this->model_id;
    }

    public function getPostback()
    {
    	return array(
    			 'payload'      => getPayload()
    			,'headers'      => getHeaders()
    			,'model'        => getModel()
    			,'model_id'     => getModelId()
    		);
    }


}

