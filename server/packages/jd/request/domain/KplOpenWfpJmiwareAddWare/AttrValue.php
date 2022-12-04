<?php
namespace KplOpenWfpJmiwareAddWare;
class AttrValue{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AttrValueParam";
    }
        
    private $valueObj;
    
    public function setValueObj($valueObj){
        $this->params['valueObj'] = $valueObj;
    }

    public function getValueObj(){
        return $this->valueObj;
    }
            
    private $aliasName;
    
    public function setAliasName($aliasName){
        $this->params['aliasName'] = $aliasName;
    }

    public function getAliasName(){
        return $this->aliasName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>