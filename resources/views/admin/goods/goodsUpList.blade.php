@include('admin_header')
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>商品修改</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal" method="post" action="{{URL('admin/goodsAdd')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @foreach($goodsList as $v)
            <div class="form-group">
                <label class="col-sm-3 control-label">商品名称：</label>

                <div class="col-md-3">
                    <input type="text" name="goods_name" placeholder="{{$v['goods_name']}}" class="form-control" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品价格：</label>

                <div class="col-md-3">
                    <input type="text" name="goods_price" placeholder="{{$v['goods_price']}}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品分类：</label>

                <div class="col-sm-3">
                    <select class="form-control m-b" name="type_id" >
                        <option value="0">请选择</option>
                        @foreach($typeTree as $val)
                            <option value="{{$val['type_id']}}">{{str_repeat('&nbsp;',(substr_count($val['depath'],'-')-1)*4)}}{{$val['type_name']}}
                            </option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品排序：</label>

                <div class="col-md-3">
                    <input type="text" name="goods_sort" placeholder="{{$v['goods_sort']}}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品图片：</label>

                <div class="col-md-3">
                    <input type="file" name="goods_img[]"  class="form-control">
                </div>
                <div class="col-md-3 ">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info  but" >添加一行</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-info  del" >删除一行</a>
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-3 control-label">是否展示：</label>

                <div class="col-md-3">
                    <label class="checkbox-inline i-checks">
                        @if($v['goods_status'] == 0)
                        <input type="radio"  name="goods_status" value="0" checked > 在售
                        <input type="radio"  name="goods_status" value="1" > 下架
                        @else
                            <input type="radio"  name="goods_status" value="0"  > 在售
                            <input type="radio"  name="goods_status" value="1" checked> 下架
                        @endif
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">商品分类描述：</label>
                <div class="col-sm-3">
                    <textarea id="comment" name="goods_intro" placeholder="{{$v['goods_intro']}}" class="form-control" rows="2" cols="10"></textarea>
                </div>
            </div>
            @endforeach
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <button class="btn btn-sm btn-info" type="submit">添 加</button>
                </div>
            </div>
        </form>
    </div>

</div>

@include('admin_footer')
<script language="JavaScript" src="{{ URL::asset('admin/js/jquery.min.js') }}?v=2.1.4"></script>

<script>
    $(function(){
        var str='';
        str="<div class='form-group'>"+
                "<label class='col-sm-3 control-label'></label>" +
                "<div class='col-md-3'>" +
                "<input type='file' name='goods_img[]' class='form-control'>" +
                "</div><div class='col-md-3 '>" +
                "<a href='javascript:void(0)' class='btn btn-sm btn-info  but' >添加一行</a>" +
                "<a href='javascript:void(0)' class='btn btn-sm btn-info  del' >删除一行</a>"+
                "</div></div>";
        $(document).on('click','.but',function(){
            $(this).parent().parent().after(str)
        })
        $(document).on('click','.del',function(){
            $(this).parent().parent().remove();
        })

    })
</script>