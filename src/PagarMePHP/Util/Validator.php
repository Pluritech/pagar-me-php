<?php

namespace PagarMePHP\Util;

use \Exception;

class Validator
{
    

    /**
     * Get service
     */
    public function init(){
    
    }
    
    public function __construct(){

    }

   /**
     * @param string $payload
     * @param string $signature
     * @return boolean
     */
    public static function validatePostback($apiKey, $data)
    {
        
        $validator = array();
        $parts = explode("=", $data['headers']['X-Hub-Signature'], 2);
        if (count($parts) != 2) {

           throw new Exception("Invalid Signature Structure", 1);             
        }

        $algorithm = $parts[0];
        $hash = $parts[1];
        if(hash_hmac($algorithm, $data['payload'], $apiKey) === $hash)
        	return true;
        else
        	throw new Exception("Invalid Signature", 1);
    }
}

