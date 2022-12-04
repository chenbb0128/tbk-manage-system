<?php
namespace UnionOpenActivityRecommendQuery;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.activity.recommend.RecommendActivityReq";
    }
        
    private $userId;
    
    public function setUserId($userId){
        $this->params['userId'] = $userId;
    }

    public function getUserId(){
        return $this->userId;
    }
            
    private $userIdType;
    
    public function setUserIdType($userIdType){
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType(){
        return $this->userIdType;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $needClickUrl;
    
    public function setNeedClickUrl($needClickUrl){
        $this->params['needClickUrl'] = $needClickUrl;
    }

    public function getNeedClickUrl(){
        return $this->needClickUrl;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>