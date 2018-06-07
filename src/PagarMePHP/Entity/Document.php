<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use \Exception;

class Document
{

    private $type;
    private $number;

    /**
     * Construct
     */
    public function __construct($data){

        $this->setNumber($data['number']);         
        $this->setType($data['type']);
    }

    /**
     * Set number
     */
    public function setNumber($number){
    	$number = preg_replace("/[^0-9]/", "",$number);
    	if(empty($number)){
    		throw new Exception("document number invalid", 1);    		
    	}
        $this->number = $number;
    }


    /**
     * Set type
     */
    public function setType($type){
        $this->type = $type;
    }

    /**
     * Get number
     */
    public function getNumber(){
        return $this->number;
    }
  
    /**
     * Get type
     */
    public function getType(){
        return $this->type;
    }
    
    
    /**
     * Get document
     */
    public function getDocument(){

        $data = array(
            'number'    => $this->getNumber(), 
            'type'      => $this->getType(),
        );

        return $data;
    }


}