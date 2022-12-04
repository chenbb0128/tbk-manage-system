<?php
class KplOpenNbdMedicineGetricendtockRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.nbd.medicine.getricendtock";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $medicineInfo;

    public function setMedicineInfo($medicineInfo){
        $this->apiParas['medicineInfo'] = $medicineInfo;
    }
    public function getMedicineInfo(){
        return $this->apiParas['medicineInfo'];
    }
    private  $hospitalCode;

    public function setHospitalCode($hospitalCode){
        $this->apiParas['hospitalCode'] = $hospitalCode;
    }
    public function getHospitalCode(){
        return $this->apiParas['hospitalCode'];
    }
}

?>