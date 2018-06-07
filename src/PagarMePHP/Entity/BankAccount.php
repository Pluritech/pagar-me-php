<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use \Exception;

class BankAccount 
{

	private $bank_code       = null;
    private $agencia         = null;
    private $agencia_dv      = null;
    private $conta 	         = null;
    private $conta_dv        = null;
    private $type            = null;
    private $legal_name      = null;
    private $document_number = null;
    /**
     * Construct
     */
    public function __construct($data){

    }

    public function setBankCode($bank_code)
    {
    	$this->bank_code = $bank_code;
    }

    public function setAgencia($agencia)
    {
    	$this->agencia = $agencia;
    }

    public function setAgenciaDv($agencia_dv)
    {
    	$this->agencia_dv = $agencia_dv;
    }

    public function setConta($conta)
    {
    	$this->conta = $conta;
    }

    public function setContaDv($conta_dv)
    {
    	$this->conta_dv = $conta_dv;
    }

    public function setType($type)
    {
    	$this->type = $type;
    }

    public function setLegalName($legal_name)
    {
    	$this->legal_name = $legal_name;
    }

    public function setDocumentNumber($document_number)    
    {
    	$document_number = preg_replace("/[^0-9]/", "",$document_number);
    	$this->document_number = $document_number;
    }

    public function getBankCode($bank_code)
    {
    	return $this->bank_code;
    }

    public function getAgencia($agencia)
    {
    	return $this->agencia;
    }

    public function getAgencia_dv($agencia_dv)
    {
    	return $this->agencia_dv;
    }

    public function getConta($conta)
    {
    	return $this->conta;
    }

    public function getContaDv($conta_dv)
    {
    	return $this->conta_dv;
    }

    public function getType($type)
    {
    	return $this->type;
    }

    public function getLegalName($legal_name)
    {
    	return $this->legal_name;
    }

    public function getDocumentNumber($document_number)
    {
    	return $this->document_number;
    }

    /**
     * get BankAccount
     * @return void
     */
    public function getBankAccount(){

        $params = array(

             'bank_code'       => $this->getBankCode()
            ,'agencia'         => $this->getAgencia()
            ,'agencia_dv'      => $this->getAgencia_dv()
            ,'conta'           => $this->getConta()
            ,'conta_dv'        => $this->getContaDv()
            ,'type'            => $this->getType()
            ,'legal_name'      => $this->getLegalName()
            ,'document_number' => $this->getDocumentNumber()
        );

       return $params;
    }


}

