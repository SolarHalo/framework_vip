<?php

class InterfaceService{
	
	public $webService;
	public $dbutil;
    function __construct($webService, $dbutil=null){
		if(is_null($dbutil)){
			$this->webService = $webService;
		}else{
			$this->webService = $webService;
			$this->dbutil =  $dbutil;
		}
	}
	
   /**
	 * 
	 * 获取vip信息
	 * @param unknown_type $userName
	 * @param unknown_type $passWord
	 * @param unknown_type $vipid
	 */
	function getVipInfo($userName, $passWord, $vipid){
		$proxy = $this->$webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord, 'in2'=>$vipid);
		$arryResult = $proxy->getVipInfo($arrayParam);
		return $arryResult;
	}
   /**
	 * 
	 * 更新vip信息
	 * @param unknown_type $userName
	 * @param unknown_type $passWord
	 * @param unknown_type $vipid
	 * @param unknown_type $xmlVipInfo
	 * @return 0 
	 */
	function updateVipInfo($userName, $passWord, $vipid, $xmlVipInfo){
		$proxy = $this->$webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord, 
			'in2'=>$vipid, 'in3'=>$xmlVipInfo);
		$arryResult = $proxy->updateVipInfo($arrayParam);
		return $arryResult;
	}
	   
   /**
	 * 返回vip销售数据模板
	 * Enter description here ...
	 * @param unknown_type $userName
	 * @param unknown_type $passWord
	 * @param unknown_type $vipid
	 * @param unknown_type $showCount 每页显示记录数
	 * @param unknown_type $currentPage 当前页数
	 * @param unknown_type $chechDate_start 开始日期
	 * @param unknown_type $checkDate_end 结束日期
	 */
	function getVipCheck($userName, $passWord, $vipid, $showCount, $currentPage, 			  	 $chechDate_start, $checkDate_end){
		$proxy = $this->$webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord, 
			'in2'=>$vipid, 'in3'=>$showCount, 'in4'=>$currentPage, 
			'in5'=>$chechDate_start, 'in6'=>$checkDate_end);
		$arryResult = $proxy->getVipCheck($arrayParam);
	}
	
    /**
	 * 用户信息同步，调用SynchroByVipInfo和returnInfo
	 * 将同步到的数据更新到数据库中。
	 * 获取vip信息
	 * @param unknown_type $userName
	 * @param unknown_type $passWord 
	 * @return xmlVipInfo
	 */
	function SynchroByVipInfo($userName, $passWord){
		$proxy = $this->$webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord);
		$arryResult = $proxy->SynchroByVipInfo($arrayParam);
		return $arryResult;
	}
	 /**
	 * 根据SynchroByVipInfo返回的信息batchId
	 * 获取下一个批次的vip信息
	 * @param unknown_type $userName
	 * @param unknown_type $passWord 
	 * @param unknown_type $batched
	 */
	function returnInfo($userName, $passWord, $batched){
		$proxy = $this->$webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord, 'in2'=>$batched);
		$arryResult = $proxy->returnInfo($arrayParam);
		return $arryResult;
	}
	
	/**
	 * 定时同步调用的方法syncVipInfo
	 */
	function syncVipInfo($userName, $passWord , $vipItem = null){
		$doc = new DOMDocument();
		$resultXML;
		$vipItem;
		if($vipItem){
			$resultXML = SynchroByVipInfo($userName, $passWord);
			if($resultXML==1){//用户名、密码不正确
				return;
			}
			if($resultXML==-2){//没有返回的数据
				return;
			}	
		}else{
			$resultXML = returnInfo($userName, $passWord, $vipItem);
			if($resultXML==1){//用户名、密码不正确
				return;
			}
			if($resultXML==-2){//没有返回的数据
				return;
			}
		}
		$doc->loadXML($resultXML);
		$node_lists = $doc->getElementsByTagName('vipInfos');
 		$node  = $node_lists->item(0);
		$resultArray = getArray($node);
		$vipItem = $resultArray['batchId'];
		$vipItemArray = $resultArray['vipItem'];
		$var_data= array();//封装data 数据格式 feilds=>values

		foreach($vipItemArray as $k=>$v){
 			$data = getData($v);
			$var_data[$k] = $data;
		}
		foreach($var_data as $k=>$v){ //循环insert数据
			$this->dbutil->insert('vip_users', $v, null, 'INSERT');
		}
		return is_null($vipItem)?'OK':syncVipInfo($userName, $passWord, $vipItem);
	}
	
	 /**
	 * 根据xml转数组
	 * @param unknown_type $node
	 */
	function getArray($node){ 
    	$array = array(); 
    	if ($node->hasAttributes()){ 
	        foreach ($node->attributes as $attr){ 
           		$array[$attr->nodeName] = $attr->nodeValue; 
        	} 
    	} 
    	if ($node->hasChildNodes()){ 
        	if ($node->childNodes->length == 1){ 
            	$array[$node->firstChild->nodeName] = $node->firstChild->nodeValue; 
        	}else{ 
            	foreach ($node->childNodes as $childNode){ 
                	if ($childNode->nodeType != XML_TEXT_NODE){ 
                    	$array[$childNode->nodeName][] = getArray($childNode); 
                	} 
            	} 
        	} 
    	} 
    	return $array; 
	} 
 	/**
	 * 封装data 数据格式 
	 * @param unknown_type $node
	 */
	function getData($vipItemArrItem){ 
 		$data = array();
 		foreach ($vipItemArrItem as $k=>$v) {
			foreach ($v as $ks=>$vs){
				if($k=='vipid'){
					$data['cardid'] = $vs['#text'];
				}
				if($k=='vip_no'){
					$data['cardno'] = $vs['#text'];
				}
				if($k=='mobilePhones'){
					$data['tel'] = $vs['#text'];
				}	
				if($k=='vipState'){
					$data['status'] = $vs['#text'];
				}
			}
 		}
		return $data;
	}
}