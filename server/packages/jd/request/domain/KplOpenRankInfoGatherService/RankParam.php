<?php
namespace KplOpenRankInfoGatherService;
class RankParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.m.core.rank.client.dto.gather.rank.RankParam";
    }
        
    private $rankType;
    
    public function setRankType($rankType){
        $this->params['rankType'] = $rankType;
    }

    public function getRankType(){
        return $this->rankType;
    }
            
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $params;
            
    public function setParams($params){
        $this->params['params'] = $params ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>