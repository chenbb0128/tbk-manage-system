<?php
namespace KeplerSettledAftermarketSaveaftermarket;
class ExpandTag{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $expandTag;
    
    public function setExpandTag($expandTag){
        $this->params['expandTag'] = $expandTag;
    }

    public function getExpandTag(){
        return $this->expandTag;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>