<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use \Exception;

class Address
{

    private $neighborhood;
    private $street;
    private $street_number;
    private $zipcode;
    private $complementary;
    private $city;
    private $state;
    private $country;
    
    /**
     * Construct
     */
    public function __construct($data){
        $this->setNeighborhood($data['address_neighborhood']);
        $this->setStreet($data['address_street']);
        $this->setStreetNumber($data['address_number']);
        $this->setZipcode($data['address_zipcode']);//considerando que todos os usuários são  brasileiros
        $this->setComplementary($data['address_observation']);
        $this->setCity($data['address_city']);
        $this->setState($data['address_state']);
        $this->setCountry(!empty($data['country']) ? $data['country'] : 'br');//considerando que todos os usuários são  brasileiros
    }

    /**
     * Set neighborhood
     */
    public function setNeighborhood($neighborhood){
        $this->neighborhood = $neighborhood;
    }


    /**
     * Set street
     */
    public function setStreet($street){
        $this->street = $street;
    }

    /**
     * Set street_number
     */
    public function setStreetNumber($street_number){
        $this->street_number = $street_number;
    }


    /**
     * Set zipcode
     */
    public function setZipcode($zipcode){
        $this->zipcode = preg_replace("/[^0-9]/", "",$zipcode);
    }

    /**
     * Set complementary
     */
    public function setComplementary($complementary){
        $this->complementary = $complementary;
    }

    /**
     * Set city
     */
    public function setCity($city){
        $this->city = $city;
    }

    /**
     * Set state
     */
    public function setState($state){
        $this->state = $state;
    }


    /**
     * Set country
     */
    public function setCountry($country){
        $this->country = $country;
    }

    /**
     * Get neighborhood
     */
    public function getNeighborhood(){
        return $this->neighborhood;
    }
  
    /**
     * Get street
     */
    public function getStreet(){
        return $this->street;
    }
    
    /**
     * Get street_number
     */
    public function getStreetNumber(){
        return $this->street_number;
    }
  
    /**
     * Get zipcode
     */
    public function getZipcode(){
        return $this->zipcode;
    }
    
    
    /**
     * Get complementary
     */
    public function getComplementary(){
        return $this->complementary;
    }
  
    /**
     * Get city
     */
    public function getCity(){
        return $this->city;
    }
    
    /**
     * Get state
     */
    public function getState(){
        return $this->state;
    }
  
    /**
     * Get country
     */
    public function getCountry(){
        return $this->country;
    }
    
    
    /**
     * Get Address
     */
    public function getAddress(){

        $data = array(
            'neighborhood'    => $this->getNeighborhood(), 
            'street'          => $this->getStreet(),
            'street_number'   => $this->getStreetNumber(),
            'zipcode'         => $this->getZipcode(),
            'complementary'   => $this->getComplementary(), 
            'city'            => $this->getCity(),
            'state'           => $this->getState(),
            'country'         => $this->getCountry()
        );

        return $data;
    }


}