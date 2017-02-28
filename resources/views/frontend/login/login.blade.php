<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no">
    <meta name="_token" content="{{ csrf_token() }}"/>
<title>[校园] 二货网</title>
<link href="favicon.ico?v=4.6.0" type="image/x-icon" rel="shortcut icon">
<link href="Content/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="Content/uploadify.css" type="text/css">
<link href="Content/login.css" rel="stylesheet" type="text/css"/><script>

/**
 * 全局变量
 */
var SITE_URL  = 'http://101.201.66.123/ThinkSNS';
var UPLOAD_URL= 'http://101.201.66.123/ThinkSNS/data/upload';
var THEME_URL = 'http://101.201.66.123/ThinkSNS/resources/theme/stv1/_static';
var APPNAME   = 'public';
var MID		  = '0';
var UID		  = '0';
var initNums  =  '140';
var SYS_VERSION = '4.6.0';
var UMEDITOR_HOME_URL = 'http://101.201.66.123/ThinkSNS/resources/theme/stv1/_static/js/um/';
var _CP       = 'TS4_';
// Js语言变量
var LANG = new Array();
</script>
<script src="Scripts/public_zh-cn.js"></script>
<script src="Scripts/jquery.js"></script>
<script src="Scripts/jquery.form.js"></script>
<script src="Scripts/common.js"></script>
<script src="Scripts/core.js"></script>
<script src="Scripts/module.js"></script>
<script src="Scripts/module.common.js"></script>
<script src="Scripts/jwidget_1.0.0.js"></script>
<script src="Scripts/jquery.atwho.js"></script>
<script src="Scripts/jquery.caret.js"></script>
<script src="Scripts/ui.core.js"></script>
<script src="Scripts/ui.draggable.js"></script>
<script src="Scripts/core.digg.js"></script>
<script src="Scripts/core.comment.js"></script>
<script src="Scripts/core.digg.js"></script>

<style type="text/css">
body, #header { padding-right: 0; }
</style>
</head>
<body>
<script>
    core.plugFunc('message', function(){
        core.message.init();
        
    });
</script>

<style type="text/css">
  .login-info .error-box{top:440px;height: 32px;}
  .login-info .error-box p{line-height: 32px;}
</style>
<div id="page-wrap" class="clearfix"> 
  <!--***登录***-->
  <div class="login-main clearfix">
    <!-- <div class="login-banner"><img  src=""/></div> -->
    <!--登录面板-->
    <div class="login-board">
      <h3>欢迎来校园二货网</h3>
            <span id="span" align='center' color='red'></span>
            <form id="" method="POST" action="">
                <div class="login-info">
                <div class="input-outer"> <span class="ui-user"></span>
                        <input type="text" name="login_email" class="text" id='login_email'  value="" placeholder="请输入邮箱"/>
                </div>
                <div class="input-outer">
                         <span class="ui-loginPwd"></span>
                        <label class="l-login login_password" style="color:#888;">输入密码</label>
                        <input type="password" name="login_password" class="text" id='login_password'  style=" position:absolute; z-index:100;"  value=""/>
                </div>
                        <div class="mb20"><a class="act-but submit" id='submit' >登录</a>
                </div>
                
                <div class="clearfix mb20"> 
                    <a class="login-rm" event-node="login_remember" href="javascript:;">
                     <span class="check-ok">
                        <input type="hidden" name="login_remember" value="0" id="check-box" class="checkbox"/>
                        <!-- JS选择记住密码时要JS将login_remember值变为1 -->
                    </span>记住用户名</a> 
                    <a href="http://101.201.66.123/ThinkSNS/index.php?app=public&mod=Passport&act=findPassword" class="login-fgetpwd">忘记密码？
                    </a>
                </div>
                <div class="third-party">
                <dl>
                  <dd>
                    <a href="" class="ico-sina"></a></dd>
                  <dd>
                  <a href="qq" class="ico-qzone"></a></dd>
                  <dd><a href="http://demo.thinksns.com/ts4/index.php?app=public&amp;mod=Widget&amp;act=displayAddons&amp;type=weixin&amp;addon=Login&amp;hook=login_sync_other" class="ico-weixin_"></a></dd></dl></div>
                <div class="hasno-account">
                <p>还没有帐号？</p>
                <div class="other-but">
                <a  onclick="javascript:window.open('?url=login/register/uid/','_self')" class="white-but fl"><i class="arow-left"></i>去注册</a> 
                <a href="?url=snsindex/indexshowsee/uid/ " class="white-but fr">先看看<i class="arow-right"></i></a> 
               
               </div>
                    
            </form>

    </div>
    <div id="js_login_input" class="error-box" >
          <p id="message"></p>
                    </div>
  </div>

</div>

<script src="Scripts/online_check.js"></script>
<script src="Scripts/login.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).on('click','#submit',function()
{
        var login_email = $('#login_email').val();
        if (login_email=="") {
          $("#message").html("<font color='red'>请输入邮箱</color>");
          return false;
        };
        var login_password = $('#login_password').val();
        if (login_password=="") {
          $("#message").html("<font color='red'>请输入密码</color>");
          return false;
        };
        $.ajax({
           dataType: "json",
           type: "POST",
           url: "loginDo",
           data: {
               "login_email":login_email,
               "login_password":login_password,
               "_token":"{{csrf_token()}}"
                 },

           success: function(msg)
           {
              if(msg['code']==0) {
                $("#message").html("<font color='red'>"+msg['msg']+"</color>");
              }else if(msg['code']==1){
                $("#message").html("<font color='green'>"+msg['msg']+"</color>");
                window.location="index"
              }
            }
        });

})

$(function(){
    //回车自动提交
    $('body').keypress(function(event)
    {
        if(event.which==13){
          $('#ajax_login_form').submit();
        }
    });

    //背景图制作
    var bg = "Images/login_bj.jpg";
    $('body').css('background','url('+bg+')');
    $('body').css('background-repeat','no-repeat');
    $('body').css('background-position','center');
    $('body').css('background-attachment','fixed');
})
</script>
