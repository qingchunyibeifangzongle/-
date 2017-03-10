<!DOCTYPE html>
<!-- saved from url=(0079)http://www.doumi.com/bj/?from=sem_baidu&ca_s=sem_baidu&ca_n=46415411675&ca_i=ad -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">object {outline:none;}</style>

<title>校园二货招聘网页</title>
<meta name="description" content="校园二货招聘网页">
<meta name="keywords" content="校园二货招聘网页">
    <script type="text/javascript" src="{{URL::asset('frontend/Scripts/ganji_sta.php')}}"></script>
    <script type="text/javascript" src="{{URL::asset('frontend/js/jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('frontend/js/base.aafb2bc1791840d2768b_2.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('frontend/js/index.366d681c7662a316cf81_3.js')}}"></script>
    <link href="{{URL::asset('frontend/Content/pub_job.cmb.__1472658423__.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('frontend/Content/pub_resume.cmb.__1472658507__.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('frontend/Content/upload-img.__1488362400__.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset('frontend/Scripts/ganji.__1472653905__.js')}}" type="text/javascript"></script>

</head>
<body class="jz-list">
     <div class="header">
        <div class="hd-top clearfix">
            <img src="{{URL::asset('frontend/images/logo.jpg')}}" class='logo' alt="校园直卖网"  style='width:256px;height:78px;'>
                <div class="c2city">
                    <a href="javascript:;" class="choose-city" >  
                        <span>北京市
                            <i>&nbsp;</i>
                        </span>  
                     </a> 
                    <i class="maskline"></i>
                    <!-- 加载所有学校信息 -->
                    <div class="city-box" id="city-box" >
                        <div class="all-city">
                            <dl>
                               <dt>学校名称</dt>
                               <dd>
                               @foreach ($school as $key => $value)
                                   <a href='{{URL("frontend/work")}}?school_id={{$value['school_id']}}' >{{$value['school_name']}}</a>
                               @endforeach
                               </dd>
                            </dl>
                        <p class="more-city">更多城市正在加紧筹备，敬请期待。</p>
                        </div>
                    </div>
                <!-- 加载所有学校信息结束 -->
                </div>
            
            <div class="uc">
                   <?php if(!isset($user_name)){?>
                                      <a class="" href="login">
                                      登录
                                  <?php }else{ ?>
                                      <a href="loginout" class="">
                                      <?php echo $user_name['user_nickname']?>
                                     退出</a>
                                  <?php }?>
                    <div class="app-guide">
                        <div class="guide-ewm">
                            <img src="{{URL::asset('frontend/picture/weixin.png')}}" alt="关注公共号">
                        </div>
                        <div class="guide-txt">
                            <p class="guide-txt-1">下载APP使用更多功能</p>
                            <p class="guide-txt-2">收藏查看-更方便</p>
                            <p class="guide-txt-2">降价提醒-更及时</p>
                            <p class="guide-txt-2">账户管理-更智能</p>
                            <p class="guide-txt-2">新车上架-更实时</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="hot-phone" >
                <i></i>
                <!--电话判断，当页面处于校园金融则显示校园金融电话  -->
                <span><?php echo config('webconfig.tel'); ?></span>
            </div>

            <!--头部搜索框 -->
            <!-- <div class="search-box">
                <div class="suggestion_widget" data-default-count="0" style='width:330px;'>
                    <input type="text" class="search-input js_search_input_index" style='float:left;' style='float:left; width:250px; height:30px; border:1px solid #22ac38;' placeholder="搜索您想要的宝贝"  data-role="keywordInput" name="keyword"  >
                    <button class="search-btn" data-gzlog="tracking_type=click&eventid=0020070000000022" baidu_alog='pc_index_search&click&pc_index_search_rementuijian_c' style=' float:right;'>搜索</button>
                    <input type="hidden" value="bj" name="hiddenCity">
                </div>
            </div> -->
        </div>

        <!-- menu s-->
       <div class="nav" style="margin-top:0px; width:100%;margin-left:0px;">
            <div class="w">

                <a class="fr app-web" baidu_alog="pc_index_top_tab&click&pc_index_top_tab_appdownload_c"
                   target="_blank" href="/zq_app/" data-gzlog="tracking_type=click&eventid=0010190000000012" title="校园直卖网APP">关注公众号
                    <div class="app-guide">
                        <div class="guide-ewm">
                            <img src="{{URL::asset('frontend/picture/weixin.png')}}" alt="关注公共号">
                        </div>
                        <div class="guide-txt">
                            <p class="guide-txt-1">下载APP使用更多功能</p>
                            <p class="guide-txt-2">收藏查看-更方便</p>
                            <p class="guide-txt-2">降价提醒-更及时</p>
                            <p class="guide-txt-2">账户管理-更智能</p>
                            <p class="guide-txt-2">新车上架-更实时</p>
                        </div>
                    </div>
                </a>
                <a class="fr " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_carfina_c"
                       href="https://jr.guazi.com/bj/"  data-gzlog="tracking_type=click&eventid=0010000000000011" title="分期付款">分期乐</a>
                                <a class="fl active" baidu_alog="pc_index_top_tab&click&pc_index_top_tab_index_c"
                   href="/bj/"  data-gzlog="tracking_type=click&eventid=0010000000000007" title="校园">首页</a>
                <!-- 循环导航开始 -->
                @foreach ($nav as $key => $value)
                    <a class="fl "  href='{{URL("$value[url]")}}' >
                        <?php echo $value['name']; ?>
                    </a>
                 @endforeach
                <!-- 循环导航结束 --> 
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(".choose-city").hover(function(){
            $(".city-box").show();
        });

        $("#city-box").mouseleave(function(){
            $("#city-box").hide();
        });
    </script>
  
