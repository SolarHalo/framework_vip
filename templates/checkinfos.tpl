<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部 - 常见问题</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/font/font.css" rel="stylesheet" />
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/css/base.css" rel="stylesheet" />
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/css/other.css" rel="stylesheet" />
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/css/jquery.jscrollpane.css" rel="stylesheet" media="all"> 
<script type="text/javascript" src="{{$smarty.const.WEBSITE_URL}}public/js/jquery-1.8.2.min.js"></script>
<style type="text/css" id="page-css">
.scroll-pane {
	width:574px;
	overflow: auto;
	float:left;
}
</style>
 
<script type="text/javascript" src="{{$smarty.const.WEBSITE_URL}}public/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="{{$smarty.const.WEBSITE_URL}}public/js/jquery.mousewheel.js"></script>
<script type="text/javascript">
//code for vetically center
$(function(){
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
})
</script>
<script type="text/javascript" id="sourcecode">
//code for scroll
$(function(){
	$('.scroll-pane').jScrollPane(); 
          $('.wrapper').hide();
          $('.xiaoguo').click(function(){
          	
          	 $('.wrapper').slideDown("slow");
          	  
           });
          $('.head').mouseleave(function(){
          	  $('.wrapper').slideUp();
          	  
           });
		  $('.nshow').click(function(){
          	  $('.wrapper').slideUp();
          	  
           });
		  $('.wrapper2').hide();
          $('.xiaoguo2').click(function(){
          	
          	 $('.wrapper2').slideDown("slow");
          	  
           });
          $('.head2').mouseleave(function(){
          	  $('.wrapper2').slideUp();
          	  
           });
		  $('.nshow2').click(function(){
          	  $('.wrapper2').slideUp();
          	  
           });
		  $('.wrapper3').hide();
          $('.xiaoguo3').click(function(){
          	
          	 $('.wrapper3').slideDown("slow");
          	  
           });
          $('.head3').mouseleave(function(){
          	  $('.wrapper3').slideUp();
          	  
           });
		  $('.nshow3').click(function(){
          	  $('.wrapper3').slideUp();
          	  
           });
		  $('.wrapper4').hide();
          $('.xiaoguo4').click(function(){
          	
          	 $('.wrapper4').slideDown("slow");
          	  
           });
          $('.head4').mouseleave(function(){
          	  $('.wrapper4').slideUp();
          	  
           });
		  $('.nshow4').click(function(){
          	  $('.wrapper4').slideUp();
          	  
           });
		    $("#datedesc").hide();
		    $("#moneydesc").hide();
			 
  	});
  	function openWin(winId){
  		$("#"+winId).show();
  	}
  	function closeWin(winId){
  		$("#"+winId).hide();
  	}
  	  	
</script>
</head>

<body>
{{include file='loginbanner.tpl'}}

<div class="windbox" id="datedesc">
	<div class="wind">
    	<a href="#" onclick="javascript:closeWin('datedesc');" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="inquire-ts1">
        	<img src="{{$smarty.const.WEBSITE_URL}}public/img/inquire-ts1.gif"/>
        </span>
  </div>
	<div class="windbg"></div>
</div>

<div class="windbox" id="moneydesc">
	<div class="wind">
    	<a href="#"  onclick="javascript:closeWin('moneydesc');" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="recordlistpagewind"><img src="{{$smarty.const.WEBSITE_URL}}public/img/recordlistpagewind.jpg" /> 
        </span>
  </div>
	<div class="windbg"></div>
</div>

