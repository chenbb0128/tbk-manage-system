<?php
namespace KplOpenWfpJmiwareAddWare;
class JmiWareImageParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.JmiWareImageParam";
    }
        
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $imgPath;
    
    public function setImgPath($imgPath){
        $this->params['imgPath'] = $imgPath;
    }

    public function getImgPath(){
        return $this->imgPath;
    }
            
    private $zone;
    
    public function setZone($zone){
        $this->params['zone'] = $zone;
    }

    public function getZone(){
        return $this->zone;
    }
            
    private $indexId;
    
    public function setIndexId($indexId){
        $this->params['indexId'] = $indexId;
    }

    public function getIndexId(){
        return $this->indexId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>