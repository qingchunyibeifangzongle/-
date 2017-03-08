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
    <script src="{{ URL::asset('frontend/files/hm.js') }}"></script><script src="{{ URL::asset('frontend/files/jquery-1.js') }}"></script>
    <script src="{{ URL::asset('frontend/files/pintuer.js') }}"></script>
    <script src="{{ URL::asset('frontend/files/layer.js') }}"></script><link rel="stylesheet" href="files/layer.css" id="layui_layer_skinlayercss" style="">
    <script type="text/javascript" src="files/common.js"></script>
    <script type="text/javascript" src="files/superslide.js"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/files/webuploader.js') }}"></script>
    <script src="{{ URL::asset('frontend/files/thumbupload.js') }}"></script>
    <script src="{{ URL::asset('frontend/files/uploadfile.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/files/jquery.js') }}"></script>
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

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{URL::asset('frontend/files/think.js')}}"></script>
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
            <form action="{{URL('frontend/goodsAdd')}}" method="post" class="goodsform changetab form-tips" id="goodsform"  enctype="multipart/form-data">
                {{csrf_field()}}
                <div id="goodstable" style="display: block;">
                    <table class="goodstable table">
                        <tbody>
                        <tr>
                            <th width="13%">
                                商品名称
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="title" placeholder="请输入商品标题" name="goods_name" data-validate="required:同学，标题是必填内容哦" type="text">
                                    </div>
                                </div>
                            </td>
                            {{--<input name="thumb" value="" id="thumbpic" type="hidden">--}}
                            <td rowspan="8" class="out-pic-box" width="50%">
                                <div class="pre-pic" id="thumb">
                                </div>
                                {{--<div class="out-pic">--}}
                                    {{--<span savedir="salebuy" uploadheight="200" uploadwidth="200" inputname="thumb" class="choosepic thumbPicker webuploader-container">--}}
                                        {{--<div class="webuploader-pick">上传商品封面照片（限一张）</div>--}}
                                        {{--<div id="rt_rt_1ba94o6gg11cbos41dse8td1lpm1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 42px; overflow: hidden; bottom: auto; right: auto;">--}}
                                            {{--<input name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*" type="file">--}}
                                            {{--<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;">--}}

                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</span>--}}
                                {{--</div>--}}
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                商品价格
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="price" placeholder="请输入商品价格" name="goods_price" data-validate="required:同学，价格是必填内容哦,plusinteger:金额只能为整数" type="text">
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
                                        <input class="address" placeholder="请输入商品交易地点" name="deal_place" data-validate="required:同学，交易地点是必填内容哦" type="text">
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
                                        <select class="input" name="school_id" id="school" data-validate="required:学校不能为空！">

                                            <option value="" selected="selected">点击展开学校列表</option>
                                            @foreach($schoolName as $v)
                                            <option value="{{$v['school_id']}}">{{$v['school_name']}}</option>
                                            @endforeach
                                        </select>
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
                                        <select class="input p_id" name="p_id" id="item" data-validate="required:分类不能为空！" style="width: 150px;float: left">
                                            <option value="" selected="selected">点击展开分类列表</option>
                                            @foreach($parentType as $v)
                                            <option value="{{$v['type_id']}}">{{$v['type_name']}}</option>
                                            @endforeach
                                        </select>
                                        <select class="input c_id" name="type_id" id="item"  style="width: 150px; float: left" >
                                            <option value="" selected="selected">点击展开分类列表</option>
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
                                <div class="button-group radio"> <label class="button active"> <input name="xiaodao" value="0" checked="checked" type="radio"><span class="icon icon-check"></span> 可以小刀 </label> <label class="button"> <input name="xiaodao" value="1www.baidu.om" type="radio"><span class="icon icon-times"></span> 不可小刀 </label> </div>
                            </td>
                        </tr>
                        <tr>
                            <th width="13%">
                                货主手机
                            </th>
                            <td width="37%">
                                <div class="psssword item form-group">
                                    <div class="field">
                                        <input class="tel" placeholder="请输入您的手机号" name="phone" data-validate="mobile:手机号码不正确！" type="text">
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
                                        <textarea class="detail" type="text" placeholder="请输入商品详情" name="goods_intro" id="detail" data-validate="required:同学，商品详情是必填内容哦"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="releasebtn">
                        {{--<span class="submit releasegoods">确认发布</span>--}}
                        <button  style="height: 30px; width: 100px; background-color: #00AA88"><font color="white"size="3px;">确认发布</font></button>
                        <a href="javascript:history.go(-1)"><button class="return "  style="height: 30px; width: 100px; background-color: #00AA88"><font color="white"size="3px;">返回</font></button></a>
                    </div>
                </div>
                <div id="goodspic" style="display: none;">
                    <div id="wrapper">
                        <div id="container">
                            <div id="uploader">
                                <div class="queueList" style="height: 200px; width: 800px;">
                                    <div class="box">
                                    <input type="file" style="margin-top: 20px;" class="myfile" name="goods_img[]">
                                    <button class="but"  style="height: 30px; width: 100px; background-color: #00AA88" onClick="submitForm()"><font color="white"size="3px;">添加一行</font></button>
                                    <button class="del" style="height: 30px; width: 100px; background-color: #00AA88" onClick="submitForm()"><font color="white"size="3px;">减少一行</font></button>
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
<script>
    $(function(){
        $('.p_id').change(function(){
            var type_id = $(this).val();
            $.get('{{URL('frontend/getTypeInfo')}}',{type_id:type_id},function(msg){
//                var str = "<select class='input c_id' name='type_id' id='item' data-validate='required:分类不能为空！' style='width: 150px; float: left' ><option value=''>点击展开分类列表</option></select>";
//                $(".c_id").html(str);
                $(".c_id").html("<option value=''>点击展开分类列表</option>");
                $.each(msg, function(i, item) {
                    $(".c_id").append("<option value='" + item.type_id + "'>" + item.type_name + "</option>");
                });
            },'json')
        });

        var str='';
        str="<div class='box'><input type='file' style='margin-top: 20px;' class='myfile' name='goods_img[]'> " +
        "<button class='but' onClick='submitForm()'  style='height: 30px; width: 100px; background-color: #00AA88'><font color='white'size='3px;'>添加一行</font></button> " +
        "<button class='del' onClick='submitForm()'  style='height: 30px; width: 100px; background-color: #00AA88'><font color='white'size='3px;'>减少一行</font></button></div> " ;

        $(document).on('click','.but',function(){
            $(this).parent().after(str)
        })
        $(document).on('click','.del',function(){
            $(this).parent().remove();
        })
    })
</script>
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
</body></html>