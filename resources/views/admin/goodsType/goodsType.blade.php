@include('admin_header')
    <div class="col-sm-6" style="width: 100%">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>商品列表</h5>
                <a href="{{URL('admin/goodsTypeAddList')}}" class="btn btn-primary btn-xs " style="float: right; margin-right: 190px;">添加分类商品</a>
            </div>
            <div class="ibox-content">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>分类名称</th>
                        <th>分类简介</th>
                        <th>是否展示</th>
                        <th>排序</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($res as $v)
                        <tr id="{{$v['type_id']}}">
                            <td>{{$v['type_id']}}</td>
                            <td>{{$v['type_name']}}</td>
                            <td>{{$v['type_intro']}}</td>
                            <td>{{$v['is_show']}}</td>
                            <td>{{$v['type_sort']}}</td>
                            <td>{{$v['create_time']}}</td>
                            <td>
                                <a  class="btn btn-primary btn-xs btn-danger del">删除</a>
                                <a  href="{{URL('admin/upTypeList')}}?type_id={{$v['type_id']}}" class="btn btn-primary btn-xs up" target="_blank">修改</a>
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
            var typeId = $(this).parents('tr').attr('id');
            var _this = $(this);
            $.get("{{URL('admin/delType')}}", { typeId:typeId } ,function(msg){
                if(msg == 1){
                    _this.parents('tr').remove();
                }
            });
        });

        {{--$('.up').click(function(){--}}
            {{--var typeId = $(this).parents('tr').attr('id');--}}
            {{--$.get("{{URL('admin/upType')}}", { typeId:typeId } ,function(msg){--}}
{{--//                if(msg == 1){--}}
{{--//                    _this.parents('tr').remove();--}}
{{--//                }--}}
            {{--});--}}
        {{--});--}}
    });
</script>)
