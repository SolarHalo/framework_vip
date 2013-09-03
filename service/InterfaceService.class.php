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
		$arrayData;
		$proxy = $this->webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord, 'in2'=>$vipid);
		$arryResult = $proxy->getVipInfo($arrayParam);
		if ($arryResult['out']=='-1'){
			$arrayData = '-1';
		}
		$arrayData = $this->xmlToArray($arryResult['out']);
		return $arrayData;
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
		$proxy = $this->webService->getProxy();
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
	function getVipCheck($userName, $passWord, $vipid, $showCount, $currentPage, $chechDate_start, $checkDate_end){
		$proxy = $this->webService->getProxy();
		$arrayParam = array('in0'=>$userName, 'in1'=>$passWord, 
			'in2'=>$vipid, 'in3'=>$showCount, 'in4'=>$currentPage, 
			'in5'=>$chechDate_start, 'in6'=>$checkDate_end);
		//var_dump($arrayParam);
		$arryResult = $proxy->getVipCheck($arrayParam);
		/*$xml = <<<str
<?xml version="1.0" encoding="UTF-8"?>
<expense><cardInfo><vip_no>00001032  </vip_no><name>赵莹莹</name><customer_na>ochirly宁波天一银泰专柜</customer_na><inDate>2010-12-22</inDate><endDate>2011-12-22</endDate><checkMoney>0.00</checkMoney></cardInfo><Page><showCount>14</showCount><totalPage>2</totalPage><totalResult>15</totalResult><currentPage>2</currentPage></Page><CheckInfo><check><checkDate>2012-10-19</checkDate><checkId>K364013658</checkId><cs>北京-北京</cs><customer_na>Ochirly北京朝阳大悦城店</customer_na><CheckAmount>1266</CheckAmount></check></CheckInfo></expense>
str;*/
//$arrayData = $this->xmlCheckInfoToArray($xml);
//var_dump($arrayData);
		$arrayData;
		if(stristr($arryResult['out'], "1:")){
			$arrayData = "";
		}else {
			$arrayData = $this->xmlCheckInfoToArray($arryResult['out']);
		}

//var_dump($arrayData);
		return $arrayData;
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
		$proxy = $this->webService->getProxy();
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
		$proxy = $this->webService->getProxy();
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
			$resultXML = $this->SynchroByVipInfo($userName, $passWord);
			if($resultXML==1){//用户名、密码不正确
				return;
			}
			if($resultXML==-2){//没有返回的数据
				return;
			}	
		}else{
			$resultXML = $this->returnInfo($userName, $passWord, $vipItem);
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
		$resultArray = $this->getArray($node);
		$vipItem = $resultArray['batchId'];
		$vipItemArray = $resultArray['vipItem'];
		$var_data= array();//封装data 数据格式 feilds=>values

		foreach($vipItemArray as $k=>$v){
 			$data = $this->getData($v);
			$var_data[$k] = $data;
		}
		foreach($var_data as $k=>$v){ //循环insert数据
			$this->dbutil->insert('vip_users', $v, null, 'INSERT');
		}
		return is_null($vipItem)?'OK':$this->syncVipInfo($userName, $passWord, $vipItem);
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
    	if ($node->childNodes->length == 1){ 
    	    if ($node->firstChild->nodeName == 'check'){  
	              foreach ($node->childNodes as $childNode){ 
	                 if ($childNode->nodeType != XML_TEXT_NODE){ 
	                    $array[$childNode->nodeName][] = $this->getArray($childNode); 
	                 } 
	              } 
	         } else{
	              $array[$node->firstChild->nodeName] = $node->firstChild->nodeValue; 
	         }
        	}else{ 
            	foreach ($node->childNodes as $childNode){ 
                	if ($childNode->nodeType != XML_TEXT_NODE){ 
                    	$array[$childNode->nodeName][] = $this->getArray($childNode); 
                	} 
            	} 
        	  
    	} 
    	return $array; 
	} 
 	/**
	 * 封装data 数据格式 
	 * 同步时候调用
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
 	/**
	 * 封装Array data 数据格式  
	 * 前台展示  "点击账号管理"  如：array("name"="","email"=>"")
	 * @param unknown_type $node
	 */
	function xmlToArray($xml){
		$data = array();
		$doc = new DOMDocument();
		$doc->loadXML($xml);
 		$documentElement  = $doc->documentElement;
		$resultArray = $this->getArray($documentElement);
		foreach ($resultArray as $k=>$v) {
			foreach ($v as $ks=>$vs){
				$data[$k] = $vs['#text'];
			}
		}
		return $data;
	}
	
 	/**
	 * 封装Array data 数据格式  
	 * 前台展示  "消费记录"  如：array("cardInfo"=>arr,"Page"=>arr,'CheckInfo'=>arr[0]=>arr)
	 * @param unknown_type $node
	 */
	function xmlCheckInfoToArray($xml){
		$data = array();
		$tempData = array();
		$doc = new DOMDocument();
		$doc->loadXML($xml);

		$documentElement  = $doc->documentElement;
		$resultArray = $this->getArray($documentElement);
//				var_dump($resultArray);
		foreach ($resultArray as $k=>$v) {
			if($k==='cardInfo'){
				$tempData = $this->toArray($v);
				$data[$k] = $tempData;
			}
			if($k==='Page'){
				$tempData = $this->toArray($v);
				$data[$k] = $tempData;
			}
			if($k==='CheckInfo'){
				$tempData = $this->checkInfoToArray($v);
				$data[$k] = $tempData;
			}
		}
		//var_dump($data);
		return $data;
	}

	function checkInfoToArray($v){
		$Data = array();
		$tempData = array();
		foreach($v as $k=>$vs){
			foreach($vs['check'] as $ks=>$vss){
				foreach($vss as $kss=>$vsss){
					if($kss!=='#comment'){
						$tempData[$kss] = $vsss[0]['#text'];
					}
				}
				$Data[$ks] = $tempData;
			}
		}
//		var_dump($tempData);
		return $Data;
	}

	function toArray($v){
		$Data = array();
		foreach($v as $k=>$vs){
			foreach($vs as $ks=>$vss){
				if($ks!=='#comment'){
					$Data[$ks] = $vss[0]['#text'];
				}
			}
		}
		return $Data;
	}
}