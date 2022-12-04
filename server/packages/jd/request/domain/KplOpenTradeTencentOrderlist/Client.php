<?php
namespace KplOpenTradeTencentOrderlist;
class Client{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.tencent.domain.TencentClient";
    }
        
    private $clientFlow;
    
    public function setClientFlow($clientFlow){
        $this->params['clientFlow'] = $clientFlow;
    }

    public function getClientFlow(){
        return $this->clientFlow;
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