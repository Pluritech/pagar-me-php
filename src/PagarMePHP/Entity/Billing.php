Billing.php
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

    }

    public public function setAddress($address)
    {
    	$this->address = $address;
    }

    public public function setName($name)
    {
    	$this->name = $name;
    }


    public public function getAddress($address)
    {
    	return $this->address;
    }

    public public function getName($name)
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
