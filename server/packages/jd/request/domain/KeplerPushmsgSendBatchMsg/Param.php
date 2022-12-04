<?php
namespace KeplerPushmsgSendBatchMsg;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.k.dto.SubMsgSendBatchDtoJos";
    }
        
    private $miniProgramState;
    
    public function setMiniProgramState($miniProgramState){
        $this->params['miniProgramState'] = $miniProgramState;
    }

    public function getMiniProgramState(){
        return $this->miniProgramState;
    }
            
    private $otherParams;
            
    public function setOtherParams($otherParams){
        $this->params['otherParams'] = $otherParams ->getInstance();
    }
        
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $bCode;
    
    public function setBCode($bCode){
        $this->params['bCode'] = $bCode;
    }

    public function getBCode(){
        return $this->bCode;
    }
            
    private $data;
            
    public function setData($data){
        $this->params['data'] = $data ->getInstance();
    }
        
            
    private $bId;
    
    public function setBId($bId){
        $this->params['bId'] = $bId;
    }

    public function getBId(){
        return $this->bId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>