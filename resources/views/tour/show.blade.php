@extends('layouts.master')

@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="/img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>【南北岛精华游】奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h1>
                        <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            每人 <span class="price">$48000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/tour">新西兰旅游</a></li>
                <li>详情</li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a></p><!-- Map button for tablets/mobiles -->
                <div id="img_carousel" class="slider-pro">
                    <div class="sp-slides">
                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_1.png"
                                 data-small="/img/tour_2.png"
                                 data-medium="/img/tour_3.png"
                                 data-large="/img/tour_4.png"
                                 data-retina="/img/tour_5.png">
                        </div>
                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_1.png"
                                 data-small="/img/tour_1.png"
                                 data-medium="/img/tour_1.png"
                                 data-large="/img/tour_1.png"
                                 data-retina="/img/tour_1.png">
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_2.png"
                                 data-small="/img/tour_2.png"
                                 data-medium="/img/tour_2.png"
                                 data-large="/img/tour_2.png"
                                 data-retina="/img/tour_2.png">
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_3.png"
                                 data-small="/img/tour_3.png"
                                 data-medium="/img/tour_3.png"
                                 data-large="/img/tour_3.png"
                                 data-retina="/img/tour_3.png">
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_4.png"
                                 data-small="/img/tour_4.png"
                                 data-medium="/img/tour_4.png"
                                 data-large="/img/tour_4.png"
                                 data-retina="/img/tour_4.png">
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_5.png"
                                 data-small="/img/tour_5.png"
                                 data-medium="/img/tour_5.png"
                                 data-large="/img/tour_5.png"
                                 data-retina="/img/tour_5.png">
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_6.png"
                                 data-small="/img/tour_6.png"
                                 data-medium="/img/tour_6.png"
                                 data-large="/img/tour_6.png"
                                 data-retina="/img/tour_6.png">
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/tour_1.png"
                                 data-small="/img/tour_2.png"
                                 data-medium="/img/tour_3.png"
                                 data-large="/img/tour_4.png"
                                 data-retina="/img/tour_5.png">
                        </div>

                    </div>
                    <div class="sp-thumbnails">
                        <img alt="" class="sp-thumbnail" src="/img/tour_1.png">
                        <img alt="" class="sp-thumbnail" src="/img/tour_2.png">
                        <img alt="" class="sp-thumbnail" src="/img/tour_3.png">
                        <img alt="" class="sp-thumbnail" src="/img/tour_4.png">
                        <img alt="" class="sp-thumbnail" src="/img/tour_5.png">
                        <img alt="" class="sp-thumbnail" src="/img/tour_6.png">
                    </div>
                </div>

                <hr>
                <div id="ml" style="background-color: #333;font-size: 11px;margin-top:32px;">
                    <div  style="width:100%;margin-right: auto;margin-left: auto;">
                        <ul class="c_ul" style="margin: 0;padding: 0;color: #888;">
                            <li class="new_a" ><a href="#xcjj" onclick="removeClass('xcjj', this)">行程简介</a></li>
                            <li><a href="#hbxx" onclick="removeClass('hbxx',this)">航班信息</a></li>
                            <li><a href="#xcjs" onclick="removeClass('xcjs', this)">行程介绍</a></li>
                            <li><a href="#mstj" onclick="removeClass('mstj', this)">美食推荐</a></li>
                            <li><a href="#zxpl" onclick="removeClass('zxpl', this)">评论区域</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="xcjj">
                        <h3>行程简介</h3>
                    </div>
                    <div class="col-md-9">
                        <h4>关于此行程</h4>
                        <p>
                            美亚境外旅游保险，乐悠游计划二（最高保额30万）
                            旅行礼包：万能电源转换插头、航班拖鞋、睡眠眼罩、充气护颈枕
                            1、导游：当地全程中文导游兼司机服务（每天10小时）
                            2、国内全程客服一对一服务、全程质量跟踪
                            以上报价仅供参考，可能会因为不同的出发城市及时间会有所浮动
                            如果你对以上方案不满意，我们非常乐意为你重新定制方案，欢迎致电我们400-888-8888
                        </p>
                        <h4>行程特色</h4>
                        <p>
                            以上报价仅供参考，可能会因为不同的出发城市及时间会有所浮动
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>高尔夫PGA锦标赛教练携专业华裔助教指导技巧</li>
                                    <li>贯穿南北岛，新西兰TOP5最贵高尔夫球场一网打尽</li>
                                    <li>新西兰专业高尔夫学校颁发的短期技巧培训证书</li>
                                    <li>全程入住5星级酒店或度假村，钻石套餐升级全球TOP20顶级庄园</li>
                                    <li>尽享极致生活: 全球十佳水疗，喷气快艇，红酒品鉴，丛林骑行/游艇出海等奢华体验</li>
                                    <li>全程奔驰豪华专车及专属司机导游</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>新西兰专业高尔夫学校颁发的短期技巧培训证书</li>
                                    <li>全程入住5星级酒店或度假村，钻石套餐升级全球TOP20顶级庄园</li>
                                    <li>尽享极致生活: 全球十佳水疗，喷气快艇，红酒品鉴，丛林骑行/游艇出海等奢华体验</li>
                                    <li>全程奔驰豪华专车及专属司机导游</li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3" id="hbxx">
                        <h3>航班信息</h3>
                    </div>
                    <div class="col-md-9">
                        <h4>关于此行程</h4>
                        <p>
                            美亚境外旅游保险，乐悠游计划二（最高保额30万）
                            旅行礼包：万能电源转换插头、航班拖鞋、睡眠眼罩、充气护颈枕
                            1、导游：当地全程中文导游兼司机服务（每天10小时）
                            2、国内全程客服一对一服务、全程质量跟踪
                            以上报价仅供参考，可能会因为不同的出发城市及时间会有所浮动
                            如果你对以上方案不满意，我们非常乐意为你重新定制方案，欢迎致电我们400-888-8888
                        </p>
                        <h4>行程特色</h4>
                        <p>
                            以上报价仅供参考，可能会因为不同的出发城市及时间会有所浮动
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>美亚境外旅游保险，乐悠游计划二（最高保额30万）</li>
                                    <li>国内全程客服一对一服务、全程质量跟踪</li>
                                    <li>导游：当地全程中文导游兼司机服务（每天10小时）</li>
                                    <li>国内全程客服一对一服务、全程质量跟踪</li>
                                    <li>美亚境外旅游保险，乐悠游计划二（最高保额30万）</li>
                                    <li>旅行礼包：万能电源转换插头、航班拖鞋、睡眠眼罩、充气护颈枕</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>导游：当地全程中文导游兼司机服务（每天10小时）</li>
                                    <li>旅行礼包：万能电源转换插头、航班拖鞋、睡眠眼罩、充气护颈枕</li>
                                    <li>导游：当地全程中文导游兼司机服务（每天10小时）</li>
                                    <li>国内全程客服一对一服务、全程质量跟踪</li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>

                <hr>

                <div class="container margin_60">

                    <div class="row" id="tour_xc">
                        <aside id="xingc" class="col-lg-3 col-md-3" style="width:10%;">
                            <div class="box_style_cat">
                                <ul id="cat_nav">
                                    <li><a href="#travelInfo_1">第一天</a></li>
                                    <li><a href="#travelInfo_2">第二天</a></li>
                                    <li><a href="#travelInfo_3">第三天 </a></li>
                                    <li><a href="#travelInfo_4">第四天 </a></li>
                                </ul>
                            </div>
                        </aside>
                        <div class="col-md-3" id="xcjs">
                            <h3>行程介绍</h3>
                        </div>
                        <div class="col-md-8 add_bottom_15" id="tour_d" style="">
                            <div class="form_title" id="travelInfo_1">
                                <h3><strong>1</strong>DAY1</h3>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class=" table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th colspan="2">
                                                    第一天: 上海——奥克兰（参考航班：  NZ288  14:15-06:50+1  约11小时35分钟）
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    下午
                                                </td>
                                                <td>
                                                    下午于上海机场乘坐国际航班前往南半球美丽国度新西兰奥克兰，开启新西兰高尔夫纯净之旅！
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d_1.png">
                                                        </li>
                                                        <li>
                                                            <img src="/img/tour/tour_d_2.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--End step -->

                            <div class="form_title" id="travelInfo_2">
                                <h3><strong>2</strong>DAY2</h3>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class=" table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th colspan="2">
                                                    第二天: 奥克兰--皇后镇
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    上午
                                                </td>
                                                <td>
                                                    国际航班抵达奥克兰后，转乘国内航班飞抵游客如织、景色如画、全世界独一无二的皇后镇。它依山傍水，风光旖旎，据说因为美得适合维多利亚女王居住，因此被命名为“皇后镇”。这里是新西兰著名的探险之都，世界蹦极跳的发源地，更是新西兰最南端的顶级葡萄酒产区。开始您的至臻奢享高尔夫之旅。
                                                    抵达后，将驱车入住美国前总统比尔——克林顿访问新西兰期间曾入住的密尔布鲁克豪华度假村（Millbrook Resort）。该庄园于曾三次夺得 “世界旅游大奖”之“新西兰最佳高尔夫度假村”称号 。
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d2_1.png">
                                                        </li>
                                                        <li>
                                                            <img src="/img/tour/tour_d2_2.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    下午
                                                </td>
                                                <td>
                                                    下午，自由【探索庄园】，享受温水游泳池、露天温泉浴池、健身中心、网球场以及各种自行车道和步道等庄园免费设施，解除旅行的疲倦，体验南半球的奢华慢生活。
                                                    早餐：机餐    午餐：机餐    晚餐：敬请自理
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d2_3.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form_title" id="travelInfo_3">
                                <h3><strong>3</strong>DAY3</h3>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class=" table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th colspan="2">
                                                    箭镇 密尔布鲁克豪华度假村
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    上午
                                                </td>
                                                <td>
                                                    早餐后，将在高尔夫PGA锦标赛新西兰教练携华人助教的陪伴下开始第一场球。该球场被誉为“林克斯（Links） 风情的高山草甸”，由此可见其特色：它是世界一流的“稀疏草原”课程和“沙地”课程的完美融合，提供了各种自然美景，包括草丛、溪流、石片岩、树木和建筑物
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d3_1.png">
                                                        </li>
                                                        <li>
                                                            <img src="/img/tour/tour_d3_2.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    下午
                                                </td>
                                                <td>
                                                    下午稍作休息后，高尔夫PGA锦标赛新西兰教练携华人助教，将根据上午您的表现，参考您的实际需求，定制化教授高尔夫技巧，让您在最短的时间内减少杆数！
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d3_3.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form_title" id="travelInfo_4">
                                <h3><strong>4</strong>DAY4</h3>
                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class=" table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th colspan="2">
                                                    箭镇 希尔高尔夫球场 （约5分钟）
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    上午
                                                </td>
                                                <td>
                                                    早餐后，驱车前往希尔高尔夫球场，专业华人助教将陪伴在您左右，帮助您巩固技巧。身处广袤冰蚀河谷的如画景致之下，坐落于白雪皑皑的群山怀抱之中，希尔高尔夫球场不仅拥有新西兰高尔夫球场中最令人惊叹的美景，它的难度系数也是首屈一指的。 而球场中遍布的各国艺术家精心制作的现代雕塑作品，更为其自然之美中又添入现代人文气息，绝对是心灵和视觉的双重饕餮盛宴。
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d4_1.png">
                                                        </li>
                                                        <li>
                                                            <img src="/img/tour/tour_d4_2.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    下午
                                                </td>
                                                <td>
                                                    下午，游览箭镇（Arrowtown）。这个淘金小镇始建于十九世纪中叶，以秋天的落英美景，黄金开采历史和古建筑闻名于世。如今，它依然保留着淘金热时期风貌。那一间间欧式的房子、各种咖啡厅、商店，还有不时出现的哈雷摩托和双层巴士，各种各样的元素，相信都会让您流连忘返。
                                                    <ul class="time_photo">
                                                        <li>
                                                            <img src="/img/tour/tour_d4_3.png">
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End row -->
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3" id="mstj">
                        <h3>美食推荐</h3>
                    </div>
                    <div class="col-md-9">
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        美食推荐
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 50px;">
                                        水果
                                    </td>
                                    <td>
                                        民以食为天，要深度地了解一个地方，从它当地的特色美食入手，再适合不过了。新西兰美食以兼容并蓄、天然新鲜著称。在这里，阳光充足，降雨充分,遍布全岛的火山灰土壤肥沃丰饶，令新西兰成为农业与畜牧的天堂。而大海则源源不绝地为新西兰送来鲜美的扇贝、笛鲷、鲔鱼以及其它味道鲜美的鱼类。
                                        <ul class="time_photo">
                                            <li>
                                                <img src="/img/tour/food_1.png">
                                            </li>
                                            <li>
                                                <img src="/img/tour/food_2.png">
                                            </li>
                                            <li>
                                                <img src="/img/tour/food_3.png">
                                            </li>
                                            <li>
                                                <img src="/img/tour/food_4.png">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50px;">
                                        菜类
                                    </td>
                                    <td>
                                        民以食为天，要深度地了解一个地方，从它当地的特色美食入手，再适合不过了。新西兰美食以兼容并蓄、天然新鲜著称。在这里，阳光充足，降雨充分,遍布全岛的火山灰土壤肥沃丰饶，令新西兰成为农业与畜牧的天堂。而大海则源源不绝地为新西兰送来鲜美的扇贝、笛鲷、鲔鱼以及其它味道鲜美的鱼类。
                                        <ul class="time_photo">
                                            <li>
                                                <img src="/img/tour/food_5.png">
                                            </li>
                                            <li>
                                                <img src="/img/tour/food_6.png">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3" id="zxpl">
                        <div class="mockup-content">

                            <div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed" >
                                <button type="button" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">撰写评论</button>
                                <div class="morph-content" style="background-color:#fff;">
                                    <div>
                                        <div class="content-style-form content-style-form-1" id="comment">
                                            <span class="icon icon-close">Close the dialog</span>
                                            <form>
                                                <p><a style="color:#000;font-family:'Microsoft YaHei';">评论内容:</a><textarea id="txt_comment" style="width:100%;height:80px;"></textarea></p>


                                                <div class="star_comment" id="mstar_comment">
                                                    <a>景点评分:</a>
                                                    <span></span>
                                                    <ul>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>
                                                    </ul>
                                                    <span></span>
                                                    <p></p>
                                                    <input name="grade" id="mstar_grade" type="hidden" value="" />
                                                </div>
                                                <br />

                                                <div class="star_comment" id="jstar_comment">
                                                    <a>价格评分:</a>
                                                    <span></span>
                                                    <ul>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>
                                                    </ul>
                                                    <span></span>
                                                    <p></p>
                                                    <input name="grade" id="jstar_grade" type="hidden" value="" />
                                                </div>
                                                <br />
                                                <div class="star_comment" id="dstar_comment">
                                                    <a>导游评分:</a>
                                                    <span></span>
                                                    <ul>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>
                                                    </ul>
                                                    <span></span>
                                                    <p></p>
                                                    <input name="grade" id="dstar_grade" type="hidden" value="" />
                                                </div>
                                                <br/>
                                                <div class="star_comment" id="zstar_comment">
                                                    <a>质量评分:</a>
                                                    <span></span>
                                                    <ul>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>
                                                        <li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>
                                                    </ul>
                                                    <span></span>
                                                    <p></p>
                                                    <input name="grade" id="zstar_grade" type="hidden" value="" />
                                                </div>

                                                <p><button id="btn_comment">提交</button></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- morph-button -->
                        </div>

                    </div>
                    <div class="col-md-9" id="all_comment">
                        <div id="general_rating">
                            11条评论
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div><!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        目的地
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>
                                        导游
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        价格
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        </div>
                                    </li>
                                    <li>
                                        质量
                                        <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row -->
                        <hr>
                        <div class="review_strip_single">
                            <img src="/img/avatar1.jpg" alt="" class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single">
                            <img src="/img/avatar3.jpg" alt="" class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->

                        <div class="review_strip_single last">
                            <img src="/img/avatar2.jpg" alt="" class="img-circle">
                            <small> - 10 March 2015 -</small>
                            <h4>Jhon Doe</h4>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                            </p>
                            <div class="rating">
                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                            </div>
                        </div><!-- End review strip -->
                    </div>
                </div>
            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">
                <div class="box_style_1 expose">
                    <h3 class="inner">- 预定 -</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> 出发日期</label>
                                <input class="date-pick form-control" data-date-format="M d" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>人数</label>
                                <div class="numbers-row">
                                    <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table class="table table_summary" style="margin-top:-15px;">
                        <tbody>
                        <tr>
                            <td>
                                人数
                            </td>
                            <td class="text-right">
                                2
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn_full" href="orderdetail.html">马上预定</a>
                </div><!--/box_style_1 -->
                <div class="box_style_1 expose">
                    <h3 class="inner">热门旅游</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/slider_single_tour/1_medium.jpg" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/slider_single_tour/1_medium.jpg" width="68" height="68" alt="" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/avatar1.jpg" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/slider_single_tour/1_medium.jpg" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <br>

                    <a class="btn_full" href="cart_hotel.html">更多</a>
                </div>
                <div class="box_style_1 expose">
                    <h3 class="inner">热门资讯</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/slider_single_tour/1_medium.jpg" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/slider_single_tour/1_medium.jpg" width="68" height="68" alt="" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/avatar1.jpg" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="/img/slider_single_tour/1_medium.jpg" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4>新西兰天马镇</h4>
                                <small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>
                            </div>
                        </div>
                    </div>
                    <br>

                    <a class="btn_full" href="cart_hotel.html">更多</a>
                </div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4>联系我们</h4>
                    <a href="tel://004542344599" class="phone">+025-58761818</a>
                    <small>周一 至 周日 9.00am - 7.30pm</small>
                </div>

            </aside>
        </div><!--End row -->
    </div><!--End container -->
