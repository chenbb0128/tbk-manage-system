<?php
namespace UnionOpenUserPidGet;
class PidReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.user.PidReq";
    }
        
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $childUnionId;
    
    public function setChildUnionId($childUnionId){
        $this->params['childUnionId'] = $childUnionId;
    }

    public function getChildUnionId(){
        return $this->childUnionId;
    }
            
    private $promotionType;
    
    public function setPromotionType($promotionType){
        $this->params['promotionType'] = $promotionType;
    }

    public function getPromotionType(){
        return $this->promotionType;
    }
            
    private $positionName;
    
    public function setPositionName($positionName){
        $this->params['positionName'] = $positionName;
    }

    public function getPositionName(){
        return $this->positionName;
    }
            
    private $mediaName;
    
    public function setMediaName($mediaName){
        $this->params['mediaName'] = $mediaName;
    }

    public function getMediaName(){
        return $this->mediaName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>