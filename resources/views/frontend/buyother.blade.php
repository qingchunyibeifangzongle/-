             
<!-- 首页内容区  s -->
<div class="index-area">
     <!-- 发布商品js -->
           <script src="{{ URL::asset('frontend/daigo/jquery-1.js') }}"></script>
            <script src="{{ URL::asset('frontend/daigo/plupload.js')}}"></script>
            <script src="{{ URL::asset('frontend/daigo/zh_CN.js')}}"></script>
            <script src="{{ URL::asset('frontend/daigo/qiniu.js')}}"></script>
            <script type="text/javascript" src="{{ URL::asset('frontend/js/jquery.validate.js')}}"></script>
             <script src="{{ URL::asset('frontend/daigo/add.js')}}"></script>
    <script src="{{ URL::asset('frontend/daigo/release.js')}}"></script>
     <!-- 发布商品js结束 -->
     <form action="{{url('frontend/dai')}}" id="commentForm" method="POST" class="form-horizontal m-t">
     <div class="form-wr">
            <div class="form-must-wr">
                <div class="form-item l goods-title">
                    <div class="form-key"><span>任务 名称</span></div>
                    <div class="form-value">
                        <div class="form-input-wr">
                            <input id="title" name="title" minlength="2" type="text" class="form-control" required="" aria-required="true">
                        </div>
                    </div>
                </div>
                <div class="form-item xl goods-desc">
                    <div class="form-key"><span>商品详情</span></div>
                    <div class="form-value">
                        <div class="form-input-wr">
                            <textarea name="details" id="details" minlength="2" type="text" class="form-control" required="" aria-required="true" placeholder="输入商品详情" style="width:600px;margin:0"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-item l goods-title">
                    <div class="form-key"><span>交易地点</span></div>
                    <div class="form-value">
                        <div class="form-input-wr">
                            <input id="address" name="address" minlength="2" type="text" class="form-control" required="" aria-required="true" placeholder="输入交易地点食堂,寝室等">
                        </div>
                    </div>
                </div>
                <div class="form-item m goods-price">
                    <div class="form-key"><span>商品价格</span></div>
                    <div class="form-value">
                        <div class="form-input-wr">
                            <input name="price" id='price' type="text" class="form-control" value="" >
                        </div>
   
                    </div>
                    <div class="form-value">
  
                        <div class="form-input-wr">
                            <input name="daigo_price" id='daigo_price' type="text" placeholder="跑路费" class="form-control" value="" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-select">
                </div>
                <div class="form-item m">
                <br/>
                    <div class="form-key"><span>手机号</span></div>
                    <div class="form-value">
                        <div class="form-input-wr">
                            <input value="" name="phone" placeholder="手机号" minlength="11" type="text" class="form-control" required="" aria-required="true">
                            <input type="hidden" name="_token" value = "{{ csrf_token() }}"/>
                            <input type="hidden" name="school_id" value = "1"/>
                        </div>
                    
                    <br/>
        <div class="form-item l goods-title">
                    <div class="form-key"><span></span></div>
                    <div class="form-value">
                        <div class="form-input-wr">
                        <input class="btn btn-primary" type="submit" value="发布"/>
                      
                        </div>
                    </div>
                </div>
        </div>
        </div>
                </div>
               </div>    
         
                
            </form>
        </div>
   <script src="{{ URL::asset('frontend/js/daibu.js')}}"></script>
   <script src="{{ URL::asset('admin/js/validate/jQuery.Form.js')}}"></script>
   <script src="{{ URL::asset('admin/js/validate/jquery.validate.js')}}"></script>
   <script src="{{ URL::asset('admin/js/validate/jquery.validate.extend.js')}}"></script>



    <!--底部推广 s-->
    <div class="w gz-zq">
    <div class="zq-crm clearfix">
      
</div>    <!--底部推广 e -->

</div>
<!-- 首页内容区  e -->

