<?php
namespace KeplerTradeSubmit;
class RemoteRegionFreightParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.RemoteRegionFreightParam";
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
            
    private $freight;
    
    public function setFreight($freight){
        $this->params['freight'] = $freight;
    }

    public function getFreight(){
        return $this->freight;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>