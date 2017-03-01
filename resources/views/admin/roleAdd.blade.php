<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 角色添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ URL::asset('admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet">

</head>


    <div class="col-sm-6" style="margin-left: 300px">
<div >
    <div class="ibox-title">
        <h5>角色添加</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal m-t" id="signupForm" onsubmit="return checksubmit()" action="{{URL('admin/roleAddPost')}}" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label">角色名</label>
                <div class="col-sm-8">
                    <input id="rule_name" name="rule_name" class="form-control" type="text" placeholder="角色名为中文">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <span id="rule_name1" style="color: red"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">排序</label>
                <div class="col-sm-8">
                    <input id="rule_sort" name="rule_sort" class="form-control" type="text" placeholder="0的权限最大，以此类推">
                    <span id="rule_sort1" style="color: red"></span>
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

    $(document).on("blur","#rule_sort",function(){
        var rule_sort = $("#rule_sort").val();
        if(rule_sort == ""){
            $("#rule_sort1").html("排序不能为空");
            return false;
        }else{
            if(!/^[1-9]+[0-9]*]*$/.test(rule_sort)){
                $("#rule_sort1").html("排序为数字");
            }else{
                $("#rule_sort1").html("");
                return true;
            }
            
        };
    })
    $(document).on("blur","#rule_name",function(){
        var rule_name = $("#rule_name").val();
        if(rule_name == ""){
            $("#rule_name1").html("角色名不能为空");
            return false;
        }else{
            if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(rule_name)){
                $("#rule_name1").html("角色名为中文");
            }else{
                $("#rule_name1").html("");
                return true; 
            }
           
        };
    })
    
        
})
function checksubmit()
        {
             var rule_name = $("#rule_name").val();
             var rule_sort = $("#rule_sort").val();
            if(rule_name == ""  || rule_sort == ""){
                alert("不能提交");
                return false;
            }
                return true;  
        }
    
</script>
</body>

</html>
