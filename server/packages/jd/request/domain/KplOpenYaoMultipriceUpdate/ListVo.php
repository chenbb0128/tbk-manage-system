<?php
namespace KplOpenYaoMultipriceUpdate;
class ListVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.ListVo";
    }
        
    private $venderSku;
    
    public function setVenderSku($venderSku){
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku(){
        return $this->venderSku;
    }
            
    private $priceNames;
                                        
    public function setPriceNames($priceNames){
        $size = count($priceNames);
        for ($i=0; $i<$size; $i++){
            $priceNames [$i] = $priceNames [$i] ->getInstance();
        }
        $this->params['priceNames'] = $priceNames;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>