@endsection


@push('style')
        <style>
            .main_title p {
                margin-top: 5px;
            }

            .main-menu a {
                font-size: 16px;
            }

            #top_links li a {
                /*font-weight: 600;*/
                font-family: 'Microsoft YaHei';
            }

            .star_comment { position: relative; margin: 0px auto 5px auto; height: 44px; float: left; z-index:100;}
            .star_comment a {
                float:left;
                color:#000000;
                font-family:'Microsoft YaHei';
            }
            .star_comment ul, #star_comment span { float: left; display: inline; }
            .star_comment ul { margin: 0 10px; }
            .star_comment ul li a {
                display:none;
            }
            .star_comment ul li i {
                font-size:20px;
            }
            .star_comment li { float: left; width: 29px; height: 27px; cursor: pointer;content:'\e93b';color:#ddd; /*text-indent: -9999px;*/ background-size: cover;list-style:none;}
            .star_comment strong { color: #f60; padding-left: 10px; }
            .star_comment li.on { background-position: 0 0px;content:'\e93b';color:#F90; /*background: url(/img/star_red.png) no-repeat;*/ background-size: cover; }
            .star_comment p { position: absolute; top: 20px; width: 159px; height: 60px; color:#F90;display: none; padding: 7px 10px 0; }
            .star_comment p em { color: #f60; display: block; font-style: normal; }
             .time_photo {
                 padding: 10px 0 20px 0;
                 color: #999;
                 overflow: hidden;
             }

            .time_photo li {
                float: left;
                width: 50%;
                padding-left: 5px;
            }

            .time_photo li img {
                width: 100%;
                height: 130px;
                margin-bottom: 4px;
            }
            ul#cat_nav li a {
                font-family:'Microsoft YaHei';
                padding:10px 5px;

                text-align:center;
            }
            .room {
                width:100%;
                margin-bottom:20px;
            }
            .room div {
                float:left;
            }
            .hold_room {
                width:65%;
                margin:-10px 0 0 10px;
            }
            .hold_room small {
                font-family:'Microsoft YaHei';
            }
            ul#cat_nav li a:after {
                content:"";
                right:0;
            }
            ul#cat_nav li a {
                color:#fff;
                background-color:#82ca9c;
            }

            .step {
                width: 75%;
            }
            #position ul li:after {
                content:"";
            }
            .c_ul li{
                display: inline-block;
                padding-right: 8px;
                margin-right: 3px;
                position: relative;
                font-family: 'Microsoft YaHei';
                padding-left:30px;
                width:19%;
                padding:10px 0 10px 0;
                text-align:center;
            }
            .c_ul li a{
                color:#fff;
            }
            .new_a {
                background-color:#666;
            }
            /*.form_title {
                margin-left: 22.5%;
            }*/
        </style>
<!-- CSS -->
<link href="/css/slider-pro.min.css" rel="stylesheet">
<link href="/css/date_time_picker.css" rel="stylesheet">
<link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
<link href="/css/component.css" rel="stylesheet">
<link href="/css/content.css" rel="stylesheet">
<style>
    .time_photo {
        padding: 10px 0 20px 0;
        color: #999;
        overflow: hidden;
    }
    .time_photo li {
        float: left;
        width: 50%;
        padding-left: 5px;
    }
    .time_photo li img {
        width: 100%;
        height: 130px;
        margin-bottom: 4px;
    }
</style>
@endpush

@push('script')
<!-- Specific scripts -->
<script src="/js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<!-- Date and time pickers -->
<script src="/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function( $ ) {
        $( '#img_carousel' ).sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>


<!-- Date and time pickers -->
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/js/classie.js"></script>
<script type="text/javascript" src="/js/uiMorphingButton_fixed.js"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $(document).ready(function ($) {
        $('#img_carousel').sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });

    function removeClass(id,obj)
    {
        var ev = ev || window.event;
        var thisId = document.getElementById(id);
        document.documentElement.scrollTop = document.body.scrollTop = $(thisId).offset().top-100-64;// - oBtn.offsetHeight;
        ev.preventDefault();
    }
    function hide() {
        $("#tour_d .form_title").each(function () {
            if ($(this).index() > 2) {
                $(this).hide();
                $(this).next().hide();
            }
        })
        $("#cat_nav li").each(function () {
            if ($(this).index() > 1 && $(this).text() != "收起行程") {
                //alert( $(this).index()+"_"+$("#cat_nav li").length);
                $(this).hide();
            }
        })
    }
    var show = function (ulid) {
        var text = $("#sh").text();
        if (text == "展开行程") {
            $("#cat_nav li").show();
            $("#tour_d .form_title").show();
            $("#tour_d .form_title").next().show();
            $("#sh").text("收起行程")
        }
        else {
            hide();
            $("#sh").text("展开行程")
        }

    }
    window.onresize = function () {
        var $ml = $("#ml"), $xingc = $("#xingc"), mpos = $ml.css("position"), xpos = $xingc.css("position");
        if (mpos != "fixed" && window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
            $ml.css("width", "58%");
        }
        else {
            $ml.css("width", "90%");
        }
        if (xpos != "fixed" && window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
            $xingc.css("width", "8.5%");
        }
        else {
            $xingc.css("width", "12.5%");
        }
    }
    window.onscroll = function () {
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        var top = $("#tour_xc").offset().top;
        var pl_top = $("#zxpl").offset().top;
        if (t > (top -60)) {
            var $xingc = $("#xingc");
            $xingc.css("position", "fixed").css("top", "105px").css("z-index", "9999");
            if (window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
                $xingc.css("width", "8.5%");
            }
            else {
                $xingc.css("width", "12.5%");
            }

            $("#tour_d,#xcjs").css("margin-left", "10%");
        }

        else {
            $("#xingc").css("position", "relative").css("top", "").css("width", "10%");
            $("#tour_d,#xcjs").css("margin-left", "0");
        }
        if (t > (pl_top - $("#xingc").height()-100))
        {
            $("#xingc").css("position", "relative").css("top", "").css("width", "10%");
            $("#tour_d,#xcjs").css("margin-left", "0");
        }
        var ml_top = $("#xcjj").offset().top;
        if (t > (ml_top - 43))
        {
            var $ml = $("#ml");
            $ml.css("position", "fixed").css("top", "30px").css("z-index", "999");
            if (window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
                $ml.css("width", "58%");
            }
            else {
                $ml.css("width", "90%");
            }
            //$("#ml").css("position", "fixed").css("top", "30px").css("z-index", "999").css("width", "56%");
        }
        else {
            $("#ml").css("position", "relative").css("top", "").css("width", "");
            //$("#tour_d").css("margin-left", "0");
        }
    }
    $(function () {
        //$("#xingc").css("top", $("#tour_xc").offset().top+"px");
        var $tour = $("#tour_d .form_title");
        var $travel_d=$("#tour_d .form_title").length;
        if ($travel_d > 2)
        {
            hide();
            $("#cat_nav").append("<li><a href='###' onclick=\"show('sh')\" id=\"sh\">展开行程</a></li>")
        }
        $("#btn_comment").click(function () {
            var txt_comment = $("#txt_comment").val();
            var cmoment="<div class=\"review_strip_single\"> <img src=\"/img/avatar1.jpg\" alt=\"\" class=\"img-circle\"><small> - 10 March 2015 -</small>";
            cmoment = cmoment + "<h4>Jhon Doe</h4><p>" + txt_comment + "</p><div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i></div> </div>";
            $("#all_comment").append(cmoment);
            alert("评论成功");
            $(".morph-content").hide();
        })
    })
    function s (id,gradeId) {
        //var eles = document.getElementsByClassName("star_comment");
        var oStar = document.getElementById(id);
        //var oStar = eles[i];
        var aLi = oStar.getElementsByTagName("li");
        var oUl = oStar.getElementsByTagName("ul")[0];
        var oSpan = oStar.getElementsByTagName("span")[1];
        var oP = oStar.getElementsByTagName("p")[0];
        var i = iScore = iStar = 0;
        var oH = document.getElementById(gradeId);
        var aMsg = [
            "很不满意|非常不满",
            "不满意|不满意",
            "一般|一般",
            "满意|满意",
            "非常满意|非常满意"
        ]

        for (i = 1; i <= aLi.length; i++) {
            aLi[i - 1].index = i;

            //鼠标移过显示分数
            aLi[i - 1].onmouseover = function () {
                fnPoint(this.index);
                //浮动层显示
                // oP.style.display = "block";
                //计算浮动层位置
                //                oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
                //                //匹配浮动层文字内容
                //                oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
            };

            //鼠标离开后恢复上次评分
            aLi[i - 1].onmouseout = function () {
                fnPoint();
                //关闭浮动层
                oP.style.display = "none"
            };

            //点击后进行评分处理
            aLi[i - 1].onclick = function () {
                iStar = this.index;
                oP.style.display = "none";
                oH.setAttribute("value", iStar);
                //oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
            }
        }

        //评分处理
        function fnPoint(iArg) {
            //分数赋值
            iScore = iArg || iStar;
            for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";
        }
    };
    (function () {
        var docElem = window.document.documentElement, didScroll, scrollPosition;

        // trick to prevent scrolling when opening/closing button
        function noScrollFn() {
            window.scrollTo(scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0);
        }

        function noScroll() {
            window.removeEventListener('scroll', scrollHandler);
            window.addEventListener('scroll', noScrollFn);
        }

        function scrollFn() {
            window.addEventListener('scroll', scrollHandler);
        }

        function canScroll() {
            window.removeEventListener('scroll', noScrollFn);
            scrollFn();
        }

        function scrollHandler() {
            if (!didScroll) {
                didScroll = true;
                setTimeout(function () { scrollPage(); }, 60);
            }
        };

        function scrollPage() {
            scrollPosition = { x: window.pageXOffset || docElem.scrollLeft, y: window.pageYOffset || docElem.scrollTop };
            didScroll = false;
        };

        scrollFn();

        [].slice.call(document.querySelectorAll('.morph-button')).forEach(function (bttn) {
            new UIMorphingButton(bttn, {
                closeEl: '.icon-close',
                onBeforeOpen: function () {
                    // don't allow to scroll
                    noScroll();
                },
                onAfterOpen: function () {
                    // can scroll again
                    canScroll();
                },
                onBeforeClose: function () {
                    // don't allow to scroll
                    noScroll();
                },
                onAfterClose: function () {
                    // can scroll again
                    canScroll();
                }
            });
        });

        // for demo purposes only
        [].slice.call(document.querySelectorAll('form button')).forEach(function (bttn) {
            bttn.addEventListener('click', function (ev) { ev.preventDefault(); });
        });
    })();
    $(function () {
        $("#comment div.star_comment").each(function () {
            s($(this).attr("id"), $(this).find("input[name='grade']").attr("id"));
        })
    })
</script>
<!-- Map -->
<script src="http://maps.google.cn/maps/api/js"></script>
<script src="/js/map.js"></script>
<script src="/js/infobox.js"></script>

<!--Review modal validation -->
<script src="/assets/validate.js"></script>

<script src="/js/datepicker_advanced.js"></script>
@endpush