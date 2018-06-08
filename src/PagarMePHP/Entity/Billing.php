<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use PagarMePHP\Entity\Address as Address;
use \Exception;

class Billing 
{

	private $address = null;
    private $name    = null;

    /**
     * Construct
     */
    public function __construct($data){

        $this->setAddress(new Address($data));
        $this->setName($data['billing_name']);
    }

    public function setAddress($address)
    {
    	$this->address = $address;
    }

    public function setName($name)
    {
    	$this->name = $name;
    }


    public function getAddress()
    {
    	return $this->address->getAddress();
    }

    public function getName()
    {
    	return $this->name;
    }

    /**
     * get Billing
     * @return void
     */
    public function getBilling(){

        $params = array(
             'address' => $this->getAddress()
            ,'name'    => $this->getName()

        );

       return $params;
    }


}
