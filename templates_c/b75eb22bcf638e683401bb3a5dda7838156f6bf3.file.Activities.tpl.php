<?php /* Smarty version Smarty-3.1.13, created on 2013-08-12 23:10:29
         compiled from "D:\PHPWeb\framework_vip\templates\Activities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31915207a09b8d9453-45960481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b75eb22bcf638e683401bb3a5dda7838156f6bf3' => 
    array (
      0 => 'D:\\PHPWeb\\framework_vip\\templates\\Activities.tpl',
      1 => 1376314356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31915207a09b8d9453-45960481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5207a09ba022a1_69629999',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5207a09ba022a1_69629999')) {function content_5207a09ba022a1_69629999($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部 - 会员专享活动</title>
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
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/js/jquery.slides.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo @constant('WEBSITE_URL');?>
public/assets/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo @constant('WEBSITE_URL');?>
public/assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />
 
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
//code for gallery and video
$(function(){
	$("#fancybox-manual-b").click(function() {
		$.fancybox.open({
			href : '<?php echo @constant('WEBSITE_URL');?>
activities/media',
			type : 'iframe',
			maxWidth	: 536,
			maxHeight	: 600,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			padding : 5
		});
	});

	
	$(".photo div.fl,.photo a.abtn").click(function(){
		$("#warp").append("<div id='mask'></div><div id='alertbox'><div id='gallery-head'><a href='javascript:;'></a></div><div id='gallery-body'><div id='gallery-photos' class='gallery'></div></div></div>");
		if($(this).hasClass("abtn")){
			$("#gallery-photos").append($(this).parent().siblings("div").html());
		}
		else { 
			$("#gallery-photos").append($(this).html());
		}
		$("#gallery-head a").click(function(){
			$("#mask").hide(function(){$("#mask").remove();});
			$("#alertbox").hide(function(){$("#alertbox").remove();});
		});
		$('#gallery-photos').slidesjs({
        width: 536,
        height: 360,
        play: {
          auto: false
        }
      });
		return false;
	});
})
</script>
</head>

<body>
<div class="Welcomeuseer zh">
	<a href="<?php echo @constant('WEBSITE_URL');?>
login">欢迎登录</a>
</div>
<div id="warp" class="container" style="position:relative;">
    <div class="content">
        <div class="nav">
            <ul class="clearfix">
                <li class="nav1"><a href="<?php echo @constant('WEBSITE_URL');?>
rights">会员权益</a></li>
                <li class="nav2"><a href="<?php echo @constant('WEBSITE_URL');?>
activities" class="current">会员专享活动</a></li>
                <li class="nav3"><a href="<?php echo @constant('WEBSITE_URL');?>
faq">常见问题</a></li>
            </ul>
        </div>
        <div id="slides"> <span id="btn-prev"></span> <span id="btn-next"></span>
            <div id="sliderlistbox">
                <ul id="sliderlist" class="clearfix">
                    <li class="photo">
                        <div class="fl"> 
                        <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/1.jpg"> 
                        <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/2.jpg"> 
                        <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/3.jpg"> 
                        <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/4.jpg"> 
                        <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/5.jpg">
                         <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/6.jpg"> 
                         <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/7.jpg"> <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/8.jpg">
                          <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/9.jpg"> <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/10.jpg"> 
                          <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/1/11.jpg"> </div>
                        <div class="title">
                            <h3><span class="en">Five Plus</span><span class="zh">正佳广场时尚派对</span></h3>
                            <h3><span class="en">Music Check in Mini Party</span></h3>
                        </div>
                        <p><span class="en">Five Plus</span><span class="zh">为广州地区尊贵的</span><span class="en">50</span><span class="zh">名</span><span class="en">VIP</span><span class="zh">举办了一场别出心裁的“乐探之旅”时尚派对。获邀会员抢先体验秋冬新款服饰；</span><span class="en">SO’O</span><span class="zh">特邀专业造型师分享交流最新潮流趋势、现场打造时尚造型；专业模特与</span><span class="en">VIP</span><span class="zh">街拍互动专区以及星级酒店提供的英伦风格茶点等丰富内容，让</span><span class="en">VIP</span><span class="zh">会员感受到品牌带来的乐趣！</span></p>
                        <p class="mt10"><a href="#" class="abtn"><span class="zh">观看更多</span></a></p>
                    </li>
                    <li class="photo">
                        <div class="fl"> <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/1.jpg">
                         <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/2.jpg">
                          <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/3.jpg"> 
                          <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/4.jpg"> 
                          <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/5.jpg">
                           <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/6.jpg"> 
                           <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/7.jpg">
                            <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/8.jpg">
                             <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/9.jpg"> </div>
                        <div class="title">
                            <h3><span class="zh">广州太古汇开业</span><span class="en">Mini Party</span></h3>
                        </div>
                        <p><span class="en">ochirly、Five Plus、TRENDIANO</span><span class="zh">太古汇全新形象店举办的一场“</span><span class="en">Enjoy Your Fashion Style</span><span class="zh">”时尚</span><span class="en">Mini Party</span><span class="zh">。伴随着来自欧美的</span><span class="en">Live Band</span><span class="zh">充满热情的音乐风格演绎，</span><span class="en">ochirly</span><span class="zh">引领现场嘉宾们一同领略全新门店艺术，徜徉于音乐与艺术的时空。</span></p>
                        <p><a href="#" class="abtn"><span class="zh">观看更多</span></a></p>
                    </li>
                      <li class="photo">
                        <div class="fl"> <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/1.jpg">
                         <img src="<?php echo @constant('WEBSITE_URL');?>
public/gallery/2/2.jpg">
                        </div>
                        <div class="title">
                            <h3><span class="zh">测试播放视频</span><span class="en">Mini Party</span></h3>
                        </div>
                        <p><span class="en">ochirly、Five Plus、TRENDIANO</span><span class="zh">太古汇全新形象店举办的一场“</span><span class="en">Enjoy Your Fashion Style</span><span class="zh">”时尚</span><span class="en">Mini Party</span><span class="zh">。伴随着来自欧美的</span><span class="en">Live Band</span><span class="zh">充满热情的音乐风格演绎，</span><span class="en">ochirly</span><span class="zh">引领现场嘉宾们一同领略全新门店艺术，徜徉于音乐与艺术的时空。</span></p>
                        <p><a  class="abtn " id="fancybox-manual-b" href="javascript:;"><span class="zh">观看视频</span></a></p>
                    </li>
                </ul>
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
<script type="text/javascript">
var Vip = {
            frame: $('#sliderlist'),
            left: $('#btn-prev'),
            right: $('#btn-next'),
            image: $('#sliderlist>li'),
			tag:true,
            init: function () {
                Vip.frame.width(Vip.image.length * 780);
                Vip.autoLeft();
                Vip.left.click(Vip.slideLeft).hover(Vip.slideStop, function(){Vip.autoRight();Vip.tag=false;});
                Vip.right.click(Vip.slideRight).hover(Vip.slideStop, function(){Vip.autoLeft();Vip.tag=true;});
                Vip.frame.hover(Vip.slideStop,function(){ if(Vip.tag)Vip.autoLeft();else Vip.autoRight();});
            },
            slideLeft: function () {
                Vip.left.unbind('click', Vip.slideLeft);
                Vip.frame.find('li:last').prependTo(Vip.frame);
                Vip.frame.css('marginLeft', -780);
                Vip.frame.animate({'marginLeft': 0 }, 350, function () {
                    Vip.left.bind('click', Vip.slideLeft);
                });
                return false;
            },
            slideRight: function () {
                Vip.right.unbind('click', Vip.slideRight);
                Vip.frame.animate({'marginLeft': -780 }, 350, function () {
                    Vip.frame.css('marginLeft', '0');
                    Vip.frame.find('li:first').appendTo(Vip.frame);
                    Vip.right.bind('click', Vip.slideRight);
                });
                return false;
            },
            autoLeft: function () {
                Vip.intervalId = window.setInterval(Vip.slideRight, 5000);
            },
			autoRight: function () {
                Vip.intervalId1 = window.setInterval(Vip.slideLeft, 5000);
            },
            slideStop: function () {
                window.clearInterval(Vip.intervalId);window.clearInterval(Vip.intervalId1);
            }
}
$(function() {
	Vip.init();
})
</script>
</body>
</html>
<?php }} ?>