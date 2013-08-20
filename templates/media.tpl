<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员俱乐部</title>
<meta name="keywords" content="会员俱乐部">
<meta name="description" content="会员俱乐部">
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico"> 
<!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="{{$smarty.const.WEBSITE_URL}}public/assets/lib/video-js/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="{{$smarty.const.WEBSITE_URL}}public/assets/lib/video-js/video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "{{$smarty.const.WEBSITE_URL}}/public/assets/lib/video-js/video-js.swf";
  </script>


</head>
<body> 
  <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="550" height="264"
      poster="{{$imgpath}}"
      data-setup="{}">
    <source src="{{$vidiopath}}" type='video/mp4' />
    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
  </video> 
</body>
</html>
  