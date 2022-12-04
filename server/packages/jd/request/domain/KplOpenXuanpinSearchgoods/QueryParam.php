<?php
namespace KplOpenXuanpinSearchgoods;
class QueryParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.xuanpin.export.domain.qq.QueryParam";
    }
        
    private $keywords;
    
    public function setKeywords($keywords){
        $this->params['keywords'] = $keywords;
    }

    public function getKeywords(){
        return $this->keywords;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>