<?php /* Smarty version Smarty-3.1.13, created on 2013-08-25 09:00:44
         compiled from "F:\PHP_WorkSapce\framework\templates\checkinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7093520f21f576f174-69213104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be4ffca1dfc7ba0a1294d6f468ff079ad037c359' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\checkinfos.tpl',
      1 => 1377421240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7093520f21f576f174-69213104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520f21f5842dc0_29315526',
  'variables' => 
  array (
    'start_yyyy' => 0,
    'start_years' => 0,
    'twoYearDate_M' => 0,
    'start_mm' => 0,
    'end_yyyy' => 0,
    'end_years' => 0,
    'date_M' => 0,
    'end_mm' => 0,
    'dateHtml' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520f21f5842dc0_29315526')) {function content_520f21f5842dc0_29315526($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部 - 常见问题</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/font/font.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/base.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/other.css" rel="stylesheet" />
<link type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/css/jquery.jscrollpane.css" rel="stylesheet" media="all"> 
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.mousewheel.js"></script>
<style type="text/css" id="page-css">
.scroll-pane {
	width:574px;
	overflow: auto;
	float:left;
}
</style>
<script type="text/javascript">
function initDate(){
	/** 开始年*/
	$("div ul.wrapper").delegate("li", "click", function(){
		var start_Y_val = $(this).text();
		 $("div a.xiaoguo").text(start_Y_val);
		 var start_mm_val = $("div a.xiaoguo2").text();
		 $.ajax({
			   type: "POST",
			   url: "<?php echo @constant('WEBSITE_URL');?>
usermanager/dateVerify",
			   data: {"start_Y":start_Y_val, "start_MM":start_mm_val},
			   error: {},
			   success: function(json){
				   var parseJson = JSON.parse(json);
				   $("div a.xiaoguo2").text(parseJson[0]);
				   $("div ul.wrapper2").empty().append(parseJson[1]);
				   $("div a.xiaoguo3").text(parseJson[2]);
				   $("div ul.wrapper3").empty().append(parseJson[3]);
				   $("div a.xiaoguo4").text(parseJson[4]);
				   $("div ul.wrapper4").empty().append(parseJson[5]);
			   }
		});
	});
	/** 开始月*/
	$("div ul.wrapper2").delegate("li", "click", function(){
		var start_M_val = $(this).text();
		 $("div a.xiaoguo2").text(start_M_val);
		 var start_Y_val = $("div a.xiaoguo").text();
		 var end_Y_val = $("div a.xiaoguo3").text();
		 $.ajax({
			   type: "POST",
			   url: "<?php echo @constant('WEBSITE_URL');?>
usermanager/dateVerify",
			   data: {"start_M":start_M_val, "start_Y_val": start_Y_val, "end_Y_val": end_Y_val},
			   error: {},
			   success: function(json){
				   if(json!=""){
					   var parseJson = JSON.parse(json);
					   $("div a.xiaoguo4").text(parseJson[0]);
					   $("div ul.wrapper4").empty().append(parseJson[1]);
				   }
			   }
		});
	});
	/** 结束年*/
	$("div ul.wrapper3").delegate("li", "click", function(){
		var end_Y_val = $(this).text()
		var start_Y_val = $("div a.xiaoguo").text();
		 $("div a.xiaoguo3").text(end_Y_val);
		 var start_mm_val = $("div a.xiaoguo2").text();
			 $("div a.xiaoguo3").text(end_Y_val);
			 $.ajax({
				   type: "POST",
				   url: "<?php echo @constant('WEBSITE_URL');?>
usermanager/dateVerify",
				   data: {"end_Y":end_Y_val, "end_M":start_mm_val, "start_YY":start_Y_val},
				   error: {},
				   success: function(json){
					   var parseJson = JSON.parse(json);
					   $("div a.xiaoguo4").text(parseJson[0]);
					   $("div ul.wrapper4").empty().append(parseJson[1]);
				   }
			});
	});
	/** 结束月,展示不需要*/
	$("div ul.wrapper4").delegate("li", "click", function(event){
		var end_M_val = $(this).text();
		 $("div a.xiaoguo4").text(end_M_val);
	});
	//实现效果鼠标移上去变色
	$("div ul[class^='wrapper']").delegate("li", "mousemove", function(event){
		$(this).attr("style","color: #F5E70C");
			
	});
	$("div ul[class^='wrapper']").delegate("li", "mouseleave", function(event){
		$(this).removeAttr("style");
			
	});
	
}

