





<div class="crumbs">
    <a href="{{URL('frontend/index')}}" rel="nofollow">首页</a>
    <em>></em>
    {{--<a href="http://www.guazi.com/bj/buy/" >北京个人二手车</a>--}}
    {{--<em>></em>--}}
    {{--<a href="http://www.guazi.com/bj/hafu/" >北京哈弗二手车</a>--}}
    {{--<em>></em>--}}
    {{--<a href="http://www.guazi.com/bj/h1/" >北京二手哈弗H1</a>--}}
    {{--<em>></em>--}}
    {{--<span>哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型</span>--}}
</div>


<div class="w">
    <div class="detailbox">

        <!-- 帖子基本信息 -->
        <div class="laybox clearfix">

            <!-- 图片展示组件 -->
            <div class="det-sumleft slideshow">
                <div class="dt-sumpic" data-role="imgContainer">
                    <a href="javascript:void(0);" data-role="imgArrow" class="arrow-prew prev"></a>
                    <a href="javascript:void(0);" data-role="imgArrow" class="arrow-next next"></a>
                    <p class="amount">
                        <i class="fc-org" data-role="currentNumber">1</i>/30        </p>
                    <a href="javascript:void(0);"
                       data-puid="3001121800"
                       class="dt-icon-1 "><i></i>收藏</a>
                    {{--<a href="javascript:void(0);" data-gzlog="tracking_type=click&eventid=1012123400000003" class="dt-icon-2"><i></i>降价提醒</a>--}}
                    <input type="hidden" data-role="navbtn" data-maskname="mask2" id="js-login">
                    <input type="hidden" data-role="navbtn" data-maskname="mask3" id="skipKind" value="1">
                    <ul class="det-picside">
                        <li data-role="img" style="display: block">

                            <img src="{{URL::asset('frontend/picture/qn1702211517380076b7641f134f62e4e13388a1b369e3.jpg')}}" alt="哈弗H1 2016款 改款 蓝标 1.5L AMT豪华型">
                        </li>
                    </ul>
                </div>
                <div class="dt-transcont clearfix">
                    <a href="javascript:void(0);" class="fl tm-arrow-prew prev" data-role="thumbArrow"></a>
                    <div class="dt-thumb">
                        <div class="dt-thumb-in" style="width:4000px;" data-role="thumbContainer">
                            <ul class="dt-thumb-img clearfix">

                                <li  class="active"  data-role="thumb" data-index="0"><a href="javascript:void(0);"><span></span><img src="{{URL::asset('frontend/picture/qn1702101839586588acad2048bf9c789e23fea9ec3682.jpg')}}"></a></li>

                            </ul>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="fr tm-arrow-next next" data-role="thumbArrow"></a>
                </div>
            </div>
            @foreach($goodsList as $v)
            <div class="det-sumright appoint">
                <div class="dt-titbox">
                    <h1 class="dt-titletype" title="{{$v['goods_name']}}">{{$v['goods_name']}}</h1>
                    <div class="dt-titleinfo clearfix">
                        <p class="car-error fr">
                            <a rel="nofollow" href="javascript:void(0)" data-role="feed_back" class="feed_back"></a>
                        </p>
                        <ul class="title-info-r">
                        </ul>
                    </div>

                </div>
                <div class="basic-box">
                    <div class="pricebox">
                        <i class="ico-txt ico-mt">卖主报价：</i>
                        <span class="fc-org pricestype"><b class="f30 numtype">&yen;{{$v['goods_price']}}</b>元</span>

                    </div>

                    <!--贷款-->
                    <div class="car-fuwu" data-puid="3001121800" gjalog="100000001100000100000010">
                        <i class="ico-txt">小&nbsp;&nbsp;&nbsp;刀：</i>
                    <span>@if($v['xiaodao']  == 0)
                            <span>可小刀</span>
                        @else
                            <span>不可小刀</span>
                        @endif
                    </span>
                    </div>

                    <!--贷款-->
                    <div class="car-fuwu" data-puid="3001121800" gjalog="100000001100000100000010">
                        <i class="ico-txt">Q&nbsp;&nbsp;&nbsp;Q：</i>
                    <span>@if($v['QQ']  != '')
                            {{$v['QQ']}}
                        @else
                            <span>没有留下QQ</span>
                        @endif
                    </span>
                    </div>

                    <!--服务费-->
                    <div class="car-fuwu">
                        <i class="ico-txt">手&nbsp;&nbsp;&nbsp;机：</i>
                        <span>
                            @if($v['phone']  != '')
                            {{$v['phone']}}
                                @else
                                <span>没有留下电话</span>
                                @endif
                        </span>
                    </div>
                    <div class="car-fuwu">
                        <i class="ico-txt">学&nbsp;&nbsp;&nbsp;校：</i>
                        <span>
                                {{$v['school_name']}}
                        </span>
                    </div>
                    <div class="car-fuwu">
                        <i class="ico-txt">发布时间：</i>
                        <span>
                            <?php echo date("Y-m-d",$v['create_time'])?>
                        </span>
                    </div>
                </div>

                <p class="stipul-p">

                    <!-- 车源售卖状态显示 -->
                    <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0040180000000074&carid=8605486" href="javascript:void(0);" data-role="navbtn" data-maskname="" data-clue-id="8605486" data-city-id="12" class="stipul-btn apt-btn-up" data-puid="3001121800"
                    >立即购买</a>
                    <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0040180000000075&carid=8605486" href="javascript:void(0);" data-role="navbtn" data-maskname="mask4" data-clue-id="8605486" data-city-id="12" class="bargain-btn" data-puid="3001121800"
                       data-price-display="6.50">加入购物车</a>
                </p>



                {{--<div class="combox indem-box">--}}
                {{--<h3 class="indem-tt f14">瓜子二手车直卖网已对该车辆进行检测，并将提供售后服务及保障。</h3>--}}
                {{--<ul class="indem-ul">--}}
                {{--<li>--}}
                {{--<span class="indem01"></span>--}}
                {{--<p class="f-type01">100%个人二手车</p>--}}
                {{--<p>没有中间环节，无差价</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<span class="indem02"></span>--}}
                {{--<p class="f-type01">259项全面检测</p>--}}
                {{--<p>严苛检测标准，无事故</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<span class="indem03"></span>--}}
                {{--<p class="f-type01">14天可退1年质保</p>--}}
                {{--<p>瓜子全程保障，无担忧</p>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            </div>
            @endforeach
        </div>

        <!-- 弹窗 s-->
        <div class="mask-all" id="mask">
            <div class="gz-mask"></div>

            <!-- 大礼包弹窗内容 s-->
            <div class="gz-mask-box maskbox1" style="display:none" data-role="mask" data-name="mask1" data-width="600" data-height="400">

                <div class="mask-con">
                    <div class="mask-hd" data-role="title">超值大礼包(数量有限，先到先得！详情咨询当地服务顾问)</div>
                    <div class="mask-close" data-role="maskClose"></div>
                    <div class="mask-main" >
                        <div class="gift-pop">
                            1、牛咖斯（仅限BBA高端车）免费空调风道杀菌+免费发动机舱清洗+2L玻璃水<br/>2、轮库望京店免费精细洗车一次+免费补胎一次<br/>3、易车生活380元会员服务卡，含免费臭氧消毒一次+200元保养洗车代金券                                    </div>
                    </div>
                </div>
                <div>
                    <button data-target="mask4" data-height="500" data-width="700" data-role="changeTo" style="display: none;">changeTo2</button>
                </div>
            </div>
            <!-- 大礼包弹窗内容 e-->

            <!-- 登陆弹窗内容 s-->
            <div class="gz-mask-box maskbox2" style="display:none" data-role="mask" data-name="mask2" data-width="492" data-height="400">

                <div class="mask-con">
                    <div class="mask-hd" data-role="title"></div>
                    <div class="mask-close" data-role="maskClose"></div>
                    <div class="mask-main" >
                        <div class="pop-code" style="border:1px solid white">
                            <ul class="code-confirm">
                                <li>
                                    <p class="kj-p">手机号</p>
                                    <div class="kj-it">
                                        <input type="text" class="kj-input-1" name="phone" placeholder="请输入您的手机号码">
                                        <!-- button的两种状态通过active控制 -->
                                        <button class="kj-get-code active"
                                                data-city-id="12"
                                                data-puid="3001121800">获取验证码</button>
                                        <p class="kj-error" id="js-kj-error"></p>
                                    </div>
                                </li>
                                <li>
                                    <p class="kj-p">验证码</p>
                                    <div class="kj-it">
                                        <input type="text" class="kj-input-2" placeholder="请输入您的验证码" name="code">
                                        <p class="kj-error" id="js-checkcode"></p>
                                    </div>
                                </li>
                            </ul>
                            <!-- button的两种状态通过active控制 -->
                            <button class="st-price active">确定</button>
                        </div>
                    </div>
                </div>
                <div>
                    <button data-target="mask4" data-height="500" data-width="700" data-role="changeTo" style="display: none;">changeTo2</button>
                </div>
            </div>
            <!-- 降价提醒，收藏，预约看车弹窗内容 e-->

            <!-- 预约看车，收藏，降价提醒成功弹窗内容 s-->
            <div class="gz-mask-box maskbox3" style="display:none" data-role="mask" data-name="mask3" data-width="590" data-height="592">

                <div class="mask-con">
                    <div class="mask-hd" data-role="title"></div>
                    <div class="mask-close" data-role="maskClose"></div>
                    <div class="mask-main" >
                        <div class="pop-guide" style="border:1px solid white">
                            <div class="guide-suc">
                                <div class="guide-suc-icon">提交成功！</div>
                                <p class="guide-suc-txt">瓜子客服将跟您联系看车，请留意接听哦~<br>快去下载app，查看预约结果吧~</p>
                            </div>
                            <div class="guide-con">
                                <div class="guide-img guide-img-1"></div>
                                <div class="guide-explain">
                                    <p class="guide-explain-tit">APP四大法宝</p>
                                    <ul>
                                        <li class="js-item-0">收藏查看-更方便</li>
                                        <li class="js-item-1">账户管理-更智能</li>
                                        <li class="js-item-2">降价提醒-更及时</li>
                                        <li class="js-item-3">新车上架-更实时</li>
                                    </ul>
                                    <div class="pop-ewm-box">
                                        <img src="picture/ewm-app-2_3.png" alt="瓜子二手车app下载">
                                    </div>
                                    <p class="scan-tips">扫码下载APP，实惠早知道</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button data-target="mask4" data-height="500" data-width="700" data-role="changeTo" style="display: none;">changeTo2</button>
                </div>
            </div>
            <!-- 预约看车，收藏，降价提醒成功弹窗内容 e-->

            <!-- 砍价弹窗内容 s-->
            <div class="gz-mask-box maskbox4" style="display:none" data-role="mask" data-name="mask4" data-width="562" data-height="487">

                <div class="mask-con">
                    <div class="mask-hd" align="center" data-role="title">我要砍价</div>
                    <div class="mask-close" data-role="maskClose"></div>
                    <div class="mask-main" >
                        <div class="pop-kj" style="border:1px solid white;">
                            <div class="car-name-price">
                                <p class="p1">哈弗H1<br> <span>2016款 改款 蓝标 1.5L AMT豪华型...</span> </p>
                                <p class="p2" id="js-originalPrice">6.50<span>万元</span></p>
                            </div>
                            <div class="bid-an">
                                <p class="bid-p fl">
                                    <span id="js-bidPriceNum">6.50</span>
                                    <em>万元</em>
                                    <br>
                                    <i id="js-bidPrice">建议出价</i>
                                </p>
                                <p class="bid-p fr">
                                    <span id="js-dealProb">95</span>
                                    <em>%</em>
                                    <br>
                                    成交概率
                                </p>
                                <i class="an-line"></i>
                            </div>
                            <div id="js-slider">
                                <p class="kj-tip">成交概率极高，尽快出价，不要被别人捷足先登哦～</p>
                                <div class="price-sel">
                                    <!-- 滑动按钮  左右滑动区间为-18px~482px -->
                                    <div class="sel-btn" style="left:482px;"></div>
                                    <!-- 滑动按钮  左右滑动区间为0~300px -->
                                    <div class="price-pro" style="left:286px;">
                                        <div class="price-pro-txt">建议出价</div>
                                    </div>

                                </div>
                                <div class="price-scale">
                                    <ul class="scale-num">
                                        <li class="num-li-1">6.11万</li>
                                        <li class="num-li-2">6.18万</li>
                                        <li class="num-li-3">6.24万</li>
                                        <li class="num-li-4">6.31万</li>
                                        <li class="num-li-5">6.37万</li>
                                        <li class="num-li-6">6.44万</li>
                                        <li class="num-li-7">6.5万</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bid-area" style="display:none" id="js-inputshow">
                                <p class="fl">自定义出价</p>
                                <input class="bid-input" type="text" placeholder="请输入您的心理价格">
                                <p class="bid-input-error"></p>
                                <em class="txt-wan">万</em>
                            </div>

                            <div class="bid-area" style="display:block" id="js-inputhide">
                                <span>自定义出价&gt;</span>
                            </div>

                            <button class="kj-submit">确认出价</button>
                            <div class="kefu-tip">瓜子帮你联络车主议价后，会及时通知您~</div>


                        </div>
                    </div>
                </div>
                <div>
                    <button data-target="mask4" data-height="500" data-width="700" data-role="changeTo" style="display: none;">changeTo2</button>
                </div>
            </div>
            <!-- 砍价弹窗内容 e-->

        </div>
        <!-- 弹窗 e-->

        <script type="text/template" charset="utf-8" id="cut_price_qrcode_layer">
            <div class="lpn_canvas" style="height:376px;">
                <!--弹窗开始-->
                <style>
                    .cont-box{color:#4b4b4b; font-family:"Microsoft Yahei";font-size:16px;}
                    .kanjia-pop{position: relative;height: 376px;}
                    .imgmask{z-index: 0;width: 444px;height: 319px;position: absolute;top:0;left:0;background:url(images/bargain.png) no-repeat 0 0;z-index: 99;}
                    .texttype{width:218px;height:38px;border:solid 1px #ddd;line-height:38px;padding:0 5px;font-size:16px;}
                    .fiebox{margin:30px 0;line-height:30px;}
                    .stipul-btn01{position: absolute;bottom:23px;left:165px;width:132px;height:30px;line-height:28px;color:#fff; font-family:"Microsoft Yahei";background-color:#fd8000; text-align:center;display:block;font-size:14px;border:0;}
                    .stipul-btn01:hover{background-color:#fd6000;color:#fff; text-decoration:none;}
                    .erweima{border:0;left: 123px;  top: 34px;background: #f9f9f9;width: 199px;height: 199px; position: absolute;}
                </style>
                <div class="cont-box">
                    <div class="kanjia-pop">
                        <div class="imgmask"></div>
                        <span class="erweima" id="cut_price_qrcode"> </span>
                        <button class="stipul-btn01" id="cut_price_close_btn" type="button">确 认</button>
                    </div>
                </div>
                <!--弹窗结束-->
            </div>
            <div class="lpn_ctrl_group" style="width: 26px;"><a href="javascript:;" class="lpn_close" style="margin-left: 3px;">关闭</a></div>
        </script>
        <!-- 检测结果 -->
        <div class="laybox combox">
            <div class="detect-bd clearfix">
                <div class="detect-left fl">
                    <div class="detect-c scrollTo">
                        <div class="detect-info">
                            @foreach($goodsList as $v)
                            <div class="detect-txt">{{$v['goods_intro']}}</div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- 猜你喜欢 -->
        <div class="guessbox">
            <h3 class="yahei publicTit"><i class="deck"></i>向您推荐</h3>
            <div class="guesslike">
                <ul class="list-bigimg clearfix">
                    @foreach($goodsInfo as $v)
                    <li>
                        <div class="list-infoBox">
                            <a title="宝马Z4 2009款 sDrive23i领先型(进口)" target="_blank" class="imgtype" href='{{URL("frontend/goodsList/$v[user_id]/$v[goods_id]")}}' >
                                <img width="290" height="194" src="{{URL::asset('admin/uploads')}}/{{$v['goods_img']}}" alt="宝马Z4 2009款 sDrive23i领先型(进口)"></a>
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
            </div>
        </div>

    </div>
</div>

<!-- 底部 -->
<div class="footer">
    <!--加载footer 信息部分 -->
    <div class="company-info clearfix">
        <div class="footer-logo"></div>
        <div class="phone-email">
            <p>
                咨询电话：<i>400-023-1529</i> <br>
                <span>（周一至周日 8:00-21:00）</span>
            </p>
            <p>售后服务专线：400-066-8780  </p>
        </div>
        <img src="picture/ewm-wx-2_3.png" alt="" class="gz-ewm">
        <p class="ewm-tit">关注微信</p>
        <img src="picture/ewm-app-2_3.png" alt="" class="gz-ewm">
        <p class="ewm-tit">下载APP</p>
        <div class="basic-info">
            <div class="info-link">
                <a rel="nofollow" href="/bj/aboutus/" target="_blank">关于瓜子</a>
                <a rel="nofollow" href="/bj/join/" target="_blank">加入我们</a>
                <a rel="nofollow" href="/bj/contact" target="_blank">联系我们</a>
                <a rel="nofollow" href="/bj/intro/" target="_blank">服务保障</a>
            </div>
            <p class="arc-info">Copyright 2017 www.guazi.com All Rights Reserved</p>
            <p class="arc-info">京ICP备15053955号  ICP证151071号 </p>
            <div style="width:300px;margin:0 auto; padding:20px 0;">
                <a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020161" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="picture/ghs_3.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">京公网安备 11010802020161号</p></a>
            </div>
        </div>
    </div>

    <!--公司信息-->
    <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
        车好多旧机动车经纪（北京）有限公司&emsp;&emsp;&emsp;
        北京市丰台区南四环中路260号北京新发地汽车交易市场旧车经营区B区178号&emsp;&emsp;&emsp;
        010-57317000
    </p></div>

<div class="side-bar">
    <!--返回顶部 -->
    <a rel="nofollow" href="#" data-role="backToTop" class="totop"></a>
    <a rel="nofollow" href="javascript:void(0);" class="close-side"></a>

</div>


<input type="hidden" class="hide_gich" value="& &pagetype=detail&city=bj&currentUrl=https%3A%2F%2Fwww.guazi.com%3A443%2Fbj%2F052a44fb65803fb5x.htm&puid=3001121800&line=c2c&tag=">
<div style='display:none;' class='js-check-post-code' data-str='503b7f59635dde985d9a834ad761dea5' data-time='1487678398'></div><input type="hidden" data-role="dataSource" class="dataSourceButton" data-source='[]' >

<!-- side  bar  e -->
</body>
</html>
