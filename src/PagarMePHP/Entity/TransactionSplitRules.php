<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use \Exception;

class TransactionSplitRules 
{

    private $recipient_id            = null;
    private $percentage              = null;
    private $liable                  = null;
    private $charge_processing_fee   = null;

    /**
     * Construct
     */
    public function __construct($data){

    }

    public function setRecipientId($recipient_id)
    {
        $this->recipient_id = $recipient_id;
    }

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }
    public function setLiable($liable)
    {
        $this->liable = $liable;
    }

    public function setChargeProcessingFee($charge_processing_fee)
    {
        $this->charge_processing_fee = $charge_processing_fee;
    }


    public function getRecipientId()
    {
        return $this->recipient_id;
    }

    public function getPercentage()
    {
        return $this->percentage;
    }
    public function getLiable()
    {
        return $this->liable;
    }

    public function getChargeProcessingFee()
    {
        return $this->charge_processing_fee;
    }

    /**
     * get TransactionSplitRules
     * @return @array
     */
    public function getTransactionSplitRules(){

        $params = array(
             'recipient_id'            => $this->getRecipientId()
            ,'percentage'              => $this->getPercentage()
             'liable'                  => $this->getLiable()
            ,'charge_processing_fee'   => $this->getChargeProcessingFee()

        );

       return $params;
    }


}


