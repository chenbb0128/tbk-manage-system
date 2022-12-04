<?php
namespace KeplerTradeSubmit;
class ClientInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.ClientInfo";
    }
        
    private $serverName;
    
    public function setServerName($serverName){
        $this->params['serverName'] = $serverName;
    }

    public function getServerName(){
        return $this->serverName;
    }
            
    private $userIP;
    
    public function setUserIP($userIP){
        $this->params['userIP'] = $userIP;
    }

    public function getUserIP(){
        return $this->userIP;
    }
            
    private $countKey;
    
    public function setCountKey($countKey){
        $this->params['countKey'] = $countKey;
    }

    public function getCountKey(){
        return $this->countKey;
    }
            
    private $netBuySourceType;
    
    public function setNetBuySourceType($netBuySourceType){
        $this->params['netBuySourceType'] = $netBuySourceType;
    }

    public function getNetBuySourceType(){
        return $this->netBuySourceType;
    }
            
    private $invokeInvoiceBasicService;
    
    public function setInvokeInvoiceBasicService($invokeInvoiceBasicService){
        $this->params['invokeInvoiceBasicService'] = $invokeInvoiceBasicService;
    }

    public function getInvokeInvoiceBasicService(){
        return $this->invokeInvoiceBasicService;
    }
            
    private $originId;
    
    public function setOriginId($originId){
        $this->params['originId'] = $originId;
    }

    public function getOriginId(){
        return $this->originId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>