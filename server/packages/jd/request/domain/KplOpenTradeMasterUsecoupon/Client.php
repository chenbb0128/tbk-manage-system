<?php
namespace KplOpenTradeMasterUsecoupon;
class Client{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.master.base.domain.ClientDomain";
    }
        
    private $uid;
    
    public function setUid($uid){
        $this->params['uid'] = $uid;
    }

    public function getUid(){
        return $this->uid;
    }
            
    private $userIp;
    
    public function setUserIp($userIp){
        $this->params['userIp'] = $userIp;
    }

    public function getUserIp(){
        return $this->userIp;
    }
            
    private $clientFlow;
    
    public function setClientFlow($clientFlow){
        $this->params['clientFlow'] = $clientFlow;
    }

    public function getClientFlow(){
        return $this->clientFlow;
    }
            
    private $logId;
    
    public function setLogId($logId){
        $this->params['logId'] = $logId;
    }

    public function getLogId(){
        return $this->logId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>