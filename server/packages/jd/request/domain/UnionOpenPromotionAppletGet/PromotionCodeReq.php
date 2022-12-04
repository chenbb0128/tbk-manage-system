<?php
namespace UnionOpenPromotionAppletGet;
class PromotionCodeReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.applet.PromotionCodeAppletReq";
    }
        
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $activityType;
    
    public function setActivityType($activityType){
        $this->params['activityType'] = $activityType;
    }

    public function getActivityType(){
        return $this->activityType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>