<!DOCTYPE html>
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    <link rel="icon" href="http://www.youzischool.com/Public/images/icon/smalllogo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>发布二手商品-柚子校园</title>
    <link type="text/css" href="files/pintuer.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="files/init.css">
    <link rel="stylesheet" href="files/iconfont_002.css" type="text/css">
    <link rel="stylesheet" href="files/pager.css" type="text/css">
    <meta name="keywords" content="校园二手,校园二手市场,大学二手,大学二手市场,大学生二手,大学二手网站,校园二手网站,校园二手app,桂林二手,桂林校园二手">
    <meta name="description" content="柚子校园网是由柚子校园团队开发的一个高校校园综合性的二手交易平台，校园二手网、大学生二手市场、大学生二手网，覆盖多所大学的大学生。涵盖二手手机、二手自行车、二手电动车、二手教材、二手书、二手电脑、二手数码产品等校园二手信息，满足大学生校园内的二手交易、二手求购的需求。买卖二手，尽在柚子校园">
    <link type="text/css" rel="stylesheet" href="files/iconfont.css">
    <link rel="stylesheet" type="text/css" href="files/style.css">
    <link rel="stylesheet" type="text/css" href="files/webuploader.css">
    <script src="files/hm.js"></script><script src="files/jquery-1.js"></script>
    <script src="files/pintuer.js"></script>
    <script src="files/layer.js"></script><link rel="stylesheet" href="files/layer.css" id="layui_layer_skinlayercss" style="">
    <script type="text/javascript" src="files/common.js"></script>
    <script type="text/javascript" src="files/superslide.js"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/files/webuploader.js') }}"></script>
    <script src="files/thumbupload.js"></script>
    <script src="files/uploadfile.js"></script>
    <script type="text/javascript" src="files/jquery.js"></script>
    <script type="text/javascript">
        ThinkPHP = window.Think = {
            "ROOT"   : "",
            "APP"    : "",
            "PUBLIC" : "/Public",
            "DEEP"   : "/",
            "VAR"    : ["m", "c", "a"],
            "MODEL"  : ["2", "1", ""],
        }
        var publicUrl = "/Public";
        var curCityId = "450300";
        var curCityName = "桂林市";

    </script>
    <script>
        /*百度统计代码*/
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?631792055f974af19205e0193b81fcb4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script src="files/think.js"></script>
</head>
<body>

