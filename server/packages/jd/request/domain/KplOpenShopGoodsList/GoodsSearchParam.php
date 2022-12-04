<?php
namespace KplOpenShopGoodsList;
class GoodsSearchParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.marketing.common.client.domain.search.GoodsSearchParam";
    }
        
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $sortBy;
    
    public function setSortBy($sortBy){
        $this->params['sortBy'] = $sortBy;
    }

    public function getSortBy(){
        return $this->sortBy;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>