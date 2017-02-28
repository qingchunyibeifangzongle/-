<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>权限添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ URL::asset('admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css?v=4.1.0') }}" rel="stylesheet">

</head>


    <div class="col-sm-6" style="margin-left: 300px">
<div >
    <div class="ibox-title">
        <h5>权限添加</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal m-t" id="signupForm" onsubmit="return checksubmit()" action="{{URL('admin/powerAddPost')}}" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label">权限名</label>
                <div class="col-sm-8">
                    <input id="node_name" name="node_name" class="form-control" type="text" placeholder="权限名为中文">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <span id="node_name1" style="color: red"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">路由</label>
                <div class="col-sm-8">
                    <input id="node_route" name="node_route" class="form-control" type="text" placeholder="例如admin/userAdd">
                    <span id="node_route1" style="color: red"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-3">
                    <button class="btn btn-primary"  id="submit" type="submit">提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div style>



<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>

<!-- jQuery Validation plugin javascript-->
<script src="js/plugins/validate/jquery.validate.min.js"></script>
<script src="js/plugins/validate/messages_zh.min.js"></script>

<script>
$(function(){

    $(document).on("blur","#node_name",function(){
        var node_name = $("#node_name").val();
        if(node_name == ""){
            $("#node_name1").html("权限不能为空");
            return false;
        }else{
            if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(node_name)){
                $("#node_name1").html("权限为中文");
            }else{
                $("#node_name1").html("");
                return true;
            }
            
        };
    })
    $(document).on("blur","#node_route",function(){
        var node_route = $("#node_route").val();
        if(node_route == ""){
            $("#node_route1").html("路由名不能为空");
            return false;
        }else{
            if(! /[a-zA-Z]+\/[a-zA-Z]+/.test(node_route)){
                $("#node_route1").html("路由名为admin/admin");
            }else{
                $("#node_route1").html("");
                return true; 
            }
           
        };
    })
    
        
})
function checksubmit()
        {
             var node_name = $("#node_name").val();
             var node_route = $("#node_route").val();
            if(node_name == ""  || node_route == ""){
                alert("不能为空");
                return false;
            }
                return true;  
        }
    
</script>
</body>

</html>
