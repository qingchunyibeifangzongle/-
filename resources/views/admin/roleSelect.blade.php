<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 项目</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="{{ URL::asset('admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>用户展示</h5>
                        <div class="ibox-tools">
                            <a href="{{URL('admin/roleAdd')}}" class="btn btn-primary btn-xs">添加角色</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-1">
                                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> 刷新</button>
                            </div>
                            <form method="get" action="{{URL('admin/roleSelect')}}">
                            <div class="col-md-11">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入角色名称" name="rule_name" class="input-sm form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> 搜索</button>
                                    </span>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th style="width:350px;"><h3>角色ID</h3></th>
                                        <th style="width:350px;"><h3>角色名</h3></th>
                                        <th style="width:350px;"><h3>排序</h3></th>
                                        <th style="width:350px;"><h3>操&nbsp;&nbsp;&nbsp;&nbsp;作</h3></th>
                                    </tr>
                                    @foreach ($arr as $v)
                                    <tr id="{{$v['rule_id']}}">
                                       <td>{{$v['rule_id']}}</td>
                                       <td>{{$v['rule_name']}}</td>
                                       <td>{{$v['rule_sort']}}</td>
                                        <td>
                                            <a href='{{URL("admin/rolePowerSelect/$v[rule_id]")}}'><button class="btn btn-primary " type="button">赋权</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                                            <button type="button" class="btn btn-outline btn-default">
                                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            <div class="btn-group">
                                {!! $arr->appends(['rule_name'=>$rule_name])->render() !!}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/content.js?v=1.0.0"></script>

  <script>
        $(".btn-default").click(function () {
            var id = $(this).parents("tr").attr("id");
            var _this = $(this);
            $.ajax({
                type: "get",
                url: "{{URL('admin/roleDel')}}",
                data: {id:id},
                success: function(msg){
                    var data = eval("("+msg+")");
                    if(data.status == 1){
                        alert("删除成功");
                        _this.parents("tr").hide();
                    }else{
                        alert("删除失败");
                        history.go(0);
                    }
                }
            });
        })
    </script>


    

    </body>
</html>
