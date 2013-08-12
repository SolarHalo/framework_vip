<?php
/**
 * 
 * URL的转发类
 * 
 * @Desc 试图做的简单，直白。思来想去，将这个URL转换做直白
 *       就需要先解构、把URL中包含的信息抽出 目录，类名，方法名
 *       然后，按着约定进行转换。使用的数据，有点模板模式的感觉。
 * @author yuyue
 *
 */
 class Router{
 	
 	private $url;
 	private $uriarray;
 	
 	/**
 	 * 初始化时，做URL转换工作。如要有特殊的URL，以后可以在这里加
 	 * 方法扩展。包证后绪的urlToArray是固定的约定解析 
 	 * @param  $url 网页的URL
 	 */
 	function __construct($url){ 
 		  $this->url = $url;
 		  $this->urlToArray();
 	}
 	
 	function getControllerClassName(){  
         return ucfirst($this->uriarray['controler'])."Controller";
 	}
 	function getControllerFilePath(){ 
 		$contollerFilePath = CONTROLLER;
 		if($this->uriarray['dir'] != ''){
 			$contollerFilePath = $contollerFilePath.DS.$this->uriarray['dir'];
 		}
 		return $contollerFilePath.DS.ucfirst($this->uriarray['controler'])."Controller.php";
           
 	}
 	
	function getMethodName(){ 
		  return $this->uriarray['method'];
	}
	
	function getParam(){
		return $this->uriarray['param'];
	}
	
	function paramToArray($paramStr){
		$values = array();
		if(!empty($paramStr)){
			$paramValuePairs = explode("&", $paramStr);
			foreach($paramValuePairs as $paramValuePair ){
				$pv = explode("=", $paramValuePair);
				array_push($values, $pv[1]);
			}
		}else{
			$values = null;
		}
		return $values;
	}
	
   function urlToArray(){
			global  $CONFIG; 
			if(empty($this->url) || ($this->url=='/')){
				 $this->uriarray = $CONFIG['ROUTER'];
				 return $this->uriarray;
			} 
			if($this->url)
			$urlArray = explode('/' , $this->url);
			//drop the first element,because of it's ''
			array_shift($urlArray);
			if($urlArray[0] == "admin"){
				$this->adminRouter($urlArray);
			}else{
				$this->frontRouter($urlArray);
			}
			
   }
   function frontRouter($urlArray){
   	       if(count($urlArray) == 1){ 
				  $this->uriarray = array(
					    "dir"               => "",
					    "controler"         => $urlArray[0],
					    "method"            => "index",
					    "param"             => array()
					);
					return $this->uriarray;
			}else if(count($urlArray) == 2){
				  $this->uriarray = array(
					    "dir"               => "",
					    "controler"         => $urlArray[0],
					    "method"            => $urlArray[1],
					    "param"             => array()
					);
					return $this->uriarray;
			}else if(count($urlArray) == 3){
				  $this->uriarray = array(
					    "dir"               => "",
					    "controler"         => $urlArray[0],
					    "method"            => $urlArray[1],
					    "param"             => $this->paramToArray($urlArray[2])
					);
					return $this->uriarray;
			}else{
				 $this->uriarray = array(
					    "dir"               => $urlArray[0],
					    "controler"         => $urlArray[1],
					    "method"            => $urlArray[2],
					    "param"             => $this->paramToArray($urlArray[3])
					);
					return $this->uriarray;
			} 
   }
   function adminRouter($urlArray){
   	        if(count($urlArray) == 1){
				  $this->uriarray = array(
					    "dir"               => "admin",
					    "controler"         => "index",
					    "method"            => "index",
					    "param"             => array()
					);
					return $this->uriarray;
			}else if(count($urlArray) == 2){
				  $this->uriarray = array(
					    "dir"               => "admin",
					    "controler"         => $urlArray[1],
					    "method"            => "index",
					    "param"             => array()
					);
					return $this->uriarray;
			}else if(count($urlArray) == 3){
				  $this->uriarray = array(
					    "dir"               => "admin",
					    "controler"         => $urlArray[1],
					    "method"            => $urlArray[2],
					    "param"             => array()
					);
					return $this->uriarray;
			}else{
				 $this->uriarray = array(
					   // "dir"               => "admin/"+$urlArray[0],
				 		"dir"               => "admin",
					    "controler"         => $urlArray[1],
					    "method"            => $urlArray[2],
					    //"param"             => $urlArray[3]
				 		"param"             => $this->paramToArray($urlArray[3])
					);
					return $this->uriarray;
			} 
   }
	
}