<!-- 底部  s -->
<div class="footer">
    <!--加载footer 信息部分 -->
   <div class="company-info clearfix">
    <img src="images/logo.jpg" width='150' hight='160' alt="校园直卖网" style=' float:left;'>
    <div class="phone-email" >
        <p>
            咨询电话：<i>400-023-1529</i> <br>
            <span>（周一至周日 8:00-21:00）</span>
        </p>
        <p>售后服务专线：400-066-8780  </p>
    </div>
    <img src="picture/weixin.png" alt="" class="gz-ewm">
    <p class="ewm-tit">关注微信</p>
    <img src="picture/weixin.png" alt="" class="gz-ewm">
    <p class="ewm-tit">下载APP</p>
    <div class="basic-info">
        <div class="info-link">
            <a rel="nofollow" href="/bj/aboutus/" target="_blank">关于校园</a>
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
    <!--seo 链接 -->
    
    <div class="friendly-link">
        <p class="link-tit">热门品牌：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
                                    <a href="/bj/dazhong/" target="_blank">北京二手大众</a>
                            <a href="/bj/hyundai/" target="_blank">北京二手现代</a>
                            <a href="/bj/bmw/" target="_blank">北京二手宝马</a>
                            <a href="/bj/audi/" target="_blank">北京二手奥迪</a>
                            <a href="/bj/benz/" target="_blank">北京二手奔驰</a>
                            <a href="/bj/buick/" target="_blank">北京二手别克</a>
                            <a href="/bj/ford/" target="_blank">北京二手福特</a>
                            <a href="/bj/toyota/" target="_blank">北京二手丰田</a>
                            <a href="/bj/richan/" target="_blank">北京二手日产</a>
                            <a href="/bj/honda/" target="_blank">北京二手本田</a>
                            <a href="/bj/chevrolet/" target="_blank">北京二手雪佛兰</a>
                            <a href="/bj/mazda/" target="_blank">北京二手马自达</a>
                            <a href="/bj/kia/" target="_blank">北京二手起亚</a>
                            <a href="/bj/biaozhi/" target="_blank">北京二手标致</a>
                            <a href="/bj/changan/" target="_blank">北京二手长安</a>
                            <a href="/bj/citroen/" target="_blank">北京二手雪铁龙</a>
                            <a href="/bj/landrover/" target="_blank">北京二手路虎</a>
                            <a href="/bj/byd/" target="_blank">北京二手比亚迪</a>
                            <a href="/bj/porsche/" target="_blank">北京二手保时捷</a>
                            <a href="/bj/hafu/" target="_blank">北京二手哈弗</a>
                            <a href="/bj/chery/" target="_blank">北京二手奇瑞</a>
                            <a href="/bj/skoda/" target="_blank">北京二手斯柯达</a>
                            <a href="/bj/mini/" target="_blank">北京二手MINI</a>
                            <a href="/bj/suzuki/" target="_blank">北京二手铃木</a>
                            <a href="/bj/shenbao/" target="_blank">北京二手北汽绅宝</a>
                            <a href="/bj/jeep/" target="_blank">北京二手Jeep</a>
                            <a href="/bj/jianghuai/" target="_blank">北京二手江淮</a>
                            <a href="/bj/volvo/" target="_blank">北京二手沃尔沃</a>
                            <a href="/bj/huachen/" target="_blank">北京二手金杯</a>
                            <a href="/bj/mitsubishi/" target="_blank">北京二手三菱</a>
                            <a href="/bj/jiebao/" target="_blank">北京二手捷豹</a>
                            <a href="/bj/zhongtai/" target="_blank">北京二手众泰</a>
                            <a href="/bj/dongnan/" target="_blank">北京二手东南</a>
                            <a href="/bj/changcheng/" target="_blank">北京二手长城</a>
                            <a href="/bj/jili/" target="_blank">北京二手吉利</a>
                        </div>
    <div class="friendly-link">
        <p class="link-tit">热门车系：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
                                    <a href="/bj/maiteng/" target="_blank">北京二手大众迈腾</a>
                            <a href="/bj/suteng/" target="_blank">北京二手大众速腾</a>
                            <a href="/bj/passat/" target="_blank">北京二手大众帕萨特</a>
                            <a href="/bj/baolai/" target="_blank">北京二手大众宝来</a>
                            <a href="/bj/langyi/" target="_blank">北京二手大众朗逸</a>
                            <a href="/bj/golf/" target="_blank">北京二手大众高尔夫</a>
                            <a href="/bj/tuguan/" target="_blank">北京二手大众途观</a>
                            <a href="/bj/dazhong-polo/" target="_blank">北京二手大众大众PO...</a>
                            <a href="/bj/bmw-5/" target="_blank">北京二手宝马宝马5系</a>
                            <a href="/bj/bmw-3/" target="_blank">北京二手宝马宝马3系</a>
                            <a href="/bj/fute-fukesi/" target="_blank">北京二手福特福克斯</a>
                            <a href="/bj/mondeo/" target="_blank">北京二手福特蒙迪欧</a>
                            <a href="/bj/audi-a6l/" target="_blank">北京二手奥迪奥迪A6...</a>
                            <a href="/bj/audi-q5-jinkou/" target="_blank">北京二手奥迪奥迪Q5</a>
                            <a href="/bj/audi-a8l/" target="_blank">北京二手奥迪奥迪A8...</a>
                            <a href="/bj/audi-a4l/" target="_blank">北京二手奥迪奥迪A4...</a>
                            <a href="/bj/mazida6/" target="_blank">北京二手马自达马自达...</a>
                            <a href="/bj/xiandai-ix35/" target="_blank">北京二手现代现代ix...</a>
                            <a href="/bj/yilante-yuedong/" target="_blank">北京二手现代悦动</a>
                            <a href="/bj/sunata/" target="_blank">北京二手现代索纳塔</a>
                            <a href="/bj/shengdajinkou/" target="_blank">北京二手现代全新胜达</a>
                            <a href="/bj/chevrolet-keluzi/" target="_blank">北京二手雪佛兰科鲁兹</a>
                            <a href="/bj/benz-c/" target="_blank">北京二手奔驰奔驰C级</a>
                            <a href="/bj/benz-e/" target="_blank">北京二手奔驰奔驰E级</a>
                            <a href="/bj/buick-junwei/" target="_blank">北京二手别克君威</a>
                            <a href="/bj/buick-gl8/" target="_blank">北京二手别克别克GL...</a>
                            <a href="/bj/buick-junyue/" target="_blank">北京二手别克君越</a>
                            <a href="/bj/i-yage/" target="_blank">北京二手本田雅阁</a>
                            <a href="/bj/mini-mini/" target="_blank">北京二手MINIMI...</a>
                            <a href="/bj/h6/" target="_blank">北京二手哈弗哈弗H6</a>
                            <a href="/bj/tianlai/" target="_blank">北京二手日产天籁</a>
                            <a href="/bj/qida/" target="_blank">北京二手日产骐达</a>
                            <a href="/bj/kaimeirui/" target="_blank">北京二手丰田凯美瑞</a>
                            <a href="/bj/hanlanda/" target="_blank">北京二手丰田汉兰达</a>
                            <a href="/bj/c5-jinkou/" target="_blank">北京二手雪铁龙雪铁龙...</a>
                        </div>
        <div class="friendly-link">
        <p class="link-tit">友情链接：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
                                    <a href="http://www.chinawutong.com/baike/">物流百科</a>
                            <a href="http://bj.ganji.com/ershouche/">赶集</a>
                            <a href="http://www.che127.com/beijing/">北京</a>
                            <a href="http://beijing.tianqi.com/15/">北京天气预报15天</a>
                            <a href="http://www.jiajuol.com/beijing/">北京装修网</a>
                            <a href="http://beijing.ganchang.cn/">北京个人</a>
                            <a href="http://www.icauto.com.cn/weizhang/">违章查询</a>
                            <a href="http://bj.58che.com/">北京车市</a>
                            <a href="http://beijing.baixing.com/cheliang/">北京</a>
                            <a href="http://beijing.huangye88.com/">北京信息港</a>
                            <a href="http://www.xbaixing.com/bj/">北京百姓网</a>
                            <a href="http://www.chexun.com/">车讯网</a>
                            <a href="http://www.862sc.com/">伯乐网</a>
                            <a href="http://bj.16888.com/">北京校园网</a>
                            <a href="http://www.atzuche.net/">北京租车公司</a>
                            <a href="http://www.12365auto.com/">车质网</a>
                            <a href="http://bj.58.com/ershouche/">北京</a>
                            <a href="http://pl.jxedt.com/bj/">北京校园陪练</a>
                            <a href="http://www.cheping.com.cn/">车评网</a>
                            <a href="http://www.lvmama.com/lvyou/">驴妈妈旅游攻略</a>
                            <a href="http://www.che.com/bj/">北京</a>
                            <a href="http://www.eenzo.com/">保时捷</a>
                            <a href="http://bj.zhaoshang800.com/">北京厂房出租</a>
                            <a href="http://www.chachaba.com/beijing/">北京地图</a>
                            <a href="http://www.jc001.cn/area-bj">北京建材网</a>
                            <a href="http://bj.cn2che.com/">北京</a>
                            <a href="http://beijing.qfang.com/">北京房产网</a>
                            <a href="http://www.autotimes.com.cn/beijing/">北京校园网</a>
                            <a href="http://bj.273.cn/">北京</a>
                            <a href="http://beijing.kuyiso.com/">北京分类信息</a>
                            <a href="http://www.chinacar.com.cn/keche/">中国校园网客车</a>
                            <a href="http://www.qc188.com/beijing/">北京校园网</a>
                            <a href="http://www.qqddc.com/">全球电动车网</a>
                            <a href="http://www.t139.com/">T139校园改装网</a>
                            <a href="http://cz.xcabc.com/">西游车展网</a>
                            <a href="http://2sc.sohu.com/bj/">搜狐</a>
                            <a href="http://www.huizuche.com/">美国租车</a>
                        </div>
    
    <div class="friendly-link">
        <p class="link-tit">热门城市：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
                                    <a href="/www/">全国</a>
                            <a href="/zz/">郑州</a>
                            <a href="/sh/">上海</a>
                            <a href="/sy/">沈阳</a>
                            <a href="/km/">昆明</a>
                            <a href="/bj/">北京</a>
                            <a href="/nn/">南宁</a>
                            <a href="/cc/">长春</a>
                            <a href="/cd/">成都</a>
                            <a href="/tj/">天津</a>
                            <a href="/gz/">广州</a>
                            <a href="/cq/">重庆</a>
                            <a href="/dg/">东莞</a>
                            <a href="/dl/">大连</a>
                            <a href="/sjz/">石家庄</a>
                            <a href="/hz/">杭州</a>
                            <a href="/lz/">兰州</a>
                            <a href="/qd/">青岛</a>
                            <a href="/xa/">西安</a>
                            <a href="/nb/">宁波</a>
                            <a href="/jn/">济南</a>
                            <a href="/sz/">深圳</a>
                            <a href="/gy/">贵阳</a>
                            <a href="/tangshan/">唐山</a>
                            <a href="/hrb/">哈尔滨</a>
                            <a href="/su/">苏州</a>
                            <a href="/wh/">武汉</a>
                            <a href="/foshan/">佛山</a>
                            <a href="/fz/">福州</a>
                            <a href="/nj/">南京</a>
                            <a href="/cs/">长沙</a>
                            <a href="/"></a>
                            <a href="/zq_map/allmap/">信息推荐</a>
                            <a href="/zq_pd/suoyin/s_a/">校园信息</a>
                            <a href="/zq_pd/suoyin/s_A/">A</a>
                            <a href="/zq_pd/suoyin/s_B/">B</a>
                            <a href="/zq_pd/suoyin/s_C/">C</a>
                            <a href="/zq_pd/suoyin/s_D/">D</a>
                            <a href="/zq_pd/suoyin/s_E/">E</a>
                            <a href="/zq_pd/suoyin/s_F/">F</a>
                            <a href="/zq_pd/suoyin/s_G/">G</a>
                            <a href="/zq_pd/suoyin/s_H/">H</a>
                            <a href="/zq_pd/suoyin/s_I/">I</a>
                            <a href="/zq_pd/suoyin/s_J/">J</a>
                            <a href="/zq_pd/suoyin/s_K/">K</a>
                            <a href="/zq_pd/suoyin/s_L/">L</a>
                            <a href="/zq_pd/suoyin/s_M/">M</a>
                            <a href="/zq_pd/suoyin/s_N/">N</a>
                            <a href="/zq_pd/suoyin/s_O/">O</a>
                            <a href="/zq_pd/suoyin/s_P/">P</a>
                            <a href="/zq_pd/suoyin/s_Q/">Q</a>
                            <a href="/zq_pd/suoyin/s_R/">R</a>
                            <a href="/zq_pd/suoyin/s_S/">S</a>
                            <a href="/zq_pd/suoyin/s_T/">T</a>
                            <a href="/zq_pd/suoyin/s_U/">U</a>
                            <a href="/zq_pd/suoyin/s_V/">V</a>
                            <a href="/zq_pd/suoyin/s_W/">W</a>
                            <a href="/zq_pd/suoyin/s_X/">X</a>
                            <a href="/zq_pd/suoyin/s_Y/">Y</a>
                            <a href="/zq_pd/suoyin/s_Z/">Z</a>
                            <a href="/zq_pd/suoyin/s_0/">0</a>
                            <a href="/zq_pd/suoyin/s_1/">1</a>
                            <a href="/zq_pd/suoyin/s_2/">2</a>
                            <a href="/zq_pd/suoyin/s_3/">3</a>
                            <a href="/zq_pd/suoyin/s_4/">4</a>
                            <a href="/zq_pd/suoyin/s_5/">5</a>
                            <a href="/zq_pd/suoyin/s_6/">6</a>
                            <a href="/zq_pd/suoyin/s_7/">7</a>
                            <a href="/zq_pd/suoyin/s_8/">8</a>
                            <a href="/zq_pd/suoyin/s_9/">9</a>
                        </div>

    

