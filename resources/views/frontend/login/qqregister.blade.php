<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="format-detection" content="telephone=no">
<title> [校园] 二货网 </title>
<meta content="" name="keywords">
<meta property="qc:admins" content="345471037076401633636375">
<<<<<<< HEAD
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="http://demo.thinksns.com/ts4/favicon.ico?v=" type="image/x-icon" rel="shortcut icon">
=======
<link href="/favicon.ico?v=" type="image/x-icon" rel="shortcut icon">
>>>>>>> faacdb0d18e536d3e0a8805b1b257d6538610035
<link href="qqregister/css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="qqregister/uploadify.css" type="text/css">

<script>
/**
 * 全局变量
 */
var SITE_URL  = '';
var UPLOAD_URL= '/data/upload';
var THEME_URL = '/resources/theme/stv1/_static';
var APPNAME   = 'public';
var MID       = '';
var UID       = '';
var initNums  =  '';
var SYS_VERSION = '';
var UMEDITOR_HOME_URL = '/resources/theme/stv1/_static/js/um/';
var _CP       = 'TS4_';
// Js语言变量
var LANG = new Array();
</script>
<script src="qqregister/public_zh-cn.js"></script>
<script src="qqregister/jquery_004.js"></script>
<script src="qqregister/jquery.js"></script>
<script src="qqregister/common.js"></script>
<script src="qqregister/core.js"></script>
<script src="qqregister/module_003.js"></script>
<script src="qqregister/module_002.js"></script>
<script src="qqregister/jwidget_1.js"></script>
<script src="qqregister/jquery_003.js"></script>
<script src="qqregister/jquery_002.js"></script>
<script src="qqregister/ui_002.js"></script>
<script src="qqregister/ui.js"></script>
<script src="qqregister/core_002.js"></script>
<script src="qqregister/core_003.js"></script>
<script src="qqregister/core_002.js"></script>
<script src="qqregister/binding.js"></script>

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

<!--手机APP下载-->
<div id="app_download">
  <a class="app_download" href="/index.php?app=weiba&amp;mod=Index&amp;act=postDetail&amp;post_id=2699"></a>
</div>
<div id="body_page" name="body_page">
<div id="body-bg">
<div id="header" name="header">
  <!-- 未登录时 -->
  <div class="header-wrap" style="background:green">
      <div class="head-bd" > 
        <!-- logo -->
        <div class="logo" style="background:"><h2><a href="" style="font-size:26px;color:white"><b>校园</b>       &nbsp;<span style="font-size:18px;">二货</span></a></h2></div>
        <!-- logo -->
        <div class="nav">
          <ul>
                      </ul>
        </div>
      </div>
    </div>  <!-- 登录后 -->
  </div>

<!-- 首页顶部广告图位置 -->
<!--二级导航-->
<div class="navigation-down">
  </div>
  
<link type="text/css" rel="stylesheet" href="qqregister/login.css">
  <div id="page-wrap">
    <div class="reg-wrap">      
      <!--设置账号-->
      <div class="reg-main">
        <div>
        <div class="article">
          <div class="mb30">
            <dl class="account-links clearfix">
              <dt class="face_img left"><img src="<?php echo $user['figureurl_qq_2']?>" height="50" width="50"></dt>
              <dd class="left"><h4>欢迎你，<span style="color:#0096e6"><?php echo $user['nickname']?></span>，您的QQ互联帐号授权成功！</h4><p style="color:#666">接下来完成简单的设置，即可用QQ互联帐号直接登录。</p></dd>
            </dl>
          </div>
          <div class="tab-menu line-b-animate clearfix" style=" margin-bottom:30px;">
            <ul>
              <li class="current"><span><a href="#" uri="tab-pannel-1">新帐号</a></span></li>
<<<<<<< HEAD
              <li class=""><span><a href="#" uri="tab-pannel-2">绑定已有帐号</a></span></li>            </ul>
          <div style="width: 42px; left: 0px; overflow: hidden;" class="line-b"></div></div>
       
          <div style="display: block;" id="tab-pannel-1">
          
           
