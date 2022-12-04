<?php
namespace UnionOpenCategoryGoodsGet;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.category.base.CategoryReq";
    }
        
    private $parentId;
    
    public function setParentId($parentId){
        $this->params['parentId'] = $parentId;
    }

    public function getParentId(){
        return $this->parentId;
    }
            
    private $grade;
    
    public function setGrade($grade){
        $this->params['grade'] = $grade;
    }

    public function getGrade(){
        return $this->grade;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>