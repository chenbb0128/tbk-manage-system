<?php
namespace AfterSaleAfsApplyCreate;
class AsReturnwareDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfterSaleReturnwareDto";
    }
        
    private $returnwareType;
    
    public function setReturnwareType($returnwareType){
        $this->params['returnwareType'] = $returnwareType;
    }

    public function getReturnwareType(){
        return $this->returnwareType;
    }
            
    private $returnwareProvince;
    
    public function setReturnwareProvince($returnwareProvince){
        $this->params['returnwareProvince'] = $returnwareProvince;
    }

    public function getReturnwareProvince(){
        return $this->returnwareProvince;
    }
            
    private $returnwareCity;
    
    public function setReturnwareCity($returnwareCity){
        $this->params['returnwareCity'] = $returnwareCity;
    }

    public function getReturnwareCity(){
        return $this->returnwareCity;
    }
            
    private $returnwareCounty;
    
    public function setReturnwareCounty($returnwareCounty){
        $this->params['returnwareCounty'] = $returnwareCounty;
    }

    public function getReturnwareCounty(){
        return $this->returnwareCounty;
    }
            
    private $returnwareVillage;
    
    public function setReturnwareVillage($returnwareVillage){
        $this->params['returnwareVillage'] = $returnwareVillage;
    }

    public function getReturnwareVillage(){
        return $this->returnwareVillage;
    }
            
    private $returnwareAddress;
    
    public function setReturnwareAddress($returnwareAddress){
        $this->params['returnwareAddress'] = $returnwareAddress;
    }

    public function getReturnwareAddress(){
        return $this->returnwareAddress;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>