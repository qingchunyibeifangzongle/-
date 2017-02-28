<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 用户添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ URL::asset('admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet">


</head>


<div class="col-sm-6" style="margin-left: 300px">
    <div >
        <div class="ibox-title">
            <h5>用户添加</h5>
        </div>
        <div class="ibox-content">
            <form class="form-horizontal m-t"onsubmit="return checksubmit()" action="{{URL('admin/userUpdatePost')}}" method="post" >
                <div class="form-group">
                    <label class="col-sm-3 control-label">用户名：</label>
                    <div class="col-sm-8">
                        <input id="username" name="username" class="form-control" type="text" placeholder="用户名为英文" value="{{$arr['username']}}">
                        <span class="username1" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">密码：</label>
                    <div class="col-sm-8">
                        <input id="password" name="password" class="form-control" type="password" placeholder="密码为字母数字"  value="{{$arr['password']}}">
                        <span class="password1" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">真实姓名：</label>
                    <div class="col-sm-8">
                        <input id="name" name="name" value="{{$arr['name']}}" class="form-control" type="text" placeholder="真实姓名为中文">
                        <span class="name1" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">邮箱：</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="admin_id" value="{{ $arr['admin_id'] }}" />
                        <input id="email" name="email" class="form-control" type="email" placeholder="邮箱必须含有@" value="{{$arr['email']}}">
                        <span class="email1" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">是否锁定</label>
                    <div class="col-sm-8">
                        <div class="radio">
                            @if($arr['is_lock'] == 0)
                                <label><input type="radio" value="0" name="is_lock" checked>正常</label>
                                <label><input type="radio" value="1" name="is_lock" >锁定</label>
                            @else
                                <label><input type="radio" value="0" name="is_lock">正常</label>
                                <label><input type="radio" value="1" name="is_lock" checked>锁定</label>
                            @endif
                        </div>
                        <span class="is_lock1" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">普通：</label>
                    <div class="col-sm-8">
                        <input class="form-control layer-date" id="create_time" placeholder="YYYY-MM-DD hh:mm:ss" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" type="text" name="create_time" value="{{date('Y-m-d H:i:s',$arr['create_time'])}}">
                        <label class="create_time1" style="color: red"></label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-3">
                        <input type="submit" value="提交" class="btn btn-primary" >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div >


<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/jquery.min.js?v=2.1.4"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/bootstrap.min.js?v=3.3.6"></script>

<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/content.js?v=1.0.0"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/validate/jquery.validate.min.js"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/validate/messages_zh.min.js"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/layer/laydate/laydate.js"></script>

<script>
    //外部js调用
    laydate({
        elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
        event: 'focus' //响应事件。如果没有传入event，则按照默认的click
    });

    //日期范围限制
    var start = {
        elem: '#start',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16 23:59:59', //最大日期
        istime: true,
        istoday: false,
        choose: function (datas) {
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#end',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(),
        max: '2099-06-16 23:59:59',
        istime: true,
        istoday: false,
        choose: function (datas) {
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);
</script>
<script>
    $("#username").blur(function () {
        var username = $("#username").val();
        if(username  == "" ){
            $(".username1").html("用户名不能为空");
            return false;
        }else{
            if(!/^[A-Za-z]+$/.test(username)){
                $(".username1").html("用户名为英文");
            }else{
                $(".username1").html("");
                return true;
            }

        }
    });
    $("#password").blur(function () {
        var password = $("#password").val();
        if(password  == "" ){
            $(".password1").html("密码不能为空");
            return false;
        }else{
            if(!/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[.!@#$]).{6,10}$/.test(password)){
                $(".password1").html("密码为英文数字特殊符号的6-10位");
            }else{
                $(".password1").html("");
                return true;
            }

        }
    });
    $("#name").blur(function () {
        var name = $("#name").val();
        if(name  == "" ){
            $(".name1").html("真实姓名不能为空");
            return false;
        }else{
            if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(name)){
                $(".name1").html("真实姓名为中文");
            }else{
                $(".name1").html("");
                return true;
            }

        }
    });
    $("#email").blur(function () {
        var email = $("#email").val();
        if(email  == "" ){
            $(".email1").html("邮箱不能为空");
            return false;
        }else{
            $(".email1").html("");
            return true;
        }
    });
    $("#create_time").blur(function () {
        var create_time = $("#create_time").val();
        if(create_time  == "" ){
            $(".create_time1").html("创建时间不能为空");
            return false;
        }else{
            if(!/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2}) (\d{1,2}):(\d{1,2}):(\d{1,2})$/.test(create_time)){
                $(".create_time1").html("判断日期类型是否为YYYY-MM-DD hh:mm:ss格式的类型");
            }else{
                $(".create_time1").html("");
                return true;
            }

        }
    });
    $("#is_lock").blur(function () {
        var is_lock = $("#is_lock").val();
        if(is_lock  == "" ){
            $(".is_lock1").html("是否锁定不能为空");
            return false;
        }else{
            $(".is_lock1").html("");
            return true;
        }
    });
    function checksubmit()
    {
        var is_lock = $("#is_lock").val();
        var create_time = $("#create_time").val();
        var email = $("#email").val();
        var name = $("#name").val();
        var password = $("#password").val();
        var username = $("#username").val();
        if(username == ""  || name == ""  || password == ""  ||is_lock == ""  || create_time == "" || email == ""){
            alert("不能提交");
            return false;
        }
        return true;
    }

</script>

</body>

</html>
