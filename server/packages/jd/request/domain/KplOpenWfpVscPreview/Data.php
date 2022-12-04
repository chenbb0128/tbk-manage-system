<?php
namespace KplOpenWfpVscPreview;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.Preview";
    }
        
    private $cardNum;
    
    public function setCardNum($cardNum){
        $this->params['cardNum'] = $cardNum;
    }

    public function getCardNum(){
        return $this->cardNum;
    }
            
    private $pwd;
    
    public function setPwd($pwd){
        $this->params['pwd'] = $pwd;
    }

    public function getPwd(){
        return $this->pwd;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>