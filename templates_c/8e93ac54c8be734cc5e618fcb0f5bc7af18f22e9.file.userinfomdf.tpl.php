<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 15:54:42
         compiled from "F:\PHP_WorkSapce\framework\templates\userinfomdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216935210d2b815d0a6-85247427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e93ac54c8be734cc5e618fcb0f5bc7af18f22e9' => 
    array (
      0 => 'F:\\PHP_WorkSapce\\framework\\templates\\userinfomdf.tpl',
      1 => 1377014080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216935210d2b815d0a6-85247427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5210d2b8af1cf0_36165333',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5210d2b8af1cf0_36165333')) {function content_5210d2b8af1cf0_36165333($_smarty_tpl) {?><!doctype html>
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
		var areaCode = $("#areaCode").text();
		var phoneNum = $("#phoneNum").val();
		
		var email = $("#email").val();
		
		var mustFillShow = false;
				
		if(phoneNum == null || phoneNum == "" ){
			$("#phoneNum").addClass("input-color-red");
			mustFillShow = true;
		}else{
			$("#phoneNum").removeClass("input-color-red");
		}
		
		if(email == null || email == ""){
			$("#email").addClass("input-color-red");
			mustFillShow = true;
		}else{
			$("#email").removeClass("input-color-red");
		}
		
		if(mustFillShow){
			$("#mustfill").show();
			return ;
		}
		
		var validShow = false;
		var valid = true;
		
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
			validShow = true;
		}else{
			$("#phoneNum").removeClass("input-color-red");
		}
		
		if(email != null && email != "" && email != undefined){
			email = email.trim();
		
			var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			if(reg.test(email)){
				$("#email").removeClass("input-color-red");
			}else{
				$("#email").addClass("input-color-red");
				validShow = true;
			}
		}else{
			$("#email").addClass("input-color-red");
			validShow = true;
		}
		
		if(validShow){
			$("#vlid").show();
		}

		if(validShow==false){
			requestDate();
		}
		
	}


	function requestDate(){
		
		$.ajax({
			   type: "POST",
			   url: "<?php echo @constant('WEBSITE_URL');?>
usermanager/updateVipInfo",
			   data: getparms(),
			   error: {},
			   success: function(xml){
			     alert(xml);
			   }
		});
	}


	/**
	 * 获取更改的参数
	 */

	 function getparms(){
	//data:{"userPageFlag":queryFlag.join(",")}
		var parms = {};
		var ladyBrandsTarget = $("#ladyBrands .en img[src$='y-iocn.gif']");
		var manBrandsTarget = $("#manBrands .en img[src$='y-iocn.gif']");
		var vacationsTarget = $("#vacations .zh img[src$='y-iocn.gif']");
		var ysrsTarget = $("#ysrs .zh img[src$='y-iocn.gif']");
		var ladyBrands = getOptions(ladyBrandsTarget);
		var manBrands = getOptions(manBrandsTarget);
		var vacations = getOptions(vacationsTarget);
		var ysrs = getOptions(ysrsTarget);
		var smsAllow = $("form ul li.w100 img").attr("alt");;
		var phoneNum = $("#phoneNum").val();
		var email = $("#email").val();
		parms.phoneNum = phoneNum;
		parms.email = email;
		parms.ladyBrands = ladyBrands;
		parms.manBrands = manBrands;
		parms.vacations = vacations;
		parms.ysrs = ysrs;
		parms.smsAllow = smsAllow;
		
		console.log(parms);
		return parms;
	 }

	function getOptions(target){
		var options = "";
		for(var i=0;i<target.size();i++){
			options += target[i].alt + ";";
		}
		return options;
	}
	/**
	 * 初始化数据
	 */
		function initDate(){
			 /** lady*/ 
			var ladyBrands = new Array("ochirly","Five Plus","MiuMiu","MARC JACOBS","MICHAEL KORS","initial","Mo&Co","DAZZLE","I.T","Vero Moda","ZARA","H&M","其它/Others");
			 /** man*/ 
			var manBrands = new Array("TRENDIANO","Jack&Jones","ELECTED","马克华菲/Mark Fairwhale","GXG","i.t","其它/Others");
			 /** vacation*/ 
			var vacations = new Array("公务员","教师\律师\医生等专业人士","企业管理者","公司职员","自由职业者","家庭主妇","学生","私营企业主","其它");
			 /** ysr*/ 
			var ysrs = new Array("4999元或以下","5000-6999元","7000-8999元","9000-9999元","10000-19999元","20000元以上");

			var ladyBrandsTarget = $("#ladyBrands .en img");
			for(var i=0;i<ladyBrandsTarget.length;i++){
				$(ladyBrandsTarget[i]).attr({"alt": ladyBrands[i]});
			}
			ladyBrandsTarget.attr({"onclick": "changeImg(this);"});

			var manBrandsTarget = $("#manBrands .en img");
			for(var i=0;i<manBrandsTarget.length;i++){
				$(manBrandsTarget[i]).attr({"alt": manBrands[i]});
			}
			manBrandsTarget.attr({"onclick": "changeImg(this);"});

			var vacationsTarget = $("#vacations .zh img");
			for(var i=0;i<vacationsTarget.length;i++){
				$(vacationsTarget[i]).attr({"alt": vacations[i]});
			}
			vacationsTarget.attr({"onclick": "changeImg(this);"});

			var ysrsTarget = $("#ysrs .zh img");
			for(var i=0;i<ysrsTarget.length;i++){
				$(ysrsTarget[i]).attr({"alt": ysrs[i]});
			}
			ysrsTarget.attr({"onclick": "changeImg(this);"});
		}

	$(function(){
		initDate();
		$("#mustfill").hide();
		$("#vlid").hide();
		
		$(".fr img").click(function(){
			$("#mustfill").hide();
			$("#vlid").hide();
			$("#stander").hide();
		});
		
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
		$("#phoneNum").keyup(function(){
			$("#phoneNum").removeClass("input-color-red");
		});
		$("#email").keyup(function(){
			$("#email").removeClass("input-color-red");
		});
			
		$(".base_save").click(valid);
	});

	function areaCode(com){
		$("#areaCode").text("+"+com);
	}

	function changeImg(target){
		var imguri = '<?php echo @constant('WEBSITE_URL');?>
public/img/';
		var imgsrc = $(target).attr("src");
		var smsAllow = $(target).attr("alt");
		if(smsAllow=="否"||smsAllow=="是"){
			if(imgsrc.indexOf("n-iocn") >= 0 ){
				$(target).attr("alt",'是');
			}else{
				$(target).attr("alt",'否');
			}
		}
		if(imgsrc.indexOf("n-iocn") >= 0 ){
			$(target).attr("src",imguri+'y-iocn.gif');
		}else{
			$(target).attr("src",imguri+'n-iocn.gif');
		}
	}
	/**
	 * 登陆的需要公共的 
	 */
	$(function(){
		$('.wrapper6').hide();
		$('.xiaoguo6').mouseenter(function(){
			$('.wrapper6').slideDown("slow");
		});
		$('.head6').mouseleave(function(){
			$('.wrapper6').slideUp();
		});
	});
