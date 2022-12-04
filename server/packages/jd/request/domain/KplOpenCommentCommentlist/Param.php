<?php
namespace KplOpenCommentCommentlist;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.comment.domain.CommentListReqParam";
    }
        
    private $productId;
    
    public function setProductId($productId){
        $this->params['productId'] = $productId;
    }

    public function getProductId(){
        return $this->productId;
    }
            
    private $score;
    
    public function setScore($score){
        $this->params['score'] = $score;
    }

    public function getScore(){
        return $this->score;
    }
            
    private $sortType;
    
    public function setSortType($sortType){
        $this->params['sortType'] = $sortType;
    }

    public function getSortType(){
        return $this->sortType;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $logId;
    
    public function setLogId($logId){
        $this->params['logId'] = $logId;
    }

    public function getLogId(){
        return $this->logId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>