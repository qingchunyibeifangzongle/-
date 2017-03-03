<!DOCTYPE html>

<html><head>
    <meta http-equiv="Content-Type" content="textml; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <title>{{$error}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('frontend/school/css/tips.css')}}">
</head>
<body>
<div class="container">
    <div class="panel panel-default error-panel">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <div class="well" >
                <p class="tips"  style="color: {{$color}}">{{$error}}</p>
                <p class="jump">
                    页面自动 <a id="href" href="{{$url}}">跳转</a> 中 等待时间： <b id="wait">1</b>
                </p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
<html>