function searchVipInfo(){
	$("span.xfjl_cx input").bind("click", function(){
		 var star_Y = $("div a.xiaoguo").text();
		 var start_M = $("div a.xiaoguo2").text();
		 var end_Y = $("div a.xiaoguo3").text();
		 var end_M = $("div a.xiaoguo4").text();
		 var countResult = $("div.recordlist ul"); 
		 $.ajax({
			   type: "POST",
			   url: "<?php echo @constant('WEBSITE_URL');?>
usermanager/searchVipInfo",
			   data: {"start_Y":star_Y, "start_M":start_M, "end_Y":end_Y, "end_M":end_M},
			   error: {},
			   success: function(json){
				   if(json!=""){
					   $(countResult).show()
				       $("div.recordlist a").show(); 
					   var parseJson = JSON.parse(json);
				       $.each(parseJson,
				    		   function(k, v) {
				    		   	var li_Num = $(countResult[k]).find("li");
				    		   	$.each(v,
				    		   	function(key, val) {
				    		   		$.each(li_Num,
				    		   		function(li_k, li_v) {
				    		   			if (key == "checkDate" && li_k == "0") {
				    		   				$(li_v).text(val);
				    		   			}
				    		   			if (key == "checkId" && li_k == "1") {
				    		   				$(li_v).text(val);
				    		   			}
				    		   			if (key == "cs" && li_k == "2") {
				    		   				$(li_v).text(val);
				    		   			}
				    		   			if (key == "customer_na" && li_k == "3") {
				    		   				$(li_v).text(val);
				    		   			}
				    		   			if (key == "CheckAmount" && li_k == "4") {
				    		   				$(li_v).text(val);
				    		   			}
				    		   		});
			    		   	});
		    		   });
				    }else{
				    	$(countResult).hide()
				    	$("div.recordlist a").hide(); 
				    }
			   }
		});
	});
}
	function openWin(winId){
  		$("#"+winId).show();
  	}
  	function closeWin(winId){
  		$("#"+winId).hide();
  	}
	
$(function(){
	initDate();
	searchVipInfo();
	winH = $(window).height();
	warpH = $("#warp").height();
	paddingT = (winH - warpH-70)/2;
	if( winH < warpH ){
		paddingT = 10;
	}
	winH = $(window).height();
	warpH = $("#warp").height();
	paddingT = (winH - warpH-70)/2;
	if( winH < warpH ){
		paddingT = 10;
	}
	
	$("body").css({paddingTop:paddingT});
	$('.wrapper6').hide();
	$('.xiaoguo6').mouseenter(function(){
		$('.wrapper6').slideDown("slow");
	});
	$('.head6').mouseleave(function(){
		$('.wrapper6').slideUp();
	});
	
	$("body").css({paddingTop:paddingT});
	$('.scroll-pane').jScrollPane(); 
	$("div a[class^='xiaoguo']").not($("a.xiaoguo6")).delegate(this, "click", function(){  
        	  $(this).next().slideDown("slow");
          });
          $("div[class^='head']").bind("mouseleave", function(){  
        	  $(this).find("ul").slideUp();
          });
          $("div ul[class^='wrapper']").delegate("li", "click", function(event){
        	  $(this).parent().slideUp();
      	  });
          $("div ul[class^='wrapper']").hide();
		  $("#datedesc").hide();
		  $("#moneydesc").hide();
  	})
  
