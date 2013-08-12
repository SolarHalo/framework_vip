<?php /* Smarty version Smarty-3.1.13, created on 2013-08-12 05:41:33
         compiled from "G:\phpserver\framework\templates\media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4889520873a6bfc657-16062260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef488c83811eabcf88cac66a0abb23cc9649476' => 
    array (
      0 => 'G:\\phpserver\\framework\\templates\\media.tpl',
      1 => 1376286088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4889520873a6bfc657-16062260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520873a6d4a213_94235465',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520873a6d4a213_94235465')) {function content_520873a6d4a213_94235465($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico"> 
<!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="<?php echo @constant('WEBSITE_URL');?>
public/assets/lib/video-js/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="<?php echo @constant('WEBSITE_URL');?>
public/assets/lib/video-js/video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "<?php echo @constant('WEBSITE_URL');?>
/public/assets/lib/video-js/video-js.swf";
  </script>


</head>
<body> 
  <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="550" height="264"
      poster="<?php echo @constant('WEBSITE_URL');?>
public/video/1.jpg"
      data-setup="{}">
    <source src="<?php echo @constant('WEBSITE_URL');?>
public/video/1.mp4" type='video/mp4' />
    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
  </video> 
</body>
</html>
  <?php }} ?>