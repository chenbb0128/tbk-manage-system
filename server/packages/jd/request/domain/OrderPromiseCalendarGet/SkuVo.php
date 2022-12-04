<?php
namespace OrderPromiseCalendarGet;
class SkuVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.SkuVo";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>