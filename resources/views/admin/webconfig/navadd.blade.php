<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加网站导航</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
       
        <div class="row" >
            <div class="col-sm-6" style="width:100%;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" >
                        <h5>导航添加</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" action="../admin/navAdd" id="commentForm" method="POST">
                            <div class="succees">
                               
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">导航名称：</label>
                                <div class="col-sm-8">
                                    <input id="cname" name="name" minlength="2" type="text" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">导航链接地址</label>
                                <div class="col-sm-8">
                                    <input id="cemail" type="text" class="form-control" name="url" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">排序</label>
                                <div class="col-sm-8">
                                    <input id="curl" type="text" class="form-control" value="60" name="sort">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">提交</button>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>

    <!-- 表单验证插件 -->
    <script src="validate/jQuery.Form.js"></script>
    <script src="validate/jquery.validate.js"></script>
    <!-- 配置通用错误信息语言包 -->
    <script src="validate/jquery.validate.extend.js"></script>  
    <script src='js/webnav.js'></script>
</body>

</html>
