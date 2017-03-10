<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
    object {outline:none;}</style>

<title>校园二货招聘网页</title>
<meta name="description" content="校园二货招聘网页">
<meta name="keywords" content="校园二货招聘网页">
    <script type="text/javascript" src="./Scripts/ganji_sta.php"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/base.aafb2bc1791840d2768b_2.js"></script>
    <script type="text/javascript" src="js/index.366d681c7662a316cf81_3.js"></script>

</head>
<body class="jz-list">
     <div class="header">
        <div class="hd-top clearfix">
            <img src="images/logo.jpg" class='logo' alt="校园直卖网"  style='width:256px;height:78px;'>
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
                               <dt>A</dt>
                               <dd>
                                   <a data-gzlog="tracking_type=click&amp;eventid=0020060000000017&amp;select_city=anshan" baidu_alog="pc_index_city&amp;click&amp;pc_index_all_city_c" href="/anshan/" title="鞍山二手车">鞍山                                            </a>
                                   <a data-gzlog="tracking_type=click&amp;eventid=0020060000000017&amp;select_city=anyang" baidu_alog="pc_index_city&amp;click&amp;pc_index_all_city_c" href="/anyang/" title="安阳二手车">安阳                                            </a>
                                   <a data-gzlog="tracking_type=click&amp;eventid=0020060000000017&amp;select_city=anqing" baidu_alog="pc_index_city&amp;click&amp;pc_index_all_city_c" href="/anqing/" title="安庆二手车">安庆                                            </a>
                               </dd>
                            </dl>
                        <p class="more-city">更多城市正在加紧筹备，敬请期待。</p>
                        </div>
                    </div>
                <!-- 加载所有学校信息结束 -->
                </div>
            
            <div class="uc">
                <a class="" href="login">
                    登录|注册
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
                <?php foreach ($nav as $key => $value): ?>
                    <a class="fl "  href="<?php echo $value['url']; ?>">
                        <?php echo $value['name']; ?>
                    </a>
                <?php endforeach ?>
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
  