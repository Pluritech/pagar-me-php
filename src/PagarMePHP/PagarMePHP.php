<?php

namespace PagarMePHP;

use PagarMePHP\Notification\PagarMe as PagarMe;
use PagarMePHP\Notification\PagarMeCustomer as PagarMeCustomer;
use PagarMePHP\Notification\PagarMeTransaction as PagarMeTransaction;
use PagarMePHP\Notification\PagarMeRecipient as PagarMeRecipient;
use PagarMePHP\Notification\PagarMeCreditCard as PagarMeCreditCard;

use \Exception;

class PagarMePHP 
{
    
    private $myclass = null;
    /**
     * Get service
     */
    public function init(){
    }

    public function __construct($className, $config){
        $myclass = null;

        switch ($className){
            case 'PagarMeCustomer':
                $this->myclass =  new PagarMeCustomer($config);
                break;
            case 'PagarMeTransaction':
                $this->myclass =  new PagarMeTransaction($config);
                break;
            case 'PagarMeRecipient':
                $this->myclass =  new PagarMeRecipient($config);
                break;
            case 'PagarMeCreditCard':
                $this->myclass =  new PagarMeCreditCard($config);
                break;
            default:
                $this->myclass = new PagarMe($config);
                break;
        }
    
    }
    
    
    

    public function getMyClass(){

        return $this->myclass;
    }
    

}

