@include('admin_header')
    <div class="col-sm-6" style="width: 100%">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>商品列表</h5>
                <a href="{{URL('admin/goodsAddList')}}" class="btn btn-primary btn-xs " style="float: right; margin-right: 190px;">添加商品</a>
            </div>
            <div class="ibox-content">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品名称</th>
                        <th>商品分类</th>
                        <th>商品价格</th>
                        <th>商品图片</th>
                        <th>商品简介</th>
                        <th>是否上架</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($goodsList as $v)
                        <tr id="{{$v['goods_id']}}">
                            <td>{{$v['goods_id']}}</td>
                            <td>{{$v['goods_name']}}</td>
                            <td>{{$v['type_name']}}</td>
                            <td>{{$v['goods_price']}}元</td>
                            <td>
                                @foreach($v['goods_img'] as $key => $val)
                                <img src="uploads/{{$val}}" alt="" style="height: 50px;width: 50px;">
                                @endforeach
                            </td>
                            <td>{{$v['goods_intro']}}</td>
                             @if($v['goods_status'] == 0)
                                <td>上架</td>
                                 @else
                                    <td>下架</td>
                             @endif
                            <td>{{$v['create_time']}}</td>
                            <td>
                                <a  class="btn btn-primary btn-xs btn-danger del">删除</a>
{{--                                <a href="{{URL('admin/goodsUpList')}}?goods_id={{$v['goods_id']}}" class="btn btn-primary btn-xs ">修改</a>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{--分页--}}
            <div align="center">
            </div>
        </div>
    </div>
@include('admin_footer');
<script language="JavaScript" src="{{ URL::asset('admin/js/jquery.min.js') }}?v=2.1.4"></script>
<script>
    $(function(){
        $('.del').click(function(){
            var goods_id =$(this).parents('tr').attr('id');
            var _this = $(this);
            $.get("{{URL('admin/goodsDel')}}",{goods_id:goods_id}, function(data){
                if(data == '1'){
                    _this.parents('tr').remove();
                }
            });
        });
    });
</script>