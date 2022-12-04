<?php
namespace KplOpenSearchAssociationalWord;
class MapResuest{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>