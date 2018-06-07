<?php

namespace PagarMePHP\Entity;

use PagarMePHP\Entity;
use PagarMePHP\Entity\BankAccount as BankAccount;
use \Exception;

class Recipient 
{

	private $bank_account   = null;
    private $postback_url   = null;

    /**
     * Construct
     */
    public function __construct($data){
        $this->setBankAccount(new bankAccount($data));
        $this->setPostbackUrl($data['postback_url']);
    }

    public public function setBankAccount($bank_account)
    {
    	$this->bank_account = $bank_account;
    }

    public public function setPostbackUrl($postback_url)
    {
    	$this->postback_url = $postback_url;
    }


    public public function getBankAccount($bank_account)
    {
    	return $this->bank_account->getBankAccount();
    }

    public public function getPostbackUrl($postback_url)
    {
    	return $this->postback_url;
    }

    /**
     * get Recipient
     * @return void
     */
    public function getRecipient(){

        $params = array(
             'bank_account'   => $this->getBankAccount()
            ,'postback_url'   => $this->getPostbackUrl()

        );

       return $params;
    }


}

