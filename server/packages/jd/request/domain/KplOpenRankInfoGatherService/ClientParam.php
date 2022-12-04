<?php
namespace KplOpenRankInfoGatherService;
class ClientParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.m.core.rank.client.dto.gather.ClientParam";
    }
        
    private $channel;
    
    public function setChannel($channel){
        $this->params['channel'] = $channel;
    }

    public function getChannel(){
        return $this->channel;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>