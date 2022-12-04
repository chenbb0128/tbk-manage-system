<?php
namespace OpenOrderUpdateOrderStateNew;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gongxiao.kepler.domain.OrderExtSkuInfo";
    }
        
    private $batchList;
                                        
    public function setBatchList($batchList){
        $size = count($batchList);
        for ($i=0; $i<$size; $i++){
            $batchList [$i] = $batchList [$i] ->getInstance();
        }
        $this->params['batchList'] = $batchList;
    }
                                    
            
    private $commonName;
    
    public function setCommonName($commonName){
        $this->params['commonName'] = $commonName;
    }

    public function getCommonName(){
        return $this->commonName;
    }
            
    private $packageSpec;
    
    public function setPackageSpec($packageSpec){
        $this->params['packageSpec'] = $packageSpec;
    }

    public function getPackageSpec(){
        return $this->packageSpec;
    }
            
    private $manufacturer;
    
    public function setManufacturer($manufacturer){
        $this->params['manufacturer'] = $manufacturer;
    }

    public function getManufacturer(){
        return $this->manufacturer;
    }
            
    private $venderSku;
    
    public function setVenderSku($venderSku){
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku(){
        return $this->venderSku;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $skuPlace;
    
    public function setSkuPlace($skuPlace){
        $this->params['skuPlace'] = $skuPlace;
    }

    public function getSkuPlace(){
        return $this->skuPlace;
    }
            
    private $skuCount;
    
    public function setSkuCount($skuCount){
        $this->params['skuCount'] = $skuCount;
    }

    public function getSkuCount(){
        return $this->skuCount;
    }
            
    private $approvalNumber;
    
    public function setApprovalNumber($approvalNumber){
        $this->params['approvalNumber'] = $approvalNumber;
    }

    public function getApprovalNumber(){
        return $this->approvalNumber;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>