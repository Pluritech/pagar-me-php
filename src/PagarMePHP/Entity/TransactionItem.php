<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use \Exception;

class TransactionSplitRules 
{

    private $id          = null;
    private $title       = null;
    private $unit_price  = null;
    private $quantity    = null;
    private $tangible    = null;

    /**
     * Construct
     */
    public function __construct($data){

    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


    public function setTangible($tangible)
    {
        $this->tangible = $tangible;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    public function getTangible()
    {        
        return $this->tangible;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * get TransactionSplitRules
     * @return @array
     */
    public function getTransactionSplitRules(){

        $params = array(
             'id'          => $this->getId()
            ,'title'       => $this->getTitle()
             'unit_price'  => $this->getUnitPrice()
            ,'quantity'    => $this->getQuantity()
            ,'tangible'    => $this->getTangible()

        );

       return $params;
    }


}


