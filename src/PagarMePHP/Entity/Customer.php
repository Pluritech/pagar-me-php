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
    private $documents     = array();
    private $phone_numbers = null;
    private $id            = null;
    /**
     * Construct
     */
    public function __construct($data){

        $this->setId(!empty($data['pagar_me_customer_id']) ? $data['pagar_me_customer_id'] : null);
        $this->setName($data['customer_name']);
        $this->setEmail($data['customer_email']);
        $this->setType(!empty($data['type']) ? $data['type'] : 'individual');//considerando que todos os clientes são pessoas físicas
        $this->setCountry(!empty($data['country']) ? $data['country'] : 'br');//considerando que todos os usuários são  brasileiros
        $this->setExternalId($data['customer_id']);
        $this->setBirthday($data['customer_birthday']);
        $this->setDocuments($data['customer_documents']);
        $this->setPhoneNumbers($data['customer_phone_numbers']);
    }

    public function setId($id)
    {
        $this->id = $id;
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

        foreach ($documents as $key => $value) {
            
            $document = new Document($value);
            $this->documents[] = $document->getDocument();
        }
        
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

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getEmail()
    {
    	return $this->email;
    }

    public function getType()
    {
    	return $this->type;
    }

    public function getCountry()
    {
    	return $this->country;
    }

    public function getExternalId()
    {
    	return $this->external_id;
    }

    public function getBirthday()
    {
    	return $this->birthday;
    }

    public function getDocuments()
    {
    	return $this->documents;
    }

    public function getPhoneNumbers()
    {
    	return $this->phone_numbers;
    }

    /**
     * get Customer
     * @return void
     */
    public function getCustomer(){

        $params = array(
            ,'id'            => $this->getId()
            ,'name'          => $this->getName()
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

