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
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="校园分期">
                            </a>
                                            </li>
                                <li>
                                            <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub2_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t3" href="https://www.guazi.com/zq_article/t1/">
                            <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="">
                        </a>
                                    </li>
                <li>
                                            <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub3_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t1" href="https://www.guazi.com/zq_article/t3/">
                            <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="">
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

                        </span>
    </div>

    <!--帖子列表 -->
    <div data-role="showList">
                    <div class="list" style="
    display:block;        ">
        <ul class="list-bigimg clearfix">
            @foreach($goodsList as $v)
            <li>
                <div class="list-infoBox">
                    <a title="宝马Z4 2009款 sDrive23i领先型(进口)" target="_blank" class="imgtype" href='{{URL("frontend/goodsList/$v[user_id]/$v[goods_id]")}}' >
                        <img width="290" height="194" src="{{URL::asset('admin/uploads')}}/{{$v['goods_img'][0]}}" alt="宝马Z4 2009款 sDrive23i领先型(进口)"></a>
                        <p class="infoBox">
                        <a  title="" href="{{URL("frontend/goodsList/$v[user_id]/$v[goods_id]")}}" target="_blank" class="info-title" >{{$v['goods_name']}}</a>
                    </p>
                     <p class="priType-s"><span><i class="fc-org priType">{{$v['goods_price']}}元</i></span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            点击数：100
                        </p>
                    <p class="" style="margin-right: 10px;"><span class="fc-gray">{{$v['school_name']}}</span></p>
                </div>
            </li>
            @endforeach


        </ul>
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080140000000033'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_more_c' href="/bj/buy">更多最新上架</a>
        </div>
    </div>

<!--             <div class="list" style="
    display:none;        ">
        <ul class="list-bigimg clearfix">
<li clue_id="8592121">
    <div class="list-infoBox">
        <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592121@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="北汽绅宝绅宝D50 2016款 1.5L 手动精英版" target="_blank" class="imgtype" href="/bj/dc85ce40a52b6553x.htm" >
            <img width="290" height="194" src="picture/84959ce92ddccf2feeaea87e40367fbb_3.jpg" alt="北汽绅宝绅宝D50 2016款 1.5L 手动精英版">
        </a>

        <p class="infoBox">
            <a data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592121@0" data-gzlog="tracking_type=click&eventid=0080320000000036&carid=8592121@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_post_c' title="北汽绅宝绅宝D50 2016款 1.5L 手动精英版" href="/bj/dc85ce40a52b6553x.htm" target="_blank" class="info-title" >北汽绅宝绅宝D50 2016款 1.5L 手动精英版</a>
        </p>
        <p class="fc-gray"><span class="">2016年3月上牌</span><em class="shuxian">|</em>行驶2.9万公里</p>

        <p class="priType-s">
            <em class="tag-green">准新车</em><span><i class="fc-org priType">6.00万</i></span><s>9.10万</s>
        </p>
    </div>
</li>

        </ul>
        <div class="all-car-link">
<a data-gzlog='tracking_type=click&eventid=0080320000000037'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_more_c' href="/bj/buy/c4/">更多准新车</a>
        </div>
    </div> -->
<!-- 
     </div>
 </div>    --> <!--首页帖子列表 e -->

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
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_2'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4311/" target="_blank">
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_3'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4309/" target="_blank">
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_4'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="https://www.guazi.com/zq_article/4306/" target="_blank">
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_5'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="http://www.guazi.com/zq_article/t3/" target="_blank">
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="Hyundai">
                            </a>
                        </li>
                                            <li baidu_alog='banner&&click&&index_yunying_bottom_banner_6'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" href="http://www.guazi.com/zq_article/t1/" target="_blank">
                                <img src="picture/c032a02080c56a972515543396d825fd_3.png" alt="Hyundai">
                            </a>
                        </li>
                                    
<    </ul>
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

@include('frontend.common.footer')

</body>
</html>

