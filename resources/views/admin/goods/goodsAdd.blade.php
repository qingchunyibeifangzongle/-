@include('admin_header')
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>管理员添加</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal" method="post" action="{{URL('adminAdd')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-3 control-label">管理员名称：</label>

                <div class="col-md-3">
                    <input type="text" name="admin_username" placeholder="角色名称" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">管理员密码：</label>

                <div class="col-md-3">
                    <input type="password" name="admin_pwd" placeholder="管理员密码" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">确认密码：</label>

                <div class="col-md-3">
                    <input type="password" name="admin_pwd2" placeholder="确认密码" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">管理员角色：</label>

                <div class="col-md-3">
                    <label class="checkbox-inline i-checks">
                        {{--@foreach($list as $v)--}}
                            {{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="role_name[]" value="{{$v['role_id']}}" >{{$v['role_name']}} &nbsp;&nbsp;--}}
                        {{--@endforeach--}}
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-8">
                    <button class="btn btn-sm btn-info" type="submit">添 加</button>
                </div>
            </div>
        </form>
    </div>

</div>

@include('admin_footer')