<div id="warp" class="container">
    <div class="content">
        <div class="nav">
            <ul class="clearfix">
               <li class="nav1"><a href="{{$smarty.const.WEBSITE_URL}}rights">会员权益</a></li>
                <li class="nav2"><a href="{{$smarty.const.WEBSITE_URL}}activities">会员专享活动</a></li>
                <li class="nav3"><a href="{{$smarty.const.WEBSITE_URL}}faq">常见问题</a></li>
            </ul>
        </div>
    	<div class="user-content">
            <div class="user-nav">
                <img src="{{$smarty.const.WEBSITE_URL}}public/img/user-nav04.gif" border="0" usemap="#Map">
                 <map name="Map"> 
                 <area shape="rect" coords="4,3,108,29" href="{{$smarty.const.WEBSITE_URL}}usermanager"><!--账号管理-->
                  <area shape="rect" coords="3,36,73,60" href="{{$smarty.const.WEBSITE_URL}}usermanager/mdfpasswd"><!--修改密码-->
                  <area shape="rect" coords="2,65,104,85" href="{{$smarty.const.WEBSITE_URL}}usermanager/mdfuserinfo"><!--编辑个人信息-->
                  <area shape="rect" coords="3,118,93,144" href="{{$smarty.const.WEBSITE_URL}}usermanager/checkinfos"><!--消费记录-->
                </map>
            </div> 
            <div class="pagecontent scroll-pane" id="pagecontent">
            	<div class="recordsearch">
                	查询日期：
                    <div class="head">
                    	<a href="#" class="xiaoguo">2013</a>
                       	<ul class="wrapper">
                        	<li class="nshow"><a href="#">2001</a></li> 
                            <li class="nshow"><a href="#">2002</a></li> 
                            <li class="nshow"><a href="#">2003</a></li> 
                            <li class="nshow"><a href="#">2004</a></li> 
                            <li class="nshow"><a href="#">2005</a></li> 
                            <li class="nshow"><a href="#">2006</a></li> 
                            <li class="nshow"><a href="#">2007</a></li> 
                            <li class="nshow"><a href="#">2008</a></li> 
                            <li class="nshow"><a href="#">2009</a></li> 
                            <li class="nshow"><a href="#">2010</a></li> 
                            <li class="nshow"><a href="#">2011</a></li> 
                            <li class="nshow"><a href="#">2012</a></li> 
                        </ul>
                    </div>
                    年
                    <div class="head2">
                    	<a href="#" class="xiaoguo2">03</a>
                       	<ul class="wrapper2">
                        	<li class="nshow2"><a href="#">01</a></li> 
                            <li class="nshow2"><a href="#">02</a></li> 
                            <li class="nshow2"><a href="#">03</a></li> 
                            <li class="nshow2"><a href="#">04</a></li> 
                            <li class="nshow2"><a href="#">05</a></li> 
                            <li class="nshow2"><a href="#">06</a></li> 
                            <li class="nshow2"><a href="#">07</a></li> 
                            <li class="nshow2"><a href="#">08</a></li> 
                            <li class="nshow2"><a href="#">09</a></li> 
                            <li class="nshow2"><a href="#">10</a></li> 
                            <li class="nshow2"><a href="#">11</a></li> 
                            <li class="nshow2"><a href="#">12</a></li> 
                        </ul>
                    </div>
                    月
                    至
                    <div class="head3">
                    	<a href="#" class="xiaoguo3">2013</a>
                       	<ul class="wrapper3">
                        	<li class="nshow3"><a href="#">2001</a></li> 
                            <li class="nshow3"><a href="#">2002</a></li> 
                            <li class="nshow3"><a href="#">2003</a></li> 
                            <li class="nshow3"><a href="#">2004</a></li> 
                            <li class="nshow3"><a href="#">2005</a></li> 
                            <li class="nshow3"><a href="#">2006</a></li> 
                            <li class="nshow3"><a href="#">2007</a></li> 
                            <li class="nshow3"><a href="#">2008</a></li> 
                            <li class="nshow3"><a href="#">2009</a></li> 
                            <li class="nshow3"><a href="#">2010</a></li> 
                            <li class="nshow3"><a href="#">2011</a></li> 
                            <li class="nshow3"><a href="#">2012</a></li> 
                        </ul>
                    </div>
                    年
                    <div class="head4">
                    	<a href="#" class="xiaoguo4">03</a>
                       	<ul class="wrapper4">
                        	<li class="nshow4"><a href="#">01</a></li> 
                            <li class="nshow4"><a href="#">02</a></li> 
                            <li class="nshow4"><a href="#">03</a></li> 
                            <li class="nshow4"><a href="#">04</a></li> 
                            <li class="nshow4"><a href="#">05</a></li> 
                            <li class="nshow4"><a href="#">06</a></li> 
                            <li class="nshow4"><a href="#">07</a></li> 
                            <li class="nshow4"><a href="#">08</a></li> 
                            <li class="nshow4"><a href="#">09</a></li> 
                            <li class="nshow4"><a href="#">10</a></li> 
                            <li class="nshow4"><a href="#">11</a></li> 
                            <li class="nshow4"><a href="#">12</a></li> 
                        </ul>
                    </div>
                    月
                   <span style="border-bottom:1px solid #BCA14E;"> <a href="#" onclick="javascript:openWin('datedesc');" class="linkstyle01">说明</a></span>
                </div>
                <div class="recordtext mb25 mt20">
                	卡号：<font>{{$smarty.session.checkInfoArr["cardInfo"]["vip_no"]}}</font>,姓名：<font>{{$smarty.session.checkInfoArr["cardInfo"]["name"]}}</font>,开卡店铺：<font>{{$smarty.session.checkInfoArr["cardInfo"]["customer_na"]}}</font>,<br>
                	
                    {{$dateHtml}},
                                                     续卡尚需有效金额<font>{{$smarty.session.checkInfoArr["cardInfo"]["checkMoney"]}}</font>元。<span style="border-bottom:1px solid #BCA14E;"><a href="#"  onclick="javascript:openWin('moneydesc')"; class="linkstyle01">说明</a></span>
                </div>
                <div class="recordlist">
                	<ol>
                    	<li class="rq">日期</li>
                        <li class="xsd">销售单</li>
                        <li class="xfcs">消费城市</li>
                        <li class="dpmc">消费店铺名称</li>
                        <li class="je">金额</li>
                    </ol>
                    {{foreach $smarty.session.checkInfoArr["CheckInfo"] as $k=>$v}}
                     	<ul>
                    	 <li class="rq">{{$v['checkDate']}}</li>
                         <li class="xsd">{{$v['checkId']}}</li>
                         <li class="xfcs">{{$v['cs']}}</li>
                         <li class="dpmc">{{$v['customer_na']}}</li>
                         <li class="je">{{$v['CheckAmount']}}</li>
                    	</ul>
                    {{/foreach}}
                   <a href="{{$smarty.const.WEBSITE_URL}}usermanager/morecheckinfos/?firstPage=firstPage" class="linkstyle01 fr" style="display:block; width:100%; margin-top:20px;  text-align:right;">查看更多</a>
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
