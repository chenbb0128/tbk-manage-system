<?php
namespace UnionOpenStatisticsGoodsSalesQuery;
class EffectDataReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.statistics.goods.GoodsSalesVolumeReq";
    }
        
    private $skuIds;
    
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds(){
        return $this->skuIds;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $number;
    
    public function setNumber($number){
        $this->params['number'] = $number;
    }

    public function getNumber(){
        return $this->number;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>