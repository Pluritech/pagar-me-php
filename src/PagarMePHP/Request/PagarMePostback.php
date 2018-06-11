<?php

namespace PagarMePHP\Request;

use PagarMePHP\Request;
use PagarMePHP\Entity\Postback as PostbackEntity;
use \Exception;

class PagarMePostback extends PagarMe
{
    

    /**
     * Get service
     */
    public function init(){
    
    }
    
    public function __construct($config){
    	parent::__construct($config);

    }

 
    public function setDataEntity($data){
        $this->postback_entity = new PostbackEntity($data);
    }

    public function getDataEntity(){

        return $this->postback_entity->getPostback();
    }
    
    public function create(){
        
        try {

            Validator::validatePostback($this->api_key, $this->getDataEntity());
            mb_parse_str($this->postback_entity->getPayload(), $payload);
            $this->postback_entity->setModel($payload['object']);
            $this->postback_entity->setModelId($payload['id']);
 			$response = $this->getDataEntity(); 			
 			$response['payload_array'] = $payload;
            return array('http_code' => 200, 'response' => $response);

        } catch (Exception $e) {
            return array('http_code' => 400, 'errors' => array('status' => 'ErrorOnPostbackStructure', 'message' => $e->getMessage));
        }
        

    }
}