=======
              <li><span><a href="#" uri="tab-pannel-2">绑定已有帐号</a></span></li>            </ul>
          <div class="line-b" style="width: 42px; left: 0px; overflow: hidden;"></div></div>
        <div style="display:none;">
          <form method="POST" action="/index.php?app=public&amp;mod=Register&amp;act=doOtherStep1" name="ajax_direct_bind_form" id="ajax_direct_bind_form">
            <input name="other_type" value="qzone" type="hidden">
            <input name="oauth_token" value="88F532685D3AF90A90F6401EEEE386D3" type="hidden">
            <input name="oauth_token_secret" value="C090E9C8C86CCFCBDDBE380856BE6DFF" type="hidden">
            <input name="other_uid" value="C090E9C8C86CCFCBDDBE380856BE6DFF" type="hidden">
            <input name="other_face" value="http://qzapp.qlogo.cn/qzapp/101320592/C090E9C8C86CCFCBDDBE380856BE6DFF/100" type="hidden">
            <input name="other_signature" value="" type="hidden">
            <input name="uname" value="孤狼" type="hidden">
            <input name="avatar" value="1" type="hidden">
            <input name="direct" value="1" type="hidden">
            <input class="btn-register" value="直接进入" type="submit">
          </form>
        </div>
          <div id="tab-pannel-1">
            <form model-node="normal_form" method="POST" action="/index.php?app=public&amp;mod=Register&amp;act=doOtherStep1" name="ajax_register_form" id="ajax_register_form">
            <input name="other_type" value="qzone" type="hidden">
            <input name="oauth_token" value="88F532685D3AF90A90F6401EEEE386D3" type="hidden">
            <input name="oauth_token_secret" value="C090E9C8C86CCFCBDDBE380856BE6DFF" type="hidden">
            <input name="other_uid" value="C090E9C8C86CCFCBDDBE380856BE6DFF" type="hidden">
            <input name="other_face" value="http://qzapp.qlogo.cn/qzapp/101320592/C090E9C8C86CCFCBDDBE380856BE6DFF/100" type="hidden">
            <input name="other_signature" value="" type="hidden">
>>>>>>> faacdb0d18e536d3e0a8805b1b257d6538610035
            <dl class="item">
              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>昵称：</div>
                <div class="form-row">
                  <div style="overflow:hidden;*zoom:1">
<<<<<<< HEAD
                    <input class="s-txt" event-node="uname" id="username" name="uname" autocomplete="off" value="<?php echo $user['nickname']?>" type="text" status="1">
                    <span id="s_name"></span>
=======
                    <input event-node="uname" name="uname" checkurl="/index.php?app=public&amp;mod=Register&amp;act=isUnameAvailable" autocomplete="off" value="孤狼" class="s-txt" type="text">
>>>>>>> faacdb0d18e536d3e0a8805b1b257d6538610035
                  </div>

                </div>
                <input type="hidden" id="openid"value="<?php echo $user['openid']?>">
              </dd>

              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>邮箱：</div>
                <div class="form-row" style="z-index:99">
<<<<<<< HEAD
                  <input class="s-txt" event-node="email" event-args="" name="email"  autocomplete="off" type="text" id="email">
                  <span id="s_email"></span>
=======
                  <input event-node="email" event-args="" name="email" checkurl="/index.php?app=public&amp;mod=Register&amp;act=isEmailAvailable" autocomplete="off" class="s-txt" type="text">
>>>>>>> faacdb0d18e536d3e0a8805b1b257d6538610035
                </div>
              </dd>
              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>密码：</div>
                <div class="form-row">
                    <input class="s-txt" event-node="password" name="password" value="" type="password">
                    <span id="s_password"></span>
                    <div classname="psw-state-empty" model-node="password_weight" class="psw-state-empty">
                        <div class="progress progress-green-transition"><div class="bar"></div></div>
                        <div class="txt"><span>弱</span><span>中</span><span>强</span></div>
                    </div>
                </div>
              </dd>
              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>确认密码：</div>
                <div class="form-row">
                  <input class="s-txt" event-node="repassword" name="repassword" type="password">
                  <span id="s_repassword"></span>
                </div>
              </dd>
              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>性别：</div>
                <div class="form-row">
                  <label style="line-height:36px;">
                  <input name="sex" class="s-radio" value="1" checked event-node="radio" event-args="error=请选择性别" type="radio">男</label>　
                  <label><input event-node="radio" name="sex" value="0" class="s-radio" type="radio">女</label>
                </div>
              </dd>
             
              <dd class="mt15">
                <div class="form-row actionBtn">
                  <input class="btn-register left" value="完善资料" type="button" id="perfect" >  
                                  </div>
              </dd>
            </dl>
         <script>
         
         </script>
        </div>
<<<<<<< HEAD
        <div id="tab-pannel-2" style="display: none;">
          <form method="POST" action="" id="ajax_other_bind_form" onsubmit="return ajax_bind_submit(this);">
            
=======
        <div id="tab-pannel-2" style="display:none;">
          <form method="POST" action="/index.php?app=public&amp;mod=Register&amp;act=doBindStep1" name="ajax_other_bind_form" id="ajax_other_bind_form" onsubmit="return ajax_bind_submit(this);">
            <input name="other_type" value="qzone" type="hidden">
            <input name="oauth_token" value="88F532685D3AF90A90F6401EEEE386D3" type="hidden">
            <input name="oauth_token_secret" value="C090E9C8C86CCFCBDDBE380856BE6DFF" type="hidden">
            <input name="other_uid" value="C090E9C8C86CCFCBDDBE380856BE6DFF" type="hidden">
            <input name="other_face" value="http://qzapp.qlogo.cn/qzapp/101320592/C090E9C8C86CCFCBDDBE380856BE6DFF/100" type="hidden">
            <input name="other_signature" value="" type="hidden">
