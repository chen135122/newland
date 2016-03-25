@extends('layouts.master')
@push('style')
<link href="rs-plugin/css/settings.css" rel="stylesheet">
<link href="css/extralayers.css" rel="stylesheet">
    <style>
        .main_title p {
            /*font-size: 14px !important;*/
            margin-top: 5px;

        }

        .main-menu a {
            font-size: 16px;
            /*font-weight: 700;*/
        }

        .col-md-4 ul li a {
            font-weight: normal;
        }

        #top_links li a {
            /*font-weight: 600;*/
            font-family: 'Microsoft YaHei';
        }
        .col-md-4 ul {
            float:left;
        }
        .tp_d {
            color: #ffffff;
            font-size: 16px;
            text-transform: uppercase;
            font-family: 'Microsoft YaHei';
            /*font-weight: bold;*/
        }
        .tp_detail {
            font-family:'Microsoft YaHei';
            height:36px;
            overflow:hidden;
        }
        .col-md-4 p {
            font-size:14px;
            color:coral;
        }
        .col-md-3 > h4 span {
            color:lightcoral;
        }
    </style>
    <style>
        .tour_title > h3, .hotel_title > h3 {
            line-height: 19px !important;
            font-size: 14px !important;
            font-family:'Microsoft YaHei',Arial,sans-serif;
        }
        .tour_title h3 strong {
            font-family:'Microsoft YaHei';
        }
        .tour_title h3 span {
            font-family:'Microsoft YaHei';
            color:black;
        }
        .main-menu ul li {
            margin-left:15px;
        }
        .col-md-3 i:before {
            font-size:100px;
        }
    </style>

@endpush

@section('content')

<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/index_1.jpg" alt="slidebg1" data-lazyload="img/index_1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">新西兰一站式服务</div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div class="tp_d">
                        旅游 买房 留学 服务
                    </div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
                    <!--<a href='#' class="button_intro">查看详情</a> <a href='#' class=" button_intro outline">联系我们</a>-->
                </div>
            </li>
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/index_2.jpg" alt="slidebg1" data-lazyload="img/index_2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">新西兰一站式服务</div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div class="tp_d">
                        旅游 买房 留学 服务
                    </div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
                    <!--<a href='#' class="button_intro">查看详情</a> <a href='#' class=" button_intro outline">联系我们</a>-->
                </div>
            </li>
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/index_3.jpg" alt="slidebg1" data-lazyload="img/index_3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">新西兰一站式服务</div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div class="tp_d">
                        旅游 买房 留学 服务
                    </div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">
                    <!--<a href='#' class="button_intro">查看详情</a> <a href='#' class=" button_intro outline">联系我们</a>-->
                </div>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<!-- End Slider -->
<div class="white_bg">
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center" style="cursor: pointer;" onclick="window.location='/property'">
                <p>
                    <i class="icon_set_1_icon-23"></i>

                </p>
                <h4><span>房产置业</span></h4>
                <p class="tp_detail" style="">
                    精挑细选的每座大楼, 让您精确领略新西兰独特的家庭, 享受旅途的轻松惬意.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center"  style="cursor: pointer;" onclick="window.location='/tour'">
                <p>
                    <i class="icon_set_1_icon-4"></i>

                </p>
                <h4><span>国际旅游</span></h4>
                <p class="tp_detail">
                    从小学初中到大学, 我们提供最新的政策信息和最权威的咨询.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center"  style="cursor: pointer;" onclick="window.location='/study'">
                <p>
                    <i class="icon_set_1_icon-30"></i>
                </p>
                <h4><span>移民留学</span></h4>
                <p class="tp_detail">
                    兢兢业业为您工作, 恪尽职守为您守护, 一站式管家服务, 如您亲临.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <i class="icon_set_1_icon-36"></i>
                </p>
                <h4><span>商城积分</span></h4>
                <p class="tp_detail">
                    无论是投资自住, 还是留学深造, 我们用专业的知识, 为您提供最优的选择.
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->