<!--右侧图标-->
<style>
    li{ list-style:none}
    #rightButton{ position:fixed; _position:absolute; top:360px; right:0; z-index:999999; display:block;}
    #right_ul{ position:relative;}
    #right_qq{  background:url(/Public/plugins/helpfixed/images/7_03.png) no-repeat; width:68px; height:74px; }
    #right_tel{ background:url(/Public/plugins/helpfixed/images/7_05.png) no-repeat; width:68px; height:77px; }
    #right_tip{  background:url(/Public/plugins/helpfixed/images/flag_right.png) no-repeat; width:252px; height:91px; position:absolute; right:70px; top:-10px; display:none; z-index:999999; }
    .flagShow_p1{ float:left; margin-left:15px; _margin-left:5px; font-size:18px; line-height:91px;}
    .flagShow_p2{ float:left; margin-left:10px; _margin-left:5px; font-size:18px;  color:#FA7C00;}
    .flagShow_p2 a{ display:block; margin: 20px 0 5px 12px; line-height:0;}
    .flagShow_p2 span{ margin: 0 0 0 14px; }
    .flag_qq{ display:none;}
    #backToTop{ position:fixed; _position:absolute; bottom:20px; right:0; z-index:999999; display:none; }
    a.backToTop_a{  background:url(/Public/plugins/helpfixed/images/7_08.png) no-repeat; width:68px; height:79px; display:block; }
    a.backToTop_a:active{  background:url(/Public/plugins/helpfixed/images/7_11.png) no-repeat; }
    .line91{ line-height:91px; }
</style>
<div id="rightButton" style="right: 0px;">
    <ul id="right_ul">
        <li id="right_qq" class="right_ico" show="qq" hide="tel"></li>
        <li id="right_tel" class="right_ico" show="tel" hide="qq"></li>
        <li id="right_tip" class="png" style="top: 65px; display: none;">
            <p class="flagShow_p1 flag_tel" style="display: block;">电话联系</p>
            <p class="flagShow_p2 flag_tel line91" style="display: block;">18176406629</p>
            <p class="flagShow_p1 flag_qq" style="display: none;">QQ联系</p>
            <p class="flagShow_p2 flag_qq" style="display: none;">
                <a href="tencent://message/?uin=307242951&amp;Site=QQ%E4%BA%A4%E8%B0%88&amp;Menu=yes" target="_blank">
                    <img src="files/qiyeQQ.png" border="0"></a> <span>QQ:307242951</span> </p>
        </li>
    </ul>
</div>
<div id="backToTop" style="display: block;">
    <a href="javascript:;" onfocus="this.blur();" class="backToTop_a png"></a>
</div>
<script type="text/javascript">
    $(document).ready(function(e) {
        $("#rightButton").css("right", "0px");

        var button_toggle = true;
        $(".right_ico").on("mouseover", function(){
            var tip_top;
            var show= $(this).attr('show');
            var hide= $(this).attr('hide');
            tip_top = show == 'tel' ?  65 :  -10;
            button_toggle = false;
            $("#right_tip").css("top" , tip_top).show().find(".flag_"+show).show();
            $(".flag_"+hide).hide();

        }).on("mouseout", function(){
            button_toggle = true;
            hideRightTip();
        });


        $("#right_tip").on("mouseover", function(){
            button_toggle = false;
            $(this).show();
        }).on("mouseout", function(){
            button_toggle = true;
            hideRightTip();
        });

        function hideRightTip(){
            setTimeout(function(){
                if( button_toggle ) $("#right_tip").hide();
            }, 500);
        }

        $("#backToTop").click(function(){
            var _this = $(this);
            $('body,html').animate({scrollTop:0},1000,'swing',function(){_this.hide()});
        });

        $(window).scroll(function(){
            var htmlTop = $(document).scrollTop();
            if( htmlTop > 0){
                $("#backToTop").show();
            }else{
                $("#backToTop").hide();
            }
        });
    });
</script>
<!--[if lte IE 6]>
<script src="js/phone/PNG.js" type="text/javascript"></script>
<script>
    if( typeof(PNG) == 'object') PNG.fix('.png');
</script>
<![endif]-->


<link rel="stylesheet" href="files/header.css" type="text/css">
<div class="header header_change">
    <a href="http://www.youzischool.com/index/index"><div class="logo ring-hover"><img class="oniicon" src="files/56d79224723a5.png"></div></a>
    <div class="nav clearfix">
        <ul class="nav_list">
            <a class="nav_link" href="http://www.youzischool.com/index/index">
                <li class="nav_item">
                    首页
                </li>
            </a>
            <a class="nav_link " href="http://www.youzischool.com/sale/goods">
                <li class="nav_item
                                    ">
                    二手物品
                </li>
            </a>
            <a class="nav_link" href="http://www.youzischool.com/buy/index">
                <li class="nav_item
                                    ">
                    二手求购
                </li>
            </a>
            <a target="_blank" class="nav_link" href="http://www.youzischool.com/other/appdown">
                <li class="nav_item">
                    APP下载
                </li>
            </a>
        </ul>
    </div>
    <div class="button-group dropdown">
        <button type="button" class="button dropdown-toggle"> 柚子 <span class="downward"></span></button>
        <ul class="drop-menu headdropdown">
            <li><a href="http://www.youzischool.com/other/joinus">加入我们</a></li>
            <li><a href="http://www.youzischool.com/other/applyschool">开通学校</a></li>
            <li><a href="http://www.youzischool.com/other/contact">联系我们</a></li>
            <!-- <li><a  href="/other/mknow">正在开发</a></li> -->
        </ul>
    </div>
    <div class="logreg">
        <p class="right">
        </p><p class="loginin">
            <a class="tips headpic" data-toggle="hover" data-place="bottom" title="" target="_blank" href="http://www.youzischool.com/user/mkhead">
                <img src="files/default4.png">
            </a>
            <a class="info badge-corner" href="http://www.youzischool.com/user/info">个人中心</a>                    <a class="line">|</a>
            <a class="logout" href="http://www.youzischool.com/logreg/logout">退出</a>
        </p>
        <p></p>
    </div>
    <div class="searchbox">
        <div class="form">
            <span class="icon-search serach-icon"></span>
            <input name="keywords" id="serachWord" class="search" placeholder="搜索你想要的商品" type="serach">            <div onclick="toSearch()" class="submit" value="搜索">搜索</div>
        </div>
        <!-- <div class="hotword">
            <span class="hot">热门：</span>
            <a href="/sale/item/type/2">
                <span class="word1">手机</span>
            </a>
            <a href="/sale/item/type/3">
                <span class="word1">电脑</span>
            </a>
            <a href="/sale/item/type/7">
                <span class="word1">书籍教材</span>
            </a>
        </div> -->
    </div>
</div>




<link rel="stylesheet" href="files/sale.css" type="text/css">
<div class="wrap">
    <div class="release clearfix">
        <div class="top-panel">
            发布商品
        </div>
        <div class="somebtn clearfix">
            <div class="l-btn">
                <span class="active" data-target="goodstable">商品信息</span>
                <span data-target="goodspic" class="">商品相册</span>
            </div>
            <div class="help">
                <span></span>
                <span>需要帮助？</span>
            </div>
        </div>
        <div class="goods-content clearfix">
            <form action="/home/release/dosale" method="post" class="goodsform changetab form-tips" id="goodsform">
                <div id="goodstable" style="display: block;">
                    <table class="goodstable table">
                        <tbody>
                        <tr>
                            <th width="13%">
                                商品标题
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="title" placeholder="请输入商品标题" name="title" data-validate="required:同学，标题是必填内容哦" type="text">
                                    </div>
                                </div>
                            </td>
                            <input name="thumb" value="" id="thumbpic" type="hidden">
                            <td rowspan="8" class="out-pic-box" width="50%">
                                <div class="pre-pic" id="thumb">
                                </div>
                                <div class="out-pic">
                                    <span savedir="salebuy" uploadheight="200" uploadwidth="200" inputname="thumb" class="choosepic thumbPicker webuploader-container"><div class="webuploader-pick">上传商品封面照片（限一张）</div><div id="rt_rt_1ba94o6gg11cbos41dse8td1lpm1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 42px; overflow: hidden; bottom: auto; right: auto;"><input name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*" type="file"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></label></div></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                商品价格
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="price" placeholder="请输入商品价格" name="price" data-validate="required:同学，价格是必填内容哦,plusinteger:金额只能为整数" type="text">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                交易地点
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="address" placeholder="请输入商品交易地点" name="address" data-validate="required:同学，交易地点是必填内容哦" type="text">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                所在学校
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <select class="input" name="school" id="school" data-validate="required:学校不能为空！">
                                            <option value="" selected="selected">点击展开学校列表</option>
                                            <option value="1">桂林电子科技大学</option><option value="2">广西师范大学</option><option value="3">桂林理工大学</option><option value="4">桂林航天工业学院</option><option value="5">桂林理工大学博文管理学院</option><option value="6">广西师范大学漓江学院</option><option value="7">桂林医学院</option><option value="8">桂林旅游学院</option><option value="9">桂林师范高等专科学校</option><option value="10">江西中医药大学</option><option value="13">江西中医药大学科技学院</option><option value="14">南昌大学</option><option value="15">东华理工大学</option><option value="20">桂林电子科技大学信息科技学院</option><option value="29">广西理工职业技术学院</option><option value="36">陕西工业职业技术学院</option><option value="37">华东交通大学</option><option value="43">江西理工大学(南昌校区)</option><option value="52">青岛港湾职业技术学院</option><option value="54">华侨大学</option><option value="57">江西财经大学(蛟桥校区)</option><option value="73">四川传媒学院</option><option value="76">福建农林大学东方学院</option><option value="79">四川交通职业技术学院</option><option value="93">天津理工大学</option><option value="100">江西工程学院</option><option value="102">北京协和医学院</option><option value="105">宣城职业技术学院</option><option value="120">青海民族大学</option><option value="128">南华大学</option>                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                所属分类
                            </th>
                            <td width="37%">
                                <div class="form-group">
                                    <div class="field">
                                        <select class="input" name="type" id="item" data-validate="required:分类不能为空！">
                                            <option value="" selected="selected">点击展开分类列表</option>
                                            <option value="1">代步工具</option>
                                            <option value="2">手机</option>
                                            <option value="3">电脑</option>
                                            <option value="4">数码</option>
                                            <option value="5">电器</option>
                                            <option value="6">衣鞋帽伞</option>
                                            <option value="7">书籍教材</option>
                                            <option value="8">体育健身</option>
                                            <option value="9">乐器</option>
                                            <option value="10">自行设计</option>
                                            <option value="11">其他</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                是否可刀
                            </th>
                            <td width="37%">
                                <div class="button-group radio"> <label class="button active"> <input name="daofou" value="1" checked="checked" type="radio"><span class="icon icon-check"></span> 可以小刀 </label> <label class="button"> <input name="daofou" value="0" type="radio"><span class="icon icon-times"></span> 不可小刀 </label> </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                货主手机
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="tel" placeholder="请输入您的手机号" name="tel" data-validate="mobile:手机号码不正确！" type="text">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                货主QQ
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="qq" placeholder="请输入您的QQ" name="qq" value="605474582" type="text">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                商品详情
                            </th>
                            <td colspan="2" width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <textarea class="detail" type="text" placeholder="请输入商品详情" name="detail" id="detail" data-validate="required:同学，商品详情是必填内容哦"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="releasebtn">
                        <span class="submit releasegoods">确认发布</span>
                        <a href="javascript:history.go(-1)"><span class="return">返回</span></a>
                    </div>
                </div>
                <div id="goodspic" style="display: none;">
                    <div id="wrapper">
                        <div id="container">
                            <div id="uploader">
                                <div class="queueList">
                                    <div id="dndArea" class="placeholder">
                                        <div id="filePicker" class="webuploader-container"><div class="webuploader-pick">选择图片</div><div id="rt_rt_1ba94o6h119q91sjc33lm1q17v45" style="position: absolute; top: 20px; left: 0px; width: 100%; height: 42px; overflow: hidden; bottom: auto; right: auto;"><input name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*" type="file"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></label></div></div>
                                    </div>
                                    <ul class="filelist"></ul>
                                </div>
                                <div class="statusBar" style="display:none">
                                    <div class="progress" style="display: none;">
                                        <span class="text">0%</span>
                                        <span class="percentage" style="width: 0%;"></span>
                                    </div>
                                    <div class="info">共0张（0B），已上传0张</div>
                                    <div class="btns">
                                        <div id="filePicker2" class="webuploader-containe webuploader-container"><div class="webuploader-pick">继续添加</div><div id="rt_rt_1ba94o6h7493u65vlvgi91kb8" style="position: absolute; top: 0px; left: 0px; width: 1px; height: 1px; overflow: hidden;"><input name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*" type="file"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></label></div></div><div class="uploadBtn state-finish state-pedding">开始上传</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    var UPLOADWIDTH = 1000;
    var UPLOADHEIGHT = 1000;
    var SAVEDIR = 'salebuy';
    var MAXNUM = 4;

    //切换商品信息填写和商品相册
    $(function(){
        /**
         * 加在dom树之后再隐藏商品相册部分，如果通过css隐藏，添加图片按钮不起作用
         * 亡灵叙曲 2016-01-27
         */
        $('#goodspic').hide();
        $('.l-btn span').click(function(){
            $('.l-btn span').removeClass('active');
            $(this).addClass('active');
            var target = $(this).attr('data-target');
            $('#goodstable').stop().hide();
            $('#goodspic').stop().hide();
            $('#' + target).stop().show();
        })
        /**
         * 提交表单
         * 检测有没有上传图片
         */
        $('.releasegoods').click(function(){
            if($("#thumbpic").val()==""){
                layer.msg( '请上传或等待封面上传完成再发布！', {icon: 5});
                return ;
            }
            if($("#thumbpic").val()=="undefinedundefined"){
                layer.confirm('商品封面数据有误，建议刷新页面重新上传商品相册！', {icon: 3, title:'警告'}, function(index){
                    layer.close(index);
                    location.reload();
                });
                return ;
            }
            if(!($('.filelist li input').length >= 1)){
                $('#goodstable').stop().hide();
                $('#goodspic').stop().show();
                layer.msg( '请上传或等待相册上传完毕再发布！', {icon: 5});
                return ;
            }
            for(i=1; i<4; i++){
                if($("#image"+i).val()==""||$("#image"+i).val()=="undefinedundefined"){
                    layer.confirm('商品相册数据有误，建议刷新页面重新上传商品相册！', {icon: 3, title:'警告'}, function(index){
                        layer.close(index);
                        location.reload();
                    });
                    return ;
                }
            }
            $('#goodsform').submit();
        })
    })

</script>
<link rel="stylesheet" href="files/footer.css" type="text/css">
<div class="footer">
    <div class="footerNav">
        <ul class="fn">
            <li><span class="fnIco"></span><a href="http://www.youzischool.com/other/contact">关于我们</a></li>
            <li><span class="fnIco"></span><a href="http://www.youzischool.com/other/joinus">加入我们</a></li>
            <li><span class="fnIco"></span><a href="http://www.youzischool.com/sale/goods">校内二手</a></li>
            <li><span class="fnIco"></span><a href="http://www.youzischool.com/buy/index">校内求购</a></li>
            <!-- <li><span class="fnIco"></span><a href="/shop/index">柚子商城</a></li> -->
            <li><span class="fnIco"></span><a href="http://www.youzischool.com/logreg/login">我要登录</a></li>
            <li><span class="fnIco"></span><a href="http://www.youzischool.com/logreg/register">我要注册</a></li>
        </ul>
    </div>
    <div class="footerMain">
        <a href="http://www.youzischool.com/index/index" class="fLogo" style="background: url(/Uploads/web/2016-03-03/56d792288071d.png);">柚子校园-专注校园二手</a>
        <div class="fContact">
            <h3 class="fct">联系我们 / <span>contact us</span></h3>
            <p>Q群：433981852</p>
            <p>Q Q：307242951</p>
            <p>地址：广西桂林电子科技大学东区</p>
        </div>
        <div class="fEwm">
            <img alt="微信公众号" src="files/56d792395ebe9.png" height="106" width="106">
            <p>关注微信公众平台</p>
        </div>
        <div class="fCall">
            <p class="callN">TEL:18176406629</p>
            <span class="kfT">24小时在线客服</span>
            <a class="fxl" href="http://weibo.com/u/276233227/" target="_blank">新浪微博</a>
            <a class="fqq" href="tencent://message/?uin=307242951&amp;Site=QQ%E4%BA%A4%E8%B0%88&amp;Menu=yes" target="_blank">客服QQ</a>
            <a class="fwx tips" data-toggle="hover" data-place="top" data-image="/Uploads/web/2016-03-03/56d792395ebe9.png" title="">微信二维码</a>
        </div>
    </div>
    <p class="copyright">版权所有 © All Rights Reserved，桂ICP备15000254号-1</p>
</div>

</body></html>