<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>友情链接展示</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/page.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>友情链接展示</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>操作人</th>
                                    <th>操作方法</th>
                                   <th>操作时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- 导航循环展示 -->
                                <?php foreach ($data as $key => $value): ?>
                                 <tr class="gradeX" id="<?php echo $value['id']; ?>">
                                    <td><?php echo $value['id']; ?></td>
                                    <td>
                                        <a href='javascript:void(0)' class="update">
                                             <?php echo $value['uid']; ?>
                                        </a >
                                    </td>
                                   <td>
                                       <a href='javascript:void(0)' class="update"  >
                                           <?php echo $value['sql']; ?>
                                       </a >
                                   </td>
                                   <td class="center update " navname="sort">
                                        <a href='javascript:void(0)' class="update" >
                                           <?php echo date("Y-m-d H:i:s ",$value['time']); ?>
                                        </a >
                                   </td> 
                                   <td class="center">
                                       <a href="javascript:void(0)" class="delete">删除</a>
                                   </td>  
                                </tr>
                                <?php endforeach ?>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <!-- 导航循环结束 -->
                            </tbody>
                        </table>
                        <div class="dataTables_paginate " id="DataTables_Table_0_paginate">
                            <?php echo $page; ?>
                        </div>
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
    <!-- 即点即改js 文件 -->
    <script src='js/blogrollshow.js'></script>
    
</body>

</html>
