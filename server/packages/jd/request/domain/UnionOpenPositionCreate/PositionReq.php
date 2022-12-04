<?php
namespace UnionOpenPositionCreate;
class PositionReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.position.base.PositionReq";
    }
        
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
            
    private $unionType;
    
    public function setUnionType($unionType){
        $this->params['unionType'] = $unionType;
    }

    public function getUnionType(){
        return $this->unionType;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $spaceNameList;
    
    public function setSpaceNameList($spaceNameList){
        $this->params['spaceNameList'] = $spaceNameList;
    }

    public function getSpaceNameList(){
        return $this->spaceNameList;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>