>>>>>>> faacdb0d18e536d3e0a8805b1b257d6538610035
            <dl class="item">
              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>邮箱：</div>
                <div class="form-row" style="z-index:99">
                  <input class="s-txt" event-node="input_text" id="have_email" name="email" type="text">
                  <span id="s_have_email"></span>
                </div>
              </dd>
              <dd class="clearfix">
                <div class="form-tt"><i class="text-required pr5">*</i>密码：</div>
                <div class="form-row">
                  <input class="s-txt" event-node="input_text" id="have_password" name="password" value="" type="password">
                </div>
              </dd>
              <dd class="mt15">
                <div class="form-row actionBtn">
                  <input class="btn-register" value="绑定" type="submit" id="binding">
                </div>
              </dd>
            </dl>
          </form>
        </div>
        </div>
              </div>
    </div>
  </div>
  <script type="text/javascript">
    //绑定
    $("#binding").click(function(){
      var email=$("#have_email").val();
      var password=$("#have_password").val();
      var openid=$("#openid").val();
      $.ajax({
           type: "POST",
           url: "bindAccount",
           data: {email:email,password:password,qq:openid},
           success: function(msg){
             if (msg==1) {
              $("#s_have_email").html("<font color='red'>该邮箱不存在</font>")
             }else if(msg==2){
               $("#s_have_email").html("<font color='red'>该邮箱已绑定QQ</font>")
             }else if(msg==0){
               $("#s_have_email").html("<font color='green'>绑定成功</font>")
               window.location="index";
             }else if(msg==10){
               $("#s_have_email").html("<font color='red'>密码不正确</font>")
             }
           }
        });
    })
    $(function() {
        $(".tab-menu ul > li > span > a").click(function(e) {
            $(this).parent().parent().parent().children('li').removeClass('current');
            $(this).parent().parent().addClass('current');
            if ($(this).attr('uri') == 'tab-pannel-1'){
              $('#tab-pannel-1').show();
              $('#tab-pannel-2').hide();
            }else{
              $('#tab-pannel-2').show();
              $('#tab-pannel-1').hide();
            }
        });
    });
    function ajax_bind_submit(obj){
      var email = obj.email.value;
      var password = obj.password.value;
      var remember = 0;
      if ( !email ){
        ui.error('用户邮箱不能为空！');return false;
      }
      // 添加邮箱正则验证
      var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
      if (!myreg.test(email)) {
        ui.error('请输入正确的邮箱地址！');
        return false;
      }
      if ( !password ){
        ui.error('密码不能为空！');return false;
      }
      var options = {
        dataType: "json",
          success: function(txt) {
            if(1 == txt.status) {
              ui.success(txt.info);
              if(txt.data['jumpUrl']){
                setTimeout(function() {
                  location.href = txt.data['jumpUrl'];
                }, 500);
              }
            } else {
              ui.error(txt.info);
            }
          }
      };
      $(obj).ajaxSubmit(options);
      return false;
    }
  </script>
<script src="qqregister/module.js"></script>
<div class="footer-wrap">
  <div class="footer">
    <div class="login-footer">
      <div class="attend-official clearfix">
        <dl>
          <dt>
            <div class="mb15">关注我们</div>
            <a href="http://weibo.com/thinksns" target="_blank" rel="nofollow me"><i class="ico-weibo"></i>加关注</a>
            <!--<a><i class="ico-weixin"></i>加关注</a>-->
          </dt>
          <dd><img src="qqregister/55a3969ca374a.png"></dd>
        </dl>
      </div>
            <div class="copy-right">
      <p>ThinkSNS是智士软件旗下开源社交软件系统，适合企业及二次开发者基于系统进行快速二次开发，高效低成本实现各软件系统建设，商
业使用请授权，公益及个人可申请免费网页端源码使用，须保留ThinkSNS标示，遵循开源授权协议，侵权必究。商业授权，网站／APP定制开发服务可致
电官方商务部：18108035545。</p>
      <p class="f8">Powered by <a href="http://www.thinksns.com/">ThinkSNS</a>&nbsp;©2017 ZhishiSoft All Rights Reserved. </p>
      </div>
    </div>
  </div>
  <!--footer end--> 
  
</div>
<!--page end--> 
 
<!-- 统计代码-->
<div id="site_analytics_code" style="display:none;">  </div>
<script>
  //底部置底
  var head_height = $("#body-bg").css("padding-top");
  var footer_height = $(".footer-wrap").height();
  var footer_margin_top = $(".footer-wrap").css("margin-top");
  var content_height = $("#page-wrap").height();

  var window_height = $(window).height();
  var min_height = Number(window_height)-parseInt(head_height)-Number(footer_height)-parseInt(footer_margin_top)-1;
  if(content_height < min_height){
    if($("#main-wrap").length > 0){
      $("#main-wrap").css("min-height",min_height);
    }else{
      $("#page-wrap").css("min-height",min_height);
    }
  }
</script>

</div></div></div><div title="返回顶部" style="position: fixed; bottom: 89px; right: 70px; opacity: 0; cursor: pointer;" id="topcontrol"><a href="#top" class="top_stick">&nbsp;</a></div></body></html>