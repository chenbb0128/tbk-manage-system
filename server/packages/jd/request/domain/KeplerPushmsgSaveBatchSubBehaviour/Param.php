<?php
namespace KeplerPushmsgSaveBatchSubBehaviour;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.k.dto.BatchSubBehaviourRecordParam";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $appid;
    
    public function setAppid($appid){
        $this->params['appid'] = $appid;
    }

    public function getAppid(){
        return $this->appid;
    }
            
    private $openid;
    
    public function setOpenid($openid){
        $this->params['openid'] = $openid;
    }

    public function getOpenid(){
        return $this->openid;
    }
            
    private $behaviourJsfDtoList;
                                        
    public function setBehaviourJsfDtoList($behaviourJsfDtoList){
        $size = count($behaviourJsfDtoList);
        for ($i=0; $i<$size; $i++){
            $behaviourJsfDtoList [$i] = $behaviourJsfDtoList [$i] ->getInstance();
        }
        $this->params['behaviourJsfDtoList'] = $behaviourJsfDtoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>