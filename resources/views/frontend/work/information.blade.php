<!DOCTYPE html>
<!-- saved from url=(0079)http://www.doumi.com/bj/?from=sem_baidu&ca_s=sem_baidu&ca_n=46415411675&ca_i=ad -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">object {outline:none;}</style>

<title>校园二货招聘网页</title>
<meta name="description" content="校园二货招聘网页">
<meta name="keywords" content="校园二货招聘网页">
    <script type="text/javascript" src="./Scripts/ganji_sta.php"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/base.aafb2bc1791840d2768b_2.js"></script>
    <script type="text/javascript" src="js/index.366d681c7662a316cf81_3.js"></script>
    <link href="Content/pub_job.cmb.__1472658423__.css" rel="stylesheet" type="text/css" />
    <link href="Content/pub_resume.cmb.__1472658507__.css" rel="stylesheet" type="text/css" />
    <link href="Content/upload-img.__1488362400__.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/ganji.__1472653905__.js" type="text/javascript"></script>

</head>
<body class="jz-list">
     <div class="header">
        <div class="hd-top clearfix">
            <img src="images/logo.jpg" class='logo' alt="校园直卖网"  style='width:256px;height:78px;'>
                <div class="c2city">
                    <a href="javascript:;" class="choose-city" >  
                        <span>学校
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
                            <img src="picture/weixin.png" alt="关注公共号">
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
        </div>

        <!-- menu s-->
       <div class="nav" style="margin-top:0px; width:100%;margin-left:0px;">
            <div class="w">

                <a class="fr app-web" baidu_alog="pc_index_top_tab&click&pc_index_top_tab_appdownload_c"
                   target="_blank" href="/zq_app/" data-gzlog="tracking_type=click&eventid=0010190000000012" title="校园直卖网APP">关注公众号
                    <div class="app-guide">
                        <div class="guide-ewm">
                            <img src="picture/weixin.png" alt="关注公共号">
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
                <!-- <a class="fr " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_carfina_c"
                       href="https://jr.guazi.com/bj/"  data-gzlog="tracking_type=click&eventid=0010000000000011" title="分期付款">分期乐</a> -->
                                <a class="fl" href="{{URL('frontend/index')}}" title="校园">首页</a>
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
    <div class="filterBar w mt10"  style="margin-top:70px;">
        <div class="chkFilter"></div>
        <div class="sortFilter">
            <a href="{{URL('frontend/information')}}" class="cur"><h3>  <strong>发布信息</strong></h3></a>
            <a href="{{URL('frontend/selectInformation')}}"><h3><strong>查看回复</strong></h3></a>
            <a href="{{URL('frontend/guanli')}}"><h3><strong>管理发布信息</strong></h3></a>
        </div>
    </div>

<form method="post"  action="{{URL('frontend/postInformation')}}" onsubmit="return checksubmit()" enctype="multipart/form-data" >
    <div class="create-resume">
        <div class="info-con  pt0" id="base_area">
            <div class="basic"> <div class="tit mb30">基本信息</div>
                <!-- <div class="resume-item zindex8"> -->
               <!--  <span class="label">
                    <b>*</b>用户名
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="user_nickname"placeholder="张三" id="user_nickname" class="text w130 w360" size="40"/>
                    <span style='color:red' id="user_nicknames"></span>
                </div> -->
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>职位
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="job_name" id="job_name" placeholder="送餐" class="text w130 w360" size="40"/>
                    <span style='color:red' id="job_names"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>薪水
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="job_salary" id="job_salary" placeholder="10" class="text w130 w360" size="40"/>
                    <span style='color:red' id="job_salarys"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>招聘人数
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="number" id="number" placeholder='10' class="text w130 w360" size="40"/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <span style='color:red' id="numbers"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>地点
                </span>
                <select name="school_id" id="school_name">
                    <option value="">请选择学校</option>
                    @foreach($school as $v)
                        <option value="{{$v['school_id']}}">{{$v['school_name']}}</option>
                    @endforeach    
                </select>
                    <span style='color:red' id="school_names"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>图片
                </span>
                    <input type="file" name="myfile" id='file'/>
                    <span style='color:red' id="files"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>描述
                </span>
                    <textarea  cols="65" rows="10"   name="job_describe" id="job_describe" placeholder="例如：管吃"></textarea>
                    <span style='color:red' id="job_describes"></span>
                </div>
            </div>

        <div class="resume-submit pt20">
            <input type="submit" value="立即发布" id="pub_btn" class="pub-resume-btn" />
        </div>
    </div>
</div>
</form>



</body>
</html>
<script src="js/jquery.js"></script>
<script>
$(function(){

})
function checksubmit()
{
    // var user_nickname = $("#user_nickname").val();
    var job_name = $("#job_name").val();
    var job_salary = $("#job_salary").val();
    var number = $("#number").val();
    var job_describe = $("#job_describe").val();
    var file = $("#file").val();
    if(job_name == "" || job_salary == "" || number == "" || job_describe == "" || file == ''){
        alert("啥都不写，还想提交？想啥呢？");
        return false;
    }else{
        // if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(user_nickname)){
        //     $("#user_nicknames").html("用户名为中文");
        //     return false;
        // }else{
        //     $("#user_nicknames").html("");
        // }
        if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(job_name)){
            $("#job_names").html("职位为中文");
            return false;
        }else{
            $("#job_names").html("");
        }
        if(!/^[0-9]{2,}$/.test(job_salary)){
            $("#job_salarys").html("薪水为数字");
            return false;
        }else{
            $("#job_salarys").html("");
        }
        if(!/^[0-9]{1,}$/.test(number)){
            $("#numbers").html("人数为数字");
            return false;
        }else{
            $("#numbers").html("");
        }
        if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(job_describe)){
            $("#job_describes").html("描述是中文");
            return false;
        }else{
            $("#job_describes").html("");
        }
        if(!file){
            $("#files").html('图片不能为空');
            return false;
        }else{
            $("#files").html("");
        }
        return true;
    }

}
</script>

