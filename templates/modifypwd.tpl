<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部 - 常见问题</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/font/font.css" rel="stylesheet" />
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/css/base.css" rel="stylesheet" />
<link type="text/css" href="{{$smarty.const.WEBSITE_URL}}public/css/other.css" rel="stylesheet" />
<script type="text/javascript" src="{{$smarty.const.WEBSITE_URL}}public/js/jquery-1.8.2.min.js"></script>
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all">
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
})
</script>
<script type="text/javascript" id="sourcecode">
//code for scroll
$(function(){
	$('.scroll-pane').jScrollPane();
});
</script>
</head>

<body>
<div class="Welcomeuseer zh">
	尊贵的<font>汪涵</font>，您好！<a href="#">退出</a>
</div>
<div id="warp" class="container">
    <div class="content">
        <div class="nav">
            <ul class="clearfix">
               <li class="nav1"><a href="{{$smarty.const.WEBSITE_URL}}rights">会员权益</a></li>
                <li class="nav2"><a href="{{$smarty.const.WEBSITE_URL}}activities" >会员专享活动</a></li>
                <li class="nav3"><a href="{{$smarty.const.WEBSITE_URL}}faq">常见问题</a></li>
            </ul>
        </div>
    	<div class="user-content">
            <div class="user-nav">
                <img src="{{$smarty.const.WEBSITE_URL}}public/img/user-nav02.gif" border="0" usemap="#Map">
                 <map name="Map">
                 <area shape="rect" coords="4,3,108,29" href="{{$smarty.const.WEBSITE_URL}}usermanager"><!--账号管理-->
                  <area shape="rect" coords="3,36,73,60" href="{{$smarty.const.WEBSITE_URL}}usermanager/mdfpasswd"><!--修改密码-->
                  <area shape="rect" coords="2,65,104,85" href="{{$smarty.const.WEBSITE_URL}}usermanager/mdfuserinfo"><!--编辑个人信息-->
                  <area shape="rect" coords="3,118,93,144" href="{{$smarty.const.WEBSITE_URL}}usermanager/checkinfos"><!--消费记录-->
                </map>
            </div> 
            <div class="pagecontent scroll-pane" id="pagecontent">
            	 <form>
                 <div class="Resetpassword">
                 	<table>
                    	<tr>
                        	<td width="70"></td>
                        	<td><input type="password" class="input_style2"></td>
                        </tr>
                        <tr>
                        	<td width="70"></td>
                            <td><input type="password" class="input_style2"></td>
                        </tr>
                        <tr>
                        	<td width="70"></td>
                            <td><input type="password" class="input_style2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><img src="{{$smarty.const.WEBSITE_URL}}public/img/resetpassword-ts2.gif"></td>
                        </tr>
                        <tr>
                        	<td width="70"></td>
                        	<td><input type="button" class="Submit" style="margin-left:32px;"></td>
                        </tr>
                    </table>
                 </div>
                 </form>
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
