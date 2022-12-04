<?php
namespace KeplerSettledAddressGetareabymehodname;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.trade.jos.sopclient.address.request.GetAreaByMehodNameRequest";
    }
        
    private $param;
    
    public function setParam($param){
        $this->params['param'] = $param;
    }

    public function getParam(){
        return $this->param;
    }
            
    private $methodName;
    
    public function setMethodName($methodName){
        $this->params['methodName'] = $methodName;
    }

    public function getMethodName(){
        return $this->methodName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>