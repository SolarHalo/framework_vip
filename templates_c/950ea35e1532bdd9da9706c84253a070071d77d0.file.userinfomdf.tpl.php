<?php /* Smarty version Smarty-3.1.13, created on 2013-08-08 16:06:41
         compiled from "G:/phpserver/framework/templates/userinfomdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677051ff37a46a9068-75349776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950ea35e1532bdd9da9706c84253a070071d77d0' => 
    array (
      0 => 'G:/phpserver/framework/templates/userinfomdf.tpl',
      1 => 1375977921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677051ff37a46a9068-75349776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ff37a47dada3_41788194',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff37a47dada3_41788194')) {function content_51ff37a47dada3_41788194($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部 - 常见问题</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
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
<style type="text/css" id="page-css">
.scroll-pane {
	width:574px;
	overflow: auto;
	float:left;
}
</style>
 
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.mousewheel.js"></script>
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

	function valid(){
		
		var valid = true;
		
		var areaCode = $("#areaCode").text();
		var phoneNum = $("#phoneNum").val();
		
		if(phoneNum != null && phoneNum != "" && phoneNum != undefined){
			
			phoneNum = phoneNum.trim();
			
			var part = new RegExp("^[0-9]*$");
			if(!part.test(phoneNum)){
				valid = false;
			}else if(areaCode == "+86"){
				if(phoneNum.length == 11){
					var fix = phoneNum.substring(0,3);
					var prefix = parseInt(fix);
					
					if(!(
						(prefix >= 130 && prefix <= 139) ||
						 prefix == 147 || prefix == 189  ||
						(prefix >= 150 && prefix <= 153) ||
						(prefix >= 155 && prefix <= 159) ||
						(prefix >= 180 && prefix <= 183) ||
						(prefix >= 185 && prefix <= 186) 
					)){
						valid = false;
					}
				}else{
					valid = false;
				}
			}else if(areaCode == "+852"){
				if( phoneNum.length != 8){
					valid = false;
				}
			}else if(areaCode == "+853"){
				if(phoneNum.length != 8){
					valid = false;
				}
			}else if(areaCode == "+886"){
				if( phoneNum.length != 9){
					valid = false;
				}
			}
		}else{
			valid = false;
		}

		if(!valid){
			$("#phoneNum").addClass("input-color-red");
		}else{
			$("#phoneNum").removeClass("input-color-red");
		}
		
		var email = $("#email").val();
		if(email != null && email != "" && email != undefined){
			email = email.trim();
		
			var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(reg.test(email)){
				$("#email").removeClass("input-color-red");
			}else{
				$("#email").addClass("input-color-red");
			}
		}else{
			$("#email").addClass("input-color-red");
		}
	}

$(function(){
	$('.scroll-pane').jScrollPane();
	  $('.wrapper5').hide();
      $('.xiaoguo5').click(function(){
      	
      	 $('.wrapper5').slideDown("slow");
      	  
       });
      $('.head5').mouseleave(function(){
      	  $('.wrapper5').slideUp();
      	  
       });
	  $('.nshow5').click(function(){
      	  $('.wrapper5').slideUp();
      	  
       }); 
	$("#phoneNum").keyup(valid);
	$("#email").keyup(valid);
		
	$(".base_save").click(valid);
});

function areaCode(com){
	$("#areaCode").text("+"+com);
	valid();
}

function changeImg(target){
	var imguri = '<?php echo @constant('WEBSITE_URL');?>
public/img/';
	var imgsrc = $(target).attr("src");
	var imgvalue = $(target).attr("value");
	 
	if(imgsrc.indexOf("n-iocn") >= 0 ){
		$(target).attr("src",imguri+'y-iocn.gif');
	}else{
		$(target).attr("src",imguri+'n-iocn.gif');
	}
}
 
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
               <li class="nav1"><a href="<?php echo @constant('WEBSITE_URL');?>
rights">会员权益</a></li>
                <li class="nav2"><a href="<?php echo @constant('WEBSITE_URL');?>
activities" >会员专享活动</a></li>
                <li class="nav3"><a href="<?php echo @constant('WEBSITE_URL');?>
faq">常见问题</a></li>
            </ul>
        </div>
    	<div class="user-content">
            <div class="user-nav">
                <img src="<?php echo @constant('WEBSITE_URL');?>
public/img/user-nav03.gif" border="0" usemap="#Map">
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
            <form>
            	<ul class="userinfolist zh">
                	<li class="w100">会员卡号:<font class="en">888888888888</font></li>
                    <li class="w50">姓&nbsp;&nbsp;&nbsp;&nbsp;名:<font>汪涵</font></li>
                    <li class="w50">身份证号:<font class="en"></font></li>
                    <li class="w50">性&nbsp;&nbsp;&nbsp;&nbsp;别:<font>男</font></li>
                    <li class="w50">手机号码:
                    	<div class="head5">
                            <a href="#" id='areaCode' class="xiaoguo5">+853</a>
                            <ul class="wrapper5">
                                <li class="nshow5"><a href="javascript:areaCode(86);">中国大陆+86</a></li> 
                                <li class="nshow5"><a href="javascript:areaCode(852);">香港+852</a></li> 
                                <li class="nshow5"><a href="javascript:areaCode(853);">澳门+853</a></li> 
                                <li class="nshow5"><a href="javascript:areaCode(886);">台湾+886</a></li>  
                            </ul>
                        </div>-<font class="en"><input id="phoneNum" type="text" class="input_style3" style="width:120px;"></font>
                    </li>
                    <li class="w50">生&nbsp;&nbsp;&nbsp;&nbsp;日:<font>1974年05月24日</font></li>
                    <li class="w50">电子邮箱:<font><input id="email" type="text" class="input_style3 input-color-red"  style=" width:187px;"></font></li>
                    <li class="w100"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif" onclick="changeImg(this);"/><font>是否同意会员俱乐部以所填信息与您保持交流？</font></li>
                </ul>
                <span class="zh"><font color="#56280f">*为必填项，如需修改其它信息请在工作时间内致电赫基客服热线800-830-8348。</font></span>
                <div class="Project">
                	<span>1.过去6个月内您经常购买哪些品牌？（可多选）</span>
                    <span>女士选项</span>
                    <span>
                    	<font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif" onclick="changeImg(this);" value="ochirly" />ochirly </font>
                    	<font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif" onclick="changeImg(this);"/>Five Plus </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif" onclick="changeImg(this);"/>MiuMiu </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif" onclick="changeImg(this);"/>MARC JACOBS </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>MICHAEL KORS </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif"/>initial </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>Mo&Co  </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>DAZZLE </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif"/>I.T </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>Vero Moda </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>ZARA </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>H&M </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>其它/Others</font>
                    </span>
                    <span>男士选项</span>
                    <span class="mb25">
                    	<font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>TRENDIANO  </font>
                    	<font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>Jack&Jones  </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>ELECTED </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>马克华菲/Mark Fairwhale </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif"/>GXG </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>i.t  </font>
                        <font class="en"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>其它/Others  </font> 
                    </span>
                    <span>2.您的职业（单选）</span>
                    <span class="mb25">
						<font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>公务员 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>教师\律师\医生等专业人士 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>企业管理者 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>公司职员 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>自由职业者 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif"/>家庭主妇 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>学生 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>私营企业主 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>其它</font>
                    </span>
                    <span>3.您的每月收入（单选）</span>
                    <span class="mb25">
						<font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>4999元或以下 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>5000-6999元 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>7000-8999元 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif"/>9000-9999元 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>10000-19999元 </font>
                        <font class="zh"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif"/>20000元以上</font> 
                    </span>
                    <span style="text-align:center; height:60px;" class="mb25"><input type="button" class="base_save"/></span> 
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
<?php }} ?>