<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title> - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
   <!--  <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/login.css') }}" rel="stylesheet"> -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
       <![endif]-->

</head>

<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-12">
                <form onsubmit="return checksubmit()" method="post" action="{{URL('admin/postLogin')}}">
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md"></p>
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <input type="text" class="form-control uname" placeholder="用户名" name='username' />
                    <span class="username" style="color: red"></span>
                    <input type="password" name="password" class="form-control pword m-b" placeholder="数字、字母、特殊字符的6-10位" /><span class="password"  style="color: red"></span>
                    <a href=""></a>
                    <button class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="{{ URL::asset('admin/js/jquery.js') }}"></script>
<!-- <script src="{{ URL::asset('admin/js/md5.js') }}"></script> -->
<script>
   function checksubmit(){
        var username = $(".uname").val();
        var password = $(".pword").val();
        if(username == "" || password == ""){
            alert("不能为空");return false;
        }else{
            if(!/^[A-Za-z]+$/.test(username)){
                $(".username").html("用户名输入不正确");return false;
            }else{
                $(".username").html("");
            }
            if(!/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[.!@#$]).{6,10}$/.test(password)){
                $(".password").html("密码输入不正确");return false;
            }else{
                $(".password").html("");
            }
        }
    }
</script>
