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

	$("#windbox3success").hide();
	$("#windbox11twosame").hide();
	$("#windbox13illegal").hide();
	$("#windbox14errorpwd").hide();
	$("#windbox12same").hide();

	$(".fr img").click(function(){
		$("#windbox3success").hide();
		$("#windbox11twosame").hide();
		$("#windbox13illegal").hide();
		$("#windbox14errorpwd").hide();
		$("#windbox12same").hide();
	});



	$("#submit-bt").click(function(){

		var submitData = {oldpwd:$('#oldpwd').val(),newpwd:$('#newpwd').val(),renewpwd:$('#renewpwd').val()};
		var renewpwd = $('#renewpwd').val();

		//长度验证
		/*if( submitData.newpwd.length < 6 || submitData.newpwd.length > 16){
			$("#windbox13illegal").show();
			return;
		}*/

		//一致验证
		/*if(renewpwd != null && renewpwd != submitData.newpwd){
			$("#windbox11twosame").show();
			return;
		}*/

		/*if(submitData.oldpwd == submitData.newpwd){
			$("#windbox12same").show();
			return;
		}*/

		//if(submitData.newpwd != null){
			$.post(
				'{{$smarty.const.WEBSITE_URL}}usermanager/savepwd',
				submitData,
				function(obj){

					if(!obj.oldpwd){
						$("#windbox14errorpwd").show();
						return;
					}else if(!obj.vlid){
						$("#windbox13illegal").show();
						return;
					}else if(!obj.same){
						$("#windbox11twosame").show();
						return;
					}else if(!obj.change){
						$("#windbox12same").show();
						return;
					}else{
						$("#windbox3success").show();

						setTimeout(function(){
							$("#windbox3success").hide();
							window.location.href = "{{$smarty.const.WEBSITE_URL}}usermanager/index";
						},2000);
						return ;
					}

					/*if(!obj.oldpwd){
						$("#windbox14errorpwd").show();
					}else{
						$("#windbox3success").show();

						setTimeout(function(){
							$("#windbox3success").hide();
							window.location.href = "{{$smarty.const.WEBSITE_URL}}usermanager/index";
						},2000);
					}*/
				},
				"json"
			);
		//}

	});
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
});
</script>
</head>

<body>
{{include file='loginbanner.tpl'}}

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
                        	<td><input id='oldpwd' type="password" class="input_style2"></td>
                        </tr>
                        <tr>
                        	<td width="70"></td>
                            <td><input id="newpwd" type="password" class="input_style2"></td>
                        </tr>
                        <tr>
                        	<td width="70"></td>
                            <td><input id="renewpwd" type="password" class="input_style2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><img src="{{$smarty.const.WEBSITE_URL}}public/img/resetpassword-ts2.gif"></td>
                        </tr>
                        <tr>
                        	<td width="70"></td>
                        	<td><input id='submit-bt' type="button" class="Submit" style="margin-left:32px;"></td>
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


<!-- 弹出窗口 -->
<div id='windbox3success' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="alterpassword-y">
        	<img src="{{$smarty.const.WEBSITE_URL}}public/img/alterpassword-y.gif" border="0" usemap="#Map03"/>
            <map name="Map03">
              	<area shape="rect" coords="215,93,276,118" href="{{$smarty.const.WEBSITE_URL}}usermanager/index"><!--指向账号管理页面-->
            </map>
        </span>
  	</div>
  	<div class="windbg"></div>
</div>

<div id='windbox11twosame' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="eorrpassword2">
        	<img src="{{$smarty.const.WEBSITE_URL}}public/img/resetpassword-ts3.gif" />
        </span>
  	</div>
	<div class="windbg"></div>
</div>

<div id='windbox12same' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="eorrpassword2">
        	<img src="{{$smarty.const.WEBSITE_URL}}public/img/resetpassword-ts4.gif" />
        </span>
  	</div>
	<div class="windbg"></div>
</div>


<div id='windbox13illegal' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="eorrpassword2">
        	<img src="{{$smarty.const.WEBSITE_URL}}public/img/resetpassword-ts5.gif" />
        </span>
  	</div>
	<div class="windbg"></div>
</div>


<div id='windbox14errorpwd' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="{{$smarty.const.WEBSITE_URL}}public/img/Close-ioc.gif"/></a>
    	<span class="eorrpassword2">
        	<img src="{{$smarty.const.WEBSITE_URL}}public/img/resetpassword-ts6.gif" />
        </span>
  	</div>
	<div class="windbg"></div>
</div>

</body>
</html>
