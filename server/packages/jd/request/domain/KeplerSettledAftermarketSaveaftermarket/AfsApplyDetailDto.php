<?php
namespace KeplerSettledAftermarketSaveaftermarket;
class AfsApplyDetailDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfsApplyDetailDto";
    }
        
    private $wareName;
    
    public function setWareName($wareName){
        $this->params['wareName'] = $wareName;
    }

    public function getWareName(){
        return $this->wareName;
    }
            
    private $wareBrand;
    
    public function setWareBrand($wareBrand){
        $this->params['wareBrand'] = $wareBrand;
    }

    public function getWareBrand(){
        return $this->wareBrand;
    }
            
    private $wareDescribe;
    
    public function setWareDescribe($wareDescribe){
        $this->params['wareDescribe'] = $wareDescribe;
    }

    public function getWareDescribe(){
        return $this->wareDescribe;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $wareNum;
    
    public function setWareNum($wareNum){
        $this->params['wareNum'] = $wareNum;
    }

    public function getWareNum(){
        return $this->wareNum;
    }
            
    private $afsDetailType;
    
    public function setAfsDetailType($afsDetailType){
        $this->params['afsDetailType'] = $afsDetailType;
    }

    public function getAfsDetailType(){
        return $this->afsDetailType;
    }
            
    private $payPrice;
    
    public function setPayPrice($payPrice){
        $this->params['payPrice'] = $payPrice;
    }

    public function getPayPrice(){
        return $this->payPrice;
    }
            
    private $expandTag;
            
    public function setExpandTag($expandTag){
        $this->params['expandTag'] = $expandTag ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>