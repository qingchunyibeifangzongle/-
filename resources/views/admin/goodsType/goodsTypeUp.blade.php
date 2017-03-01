@include('admin_header')
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>商品分类修改</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal" method="post" action="{{URL('admin/upType')}}">
            {{csrf_field()}}
            @foreach($typeList as $v)
            <div class="form-group">
                <label class="col-sm-3 control-label">商品分类名称：</label>

                <div class="col-md-3">
                    <input type="text" name="type_name" placeholder="商品分类名称" class="form-control type_name" value="{{$v['type_name']}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">顶级分类：</label>

                <div class="col-sm-3">
                    <select class="form-control m-b" name="p_id" id="p_id">
                        <option value="0" >请选择</option>
                            @foreach($typeTree as $val)
                            <option selected="selected" value="{{$val['type_id']}}" path="{{$val['path']}}" selected="selected">{{str_repeat('&nbsp;',(substr_count($val['depath'],'-')-1)*4)}}{{$val['type_name']}}
                            @endforeach
                            </option>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">排序：</label>

                <div class="col-md-3">
                    <input type="text" name="type_sort" placeholder="排序" class="form-control" value="{{$v['type_sort']}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">是否展示：</label>

                <div class="col-md-3">
                    <label class="checkbox-inline i-checks">
                        @if($v['is_show'] == 0)
                           <input type="radio"  name="is_show" value="0" checked="checked" > 是
                           <input type="radio"  name="is_show" value="1" > 否
                            @else
                            <input type="radio"  name="is_show" value="0"  > 是
                            <input type="radio"  name="is_show" value="1" checked="checked"> 否
                        @endif
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品分类描述：</label>
                <div class="col-sm-3">
                    <textarea id="comment" name="type_intro" placeholder="描述：20字以内" class="form-control" rows="2" cols="10">{{$v['type_intro']}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <input type="hidden" name="type_id" value="{{$v['type_id']}}" >
                    <input type="hidden" name="path" id="path"/>
                    <input class="btn btn-sm btn-info" type="submit" value="保存">
                </div>
            </div>
            @endforeach
        </form>
    </div>

</div>

@include('admin_footer')
<script language="JavaScript" src="{{ URL::asset('admin/js/jquery.min.js') }}?v=2.1.4"></script>
<script>
    $(function(){
        $('#p_id').change(function(){
            var path = $(this).find(':selected').attr('path');
            //$(":input[name='parent_id']").val(path);
            $("#path").val(path);
        })

        $('.btn').click(function(){
            var type_name = $(":input[name='type_name']").val();
            if(type_name.length < 3 || type_name.length >= 15){
                $('.type_name').after("<font color='red'>商品名称3-15位</font>");
                return false;
            }
            var type_sort = $(":input[name='type_sort']").val();
            var is_show = $(":input[name='is_show']:checked").val();
            var type_intro = $(":input[name='type_intro']").val();
            var p_id = $(":input[name='p_id']").val();
//            $.post('goodsTypeAdd',function(msg){
//            },'json');
        })
    });
</script>