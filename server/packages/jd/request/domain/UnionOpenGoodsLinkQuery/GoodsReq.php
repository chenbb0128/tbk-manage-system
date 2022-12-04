<?php
namespace UnionOpenGoodsLinkQuery;
class GoodsReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.link.LinkGoodsReq";
    }
        
    private $url;
    
    public function setUrl($url){
        $this->params['url'] = $url;
    }

    public function getUrl(){
        return $this->url;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>