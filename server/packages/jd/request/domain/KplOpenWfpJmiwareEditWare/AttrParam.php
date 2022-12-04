<?php
namespace KplOpenWfpJmiwareEditWare;
class AttrParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AttrParam";
    }
        
    private $letter;
    
    public function setLetter($letter){
        $this->params['letter'] = $letter;
    }

    public function getLetter(){
        return $this->letter;
    }
            
    private $attrValue;
            
    public function setAttrValue($attrValue){
        $this->params['attrValue'] = $attrValue ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>