<?php
namespace KplOpenRegularPlanQueryplancount;
class PlanParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.purchase.regular.api.domain.plan.PlanParam";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $planNumber;
    
    public function setPlanNumber($planNumber){
        $this->params['planNumber'] = $planNumber;
    }

    public function getPlanNumber(){
        return $this->planNumber;
    }
            
    private $payMode;
    
    public function setPayMode($payMode){
        $this->params['payMode'] = $payMode;
    }

    public function getPayMode(){
        return $this->payMode;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $planStartTime;
    
    public function setPlanStartTime($planStartTime){
        $this->params['planStartTime'] = $planStartTime;
    }

    public function getPlanStartTime(){
        return $this->planStartTime;
    }
            
    private $planEndTime;
    
    public function setPlanEndTime($planEndTime){
        $this->params['planEndTime'] = $planEndTime;
    }

    public function getPlanEndTime(){
        return $this->planEndTime;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>