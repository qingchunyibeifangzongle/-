<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>导航展示</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>导航管理</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>排序</th>
                                    <th>导航名称</th>
                                    <th>链接地址</th>
                                   <th>排序</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- 导航循环展示 -->
                                <?php foreach ($data as $key => $value): ?>
                                <tr class="gradeX" id="<?php echo $value['id']; ?>">
                                    <td><?php echo $value['id']; ?></td>
                                    <td>
                                        <a href='javascript:void(0)' class="update" title="点击进行修改">
                                             <?php echo $value['name']; ?>
                                        </a >
                                        <span style="display:none; ">
                                            <input type="text" name='name' navname="name" class="confirmsave">
                                        </span>
                                    </td>
                                   <td>
                                       <a href='javascript:void(0)' class="update" title="点击进行修改"  >
                                           <?php echo $value['url']; ?>
                                       </a >
                                       <span style="display:none; ">
                                            <input type="text" name="url" navname="url" class="confirmsave" >
                                        </span>
                                   </td>
                                   <td class="center update " navname="sort">
                                        <a href='javascript:void(0)' class="update" title="点击进行修改" >
                                           <?php echo $value['sort']; ?>
                                        </a >
                                        <span style="display:none; ">
                                             <input type="text" name='sort' navname="sort" class="confirmsave">
                                        </span>
                                   </td>
                                   <td class="center">
                                       <a href="javascript:void(0)" class="delete" title="点击删除">删除</a>
                                   </td>  
                                </tr>
                                <?php endforeach ?>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <!-- 导航循环结束 -->
                            </tbody>
                        </table>

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
    <!-- 即点即改js 文件 -->
    <script src='js/nav.js'></script>

</body>

</html>
