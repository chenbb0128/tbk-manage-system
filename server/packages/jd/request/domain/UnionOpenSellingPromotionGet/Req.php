<?php
namespace UnionOpenSellingPromotionGet;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq";
    }
        
    private $materialId;
    
    public function setMaterialId($materialId){
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId(){
        return $this->materialId;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
            
    private $chainType;
    
    public function setChainType($chainType){
        $this->params['chainType'] = $chainType;
    }

    public function getChainType(){
        return $this->chainType;
    }
            
    private $couponUrl;
    
    public function setCouponUrl($couponUrl){
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl(){
        return $this->couponUrl;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $ext1;
    
    public function setExt1($ext1){
        $this->params['ext1'] = $ext1;
    }

    public function getExt1(){
        return $this->ext1;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>