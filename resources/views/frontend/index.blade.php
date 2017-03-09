<!doctype html>
<html>
<head _tracker='{"pagetype":"index"}'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit">
<title>【校园】二货网</title>
</head><!-- 加载js/css-->
<script type="text/javascript" src="js/base.aafb2bc1791840d2768b_2.js"></script>
<script type="text/javascript" src="js/index.366d681c7662a316cf81_3.js"></script>
<body>

@include('frontend.comman.head')  
    <!-- 头部  e -->

<!-- 首页内容区  s -->
<div class="index-area">

    <!--banner显示 s-->
    <div class="sel-op clearfix">
    <div class="sel-area fl">
        <div class="buy-tit">免费出售<span><em class="orgtext">平均7天卖出</em>已有<em class="clue_num">7132147</em>人提交了申请</span></div>
        <div class="sell-car-box" data-value-domain="bj">
            <form action="" class="clearfix" data-role="sell_form">
                <input type="text" class="sell-phone-input" data-role="sellPhone" placeholder="请输入手机号码">
                <button class="sell-phone-submit" data-clue-entry="03" data-gzlog="tracking_type=click&eventid=0210050000000013" >我要购物</button>
                <input type="hidden" name="source_type" value="">
            </form>
            <p class="sell-phone-error"></p>
            <div class="submit-suc" style="display: none">
                <i></i>
                提交成功！
                <a href="javascript:void(0)" data-role="go_back">返回</a>
            </div>
        </div>
        <!-- <div class="buy-tit">我要够物<span>1年</span></div> -->
<?php foreach($type as $key => $val){?>
        <div class="sx">
            <div class="sx-pinpai js_brands_index">
                <div class="dt"><?php echo $val['type_name']?></div>
                <div class="dd" id="baidu_alog">
                <?php if(isset($val['son'])){
                    foreach($val['son'] as $k => $v){
                       echo  "<a  href='#' class='' title='".$v['type_name']."'>".$v['type_name']."</a>";
                    }
                }?>     
            <span class="tip-right"></span>
                </div>
                
            </div>
            
        </div>
<?php }?>
    </div>
    <div class="op-area fr">
        <!--banner -->
        <div class="op-slide" data-widget="app/ms_v2/widget/slide.js" data-slide-fn="app/ms_v2/self_service/page/promotion_index.js#slideFn" data-interval="3000">
            <div data-role="list">
                                                            <div class="slide-li" data-role="item" style="background: url('picture/erhuo.jpg') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_0'>
                            <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_0_c' gjalog="" target="_blank" href="http://www.guazi.com/zq_article/4248/" class="ban_a"></a>
                        </div>
                                            <div class="slide-li" data-role="item" style="background: url('images/9b219d62e4d8ea5be68193b0a8830582_3.jpg@base@tag=imgscale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_1'>
                            <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_1_c' gjalog="" target="_blank" href="https://www.guazi.com/bj/buy/a3/" class="ban_a"></a>
                        </div>
                                            <div class="slide-li" data-role="item" style="background: url('images/ba8f4d06fec34db5021ce764ded3102d_3.jpg@base@tag=imgscale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_2'>
                            <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_2_c' gjalog="" target="_blank" href="http://www.guazi.com/zq_app/" class="ban_a"></a>
                        </div>
                                            <div class="slide-li" data-role="item" style="background: url('images/7aacc59e725836520fa3fd375cfb689f_3.png@base@tag=imgscale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_3'>
                            <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_3_c' gjalog="" target="_blank" href="https://www.guazi.com/zq_article/4329/" class="ban_a"></a>
                        </div>
                                            <div class="slide-li" data-role="item" style="background: url('picture/erhuo.jpg') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_4'>
                            <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_4_c' gjalog="pc_index_topYunying_banenr_1_c" target="_blank" href="http://jr.guazi.com/bj/" class="ban_a"></a>
                        </div>
                                                </div>

                            <div class="slide-ctrl">
                                            <span class="on active" data-role="point" data-slide-to="0"></span>
                                            <span class="on " data-role="point" data-slide-to="1"></span>
                                            <span class="on " data-role="point" data-slide-to="2"></span>
                                            <span class="on " data-role="point" data-slide-to="3"></span>
                                            <span class="on " data-role="point" data-slide-to="4"></span>
                                    </div>
                    </div>

        <!--三个运营位 -->
        <div class="op-img">
            <ul class="clearfix">
                <li>
                    <a data-gzlog="tracking_type=click&eventid=0140130000000029&url=jr" class="" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub1_fenqi_c' href="https://jr.guazi.com/bj/">
                    <img src="picture/62c09f0e69174554b69073529a2c7115_3.png@base@tag=imgscale&w=284&h=98&q=88" alt="校园分期">
                    </a>
                </li>
                <li>
                     <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub2_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t3" href="https://www.guazi.com/zq_article/t1/">
                     <img src="picture/c032a02080c56a972515543396d825fd_3.png@base@tag=imgscale&w=284&h=98&q=88" alt="">
                     </a>
                </li>
                <li>
                      <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub3_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t1" href="https://www.guazi.com/zq_article/t3/">
                      <img src="picture/b393d738df428ef5d6f1827af039f101_3.png@base@tag=imgscale&w=284&h=98&q=88" alt="">
                      </a>
                </li>
            </ul>
        </div>
    </div>
</div>
    <!--banner显示 e -->

    <!--服务介绍 s-->
    <ul class="ser-gua clearfix">
    <li><i class="ser-1"></i>100%个人</li>
    <li><i class="ser-2"></i>259项全面检测</li>
    <li><i class="ser-3"></i>14天可退</li>
    <li><i class="ser-4"></i>1年2万公里质保</li>
