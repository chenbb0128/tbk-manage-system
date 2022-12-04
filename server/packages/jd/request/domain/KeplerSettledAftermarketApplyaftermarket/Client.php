<?php
namespace KeplerSettledAftermarketApplyaftermarket;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>