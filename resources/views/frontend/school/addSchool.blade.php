<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    {{--<link rel="icon" href="/Public/images/icon/smalllogo.png" type="image/x-icon"/>--}}
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1,initial-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <title>开通学校-柚子校园</title>
    <link type="text/css" href="{{URL::asset('frontend/school/css/pintuer_1.css')}}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('frontend/school/css/init_1.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/school/css/iconfont_2.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::asset('frontend/school/css/pager_1.css')}}" type="text/css" />
    <meta name="keywords" content="校园二手,校园二手市场,大学二手,大学二手市场,大学生二手,大学二手网站,校园二手网站,校园二手app,桂林二手,桂林校园二手">
    <meta name="description" content="校园二货网是一个高校校园综合性的二手交易平台">
    <link type="text/css" rel="stylesheet" href="">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/school/css/style_1.css')}}" />
    <script src="{{URL::asset('frontend/school/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{URL::asset('frontend/school/js/pintuer.js')}}"></script>
    <script src="{{URL::asset('frontend/school/js/layer.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('frontend/school/js/common.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('frontend/school/js/superslide.2.1.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('frontend/school/js/jquery.lazyload.js')}}"></script>
<script src="{{URL::asset('frontend/school/js/think.js')}}"></script>
</head>
<body>


<!--[if lte IE 6]>
<script src="{{URL::asset('frontend/school/js/phone/PNG.js')}}" type="text/javascript"></script>
<script>
        if( typeof(PNG) == 'object') PNG.fix('.png');
    </script>
<![endif]-->

<link type="text/css" rel="stylesheet" href="{{URL::asset('frontend/school/css/applyschool.css')}}">
<div class="container wx-container">
<!--    <div class="open-header">
        <div class="open-mid-header">
            <div class="open-logo">
                <a href="javascript:;"></a>
            </div>
        </div>
    </div>-->
    <div class="main center">
        <div class="qiugou-box wx-box">发布求购</div>
        <div class="form-wr">
            <form action="{{URL('frontend/addSchool')}}" method="post">
                {{csrf_field()}}
                <div class="form-must-wr">
                    <div class="form-item l goods-title  form-group">
                        <div class="form-key"><span>学校名称</span></div>
                        <div class="form-value field">
                            <div style="background-color: rgb(246, 249, 249); border: 1px solid rgb(208, 224, 226);" class="form-input-wr">
                                <input id="school" name="school_name" type="text"  data-validate="required:总要留下个学校把！" placeholder="请填写学校名称">
                            </div>
                        </div>
                    </div>
                    <div class="form-item l goods-desc  form-group">
                        <div class="form-key"><span>您的姓名</span></div>
                        <div class="form-value field">
                            <div style="background-color: rgb(246, 249, 249); border: 1px solid rgb(208, 224, 226);" class="form-input-wr">
                                <input id="code" name="username" type="text" data-validate="required:留下姓名吧" placeholder="请填写您的姓名">
                            </div>
                        </div>
                    </div>
                    <div class="form-item l goods-title  form-group">
                        <div class="form-key"><span>学校归属</span></div>
                        <div class="form-value field change">
                            <div style="background-color: rgb(246, 249, 249); border: 1px solid rgb(208, 224, 226);" class="form-input-wr">
                                <select name="province" id="" style="width:100px;" class="province">
                                    <option value="">请选择</option>
                                    @foreach($province as $v)
                                    <option value="{{$v['region_id']}}">{{$v['region_name']}}</option>
                                    @endforeach
                                </select>
                                <select name="city" id="" style="width:100px;" class="city">
                                    <option value="">请选择</option>
                                </select>
                                <select name="area" id="" style="width:100px;" class="area">
                                    <option value="">请选择</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-item l goods-title  form-group">
                        <div class="form-key"><span>联系方式</span></div>
                        <div class="form-value field">
                            <div style="background-color: rgb(246, 249, 249); border: 1px solid rgb(208, 224, 226);" class="form-input-wr">
                                <input id="email" name="school_contact" type="text" placeholder="请填写您的手机号，QQ或者邮箱"
                                       data-validate="required:为什么不留个联系方式呢！">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="form-submit apply-in" id="apply-in" value="申请接入">
                <div class="wrap-wxintro">
                    <p class="title">说明</p>
                    <p>1、联系方式必须为本人真实使用联系号码</p>
                    <p>2、申请审核时间不超过24小时，请耐心等待</p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    $(function(){
       $('.province').change(function(){
           var region_id = $('.province').val();
           $.get('{{URL('admin/getRegion')}}',{id:region_id},function(msg){
               $(".city").html("<option value=''>请选择</option>");
               $.each(msg.msg, function(i, item) {
                   $(".city").append("<option value='" + item.region_id + "'>" + item.region_name + "</option>");
               });
           },'json')
       });

        $('.city').change(function(){
            var region_id = $('.city').val();
            $.get('{{URL('admin/getRegion')}}',{id:region_id},function(msg){
                $(".area").html("<option value=''>请选择</option>");
                $.each(msg.msg, function(i, item) {
                    $(".area").append("<option value='" + item.region_id + "'>" + item.region_name + "</option>");
                });
            },'json')
        });

        $('#apply-in').click(function(){
            var region_id = $('.city').val();
            if(region_id == ''){
                var str = "<div class='input-help'> <ul> <li><font color='red'>请填写完整地区信息</font></li> </ul> </div>";
                $('.change').append(str);
                return false;
            }
        });

    });
</script>
</html>