<div class="friendly-link">
    <p class="link-tit">移动版：</p>
<!--    <span class="open-box"></span>-->
<!--    <span class="close-box" data-role="is_show_box"></span>-->
            <a href="http://m.guazi.com/bj/">校园北京移动页</a>
    </div>

        <!--公司信息-->
    <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
    车好多旧商品车经纪（北京）有限公司&emsp;&emsp;&emsp;
    北京市丰台区南四环中路260号北京新发地校园交易市场旧车经营区B区178号&emsp;&emsp;&emsp;
    010-57317000
</p></div>

            <div class="side-bar">
            <!--返回顶部 -->
            <a rel="nofollow" href="javascript:void(0);" data-role="backToTop" class="totop"></a>
            <a rel="nofollow" href="javascript:void(0);" class="close-side"></a>
            <div data-role="left_area">
                <!--意见反馈 -->
                <a rel="nofollow"  href="javascript:void(0);" class="fb-btn feed_back" baidu_alog="xuanfu&click&index_xuanfu_feedback_c" data-role="feed_back">反馈</a>
                <p style="display: none" class="feed_back_source_url" data-role="feed_back_source_url">https://www.guazi.com:443/bj/</p>
                <p style="display: none" class="feed_back_source_cityid" data-role="feed_back_source_cityid">12</p>
                <a rel="nofollow" href="javascript:void(0);" class="call-back" baidu_alog="xuanfu&click&index_xuanfu_freephone_c"></a>
                <div class="call-back-box">
                    <input type="text" placeholder="填写手机号，座机加区号">
                    
                    <button  class="call-back-btn" >免费通话</button>
                    <i class="icon-arr"></i>
                    <p class="call-back-tip" style="display:none">您输入的手机号码有误</p>
                </div>
                <a rel="nofollow"  href="javascript:void(0);" class="ewm-wx" baidu_alog="xuanfu&click&index_xuanfu_gongzhonghao_c">公众号
        <span class="ewm-box">
          <img src="picture/weixin.png" alt="">
          <i></i><em></em>
        </span>
                </a>
                <a rel="nofollow"  href="javascript:void(0);" class="ewm-app" baidu_alog="xuanfu&click&index_xuanfu_appdownload_c">APP
        <span class="ewm-box">
          <img src="picture/weixin.png" alt="">
          <i></i><em></em>
        </span>
                </a>
            </div>
        </div>
    


<div style='display:none;' class='js-check-post-code' data-str='c08a691ac3788b1a38babce8bba8a74d' data-time='1487678388'></div>
<!-- 底部  e -->

<!--在线客服-->
</body>
</html>
