<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>网站配置文件</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加网站配置文件</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" style="width:800px;">
                        <form method="post" class="form-horizontal" id="webconfig" action="../admin/webAdd" >
                            <!-- 隐藏token 文件 -->
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">网站名称</label>
                                <div class="col-sm-10">
                                    <?php if(isset($config['webname'])){  ?> 
                                    <input type="text" name='webname' value="<?php echo $config['webname']; ?>" class="form-control">
                                    <?php } else { ?>
                                            <input type="text" name='webname'  class="form-control">
                                     <?php } ?>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">网站log</label>
                                <div class="col-sm-10">
                                
                                    <div id="filePicker"   >
                                        <?php if(!isset($config['log'])){ ?>
                                                上传图片
                                        <?php }else{  ?>
                                        <a href="javascript:void(0)" id="deletelog">修改图片</a>
                                        <?php }?>
                                    </div>
                                    <div style="" id="log">
                                        <input type="text" class="form-control" name="log" value="<?php echo $config['log']; ?>"> 
                                        <span class="help-block m-b-none">

                                        </span> 
                                        <div id="thelist" style="width:100px;height: 100px;;" class="uploader-list">
                                            <div id="WU_FILE_0" class="file-item thumbnail">
                                             <img style="display: block;height: auto;max-width: 100%;" src="<?php echo URL::asset("admin/bannerimg"); ?>/<?php echo $config['log']; ?>" alt="" id="img" />
                                            </div>
                                        </div>  
                                    </div>
                             </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系电话</label>
                                <?php if(isset($config['tel'])){ ?>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $config['tel']; ?>"  class="form-control" name="tel">
                                </div>
                                <?php }else{ ?>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" name="tel">
                                </div>
                                <?php } ?>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">qq</label>
                                <?php if(isset($config['tel'])){ ?>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $config['qq']; ?>" class="form-control" name='qq'>
                                </div>
                                <?php }else{ ?>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" name='qq'>
                                </div>
                                <?php } ?>
                                </div>
                            </div>
                           
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                     
                        <div class="col-sm-6">
                            <h4>还不是会员？</h4>
                            <p>您可以注册一个账户</p>
                            <p class="text-center">
                                <a href="form_basic.html"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
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

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- 自定义js 文件 -->
    <!-- 表单验证插件 -->
    <script src="validate/jQuery.Form.js"></script>
    <script src="validate/jquery.validate.js"></script>
    <!-- 配置通用错误信息语言包 -->
    <script src="validate/jquery.validate.extend.js"></script>  
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="webupload/webuploader.css">
    <!--引入JS-->
    <script type="text/javascript" src="webupload/webuploader.js"></script>
    <!-- 表单验证插件 -->
    <script src="validate/jQuery.Form.js"></script>
    <script src="validate/jquery.validate.js"></script>
    <!-- 配置通用错误信息语言包 -->
    <script src="validate/jquery.validate.extend.js"></script> 
    <script src='js/webconfig.js'></script>


    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    

</body>

</html>
