<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use PagarMePHP\Entity\Document;
use \Exception;

class Customer 
{

	private $name          = null;
    private $email         = null;
    private $type 		   = null;
    private $country 	   = null;
    private $external_id   = null;
    private $birthday      = null;
    private $documents     = null;
    private $phone_numbers = null;
    /**
     * Construct
     */
    public function __construct($data){
        $this->setName($data['name']);
        $this->setEmail($data['email']);
        $this->setType(!empty($data['type']) ? $data['type'] : 'individual');//considerando que todos os clientes são pessoas físicas
        $this->setCountry(!empty($data['country']) ? $data['country'] : 'br');//considerando que todos os usuários são  brasileiros
        $this->setExternalId($data['external_id']);
        $this->setBirthday($data['birthday']);
        $this->setDocuments($data['documents']);
        $this->setPhoneNumbers($data['phone_numbers']);
    }

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function setEmail($email)
    {
    	$this->email = $email;
    }

    public function setType($type)
    {
    	$this->type = $type;
    }

    public function setCountry($country)
    {
    	$this->country = $country;
    }

    public function setExternalId($external_id)
    {
    	$this->external_id = (String)$external_id;
    }

    public function setBirthday($birthday)
    {
    	$this->birthday = $birthday;
    }

    public function setDocuments($documents)
    {
    	$document = new Document($documents);
    	$this->documents = array($document->getDocument);
    }

    public function setPhoneNumbers($phone_numbers)    
    {
    	if(!is_array($phone_numbers)){
            throw new Exception("phone_numbers must be array", 1);            
        }

        foreach ($phone_numbers as &$value) {
    		$value = '+55'.preg_replace("/[^0-9]/", "",$value);
    	}
    	$this->phone_numbers = $phone_numbers;
    }

    public function getName($name)
    {
    	return $this->name;
    }

    public function getEmail($email)
    {
    	return $this->email;
    }

    public function getType($type)
    {
    	return $this->type;
    }

    public function getCountry($country)
    {
    	return $this->country;
    }

    public function getExternalId($external_id)
    {
    	return $this->external_id;
    }

    public function getBirthday($birthday)
    {
    	return $this->birthday;
    }

    public function getDocuments($documents)
    {
    	return $this->documents;
    }

    public function getPhoneNumbers($phone_numbers)
    {
    	return $this->phone_numbers;
    }

    /**
     * get Customer
     * @return void
     */
    public function getCustomer(){

        $params = array(

             'name'          => $this->getName()
            ,'email'         => $this->getEmail()
            ,'type'          => $this->getType()
            ,'country'       => $this->getCountry()
            ,'external_id'   => $this->getExternalId()
            ,'birthday'      => $this->getBirthday()
            ,'documents'     => $this->getDocuments()
            ,'phone_numbers' => $this->getPhoneNumbers()
        );

       return $params;
    }


}

