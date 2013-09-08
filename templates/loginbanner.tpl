 {{if $smarty.session.vipInfoArr|@count eq 0 }}
<div class="Welcomeuseer zh">
	<a href="{{$smarty.const.WEBSITE_URL}}login">欢迎登录</a>
</div>
{{else}}
<div class="head6 Welcomeuseer zh">
<div style="display:inline; position:relative;">
	<img src="{{$smarty.const.WEBSITE_URL}}public/img/hduser-iocn.gif" style="vertical-align:sub; cursor:pointer;" class="xiaoguo6"/>
    <a class="xiaoguo6 user_login-y" href="#">尊贵的<font>{{$smarty.session.vipInfoArr["name"]}}</font>，您好!</a>
   <a href="{{$smarty.const.WEBSITE_URL}}login/loginout">退出</a>
    <ul class="wrapper6 zh">
    	<li><a href="{{$smarty.const.WEBSITE_URL}}usermanager">账号管理</a></li>
        <li><a href="{{$smarty.const.WEBSITE_URL}}usermanager/checkinfos">消费记录</a></li>
    </ul>
   
</div>
</div>
{{/if}} 