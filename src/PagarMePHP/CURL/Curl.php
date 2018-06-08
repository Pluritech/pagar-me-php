<?php

namespace PagarMePHP\CURL;

use \Exception;

class Curl
{
    

    /**
     * Get service
     */
    public function init(){
    
    }
    
    public function __construct(){

    }

    /**
     * CURL POST 
     */
    public static function post($url, $data){


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Content-Type: application/json"
        ));

        $response  = json_decode(curl_exec($ch),true);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        switch ($http_code) {
            case 200:
                return array('http_code' => $http_code, 'response' => $response);
                break;

            default:
                return array('http_code' => $http_code, 'error' => $response);
                break;
        }
    }
}

