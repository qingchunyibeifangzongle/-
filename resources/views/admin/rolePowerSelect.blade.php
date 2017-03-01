<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>角色赋权</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}?v=3.3.6" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.min.css') }}?v=4.4.0" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css') }}?v=4.1.0" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/plugins/bootstrap-table/bootstrap-table.min.css') }}" rel="stylesheet">
</head>


    <div class="col-sm-6" style="margin-left: 300px">
<div >
    <div class="ibox-title">
        <h5>角色赋权</h5>
    </div>
    <div class="ibox-content">
            <div class="form-group">
                <div class="col-sm-8">
                    <div class="checkbox i-checks">
                    <input type="hidden" name="id" class="id" value="{{$rule_id}}">
                        @if($y == "")
                            @foreach($res as $val)
                                <label><input type="checkbox" value="{{$val['node_name']}}" name="node_name"> <i></i>{{$val['rule_name']}}</label>
                            @endforeach
                        @else
                            @foreach($y[1] as $val)
                                <label><input type="checkbox" value="{{$val}}" checked="" name="node_name"> <i></i>{{$val}}</label>          
                            @endforeach
                            @foreach($y[0] as $v)
                                <label><input type="checkbox" value="{{$v}}" name="node_name"> <i></i>{{$v}}</label>
                            @endforeach
                        @endif
                   
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-3">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-3" style="margin-left:0px;margin-top:100px;">
                    <button class="btn btn-primary"  id="submit" type="submit">保存</button>
                </div>
            </div>
    </div>
</div>
</div style>



<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/jquery.min.js?v=2.1.4"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/bootstrap.min.js?v=3.3.6"></script>

<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/content.js?v=1.0.0"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/validate/jquery.validate.min.js"></script>
<script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/validate/messages_zh.min.js"></script>

</body>

</html>
<script>
   $(".btn").click(function(){
        var param = [];
        $("input[name='node_name']:checkbox:checked").each(function(i,o){
            param[i] = $(o).val();
        });
        var id = $(".id").val();
        $.ajax({
            type:"get",
            url:"{{ URL('admin/addRolePowerSelect') }}",
            data:{param:param,id:id},
            success:function(data){
                var msg = eval("("+data+")");
                if(msg.status == 1){
                    alert("保存成功");
                    window.history.go(0);
                }else{
                    alert("保存失败");
                    window.history.go(0);
                }
            }
        })
   }) 
</script>
