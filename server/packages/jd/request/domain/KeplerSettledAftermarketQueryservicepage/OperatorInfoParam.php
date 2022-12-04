<?php
namespace KeplerSettledAftermarketQueryservicepage;
class OperatorInfoParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.OperatorInfoParam";
    }
        
    private $operatorPin;
    
    public function setOperatorPin($operatorPin){
        $this->params['operatorPin'] = $operatorPin;
    }

    public function getOperatorPin(){
        return $this->operatorPin;
    }
            
    private $operatorName;
    
    public function setOperatorName($operatorName){
        $this->params['operatorName'] = $operatorName;
    }

    public function getOperatorName(){
        return $this->operatorName;
    }
            
    private $operatorRemark;
    
    public function setOperatorRemark($operatorRemark){
        $this->params['operatorRemark'] = $operatorRemark;
    }

    public function getOperatorRemark(){
        return $this->operatorRemark;
    }
            
    private $operatorDate;
    
    public function setOperatorDate($operatorDate){
        $this->params['operatorDate'] = $operatorDate;
    }

    public function getOperatorDate(){
        return $this->operatorDate;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>