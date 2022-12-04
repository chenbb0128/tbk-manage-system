<?php
namespace UnionOpenStatisticsActivityBonusQuery;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.statistics.activity.BonusEffectDataReq";
    }
        
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>