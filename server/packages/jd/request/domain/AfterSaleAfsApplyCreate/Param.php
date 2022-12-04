<?php
namespace AfterSaleAfsApplyCreate;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.apply.CreateParamReqVo";
    }
        
    private $jdOrderId;
    
    public function setJdOrderId($jdOrderId){
        $this->params['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId(){
        return $this->jdOrderId;
    }
            
    private $customerExpect;
    
    public function setCustomerExpect($customerExpect){
        $this->params['customerExpect'] = $customerExpect;
    }

    public function getCustomerExpect(){
        return $this->customerExpect;
    }
            
    private $questionDesc;
    
    public function setQuestionDesc($questionDesc){
        $this->params['questionDesc'] = $questionDesc;
    }

    public function getQuestionDesc(){
        return $this->questionDesc;
    }
            
    private $isNeedDetectionReport;
    
    public function setIsNeedDetectionReport($isNeedDetectionReport){
        $this->params['isNeedDetectionReport'] = $isNeedDetectionReport;
    }

    public function getIsNeedDetectionReport(){
        return $this->isNeedDetectionReport;
    }
            
    private $questionPic;
    
    public function setQuestionPic($questionPic){
        $this->params['questionPic'] = $questionPic;
    }

    public function getQuestionPic(){
        return $this->questionPic;
    }
            
    private $asCustomerDto;
            
    public function setAsCustomerDto($asCustomerDto){
        $this->params['asCustomerDto'] = $asCustomerDto ->getInstance();
    }
        
            
    private $asPickwareDto;
            
    public function setAsPickwareDto($asPickwareDto){
        $this->params['asPickwareDto'] = $asPickwareDto ->getInstance();
    }
        
            
    private $asReturnwareDto;
            
    public function setAsReturnwareDto($asReturnwareDto){
        $this->params['asReturnwareDto'] = $asReturnwareDto ->getInstance();
    }
        
            
    private $asDetailDto;
            
    public function setAsDetailDto($asDetailDto){
        $this->params['asDetailDto'] = $asDetailDto ->getInstance();
    }
        
            
    private $isHasPackage;
    
    public function setIsHasPackage($isHasPackage){
        $this->params['isHasPackage'] = $isHasPackage;
    }

    public function getIsHasPackage(){
        return $this->isHasPackage;
    }
            
    private $packageDesc;
    
    public function setPackageDesc($packageDesc){
        $this->params['packageDesc'] = $packageDesc;
    }

    public function getPackageDesc(){
        return $this->packageDesc;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>