</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('loginbanner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
                	<li class="w100">会员卡号:<font class="en"><?php echo $_SESSION['vipInfoArr']["vip_no"];?>
</font></li>
                    <li class="w50">姓&nbsp;&nbsp;&nbsp;&nbsp;名:<font><?php echo $_SESSION['vipInfoArr']["name"];?>
</font></li>
                    <li class="w50">身份证号:<font class="en"><?php echo $_SESSION['vipInfoArr']["IDCard"];?>
</font></li>
                    <li class="w50">性&nbsp;&nbsp;&nbsp;&nbsp;别:<font><?php echo $_SESSION['vipInfoArr']["sex"];?>
</font></li>
                    <li class="w50"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/xxioc.gif" class="xxioc"/>手机号码:
                    	<div class="head5">
                            <a href="#" id='areaCode' class="xiaoguo5">+86</a>
                            <ul class="wrapper5">
                                <li class="nshow5"><a href="javascript:areaCode(86);">中国大陆+86</a></li> 
                                <li class="nshow5"><a href="javascript:areaCode(852);">香港+852</a></li> 
                                <li class="nshow5"><a href="javascript:areaCode(853);">澳门+853</a></li> 
                                <li class="nshow5"><a href="javascript:areaCode(886);">台湾+886</a></li>  
                            </ul>
                        </div>-<font class="en"><input id="phoneNum" type="text" class="input_style3" value="<?php echo $_SESSION['vipInfoArr']['mobilePhones'];?>
" style="width:120px;"></font>
                    </li>
                    <li class="w50">生&nbsp;&nbsp;&nbsp;&nbsp;日:<font><?php echo $_SESSION['vipInfoArr']["birthday"];?>
</font></li>
                    <li class="w50"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/xxioc.gif" class="xxioc"/>电子邮箱:<font><input id="email" type="text" class="input_style3" value="<?php echo $_SESSION['vipInfoArr']['eMail'];?>
" style=" width:187px;"></font></li>
                    <li class="w100">
					 <?php if ($_SESSION['vipInfoArr']['smsAllow']=='是'){?>
                    	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/y-iocn.gif" alt="是"/>
                    	<?php }else{ ?>
                    	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/n-iocn.gif" alt="否"/>
                    <?php }?>		
					<font>是否同意会员俱乐部以所填信息与您保持交流？</font></li>
                </ul>
                <span class="zh"><font color="#56280f">*为必填项，如需修改其它信息请在工作时间内致电赫基客服热线800-830-8348。</font></span>
                <div class="Project">
                	<span>1.过去6个月内您经常购买哪些品牌？（可多选）</span>
                    <span>女士选项</span>
                    <span id="ladyBrands">
                    	<?php echo $_SESSION['ladybrands'];?>

                    </span>
                    <span>男士选项</span>
                    <span id="manBrands" class="mb25">
                    	<?php echo $_SESSION['ladybrands'];?>

                    </span>
                    <span>2.您的职业（单选）</span>
                    <span id="vacations" class="mb25">
						<?php echo $_SESSION['vacation'];?>

                    </span>
                    <span>3.您的每月收入（单选）</span>
                    <span id="ysrs" class="mb25">
						<?php echo $_SESSION['ysr'];?>

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




<div id='mustfill' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/Close-ioc.gif"/></a>
    	<span class="btts">
        	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/btts.gif"/>
        </span>
  </div>
	<div class="windbg"></div>
</div>

<div id='vlid' class="windbox">
	<div class="wind">
    	<a href="#" class="fr"><img src="<?php echo @constant('WEBSITE_URL');?>
public/img/Close-ioc.gif"/></a>
    	<span class="Dataerror">
        	<img src="<?php echo @constant('WEBSITE_URL');?>
public/img/Dataerror.gif" border="0"/> 
        </span>
  	</div>
	<div class="windbg"></div>
</div>


</body>
</html>
<?php }} ?>