</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('loginbanner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="windbox" id="datedesc">
	<div class="wind">
    	<a href="#" onclick="javascript:closeWin('datedesc');" class="fr"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/Close-ioc.gif"/></a>
    	<span class="inquire-ts1">
        	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/inquire-ts1.gif"/>
        </span>
  </div>
	<div class="windbg"></div>
</div>

<div class="windbox" id="moneydesc">
	<div class="wind">
    	<a href="#"  onclick="javascript:closeWin('moneydesc');" class="fr"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/Close-ioc.gif"/></a>
    	<span class="recordlistpagewind"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/recordlistpagewind.jpg" /> 
        </span>
  </div>
	<div class="windbg"></div>
</div>

<div id="warp" class="container">
    <div class="content">
        <div class="nav">
            <ul class="clearfix">
               <li class="nav1"><a href="<?php echo @constant('WEBSITE_URL');?>
rights">会员权益</a></li>
                <li class="nav2"><a href="<?php echo @constant('WEBSITE_URL');?>
activities">会员专享活动</a></li>
                <li class="nav3"><a href="<?php echo @constant('WEBSITE_URL');?>
faq">常见问题</a></li>
            </ul>
        </div>
    	<div class="user-content">
            <div class="user-nav">
                <img src="<?php echo @constant('WEBSITE_URL');?>
public/img/user-nav04.gif" border="0" usemap="#Map">
                 <map name="Map"> 
                 <area shape="rect" coords="4,3,108,29" href="<?php echo @constant('WEBSITE_URL');?>
usermanager"><!--账号管理-->
                  <area shape="rect" coords="3,36,73,60" href="<?php echo @constant('WEBSITE_URL');?>
usermanager/mdfpasswd"><!--修改密码-->
                  <area shape="rect" coords="2,65,104,85" href="<?php echo @constant('WEBSITE_URL');?>
usermanager/mdfuserinfo"><!--编辑个人信息-->
                  <area shape="rect" coords="3,118,93,144" href="<?php echo @constant('WEBSITE_URL');?>
usermanager/checkinfos"><!--消费记录-->
                </map>
            </div> 
            <div class="pagecontent scroll-pane" id="pagecontent">
            	<div class="recordsearch">
                	查询日期：
                    <div class="head">
                    	 <?php echo $_smarty_tpl->tpl_vars['start_yyyy']->value;?>
 
                       	<ul class="wrapper">
                        	<?php echo $_smarty_tpl->tpl_vars['start_years']->value;?>

                        </ul>
                    </div>
                    年
                    <div class="head2">
                    	<?php echo $_smarty_tpl->tpl_vars['twoYearDate_M']->value;?>

                       	<ul class="wrapper2">
                        	 <?php echo $_smarty_tpl->tpl_vars['start_mm']->value;?>

           
                        </ul>
                    </div>
                    月
                    至
                    <div class="head3">
                    	<?php echo $_smarty_tpl->tpl_vars['end_yyyy']->value;?>
 
                       	<ul class="wrapper3">
                        	 <?php echo $_smarty_tpl->tpl_vars['end_years']->value;?>

                        </ul>
                    </div>
                    年
                    <div class="head4">
                    	 <?php echo $_smarty_tpl->tpl_vars['date_M']->value;?>

                       	<ul class="wrapper4">
                        	<?php echo $_smarty_tpl->tpl_vars['end_mm']->value;?>

                        </ul>
                    </div>
                    月
                    <span class="xfjl_cx"><input type="button" value="" /></span>
                   <span style="border-bottom:1px solid #BCA14E;"> <a href="#" onclick="javascript:openWin('datedesc');" class="linkstyle01">说明</a></span>
                </div>
                <div class="recordtext mb25 mt20">
                	卡号：<font><?php echo $_SESSION['checkInfoArr']["cardInfo"]["vip_no"];?>
</font>,姓名：<font><?php echo $_SESSION['checkInfoArr']["cardInfo"]["name"];?>
</font>,开卡店铺：<font><?php echo $_SESSION['checkInfoArr']["cardInfo"]["customer_na"];?>
</font>,<br>
                	
                    <?php echo $_smarty_tpl->tpl_vars['dateHtml']->value;?>
,
                                                     续卡尚需有效金额<font><?php echo $_SESSION['checkInfoArr']["cardInfo"]["checkMoney"];?>
</font>元。<span style="border-bottom:1px solid #BCA14E;"><a href="#"  onclick="javascript:openWin('moneydesc')"; class="linkstyle01">说明</a></span>
                </div>
                <div class="recordlist">
                	<ol>
                    	<li class="rq">日期</li>
                        <li class="xsd">销售单</li>
                        <li class="xfcs">消费城市</li>
                        <li class="dpmc">消费店铺名称</li>
                        <li class="je">金额</li>
                    </ol>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_SESSION['checkInfoArr']["CheckInfo"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                     	<ul>
                    	 <li class="rq"><?php echo $_smarty_tpl->tpl_vars['v']->value['checkDate'];?>
</li>
                         <li class="xsd"><?php echo $_smarty_tpl->tpl_vars['v']->value['checkId'];?>
</li>
                         <li class="xfcs"><?php echo $_smarty_tpl->tpl_vars['v']->value['cs'];?>
</li>
                         <li class="dpmc"><?php echo $_smarty_tpl->tpl_vars['v']->value['customer_na'];?>
</li>
                         <li class="je"><?php echo $_smarty_tpl->tpl_vars['v']->value['CheckAmount'];?>
</li>
                    	</ul>
                    <?php } ?>
                   <a href="<?php echo @constant('WEBSITE_URL');?>
usermanager/morecheckinfos/?firstPage=firstPage" class="linkstyle01 fr" style="display:block; width:100%; margin-top:20px;  text-align:right;">查看更多</a>
                </div>
			</div>
        </div>
    </div>
    <div class="sitelinks">
        <ul class="clearfix">
            <li class="ochirly"><a href="http://ochirly.trendy-global.com" target="_blank">ochirly</a></li>
            <li class="fiveplus"><a href="http://fiveplus.trendy-global.com" target="_blank">fiveplus</a></li>
            <li class="loveysabel"><a href="http://loveysabel.trendy-global.com/" target="_blank">loveysabel</a></li>
            <li class="trendiano"><a href="http://trendiano.trendy-global.com/" target="_blank">trendiano</a></li>
        </ul>
    </div>
</div>
<div class="foot">
        <p><span class="en">Copyright @ 20<b>11</b> Trendy International Group All Rights Reserved</span><br>
        <a href="http://www.miibeian.gov.cn/" target="_blank"><span class="zh">备案号：粤</span><span class="en">ICP<b>11</b>0<b>1</b>0295</span></a></p>
</div>
</body>
</html>
<?php }} ?>