<div class="container margin_60">

    <div class="main_title">
        <h2>新西兰 <span>最热</span> 旅游路线</h2>
        <p>在接下来的行程里，您可以根据实际情况合理的调整行程，我们将竭力为您打造一次被宠坏的旅行。</p>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="tour/1">
                        <img src="img/tour_box_1.jpg" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <!--<i class="icon_set_1_icon-44"></i>-->自由行<span class="price">¥3900</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><span>【南北岛精华游】</span> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="tour/1">
                        <img src="img/tour_box_2.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <!--<i class="icon_set_1_icon-43"></i>-->教会<span class="price">¥45000</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><span>【距离上帝最近的地方大溪地+纯净新西兰】</span> 14天（茉莉雅+波拉波拉+大溪地本岛+新西兰北岛）</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="tour/1">
                        <img src="img/tour_box_3.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="badge_save">Save<strong>30%</strong></div>
                        <div class="short_info">
                            <!--<i class="icon_set_1_icon-44"></i>-->历史风格<span class="price">¥4800</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><span>【冰川纪行】</span> 南岛西海岸冰川9日之旅（法兰士约瑟夫冰川+米尔福德峡湾）</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="tour/1">
                        <img src="img/tour_box_4.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="badge_save">Save<strong>20%</strong></div>
                        <div class="short_info">
                            <!--<i class="icon_set_1_icon-30"></i>-->徒步旅行<span class="price">¥3600</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><span>【南北岛精华游】</span> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="tour/1">
                        <img src="img/tour_box_14.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="short_info">
                            <!--<i class="icon_set_1_icon-28"></i>-->天空之旅<span class="price">¥4200</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><span>【南北岛精华游】</span> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="tour/1">
                        <img src="img/tour_box_5.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <!--<i class="icon_set_1_icon-44"></i>-->古建筑<span class="price">¥4000</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><span>【南北岛精华游】</span> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->
    </div><!-- End row -->
    <p class="text-center add_bottom_30">
        <a href="/tour" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有行程 (5) </a>
    </p>
    <hr>
    <div class="main_title">
        <h2>新西兰 <span>最热</span> 房产</h2>
        <p>我们提供的不仅是房屋买卖交易的桥梁, 我们更加注重开发和创建一个公平开放的合作平台</p>
    </div>
    <div class="row">
        @foreach($hotpropertys as $hotproperty)
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="/property/{{$hotproperty->id}}">
                        <img src="{{$hotproperty->picurl}}" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info hotel">
                            {{$hotproperty->address}}<span class="price">{{$hotproperty->total_price}}</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3>{{$hotproperty->title}}</h3>
                    {{--<div class="rating">--}}
                        {{--<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>--}}
                    {{--</div><!-- end rating -->--}}
                </div>
            </div><!-- End box -->
        </div>
        @endforeach
    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="/property" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有房产 (70) </a>
    </p>
</div><!-- End container -->
<section class="promo_full">
    <div class="promo_full_wp magnific">
        <div>
            <h3>用心服务 只为您的笑容</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
            </p>
            <a href="#" class="video"><i class="icon-play-circled2-1"></i></a>
        </div>
    </div>
</section><!-- End section -->
@endsection
@push('script')

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution_func.js"></script>
<script>
    var cutStr= function (str) {
        var newStr = new Array(str.length + parseInt(str.length / 3));
        var strArray = str.split("");
        newStr[newStr.length - 1] = strArray[strArray.length - 1];
        var currentIndex = strArray.length - 1;
        for (var i = newStr.length - 1; i >= 0; i--) {
            if ((newStr.length - i) % 4 == 0) {
                if (i == 0)
                {
                    if ((str.length % 3) != 0)
                        newStr[i] = ",";
                    else
                        continue;
                }
                newStr[i] = ",";
            }
            else {
                newStr[i] = strArray[currentIndex--];
            }
        }
        //$(".price").val(newStr.join(""));
        return newStr.join("")
    }
    $(function () {
        $(".price").each(function () {
            var price = $(this).text().split('$');//.split('¥')[0];
            var newPrice;
            if (price.length == 1) {
                newPrice = price[0].split('¥')[1].trim();
                newPrice = cutStr(newPrice);
                $(this).text("¥"+newPrice);
            }
            else {
                newPrice = price[1].trim();
                newPrice = cutStr(newPrice);
                $(this).text("$" + newPrice);
            }


        })
    })
</script>
@endpush
</body>
</html>