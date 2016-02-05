@extends('layouts.master')

@section('content')
<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYER NR. 1 -->
                <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">新西兰一站式服务</div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                        旅游 买房 留学 服务</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='#' class="button_intro">查看详情</a> <a href='#' class=" button_intro outline">联系我们</a>
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
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>热门旅游</span></h4>
                <p>
                    精挑细选的每一条旅游路线, 让您精确领略新西兰的美丽风光, 享受旅途的轻松惬意.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>留学深造</span></h4>
                <p>
                    从小学初中到大学, 我们提供最新的政策信息和最权威的咨询.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>管家服务</span></h4>
                <p>
                    兢兢业业为您工作, 恪尽职守为您守护, 一站式管家服务, 如您亲临.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <p>
                    <a href="#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>
                </p>
                <h4><span>置业顾问</span></h4>
                <p>
                    无论是投资自住, 还是留学深造, 我们用专业的知识, 为您提供最优的选择.
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->

<div class="container margin_60">

    <div class="row">
        <div class="col-md-8 col-sm-6 hidden-xs">
            <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
        </div>
        <div class="col-md-4 col-sm-6">
            <h3><span>一站服务</span> 玩转新西兰</h3>
            <p>
                买房置业, 一站搞定, 轻轻松松拥有海外资产.
            </p>
            <ul class="list_order">
                <li><span>1</span>新西兰经典旅游路线</li>
                <li><span>2</span>新西兰当地买房置业</li>
                <li><span>3</span>独创管家服务,为您打理在新资产</li>
                <li><span>4</span>出国留学最新政策, 权威资讯</li>
            </ul>
            <a href="#" class="btn_1">开始使用</a>
        </div>
    </div><!-- End row -->

</div><!-- End container -->

<div class="container margin_60">
    <hr>
    <div class="main_title">
        <h2>新西兰 <span>最热</span> 旅游路线</h2>
        <p>在接下来的行程里，您可以根据实际情况合理的调整行程，我们将竭力为您打造一次被宠坏的旅行。</p>
    </div>

    <div class="row">

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="/tour/1">
                        <img src="img/tour_box_1.jpg" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-44"></i>自由行<span class="price"><sup>$</sup>3900</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>【南北岛精华游】</strong> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="/tour/1">
                        <img src="img/tour_box_2.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-43"></i>Churches<span class="price"><sup>$</sup>4500</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>【距离上帝最近的地方大溪地+纯净新西兰】</strong> 14天（茉莉雅+波拉波拉+大溪地本岛+新西兰北岛）</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="/tour/1">
                        <img src="img/tour_box_3.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="badge_save">Save<strong>30%</strong></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>4800</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>【冰川纪行】</strong> 南岛西海岸冰川9日之旅（法兰士约瑟夫冰川+米尔福德峡湾）</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="/tour/1">
                        <img src="img/tour_box_4.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="badge_save">Save<strong>20%</strong></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>3600</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>【南北岛精华游】</strong> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="/tour/1">
                        <img src="img/tour_box_14.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>4200</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>【南北岛精华游】</strong> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="/tour/1">
                        <img src="img/tour_box_5.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>4000</span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><strong>【南北岛精华游】</strong> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                    <div class="rating">
                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

    </div><!-- End row -->
    <p class="text-center add_bottom_30">
        <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有行程 (144) </a>
    </p>

    <hr>

    <div class="main_title">
        <h2>新西兰 <span>最热</span> 房产</h2>
        <p>我们提供的不仅是房屋买卖交易的桥梁, 我们更加注重开发和创建一个公平开放的合作平台</p>
    </div>

    <div class="row">

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="/property/562857">
                        <img src="img/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info hotel">
                            奥克兰<span class="price"><sup>$</sup>450000</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Auckland Central The Maritime</strong> 奥市中心永久业权！拥抱南太平洋最繁华的都市生活！</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="/property/562857">
                        <img src="img/hotel_2.jpg"  width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info hotel">
                            汉密尔顿<span class="price"><sup>$</sup>4231100</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Auckland Central Alexandra Park</strong>  全新城中城，二期顶级精品公寓，现火热发售中！</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="/property/562857">
                        <img src="img/hotel_3.jpg"  width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info hotel">
                            基督城<span class="price"><sup>$</sup>3920000</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                    <h3><strong>Auckland Central Queens Square</strong> 皇后广场高端精品公寓 永久地权分契业权</h3>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                    </div><!-- end rating -->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有房产 (70) </a>
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

@push('style')
<style>
    .tour_title > h3, .hotel_title > h3 {
        line-height: 19px !important;
        font-size: 15px !important;
    }
</style>
<!-- REVOLUTION SLIDER CSS -->
<link href="/rs-plugin/css/settings.css" rel="stylesheet">
<link href="/css/extralayers.css" rel="stylesheet">
@endpush

@push('script')
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/revolution_func.js"></script>
@endpush