<div class="filterBar w mt10" style="margin-top:70px;">
    <div class="chkFilter"></div>
    <div class="sortFilter">
        <a href="{{URL('frontend/information')}}"><h3> <strong>发布信息</strong> </h3></a>
        <a href="{{URL('frontend/selectInformation')}}"><h3><strong>查看回复</h3></strong></a>
        <a href="{{URL('frontend/guanli')}}"><h3><strong>管理发布信息</h3></strong></a>
    </div>
</div>
<form method="post"  action="{{URL('frontend/postSign')}}" onsubmit="return checksubmit()" enctype="multipart/form-data" >
    <div class="create-resume">
        <div class="info-con  pt0" id="base_area">
            <div class="basic"> <div class="tit mb30">基本信息</div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>用户名
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="sign_name"placeholder="张三" id="sign_name" class="text w130 w360" size="40"/>
                    <input type='hidden' name='_token' value="{{csrf_token()}}">
                    <input type='hidden' name='job_id' value="{{$job_id}}">
                    <span style='color:red' id="sign_names"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>手机号
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="sign_tel" id="sign_tel" placeholder="12345678900" class="text w130 w360" size="40"/>
                    <span style='color:red' id="sign_tels"></span>
                </div>
            </div>
            <div class="resume-submit pt20">
                <input type="submit" value="立即报名" id="pub_btn" class="pub-resume-btn" />
            </div>
        </div>
    </div>
</form>



</body>
</html>
<script src="{{ URL::asset('frontend/js/jquery.js')}}"></script>
<script>
    function checksubmit()
    {
        var sign_name = $("#sign_name").val();
        var sign_tel = $("#sign_tel").val();
        if(sign_name == "" || sign_tel == "" ){
            alert("啥都不写，还想提交？想啥呢？");
            return false;
        }else{
            if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(sign_name)){
                $("#sign_names").html("用户名为中文");
                return false;
            }else{
                $("#sign_names").html("");
            }
            if(!/^1[34578]\d{9}$/.test(sign_tel)){
                $("#sign_tels").html("手机号不符合");
                return false;
            }else{
                $("#sign_tels").html("");
            }

            return true;
        }

    }
</script>

