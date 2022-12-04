<?php
class OpenRedInvoiceUploadRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.open.redInvoiceUpload";
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
                                    	                                            		                                    	                   			private $invoiceDate;
    	                        
	public function setInvoiceDate($invoiceDate){
		$this->invoiceDate = $invoiceDate;
         $this->apiParas["invoiceDate"] = $invoiceDate;
	}

	public function getInvoiceDate(){
	  return $this->invoiceDate;
	}

                        	                   			private $invoiceCode;
    	                        
	public function setInvoiceCode($invoiceCode){
		$this->invoiceCode = $invoiceCode;
         $this->apiParas["invoiceCode"] = $invoiceCode;
	}

	public function getInvoiceCode(){
	  return $this->invoiceCode;
	}

                        	                   			private $invoiceAmount;
    	                        
	public function setInvoiceAmount($invoiceAmount){
		$this->invoiceAmount = $invoiceAmount;
         $this->apiParas["invoiceAmount"] = $invoiceAmount;
	}

	public function getInvoiceAmount(){
	  return $this->invoiceAmount;
	}

                        	                   			private $blueInvoiceCode;
    	                        
	public function setBlueInvoiceCode($blueInvoiceCode){
		$this->blueInvoiceCode = $blueInvoiceCode;
         $this->apiParas["blueInvoiceCode"] = $blueInvoiceCode;
	}

	public function getBlueInvoiceCode(){
	  return $this->blueInvoiceCode;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                        	                   			private $invoiceTitle;
    	                        
	public function setInvoiceTitle($invoiceTitle){
		$this->invoiceTitle = $invoiceTitle;
         $this->apiParas["invoiceTitle"] = $invoiceTitle;
	}

	public function getInvoiceTitle(){
	  return $this->invoiceTitle;
	}

                        	                   			private $blueInvoiceNo;
    	                        
	public function setBlueInvoiceNo($blueInvoiceNo){
		$this->blueInvoiceNo = $blueInvoiceNo;
         $this->apiParas["blueInvoiceNo"] = $blueInvoiceNo;
	}

	public function getBlueInvoiceNo(){
	  return $this->blueInvoiceNo;
	}

                        	                   			private $invoiceImgBase64;
    	                        
	public function setInvoiceImgBase64($invoiceImgBase64){
		$this->invoiceImgBase64 = $invoiceImgBase64;
         $this->apiParas["invoiceImgBase64"] = $invoiceImgBase64;
	}

	public function getInvoiceImgBase64(){
	  return $this->invoiceImgBase64;
	}

                            }





        
 

