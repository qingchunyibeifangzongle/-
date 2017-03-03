<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>校园二货后台管理系统</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>  
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    
    <link href="css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}?v=3.3.6" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/font-awesome.min.css') }}?v=4.4.0" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/style.css') }}?v=4.1.0" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/plugins/bootstrap-table/bootstrap-table.min.css') }}" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">校园二货后台管理</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">校园二货后台管理系统
                        </div>
                    </li>
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope"><h3><strong>商品管理</strong></h3></span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{URL('admin/goodsList')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">商品展示</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">商品分类管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/goodsType')}}">商品分类展示</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/goodsTypeAddList')}}">商品分类添加</a>
                            </li>
                        </ul>
                    </li>

                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope"><h3><strong>资金管理</strong></h3></span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="indexV1">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">资金流动</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">资金管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/otherBuy')}}">代步,代购资金管理</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/erhuoMoney')}}">校园二货资金管理</a>
                            </li>
                        </ul>
                    </li>
                <!-- 商品管理结束 -->
                    <!-- 网站管理开始 -->
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope"><h3><strong>网站管理</strong></h3></span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="indexV1">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">网站配置管理</span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/webAdd')}}">添加配置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">导航管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/navAdd')}}">添加导航</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/navShow')}}">查看导航</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">轮播图管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/bannerAdd')}}">添加轮播图</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">友情链接管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/blogrollAdd')}}">添加友链</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/blogrollShow')}}">查看友链</a>
                            </li>
                        </ul>
                    </li>
                    <!-- 网站管理结束 -->
                    <!-- 用户管理开始 -->
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope"><h3><strong>用户管理</strong></h3></span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">用户管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/userSelect')}}">查看用户</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">角色管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/roleSelect')}}">查看角色</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">权限管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="{{URL('admin/powerSelect')}}">查看权限</a>
                            </li>
                        </ul>
                    </li>
                    <!-- 用户管理结束 -->
                    <!-- 回收站 -->
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope"><h3><strong>回收站</strong></h3></span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="indexV1">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">商品展示</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">统计图表</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="graph_echarts.html">百度ECharts</a>
                            </li>
                        </ul>
                    </li>
                    <!-- 回收站结束 -->
                    <!-- 日志管理开始 -->
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope"><h3><strong>日志管理</strong></h3></span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{URL('admin/WebLog')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">查看日志文件</span>
                        </a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{URL('admin/getReion')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">获取地区信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">统计图表</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="graph_echarts.html">百度ECharts</a>
                            </li>
                        </ul>
                    </li>
                    <!-- 日志管理结束 -->
                   </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="{{URL('admin/loginout')}}">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i>退出
                                            <span class="pull-right text-muted small">{{$mins}}分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="100%" src="indexV1" frameborder="0" data-id="indexV1" seamless></iframe>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/jquery.min.js?v=2.1.4"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/bootstrap.min.js?v=3.3.6"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/plugins/layer/layer.min.js"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/hAdmin.js?v=4.1.0"></script>
    <script language="JavaScript" src="{{ URL::asset('/') }}admin/js/index.js"></script>
    <!-- 第三方插件 -->
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>

</html>
