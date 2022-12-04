<?php
namespace KplOpenYaoPropertyUpdate;
class WareListVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.WareListVo";
    }
        
    private $venderSku;
    
    public function setVenderSku($venderSku){
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku(){
        return $this->venderSku;
    }
            
    private $validTime;
    
    public function setValidTime($validTime){
        $this->params['validTime'] = $validTime;
    }

    public function getValidTime(){
        return $this->validTime;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>