</ul>    <!--服务介绍 e -->

    <!--今日超值 s-->
        <!--今日超值 e -->

    <!--首页帖子列表 s-->
    <div class="w
     indexTab">
    <div class="title clearfix">
        <a rel="nofollow" baidu_alog="index_tabselect&click&pc_index_tabSelect_right_morecar_c" class="all-car" href="/bj/buy/" gjalog="100000000051000100000010">查看全部&gt;&gt;</a>
          <span class="ti-left">
            <span>热门商品</span>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_new_sale_h "
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000967000100000010" eventid="0080140000000032" >最新上架</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_jishou_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000968000100000010" eventid="0080150000000156" >降价急售</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_zhunxin_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000970000100000010" eventid="0080320000000036" >准新车</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_lianshou_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000969000100000010" eventid="0080330000000038" >练手车</a>
                                              <a baidu_alog="pc_index_tabSelect_detailCar&mouseenter&pc_index_tabSelect_detailCar_suv_h"
                     href="javascript:void(0)" data-role="tabSelect" gjalog="100000000971000100000010" eventid="0080340000000040">SUV</a>
                        </span>
    </div>

    <!--帖子列表 -->
    <div data-role="showList">
                    <div class="list" style="
    display:block;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8620605">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8620605@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="宝马Z4 2009款 sDrive23i领先型(进口)" target="_blank" class="imgtype" href="/bj/5b93f33aa5f8a765x.htm" >
                                <img width="290" height="194" src="picture/fcf3c175fc0e8a8098f7ca0593cc4355_2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马Z4 2009款 sDrive23i领先型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8620605@0" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8620605@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="宝马Z4 2009款 sDrive23i领先型(进口)" href="/bj/5b93f33aa5f8a765x.htm" target="_blank" class="info-title" >宝马Z4 2009款 sDrive23i领先型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年10月上牌</span>                                <em class="shuxian">|</em>                                行驶3.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    25.00万
                                </i>
                              </span>
                                                                    <s>63.93万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8586602">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8586602@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="现代ix35 2012款 2.0L 自动两驱精英版GLS" target="_blank" class="imgtype" href="/bj/50abd6a32028b386x.htm" >
                                <img width="290" height="194" src="picture/c603851d2511333252fbf658c234b457_2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="现代ix35 2012款 2.0L 自动两驱精英版GLS">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8586602@1" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8586602@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="现代ix35 2012款 2.0L 自动两驱精英版GLS" href="/bj/50abd6a32028b386x.htm" target="_blank" class="info-title" >现代ix35 2012款 2.0L 自动两驱精英版GLS</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年5月上牌</span>                                <em class="shuxian">|</em>                                行驶14.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    12.00万
                                </i>
                              </span>
                                                                    <s>21.25万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8593134">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8593134@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众途安 2013款 1.4T 自动舒适版5座" target="_blank" class="imgtype" href="/bj/a27c0346a109fa33x.htm" >
                                <img width="290" height="194" src="picture/978efc121126183b18f2c6b07e7ae046_2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众途安 2013款 1.4T 自动舒适版5座">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8593134@2" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8593134@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众途安 2013款 1.4T 自动舒适版5座" href="/bj/a27c0346a109fa33x.htm" target="_blank" class="info-title" >大众途安 2013款 1.4T 自动舒适版5座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年3月上牌</span>                                <em class="shuxian">|</em>                                行驶6.5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.90万
                                </i>
                              </span>
                                                                    <s>19.73万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8601926">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8601926@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="宝马3系 2011款 320i 时尚型" target="_blank" class="imgtype" href="/bj/b37cc1b9a2a9d80ex.htm" >
                                <img width="290" height="194" src="picture/37737c0c4f9c23fd8adff7693f60ff77_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马3系 2011款 320i 时尚型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8601926@3" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8601926@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="宝马3系 2011款 320i 时尚型" href="/bj/b37cc1b9a2a9d80ex.htm" target="_blank" class="info-title" >宝马3系 2011款 320i 时尚型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2012年11月上牌</span>                                <em class="shuxian">|</em>                                行驶8.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    17.50万
                                </i>
                              </span>
                                                                    <s>37.45万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8620549">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8620549@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" target="_blank" class="imgtype" href="/bj/1ea7f15eb88b5e48x.htm" >
                                <img width="290" height="194" src="picture/c23ea7bd4cca69bc2fdd33cc874d05fe_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安CS75 2014款 2.0L 手动豪华型 国IV">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8620549@4" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8620549@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" href="/bj/1ea7f15eb88b5e48x.htm" target="_blank" class="info-title" >长安CS75 2014款 2.0L 手动豪华型 国IV</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年7月上牌</span>                                <em class="shuxian">|</em>                                行驶5.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    8.90万
                                </i>
                              </span>
                                                                    <s>12.79万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8599510">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8599510@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" target="_blank" class="imgtype" href="/bj/222d399e2cff3900x.htm" >
                                <img width="290" height="194" src="picture/c3e751dfddd14e745a1fca0543ce835e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安CS75 2014款 2.0L 手动豪华型 国IV">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8599510@5" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8599510@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" href="/bj/222d399e2cff3900x.htm" target="_blank" class="info-title" >长安CS75 2014款 2.0L 手动豪华型 国IV</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年9月上牌</span>                                <em class="shuxian">|</em>                                行驶2.5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    9.20万
                                </i>
                              </span>
                                                                    <s>12.79万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8557657">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8557657@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奔驰B级 2009款 B 200 豪华型(进口)" target="_blank" class="imgtype" href="/bj/f2c6209cd01bb194x.htm" >
                                <img width="290" height="194" src="picture/80d6978279b32ab6e45c7d2b701d7c4d_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奔驰B级 2009款 B 200 豪华型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8557657@6" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8557657@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奔驰B级 2009款 B 200 豪华型(进口)" href="/bj/f2c6209cd01bb194x.htm" target="_blank" class="info-title" >奔驰B级 2009款 B 200 豪华型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年4月上牌</span>                                <em class="shuxian">|</em>                                行驶4.8万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    12.00万
                                </i>
                              </span>
                                                                    <s>38.86万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8546911">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8546911@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="金杯海狮 2011款 2.0L 10座 手动" target="_blank" class="imgtype" href="/bj/4661bd580bba364bx.htm" >
                                <img width="290" height="194" src="picture/a67ff32dec8624e9bb8678daa6a822c2_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="金杯海狮 2011款 2.0L 10座 手动">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8546911@7" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8546911@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="金杯海狮 2011款 2.0L 10座 手动" href="/bj/4661bd580bba364bx.htm" target="_blank" class="info-title" >金杯海狮 2011款 2.0L 10座 手动</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年12月上牌</span>                                <em class="shuxian">|</em>                                行驶2.7万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.50万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8617507">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8617507@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="雪佛兰科鲁兹 2009款 1.6L SE MT" target="_blank" class="imgtype" href="/bj/5b4d120fa540d178x.htm" >
                                <img width="290" height="194" src="picture/78514ede4b5ae89ffb8d20335340a212_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪佛兰科鲁兹 2009款 1.6L SE MT">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8617507@8" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8617507@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="雪佛兰科鲁兹 2009款 1.6L SE MT" href="/bj/5b4d120fa540d178x.htm" target="_blank" class="info-title" >雪佛兰科鲁兹 2009款 1.6L SE MT</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年6月上牌</span>                                <em class="shuxian">|</em>                                行驶6.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.79万
                                </i>
                              </span>
                                                                    <s>13.01万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8605179">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8605179@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="金杯阁瑞斯 2013款 2.0L智领豪华型9座 全运纪念版国四" target="_blank" class="imgtype" href="/bj/3d910bb62cc2e0a5x.htm" >
                                <img width="290" height="194" src="picture/393628104a98b4b42f033477471ec51a_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="金杯阁瑞斯 2013款 2.0L智领豪华型9座 全运纪念版国四">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8605179@9" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8605179@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="金杯阁瑞斯 2013款 2.0L智领豪华型9座 全运纪念版国四" href="/bj/3d910bb62cc2e0a5x.htm" target="_blank" class="info-title" >金杯阁瑞斯 2013款 2.0L智领豪华型9座 全运纪念版国四</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年7月上牌</span>                                <em class="shuxian">|</em>                                行驶3.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    6.90万
                                </i>
                              </span>
                                                                    <s>10.83万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8583562">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8583562@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奔驰SLK级 2010款 SLK 200K Grand Edition(进口)" target="_blank" class="imgtype" href="/bj/560f2a44f69f8c19x.htm" >
                                <img width="290" height="194" src="picture/71f85648d0d7856316ca909536ff53ea_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奔驰SLK级 2010款 SLK 200K Grand Edition(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8583562@10" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8583562@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="奔驰SLK级 2010款 SLK 200K Grand Edition(进口)" href="/bj/560f2a44f69f8c19x.htm" target="_blank" class="info-title" >奔驰SLK级 2010款 SLK 200K Grand Edition(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年4月上牌</span>                                <em class="shuxian">|</em>                                行驶5.9万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    22.50万
                                </i>
                              </span>
                                                                    <s>64.91万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8598302">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8598302@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众POLO 2007款 1.6L Cross POLO AT" target="_blank" class="imgtype" href="/bj/8f248202521be953x.htm" >
                                <img width="290" height="194" src="picture/0585fd153b06c99fcd7c4e3a1e1998e7_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众POLO 2007款 1.6L Cross POLO AT">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8598302@11" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=8598302@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title="大众POLO 2007款 1.6L Cross POLO AT" href="/bj/8f248202521be953x.htm" target="_blank" class="info-title" >大众POLO 2007款 1.6L Cross POLO AT</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2009年12月上牌</span>                                <em class="shuxian">|</em>                                行驶12万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    5.80万
                                </i>
                              </span>
                                                                    <s>12.81万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080140000000033'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_more_c' href="/bj/buy">更多最新上架</a>
        </div>
    </div>
            <div class="list" style="
    display:block;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8562212">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8562212@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="铃木启悦 2015款 1.6L 自动乐享型" target="_blank" class="imgtype" href="/bj/2948ff16abe7cc4cx.htm" >
                                <img width="290" height="194" src="picture/fa56b2c32f1081f28f6c9ec7e9841f45_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="铃木启悦 2015款 1.6L 自动乐享型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8562212@0" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8562212@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="铃木启悦 2015款 1.6L 自动乐享型" href="/bj/2948ff16abe7cc4cx.htm" target="_blank" class="info-title" >铃木启悦 2015款 1.6L 自动乐享型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年2月上牌</span>                                <em class="shuxian">|</em>                                行驶3.6万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    8.10万
                                </i>
                              </span>
                                                                    <s>12.04万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8575246">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8575246@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="宝马3系 2014款 320i 时尚型" target="_blank" class="imgtype" href="/bj/b62737b12ca55c4dx.htm" >
                                <img width="290" height="194" src="picture/d368f730640449e7495312b60ce1d604_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马3系 2014款 320i 时尚型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>5000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8575246@1" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8575246@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="宝马3系 2014款 320i 时尚型" href="/bj/b62737b12ca55c4dx.htm" target="_blank" class="info-title" >宝马3系 2014款 320i 时尚型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年5月上牌</span>                                <em class="shuxian">|</em>                                行驶7.7万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    23.00万
                                </i>
                              </span>
                                                                    <s>37.23万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8584584">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8584584@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="雪铁龙C4L 2014款 1.6THP 智驱版 自动劲智型" target="_blank" class="imgtype" href="/bj/f9065e4a382c62b2x.htm" >
                                <img width="290" height="194" src="picture/e771ef972eb01cf9022e3eab701841ad_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪铁龙C4L 2014款 1.6THP 智驱版 自动劲智型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>1100元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8584584@2" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8584584@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="雪铁龙C4L 2014款 1.6THP 智驱版 自动劲智型" href="/bj/f9065e4a382c62b2x.htm" target="_blank" class="info-title" >雪铁龙C4L 2014款 1.6THP 智驱版 自动劲智型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年7月上牌</span>                                <em class="shuxian">|</em>                                行驶2.4万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    10.99万
                                </i>
                              </span>
                                                                    <s>18.44万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8575739">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8575739@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="大众帕萨特 2015款 1.8TSI DSG御尊版" target="_blank" class="imgtype" href="/bj/77cdbaf9f60a2196x.htm" >
                                <img width="290" height="194" src="picture/499b4993ef07f3f0c0f1f7c3f8d3030e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众帕萨特 2015款 1.8TSI DSG御尊版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2800元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8575739@3" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8575739@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="大众帕萨特 2015款 1.8TSI DSG御尊版" href="/bj/77cdbaf9f60a2196x.htm" target="_blank" class="info-title" >大众帕萨特 2015款 1.8TSI DSG御尊版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年4月上牌</span>                                <em class="shuxian">|</em>                                行驶1.6万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    19.10万
                                </i>
                              </span>
                                                                    <s>26.03万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8536382">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8536382@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="斯柯达速派 2013款 1.4TSI DSG名仕版" target="_blank" class="imgtype" href="/bj/46230ea78fbf2991x.htm" >
                                <img width="290" height="194" src="picture/e2bcdd21e4b10b17898c257314eebd49_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="斯柯达速派 2013款 1.4TSI DSG名仕版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2500元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8536382@4" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8536382@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="斯柯达速派 2013款 1.4TSI DSG名仕版" href="/bj/46230ea78fbf2991x.htm" target="_blank" class="info-title" >斯柯达速派 2013款 1.4TSI DSG名仕版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年10月上牌</span>                                <em class="shuxian">|</em>                                行驶1.8万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    13.65万
                                </i>
                              </span>
                                                                    <s>21.34万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8532769">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8532769@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="奥迪A8L 2013款 A8L 50 TFSI quattro舒适型(进口)" target="_blank" class="imgtype" href="/bj/ea14e06ac6104a83x.htm" >
                                <img width="290" height="194" src="picture/e161c11bd7a8fce8a94ee587520864c8_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奥迪A8L 2013款 A8L 50 TFSI quattro舒适型(进口)">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>1万                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8532769@5" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8532769@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="奥迪A8L 2013款 A8L 50 TFSI quattro舒适型(进口)" href="/bj/ea14e06ac6104a83x.htm" target="_blank" class="info-title" >奥迪A8L 2013款 A8L 50 TFSI quattro舒适型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年3月上牌</span>                                <em class="shuxian">|</em>                                行驶11.1万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    50.00万
                                </i>
                              </span>
                                                                    <s>126.78万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8539112">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8539112@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="依维柯宝迪 2013款V39货箱高顶" target="_blank" class="imgtype" href="/bj/3f94388e49b4bcf2x.htm" >
                                <img width="290" height="194" src="picture/4fd99ca91341d1d70ee12560666d2696_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="依维柯宝迪 2013款V39货箱高顶">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>5000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8539112@6" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8539112@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="依维柯宝迪 2013款V39货箱高顶" href="/bj/3f94388e49b4bcf2x.htm" target="_blank" class="info-title" >依维柯宝迪 2013款V39货箱高顶</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年12月上牌</span>                                <em class="shuxian">|</em>                                行驶8.4万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.50万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8528399">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8528399@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="沃尔沃XC60 2016款 2.0T T5 智进版" target="_blank" class="imgtype" href="/bj/5255a17636533ff3x.htm" >
                                <img width="290" height="194" src="picture/fe3e6074b1215cc77e434e501f9f053b_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="沃尔沃XC60 2016款 2.0T T5 智进版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>5000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8528399@7" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8528399@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="沃尔沃XC60 2016款 2.0T T5 智进版" href="/bj/5255a17636533ff3x.htm" target="_blank" class="info-title" >沃尔沃XC60 2016款 2.0T T5 智进版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年9月上牌</span>                                <em class="shuxian">|</em>                                行驶1.8万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    30.50万
                                </i>
                              </span>
                                                                    <s>43.08万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8531282">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8531282@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="比亚迪e6 2016款 400 豪华版" target="_blank" class="imgtype" href="/bj/f044799eb53ef34fx.htm" >
                                <img width="290" height="194" src="picture/4895d7a62e359b9fa1dcea76b6a6b016_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪e6 2016款 400 豪华版">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>7000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8531282@8" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8531282@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="比亚迪e6 2016款 400 豪华版" href="/bj/f044799eb53ef34fx.htm" target="_blank" class="info-title" >比亚迪e6 2016款 400 豪华版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年9月上牌</span>                                <em class="shuxian">|</em>                                行驶0.8万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    19.00万
                                </i>
                              </span>
                                                                    <s>33.63万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8463022">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8463022@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="宝马7系 2014款 730Li 臻享型(进口)" target="_blank" class="imgtype" href="/bj/2e437dbfe73c9361x.htm" >
                                <img width="290" height="194" src="picture/8d5ae3f5995a16efbe745729b2c2d6bc_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马7系 2014款 730Li 臻享型(进口)">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2万                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8463022@9" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8463022@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="宝马7系 2014款 730Li 臻享型(进口)" href="/bj/2e437dbfe73c9361x.htm" target="_blank" class="info-title" >宝马7系 2014款 730Li 臻享型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年2月上牌</span>                                <em class="shuxian">|</em>                                行驶7.6万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    58.00万
                                </i>
                              </span>
                                                                    <s>103.77万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8525329">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8525329@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="江淮瑞风M3 2016款 宜家版 1.6L 豪华智能型" target="_blank" class="imgtype" href="/bj/a6c8339440f63590x.htm" >
                                <img width="290" height="194" src="picture/0945630e02616d3d611a5c00e3edb536_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="江淮瑞风M3 2016款 宜家版 1.6L 豪华智能型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>8000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8525329@10" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8525329@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="江淮瑞风M3 2016款 宜家版 1.6L 豪华智能型" href="/bj/a6c8339440f63590x.htm" target="_blank" class="info-title" >江淮瑞风M3 2016款 宜家版 1.6L 豪华智能型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年1月上牌</span>                                <em class="shuxian">|</em>                                行驶2.2万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    5.80万
                                </i>
                              </span>
                                                                    <s>8.55万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8491263">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8491263@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="奥迪Q3 2013款 35 TFSI 舒适型" target="_blank" class="imgtype" href="/bj/4f0adaa2424a3858x.htm" >
                                <img width="290" height="194" src="picture/f2d833aa03b0b5a9962f6a8cb74df6b8_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奥迪Q3 2013款 35 TFSI 舒适型">
                                                                                                            <i class="sup-yellow">
                                            <em></em>
                                            急降<br>2000元                                        </i>
                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8491263@11" data-gzlog="tracking_type=click&eventid=0080150000000156&carid=8491263@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_post_c' title="奥迪Q3 2013款 35 TFSI 舒适型" href="/bj/4f0adaa2424a3858x.htm" target="_blank" class="info-title" >奥迪Q3 2013款 35 TFSI 舒适型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年8月上牌</span>                                <em class="shuxian">|</em>                                行驶5.2万公里                            </p>
                            <p class="priType-s">
                                                                    <em class="tag-red">急售</em>
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    19.80万
                                </i>
                              </span>
                                                                    <s>34.30万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080150000000035'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_jishou_more_c' href="/bj/buy/a3/">更多降价急售</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8592121">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592121@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="北汽绅宝绅宝D50 2016款 1.5L 手动精英版" target="_blank" class="imgtype" href="/bj/dc85ce40a52b6553x.htm" >
                                <img width="290" height="194" src="picture/84959ce92ddccf2feeaea87e40367fbb_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="北汽绅宝绅宝D50 2016款 1.5L 手动精英版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592121@0" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592121@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="北汽绅宝绅宝D50 2016款 1.5L 手动精英版" href="/bj/dc85ce40a52b6553x.htm" target="_blank" class="info-title" >北汽绅宝绅宝D50 2016款 1.5L 手动精英版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年3月上牌</span>                                <em class="shuxian">|</em>                                行驶2.9万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    6.00万
                                </i>
                              </span>
                                                                    <s>9.10万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8605486">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8605486@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型" target="_blank" class="imgtype" href="/bj/052a44fb65803fb5x.htm" >
                                <img width="290" height="194" src="picture/4c4b9af8850391d9821a5afb6b4fbecc_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8605486@1" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8605486@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型" href="/bj/052a44fb65803fb5x.htm" target="_blank" class="info-title" >哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年6月上牌</span>                                <em class="shuxian">|</em>                                行驶0.6万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    6.50万
                                </i>
                              </span>
                                                                    <s>8.35万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8589896">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8589896@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="奔驰CLA级 2014款 CLA 260 4MATIC(进口)" target="_blank" class="imgtype" href="/bj/06ce9a3199033987x.htm" >
                                <img width="290" height="194" src="picture/834b2ef8113d91d2fae84bb2b8b9e001_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="奔驰CLA级 2014款 CLA 260 4MATIC(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8589896@2" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8589896@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="奔驰CLA级 2014款 CLA 260 4MATIC(进口)" href="/bj/06ce9a3199033987x.htm" target="_blank" class="info-title" >奔驰CLA级 2014款 CLA 260 4MATIC(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年6月上牌</span>                                <em class="shuxian">|</em>                                行驶1万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    36.80万
                                </i>
                              </span>
                                                                    <s>41.03万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8588070">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8588070@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="宝马3系GT 2016款 320i 设计套装型(进口)" target="_blank" class="imgtype" href="/bj/9a0a6cbf047adcd5x.htm" >
                                <img width="290" height="194" src="picture/a8734eaebd0be1f729a481f2c961185c_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马3系GT 2016款 320i 设计套装型(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8588070@3" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8588070@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="宝马3系GT 2016款 320i 设计套装型(进口)" href="/bj/9a0a6cbf047adcd5x.htm" target="_blank" class="info-title" >宝马3系GT 2016款 320i 设计套装型(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年3月上牌</span>                                <em class="shuxian">|</em>                                行驶1.7万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    37.00万
                                </i>
                              </span>
                                                                    <s>49.28万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8607831">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8607831@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="传祺GA3S视界 2016款 200T 手动精英版" target="_blank" class="imgtype" href="/bj/980c3878a26e2ca2x.htm" >
                                <img width="290" height="194" src="picture/aae3efd6c0fbde01e5a01a56b16b33a1_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="传祺GA3S视界 2016款 200T 手动精英版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8607831@4" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8607831@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="传祺GA3S视界 2016款 200T 手动精英版" href="/bj/980c3878a26e2ca2x.htm" target="_blank" class="info-title" >传祺GA3S视界 2016款 200T 手动精英版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年10月上牌</span>                                <em class="shuxian">|</em>                                行驶1.1万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    6.20万
                                </i>
                              </span>
                                                                    <s>8.01万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8589606">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8589606@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="北汽绅宝绅宝X25 2015款 1.5L 自动精英型" target="_blank" class="imgtype" href="/bj/e6659afb46095ab8x.htm" >
                                <img width="290" height="194" src="picture/4c693cad0b34afec6e43da6bb390713e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="北汽绅宝绅宝X25 2015款 1.5L 自动精英型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8589606@5" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8589606@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="北汽绅宝绅宝X25 2015款 1.5L 自动精英型" href="/bj/e6659afb46095ab8x.htm" target="_blank" class="info-title" >北汽绅宝绅宝X25 2015款 1.5L 自动精英型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年4月上牌</span>                                <em class="shuxian">|</em>                                行驶1.2万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    5.10万
                                </i>
                              </span>
                                                                    <s>7.47万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8595068">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8595068@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="吉利远景SUV 2016款 1.8L 手动尊贵型" target="_blank" class="imgtype" href="/bj/eee5fe41a22ffd83x.htm" >
                                <img width="290" height="194" src="picture/dd74fd8f9eb3629e2981c7370a53a5a4_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="吉利远景SUV 2016款 1.8L 手动尊贵型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8595068@6" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8595068@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="吉利远景SUV 2016款 1.8L 手动尊贵型" href="/bj/eee5fe41a22ffd83x.htm" target="_blank" class="info-title" >吉利远景SUV 2016款 1.8L 手动尊贵型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年10月上牌</span>                                <em class="shuxian">|</em>                                行驶1.1万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    8.30万
                                </i>
                              </span>
                                                                    <s>9.54万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8597243">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8597243@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="吉利帝豪 2016款 两厢RS 1.5L CVT向上版" target="_blank" class="imgtype" href="/bj/11fa242e2af8257cx.htm" >
                                <img width="290" height="194" src="picture/70e4cd14ce81ec1dde53b6e1633379ef_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="吉利帝豪 2016款 两厢RS 1.5L CVT向上版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8597243@7" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8597243@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="吉利帝豪 2016款 两厢RS 1.5L CVT向上版" href="/bj/11fa242e2af8257cx.htm" target="_blank" class="info-title" >吉利帝豪 2016款 两厢RS 1.5L CVT向上版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年7月上牌</span>                                <em class="shuxian">|</em>                                行驶1.4万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    7.18万
                                </i>
                              </span>
                                                                    <s>9.53万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8576279">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8576279@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="雪佛兰迈锐宝 2016款 2.0L 自动豪华版" target="_blank" class="imgtype" href="/bj/721ed3f2cf028de3x.htm" >
                                <img width="290" height="194" src="picture/170a70176ab2859ec9a15db2e70cc8bc_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪佛兰迈锐宝 2016款 2.0L 自动豪华版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8576279@8" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8576279@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="雪佛兰迈锐宝 2016款 2.0L 自动豪华版" href="/bj/721ed3f2cf028de3x.htm" target="_blank" class="info-title" >雪佛兰迈锐宝 2016款 2.0L 自动豪华版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年3月上牌</span>                                <em class="shuxian">|</em>                                行驶1.8万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    14.50万
                                </i>
                              </span>
                                                                    <s>19.53万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8591999">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8591999@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="依维柯Power Daily 2013款 2.8T-A36 客货两用" target="_blank" class="imgtype" href="/bj/358dec8cce4bf256x.htm" >
                                <img width="290" height="194" src="picture/3c0efcd02d68576a4190d93ce72ec69e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="依维柯Power Daily 2013款 2.8T-A36 客货两用">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8591999@9" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8591999@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="依维柯Power Daily 2013款 2.8T-A36 客货两用" href="/bj/358dec8cce4bf256x.htm" target="_blank" class="info-title" >依维柯Power Daily 2013款 2.8T-A36 客货两用</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年2月上牌</span>                                <em class="shuxian">|</em>                                行驶2.9万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    14.00万
                                </i>
                              </span>
                                                                    <s>18.23万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8592583">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592583@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="一汽森雅R7 2016款 1.6L 手动智能型" target="_blank" class="imgtype" href="/bj/8d065b80bbd045d9x.htm" >
                                <img width="290" height="194" src="picture/994b7533c5f63c7800f2c7204ade9b61_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="一汽森雅R7 2016款 1.6L 手动智能型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592583@10" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592583@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="一汽森雅R7 2016款 1.6L 手动智能型" href="/bj/8d065b80bbd045d9x.htm" target="_blank" class="info-title" >一汽森雅R7 2016款 1.6L 手动智能型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2017年2月上牌</span>                                <em class="shuxian">|</em>                                行驶0.6万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    7.00万
                                </i>
                              </span>
                                                                    <s>8.67万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8560873">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8560873@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="别克英朗 2016款 15N 自动进取型" target="_blank" class="imgtype" href="/bj/36523ee7299f5213x.htm" >
                                <img width="290" height="194" src="picture/230a524e636940b1e363d85db6768cb8_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="别克英朗 2016款 15N 自动进取型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8560873@11" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8560873@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="别克英朗 2016款 15N 自动进取型" href="/bj/36523ee7299f5213x.htm" target="_blank" class="info-title" >别克英朗 2016款 15N 自动进取型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年7月上牌</span>                                <em class="shuxian">|</em>                                行驶2.1万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    9.80万
                                </i>
                              </span>
                                                                    <s>13.01万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080320000000037'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_more_c' href="/bj/buy/c4/">更多准新车</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8546911">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8546911@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="金杯海狮 2011款 2.0L 10座 手动" target="_blank" class="imgtype" href="/bj/4661bd580bba364bx.htm" >
                                <img width="290" height="194" src="picture/a67ff32dec8624e9bb8678daa6a822c2_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="金杯海狮 2011款 2.0L 10座 手动">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8546911@0" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8546911@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="金杯海狮 2011款 2.0L 10座 手动" href="/bj/4661bd580bba364bx.htm" target="_blank" class="info-title" >金杯海狮 2011款 2.0L 10座 手动</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年12月上牌</span>                                <em class="shuxian">|</em>                                行驶2.7万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.50万
                                </i>
                              </span>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8617507">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8617507@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="雪佛兰科鲁兹 2009款 1.6L SE MT" target="_blank" class="imgtype" href="/bj/5b4d120fa540d178x.htm" >
                                <img width="290" height="194" src="picture/78514ede4b5ae89ffb8d20335340a212_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪佛兰科鲁兹 2009款 1.6L SE MT">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8617507@1" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8617507@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="雪佛兰科鲁兹 2009款 1.6L SE MT" href="/bj/5b4d120fa540d178x.htm" target="_blank" class="info-title" >雪佛兰科鲁兹 2009款 1.6L SE MT</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年6月上牌</span>                                <em class="shuxian">|</em>                                行驶6.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.79万
                                </i>
                              </span>
                                                                    <s>13.01万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8593660">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8593660@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="铃木天语 SX4 2009款 两厢 1.6L 自动运动型" target="_blank" class="imgtype" href="/bj/04fbb162a9c4e4fex.htm" >
                                <img width="290" height="194" src="picture/647a2c9d5d6d1c041ba5cf2b5fc0781d_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="铃木天语 SX4 2009款 两厢 1.6L 自动运动型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8593660@2" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8593660@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="铃木天语 SX4 2009款 两厢 1.6L 自动运动型" href="/bj/04fbb162a9c4e4fex.htm" target="_blank" class="info-title" >铃木天语 SX4 2009款 两厢 1.6L 自动运动型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2009年8月上牌</span>                                <em class="shuxian">|</em>                                行驶13.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    3.80万
                                </i>
                              </span>
                                                                    <s>12.90万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8613540">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8613540@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="五菱宏光 2010款 1.4L 标准型" target="_blank" class="imgtype" href="/bj/7f8f052871c8d517x.htm" >
                                <img width="290" height="194" src="picture/51728bda49a13b5a8d467f0ae0cf5c6e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="五菱宏光 2010款 1.4L 标准型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8613540@3" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8613540@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="五菱宏光 2010款 1.4L 标准型" href="/bj/7f8f052871c8d517x.htm" target="_blank" class="info-title" >五菱宏光 2010款 1.4L 标准型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年2月上牌</span>                                <em class="shuxian">|</em>                                行驶10.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.00万
                                </i>
                              </span>
                                                                    <s>5.95万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8607959">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8607959@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安悦翔V5 2012款 1.5L 手动梦幻型" target="_blank" class="imgtype" href="/bj/e3dc12115d59061ax.htm" >
                                <img width="290" height="194" src="picture/1771e8241f3fb5250eb501709b3c26ee_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安悦翔V5 2012款 1.5L 手动梦幻型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8607959@4" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8607959@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安悦翔V5 2012款 1.5L 手动梦幻型" href="/bj/e3dc12115d59061ax.htm" target="_blank" class="info-title" >长安悦翔V5 2012款 1.5L 手动梦幻型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年1月上牌</span>                                <em class="shuxian">|</em>                                行驶5.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.20万
                                </i>
                              </span>
                                                                    <s>6.72万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8610598">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8610598@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安商用长安之星2 2012款 1.0LCNG基本型JL466QG" target="_blank" class="imgtype" href="/bj/7f0bf7078fce3fe4x.htm" >
                                <img width="290" height="194" src="picture/fc9d32593595962f9a518ef8c378e3a9_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安商用长安之星2 2012款 1.0LCNG基本型JL466QG">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8610598@5" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8610598@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安商用长安之星2 2012款 1.0LCNG基本型JL466QG" href="/bj/7f0bf7078fce3fe4x.htm" target="_blank" class="info-title" >长安商用长安之星2 2012款 1.0LCNG基本型JL466QG</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年3月上牌</span>                                <em class="shuxian">|</em>                                行驶6.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.50万
                                </i>
                              </span>
                                                                    <s>4.44万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8570495">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8570495@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="起亚K2 2012款 三厢 1.4L MT GL纪念版" target="_blank" class="imgtype" href="/bj/f02d9299ae4f3fccx.htm" >
                                <img width="290" height="194" src="picture/cd0e89f1c1f203e3c9fbef8505e29573_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="起亚K2 2012款 三厢 1.4L MT GL纪念版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8570495@6" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8570495@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="起亚K2 2012款 三厢 1.4L MT GL纪念版" href="/bj/f02d9299ae4f3fccx.htm" target="_blank" class="info-title" >起亚K2 2012款 三厢 1.4L MT GL纪念版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2012年6月上牌</span>                                <em class="shuxian">|</em>                                行驶7.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.20万
                                </i>
                              </span>
                                                                    <s>7.91万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8528004">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8528004@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="大众捷达 2010款 1.6L 伙伴" target="_blank" class="imgtype" href="/bj/7c20fdf30067a701x.htm" >
                                <img width="290" height="194" src="picture/28d7242ec07544f2c56e2d1c3f1c980e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众捷达 2010款 1.6L 伙伴">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8528004@7" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8528004@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="大众捷达 2010款 1.6L 伙伴" href="/bj/7c20fdf30067a701x.htm" target="_blank" class="info-title" >大众捷达 2010款 1.6L 伙伴</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2012年11月上牌</span>                                <em class="shuxian">|</em>                                行驶7.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.70万
                                </i>
                              </span>
                                                                    <s>8.23万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8587265">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8587265@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="猎豹6481 2009款 2.2L 手动四驱" target="_blank" class="imgtype" href="/bj/d6821201b8d05dfax.htm" >
                                <img width="290" height="194" src="picture/aac3285d0ee3c702db4aa73432d35fed_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="猎豹6481 2009款 2.2L 手动四驱">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8587265@8" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8587265@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="猎豹6481 2009款 2.2L 手动四驱" href="/bj/d6821201b8d05dfax.htm" target="_blank" class="info-title" >猎豹6481 2009款 2.2L 手动四驱</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年7月上牌</span>                                <em class="shuxian">|</em>                                行驶7.9万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    5.00万
                                </i>
                              </span>
                                                                    <s>13.55万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8544824">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8544824@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="马自达3 2010款 1.6L 自动经典时尚型" target="_blank" class="imgtype" href="/bj/a2baab381e889ccex.htm" >
                                <img width="290" height="194" src="picture/f2e276c261287616a9ebd576fe7a6a6f_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="马自达3 2010款 1.6L 自动经典时尚型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8544824@9" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8544824@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="马自达3 2010款 1.6L 自动经典时尚型" href="/bj/a2baab381e889ccex.htm" target="_blank" class="info-title" >马自达3 2010款 1.6L 自动经典时尚型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年11月上牌</span>                                <em class="shuxian">|</em>                                行驶5.2万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    4.79万
                                </i>
                              </span>
                                                                    <s>13.33万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8589625">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8589625@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安商用长安星光4500 2007款 1.3L-SC6443基本型" target="_blank" class="imgtype" href="/bj/1871586e31156d7fx.htm" >
                                <img width="290" height="194" src="picture/38990217335b27190e701a2a33e90289_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安商用长安星光4500 2007款 1.3L-SC6443基本型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8589625@10" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8589625@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="长安商用长安星光4500 2007款 1.3L-SC6443基本型" href="/bj/1871586e31156d7fx.htm" target="_blank" class="info-title" >长安商用长安星光4500 2007款 1.3L-SC6443基本型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年12月上牌</span>                                <em class="shuxian">|</em>                                行驶9.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    1.40万
                                </i>
                              </span>
                                                                    <s>6.14万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8569606">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8569606@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="雪铁龙世嘉 2009款 三厢 1.6L 自动时尚型" target="_blank" class="imgtype" href="/bj/c97bb3b1a18b3dc5x.htm" >
                                <img width="290" height="194" src="picture/7c8290046aa676cdf3f9c2bf511adf8a_2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="雪铁龙世嘉 2009款 三厢 1.6L 自动时尚型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8569606@11" data-gzlog="tracking_type=click&eventid=0080330000000038&carid=8569606@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_post_c' title="雪铁龙世嘉 2009款 三厢 1.6L 自动时尚型" href="/bj/c97bb3b1a18b3dc5x.htm" target="_blank" class="info-title" >雪铁龙世嘉 2009款 三厢 1.6L 自动时尚型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年5月上牌</span>                                <em class="shuxian">|</em>                                行驶13.1万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    3.90万
                                </i>
                              </span>
                                                                    <s>13.22万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080330000000039'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_more_c' href="/bj/buy/p3/">更多练手车</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
                                                <li clue_id="8586602">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8586602@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="现代ix35 2012款 2.0L 自动两驱精英版GLS" target="_blank" class="imgtype" href="/bj/50abd6a32028b386x.htm" >
                                <img width="290" height="194" src="picture/c603851d2511333252fbf658c234b457_2.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="现代ix35 2012款 2.0L 自动两驱精英版GLS">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8586602@0" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8586602@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="现代ix35 2012款 2.0L 自动两驱精英版GLS" href="/bj/50abd6a32028b386x.htm" target="_blank" class="info-title" >现代ix35 2012款 2.0L 自动两驱精英版GLS</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2013年5月上牌</span>                                <em class="shuxian">|</em>                                行驶14.6万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    12.00万
                                </i>
                              </span>
                                                                    <s>21.25万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8620549">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8620549@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" target="_blank" class="imgtype" href="/bj/1ea7f15eb88b5e48x.htm" >
                                <img width="290" height="194" src="picture/c23ea7bd4cca69bc2fdd33cc874d05fe_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安CS75 2014款 2.0L 手动豪华型 国IV">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8620549@1" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8620549@1" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" href="/bj/1ea7f15eb88b5e48x.htm" target="_blank" class="info-title" >长安CS75 2014款 2.0L 手动豪华型 国IV</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年7月上牌</span>                                <em class="shuxian">|</em>                                行驶5.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    8.90万
                                </i>
                              </span>
                                                                    <s>12.79万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8599510">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8599510@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" target="_blank" class="imgtype" href="/bj/222d399e2cff3900x.htm" >
                                <img width="290" height="194" src="picture/c3e751dfddd14e745a1fca0543ce835e_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="长安CS75 2014款 2.0L 手动豪华型 国IV">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8599510@2" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8599510@2" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="长安CS75 2014款 2.0L 手动豪华型 国IV" href="/bj/222d399e2cff3900x.htm" target="_blank" class="info-title" >长安CS75 2014款 2.0L 手动豪华型 国IV</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年9月上牌</span>                                <em class="shuxian">|</em>                                行驶2.5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    9.20万
                                </i>
                              </span>
                                                                    <s>12.79万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8601451">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8601451@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="大众途观 2009款 2.0TSI 舒适版(进口)" target="_blank" class="imgtype" href="/bj/6627cac3c693cd3cx.htm" >
                                <img width="290" height="194" src="picture/b07e72898e1556c846d30bf12188b665_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="大众途观 2009款 2.0TSI 舒适版(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8601451@3" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8601451@3" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="大众途观 2009款 2.0TSI 舒适版(进口)" href="/bj/6627cac3c693cd3cx.htm" target="_blank" class="info-title" >大众途观 2009款 2.0TSI 舒适版(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2009年8月上牌</span>                                <em class="shuxian">|</em>                                行驶8.9万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    13.50万
                                </i>
                              </span>
                                                                    <s>36.91万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8615583">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8615583@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="MINI Countryman 2011款 1.6L COOPER Fun" target="_blank" class="imgtype" href="/bj/82ebce6fc9ab1ca6x.htm" >
                                <img width="290" height="194" src="picture/e945ed170fb2cf0b930472d008745150_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="MINI Countryman 2011款 1.6L COOPER Fun">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8615583@4" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8615583@4" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="MINI Countryman 2011款 1.6L COOPER Fun" href="/bj/82ebce6fc9ab1ca6x.htm" target="_blank" class="info-title" >MINI Countryman 2011款 1.6L COOPER Fun</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2012年7月上牌</span>                                <em class="shuxian">|</em>                                行驶5.4万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    14.50万
                                </i>
                              </span>
                                                                    <s>30.94万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8607607">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8607607@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="起亚智跑 2011款 2.0L 自动两驱版GLS" target="_blank" class="imgtype" href="/bj/9f0b6bc5e86dcfa2x.htm" >
                                <img width="290" height="194" src="picture/3828adf89999a9a898869de7e5c94f1b_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="起亚智跑 2011款 2.0L 自动两驱版GLS">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8607607@5" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8607607@5" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="起亚智跑 2011款 2.0L 自动两驱版GLS" href="/bj/9f0b6bc5e86dcfa2x.htm" target="_blank" class="info-title" >起亚智跑 2011款 2.0L 自动两驱版GLS</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2011年6月上牌</span>                                <em class="shuxian">|</em>                                行驶11.5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.00万
                                </i>
                              </span>
                                                                    <s>20.93万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8591780">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8591780@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="丰田汉兰达 2015款 2.0T 两驱豪华版 7座" target="_blank" class="imgtype" href="/bj/e31a7605389d4fcbx.htm" >
                                <img width="290" height="194" src="picture/1e364477b6dfabf2a3b94645a6a25797_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="丰田汉兰达 2015款 2.0T 两驱豪华版 7座">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8591780@6" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8591780@6" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="丰田汉兰达 2015款 2.0T 两驱豪华版 7座" href="/bj/e31a7605389d4fcbx.htm" target="_blank" class="info-title" >丰田汉兰达 2015款 2.0T 两驱豪华版 7座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年6月上牌</span>                                <em class="shuxian">|</em>                                行驶2.5万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    27.50万
                                </i>
                              </span>
                                                                    <s>30.91万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8605486">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8605486@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型" target="_blank" class="imgtype" href="/bj/052a44fb65803fb5x.htm" >
                                <img width="290" height="194" src="picture/4c4b9af8850391d9821a5afb6b4fbecc_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8605486@7" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8605486@7" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型" href="/bj/052a44fb65803fb5x.htm" target="_blank" class="info-title" >哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2016年6月上牌</span>                                <em class="shuxian">|</em>                                行驶0.6万公里                            </p>
                            <p class="priType-s">
                                                                                                    <em class="tag-green">准新车</em>
                                                                                              <span>
                                <i class="fc-org priType">
                                    6.50万
                                </i>
                              </span>
                                                                    <s>8.35万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="7897557">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=7897557@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="宝马X1 2013款 sDrive18i 运动设计套装" target="_blank" class="imgtype" href="/bj/b48cb01cc1b5191bx.htm" >
                                <img width="290" height="194" src="picture/d34dd1fa7b405db392fbc91b9b5d1561_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="宝马X1 2013款 sDrive18i 运动设计套装">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=7897557@8" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=7897557@8" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="宝马X1 2013款 sDrive18i 运动设计套装" href="/bj/b48cb01cc1b5191bx.htm" target="_blank" class="info-title" >宝马X1 2013款 sDrive18i 运动设计套装</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年6月上牌</span>                                <em class="shuxian">|</em>                                行驶5.7万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    21.50万
                                </i>
                              </span>
                                                                    <s>36.80万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8598482">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8598482@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" target="_blank" class="imgtype" href="/bj/d93d635e8290a7a7x.htm" >
                                <img width="290" height="194" src="picture/e971274715ee2e8596ca825bde71ccb4_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="斯柯达Yeti 2016款 1.4TSI DSG前行版">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8598482@9" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8598482@9" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="斯柯达Yeti 2016款 1.4TSI DSG前行版" href="/bj/d93d635e8290a7a7x.htm" target="_blank" class="info-title" >斯柯达Yeti 2016款 1.4TSI DSG前行版</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2015年10月上牌</span>                                <em class="shuxian">|</em>                                行驶1.3万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.90万
                                </i>
                              </span>
                                                                    <s>16.26万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8612151">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8612151@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="现代新胜达 2010款 2.4 至尊版 七座四驱(进口)" target="_blank" class="imgtype" href="/bj/50a187f68d161a4fx.htm" >
                                <img width="290" height="194" src="picture/a29e3154d9c101fed567dd0385942743_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="现代新胜达 2010款 2.4 至尊版 七座四驱(进口)">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8612151@10" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8612151@10" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="现代新胜达 2010款 2.4 至尊版 七座四驱(进口)" href="/bj/50a187f68d161a4fx.htm" target="_blank" class="info-title" >现代新胜达 2010款 2.4 至尊版 七座四驱(进口)</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2010年3月上牌</span>                                <em class="shuxian">|</em>                                行驶11.8万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    11.00万
                                </i>
                              </span>
                                                                    <s>30.81万</s>
                                                            </p>
                        </div>
                    </li>
                                    <li clue_id="8588814">
                        
                        <div class="list-infoBox">
                            <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8588814@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="比亚迪S6 2014款 2.0L 手动尊贵型 5座" target="_blank" class="imgtype" href="/bj/26d9c1988ec1adb1x.htm" >
                                <img width="290" height="194" src="picture/a3a611212bc73988a7e576d80fea6698_3.jpg@base@tag=imgscale&w=290&h=192&c=1&m=2&q=88" alt="比亚迪S6 2014款 2.0L 手动尊贵型 5座">
                                                                                                                                </a>
                                                        <p class="infoBox">
                                <a data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8588814@11" data-gzlog="tracking_type=click&eventid=0080340000000040&carid=8588814@11" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_post_c' title="比亚迪S6 2014款 2.0L 手动尊贵型 5座" href="/bj/26d9c1988ec1adb1x.htm" target="_blank" class="info-title" >比亚迪S6 2014款 2.0L 手动尊贵型 5座</a>
                            </p>
                            <p class="fc-gray">
                                                                <span class="">2014年5月上牌</span>                                <em class="shuxian">|</em>                                行驶5.8万公里                            </p>
                            <p class="priType-s">
                                                                                                                              <span>
                                <i class="fc-org priType">
                                    6.90万
                                </i>
                              </span>
                                                                    <s>10.84万</s>
                                                            </p>
                        </div>
                    </li>
                                    </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080340000000041'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_more_c' href="/bj/buy/h2/">更多SUV</a>
        </div>
    </div>
    </div>
</div>    <!--首页帖子列表 e -->

    <!--底部推广 s-->
    <div class="w gz-zq">
    <div class="value-tit clearfix">
        <p class="v-tit fl">校园精选<span>精选好车好文，给找车添点乐趣</span></p>
    </div>
    <div class="zq-crm clearfix">
        <div class="zq-area fl" >
            <ul class="zhuantui-ul" data-role="slide_container" style="margin-left:0px;">
                                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_1'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4316/" target="_blank">
                                <img src="picture/d1334bdf40068cfcbb8f123f6c73ba00_3.png@base@tag=imgscale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_2'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4311/" target="_blank">
                                <img src="picture/be3e71408f9598294c61317cf4397f8e_3.png@base@tag=imgscale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_3'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4309/" target="_blank">
                                <img src="picture/914606094beee5dcd18bd3dcfd975f74_3.png@base@tag=imgscale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_4'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4306/" target="_blank">
                                <img src="picture/8a71adad2c381ea96e8565f3cce262e3_3.png@base@tag=imgscale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_5'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="http://www.guazi.com/zq_article/t3/" target="_blank">
                                <img src="picture/00821e9c710a8a333918c71209f40cee_3.png@base@tag=imgscale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_6'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="http://www.guazi.com/zq_article/t1/" target="_blank">
                                <img src="picture/5d0b3429eeb3eabe57a6c76771258072_3.png@base@tag=imgscale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                    
<!--                --><!--                    --><!--                        --><!--                        --><!--                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_--><!--'>-->
<!--                                <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="--><!--" target="_blank">-->
<!--                                    <img src="--><!--" alt="Hyundai">-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        --><!--                    --><!--                --><!--                    <li baidu_alog='banner&&click&&index_yunying_bottom_banner_1'>-->
<!--                        <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="--><!--" target="_blank">-->
<!--                            <img src="--><!--" alt="Hyundai">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li baidu_alog='banner&&click&&index_yunying_bottom_banner_2'>-->
<!--                        <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="--><!--" target="_blank">-->
<!--                            <img src="--><!--" alt="Hyundai">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                -->
<!--                --><!--                    <li baidu_alog='banner&&click&&index_yunying_bottom_banner_6'>-->
<!--                        <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=lowpowered" href="/zq_lowpowered/?domain=--><!--" target="_blank">-->
<!--                            <img src="--><!--" alt="loan">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                --><!---->
<!--                <li baidu_alog='banner&&click&&index_yunying_bottom_banner_5'>-->
<!--                    <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=loan" href="/zq_loan/?domain=--><!--" target="_blank">-->
<!--                        <img src="--><!--" alt="loan">-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <li baidu_alog='banner&&click&&index_yunying_bottom_banner_2'>-->
<!--                    <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=audi"  href="/zq_audi/?domain=--><!--" target="_blank">-->
<!--                        <img src="--><!--" alt="audi">-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                --><!--                    <li baidu_alog='banner&&click&&index_yunying_bottom_banner_3'>-->
<!--                        <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Jeep"  href="/zq_Jeep/?domain=--><!--" target="_blank">-->
<!--                            <img src="--><!--" alt="Jeep">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                --><!---->
<!--                --><!--                    <li baidu_alog='pc_index_buttom_banner&click&index_yunying_bottom_Racing_banner_c'>-->
<!--                        <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Racing"  href="/zq_Racing/?domain=--><!--" target="_blank">-->
<!--                            <img src="--><!--" alt="Racing">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                --><!--                -->
<!--                <li baidu_alog='pc_index_buttom_banner&click&index_yunying_bottom_tianlai'>-->
<!--                    <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=tianlai"  href="/zq_tianlai/?domain=--><!--" target="_blank">-->
<!--                        <img src="--><!--" alt="tianlai">-->
<!--                    </a>-->
<!--                </li>-->
<!--                --><!--                    <li baidu_alog='pc_index_buttom_banner&click&index_yunying_bottom_offroad_banner_c'>-->
<!--                        <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=offroad" href="/zq_offroad/?domain=--><!--" target="_blank">-->
<!--                            <img src="--><!--" alt="offroad">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                -->            </ul>
            <a href="javascript:void(0);" class="slider-prev" data-role="prev_btn" baidu_alog='slider&&click&&index_yunying_bottom_banner_lsilder'>&lt;</a>
            <a href="javascript:void(0);" class="slider-next" data-role="next_btn" baidu_alog='slider&&click&&index_yunying_bottom_banner_rsilder'>&gt;</a>
        </div>
        <ul class="crm-area fr">
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4321" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c' href="/zq_article/4321/">丰田RAV4，悬挂真的是硬伤！</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4316" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c' href="/zq_article/4316/">三菱越野最后篇章，真正的山猫来了</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4311" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c' href="/zq_article/4311/">穿越性价比？谁也赢不过的车</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4309" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c' href="/zq_article/4309/">越野界的蓝领，两三万就能穿越无人区</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4306" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c' href="/zq_article/4306/">情怀碎一地的2500，中国越野界的鼻祖！</a>
                </li>
                        <li class="crm-link">
                <a data-gzlog="tracking_type=click&eventid=0150170000000044" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_checkAll_c' href="/zq_article/">查看全部&gt;&gt;</a>
            </li>
        </ul>
    </div>
</div>    <!--底部推广 e -->

</div>
<!-- 首页内容区  e -->

@include('frontend.comman.footer') 

<!--在线客服-->
</body>
</html>
