<!DOCTYPE html>
<!-- saved from url=(0079)http://www.doumi.com/bj/?from=sem_baidu&ca_s=sem_baidu&ca_n=46415411675&ca_i=ad -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">object {outline:none;}</style>

<title>校园二货招聘网页</title>
<meta name="description" content="校园二货招聘网页">
<meta name="keywords" content="校园二货招聘网页">
    <script type="text/javascript" src="./Scripts/ganji_sta.php"></script>
</head>
<body class="jz-list">
    <div class="header">
    <div class="w clearfix">
        <a class="" href="#" title=""></a>
        <a class="location" href="">北京</a>
        <ul class="nav" data="">
			<li><a href="">首页</a></li>
			<li><a href="" class="zhiweiCity">职位</a></li>
		</ul>
        <div class="login-info">
            <a class="login-reg jz_lg" href="javascript:;" rel="nofollow">注册登录</a>
        </div>
    </div>
</div>
    <div class="filterBar w mt10">
        <div class="chkFilter"></div>
        <div class="" >
            <a href="javascript:;"style="color:red;align-text:center" > <h2>建议同学们注意安全，学校以外的禁止工作</h2></a>
        </div>
    </div>
    <div class="filterBar w mt10">
        <div class="chkFilter"></div>
        <div class="sortFilter">
            <a href="{{URL('frontend/information')}}" class="cur"><h3>发布信息</h3></a>
            <a href="{{URL('frontend/selectInformation')}}"><h3>查看回复</h3></a>
            <a href="{{URL('frontend/guanli')}}"><h3>管理发布信息</h3></a>
        </div>
    </div>
   
        <div class="jzList-con w">
            @foreach($arr as $v)
            <div class="jzList-item clearfix">
            <div class="jzList-pic"><img src="{{$v['job_img']}}">
            </div>
                <div class="jzList-txt">
                    <div class="jzList-txt-t">
                        <h3>
                            <a target="_blank" href="#">
                            {{$v['job_name']}}
                            </a>
                        </h3>
                    </div>
                    <ul class="jzList-field clearfix">
                        <li><span>工作时间：</span> {{date("Y-m-d H:i:s"),strtotime($v['job_time'])}}</li>
                        <li><span>工作地点：</span></li>
                        <li><span>招聘人数：</span>{{$v['number']}}人</li>
                    </ul>
                </div>
                <div class="jzList-btn">
                        <a href='{{URL("frontend/sign/$v[job_id]")}}' class="apply_jz_class">报名参加</a>
                </div>
                <div class="jzList-salary">
                    <span class="money"><em>{{$v['job_salary']}}</em>元/天</span>
                    <span>{{$v['job_describe']}}</span>&nbsp;&nbsp;&nbsp;
                     <span class="money">联系人:<em>{{$v['user_nickname']}}</em></span>

                </div>
            </div>
        @endforeach
    <div class="w">
        <div class="pageBox" data-widget="app/ms_v2/common/list_page.js#pagination"><ul class="pageLink clearfix">{!! $arr->links() !!}</ul></div>    </div>
        </div>
</body>
</html>