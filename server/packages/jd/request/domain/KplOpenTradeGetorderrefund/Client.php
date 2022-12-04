<?php
namespace KplOpenTradeGetorderrefund;
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
            
    private $userId;
    
    public function setUserId($userId){
        $this->params['userId'] = $userId;
    }

    public function getUserId(){
        return $this->userId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>