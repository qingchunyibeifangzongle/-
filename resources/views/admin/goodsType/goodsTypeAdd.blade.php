@include('admin_header')
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>商品分类添加</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal" method="post" action="{{URL('admin/goodsTypeAdd')}}">
            {{csrf_field()}}

            <div class="form-group">
                <label class="col-sm-3 control-label">商品分类名称：</label>

                <div class="col-md-3">
                    <input type="text" name="type_name" placeholder="商品分类名称" class="form-control type_name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">顶级分类：</label>

                <div class="col-sm-3">
                    <select class="form-control m-b" name="p_id" id="p_id">
                        <option value="0">请选择</option>
                        @foreach($typeList as $v)
                            <option value="{{$v['type_id']}}" path="{{$v['path']}}">{{str_repeat('&nbsp;',(substr_count($v['depath'],'-')-1)*4)}}{{$v['type_name']}}
                        </option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">排序：</label>

                <div class="col-md-3">
                    <input type="text" name="type_sort" placeholder="排序" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">是否展示：</label>

                <div class="col-md-3">
                    <label class="checkbox-inline i-checks">
                           <input type="radio"  name="is_show" value="0" > 是
                           <input type="radio"  name="is_show" value="1" > 否
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品分类描述：</label>
                <div class="col-sm-3">
                    <textarea id="comment" name="type_intro" placeholder="描述：20字以内" class="form-control" rows="2" cols="10"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <input type="hidden" name="path" id="path"/>
                    <input class="btn btn-sm btn-info" type="submit" value="保存">
                </div>
            </div>
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
            if(type_name.length < 1 || type_name.length >= 15){
                $('.type_name').after("<font color='red'>商品名称1-15位</font>");
                return false;
            }

            var type_sort = $(":input[name='type_sort']").val();
            var is_show = $(":input[name='is_show']:checked").val();
            var type_intro = $(":input[name='type_intro']").val();
            var p_id = $(":input[name='p_id']").val();
            $.post('goodsTypeAdd',function(msg){
            },'json');
        })
    });
</script>