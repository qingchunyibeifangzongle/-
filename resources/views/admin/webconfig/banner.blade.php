<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 文件管理器</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="file-manager">
                        <h5>轮播图添加</h5>
                        <form action="../admin/bannerAdd" id="banner" method="POST" >
                            <ul class="folder-list" style="padding: 0">
                                <table>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-folder"></i> 图片名称： 
                                            <input type="text" name='name'>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-folder"></i> 链接地址： 
                                            <input type="text" name="url">
                                        </a>

                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-folder"></i> 图片路径： 
                                            <input type="text" name='img'  >
                                        </a>

                                    </li>
                                </table>
                            </ul>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="filePicker" stype="" >选择图片</div>
                            <button class="btn btn-primary btn-block">提    交</button>
                        </form>
                        <div class="hr-line-dashed"></div>
                            <div id="thelist" class="uploader-list"></div>  
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <style>
                .file-item{
                    width: 110px;
                }
            </style>
        <!-- 测试数据 -->
            <div id="uploader-demo">
                <!-- 隐藏token值 -->
                <!--用来存放item-->
                <div id="fileList" class="uploader-list"></div>
            </div>
        <!-- 测试数据 -->

        </div>
        <div class="col-sm-9 animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                <!-- 遍历所有的轮播图文件 -->
                <?php foreach ($data as $key => $value): ?>
                    
                    <div class="file-box" id="<?php echo $value["id"]; ?>" img="<?php echo $value['img']; ?>">
                        <div class="file">
                            <a href="file_manager.html#">
                                <span class="corner"></span>

                                <div class="image">
                                    <a href="<?php echo $value['url']; ?>">
                                        <img alt="image" class="img-responsive" src="<?php echo URL::asset("admin/bannerimg"); ?>/<?php echo $value['img']; ?>">
                                    </a>
                                </div>
                                <div class="file-name">
                                    <?php echo $value['name']; ?><br>
                                    <small>添加时间：<?php echo  date("Y-m-d H:i:s",$value['addtime']); ?></small>
                                    <br>
                                    <a href="javascript:void(0)" title="点击删除" class="delete">删除</a>
                                </div>
                            </a>

                        </div>
                    </div>
                <?php endforeach ?>
                <!-- 遍历所有的轮播图文件结束 -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>
<script src= 'js/banner.js'></script>
<!-- 加载文件上传插件 -->
<!--引入CSS-->
<link rel="stylesheet" type="text/css" href="webupload/webuploader.css">
<!--引入JS-->
<script type="text/javascript" src="webupload/webuploader.js"></script>
<!-- 表单验证插件 -->
<script src="validate/jQuery.Form.js"></script>
<script src="validate/jquery.validate.js"></script>
<!-- 配置通用错误信息语言包 -->
<script src="validate/jquery.validate.extend.js"></script>  

<script>
    $(document).ready(function () {
        $('.file-box').each(function () {
            animationHover(this, 'pulse');
        });
    });
</script>
<script>
    

</script>

</body>

</html>
