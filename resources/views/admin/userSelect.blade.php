<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 项目</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}?v=3.3.6" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css?v=4.1.0') }}" rel="stylesheet">


</head>

<body class="gray-bg">

    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>用户展示</h5>
                        <div class="ibox-tools">
                            <a href="{{URL('admin/userAdd')}}" class="btn btn-primary btn-xs">添加用户</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-1">
                                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> 刷新</button>
                            </div>
                            <form method="get" action="{{URL('admin/userSelect')}}">
                            <div class="col-md-11">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入用户名称" class="input-sm form-control" name="username">
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
                                        <th><h3>管理员ID</h3></th>
                                        <th><h3>用户名</h3></th>
                                        <th><h3>真实密码</h3></th>
                                        <th><h3>邮箱</h3></th>
                                        <th><h3>登录时间</h3></th>
                                        <th><h3>登录IP</h3></th>
                                        <th><h3>创建时间</h3></th>
                                        <th><h3>是否锁定</h3></th>
                                        <th><h3></h3></th>
                                        <th><h3  style="margin-right:20px;">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作</h3></th>
                                    </tr>
                                    @foreach ($arr as $v)
                                    <tr admin_id="{{$v['admin_id']}}">
                                        <td >{{$v['admin_id']}}</td>
                                        <td><span class="aaa">{{$v['username']}}</span></td>
                                        <td>{{$v['name']}}</td>
                                        <td>{{$v['email']}}</td>
                                        <td>{{date('Y-m-d H:i:s',$v['login_time'])}}</td>
                                        <td>{{$v['login_ip']}}</td>
                                        <td>{{date('Y-m-d H:i:s',$v['create_time'])}}</td>
                                        <td>
                                            @if ($v['is_lock'] == 0 )
                                            <a href="#">正常</a>
                                            @else
                                                <a href="#">锁定</a>
                                            @endif
                                        </td>
                                        <td></td>
                                        <td >
                                            <a href='{{URL("admin/userRoleSelect/$v[admin_id]")}}'><button class="btn btn-primary " type="button">赋角</button></a>
                                            <a href='{{URL("admin/userUpdate/$v[admin_id]")}}'><button class="btn btn-primary " type="button">修改</button></a>

                                            <button type="button" class="btn btn-outline btn-default">
                                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            <div class="btn-group">
                                {!! $arr->appends(['username'=>$username])->render() !!}
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


    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>

    <script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

    <script>
        $(".btn-default").click(function () {
            var id = $(this).parents("tr").attr("admin_id");
            var _this = $(this);
            $.ajax({
                type: "get",
                url: "{{URL('admin/userDel')}}",
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
        {{--$(document).on("click",".aaa",function(){--}}
            {{--var username = $(this).html();--}}
            {{--$(this).parent().html("<input type = 'text' name = 'username' value = '"+username+"'>");--}}
            {{--$("input").focus();--}}
            {{--$(document).on("blur","input[name = 'username']",function () {--}}
                {{--var obj = $(this);--}}
                {{--var id = $(this).parents("tr").attr("admin_id");--}}
                {{--var username = $(this).val();--}}
                {{--$.ajax({--}}
                {{--type:"get",--}}
                {{--url:"{{URL('admin/userUpdate')}}",--}}
                {{--data:{--}}
                    {{--id:id,--}}
                    {{--username:username--}}
                {{--},--}}
                {{--success: function(data){--}}
                     {{--alert(data)--}}
{{--//                    obj.parent().html("<span class='bbb'>"+bbb+"</span>");--}}
                    {{--}--}}
                {{--})--}}
            {{--})--}}
        {{--})--}}
    </script>

    </body>
</html>
