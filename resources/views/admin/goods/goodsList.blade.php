@include('admin_header')
    <div class="col-sm-6" style="width: 100%">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>商品列表</h5>
                <a href="{{URL('adminAddList')}}" class="btn btn-primary btn-xs " style="float: right; margin-right: 190px;">添加商品</a>
            </div>
            <div class="ibox-content">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品名称</th>
                        <th>商品角色</th>
                        <th>商品价格</th>
                        <th>商品简介</th>
                        <th>是否上架</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($list as $v)--}}
                        {{--<tr id="{{$v['admin_id']}}">--}}
                            {{--<td>{{$v['admin_id']}}</td>--}}
                            {{--<td>{{$v['admin_username']}}</td>--}}
                            {{--<td></td>--}}
                            {{--<td>{{$v['create_time']}}</td>--}}
                            {{--<td>--}}
                                {{--<a  class="btn btn-primary btn-xs btn-danger del">删除</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    </tbody>
                </table>
            </div>
            {{--分页--}}
            <div align="center">
            </div>
        </div>
    </div>
@include('admin_footer');
