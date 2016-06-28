@extends('layouts.master')
@push('style')
<link href="rs-plugin/css/settings.css" rel="stylesheet">


<link href="css/extralayers.css" rel="stylesheet">
    <style>
        .main_title p {
            /*font-size: 14px !important;*/
            margin-top: 15px!important;

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
        .col-md-3 > h4 span {
            color:#5e8734;
        }
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
        .col-md-3 i:before {
            font-size:100px;
        }
        .white_bg .icon{ width: 100px;
            height:100px;}
        .fadeInDown{ position: absolute; left:30%;top:270px;z-index: 999; width:40%!important;}
        .serarch-menu{width:435px;margin:130px auto 0;}

        footer {
            margin-top: 0 !important;
        }

    </style>

@endpush

@section('content')

<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            @foreach($banners as $banner)

            @if(isset($banner->link))
                <li style="cursor:pointer" onclick="self.location='http://www.rabbitpre.com/m/yzFfEJviw?lc=6&sui=NPF8Ui8k#'" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">

            @else
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    @endif
                            <!-- MAIN IMAGE -->
                    <img src="{{$banner->picurl}}" alt="{{$banner->description}}" data-lazyload="{{$banner->picurl}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">新西兰一站式服务</div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">

                        <div class="tp_d">
                            <br>
                            <br>
                            旅游 买房 留学 服务
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;">

                    </div>
                </li>
                @endforeach

        </ul>
        <div class="animated fadeInDown">
            @include('layouts.partials.search')
        </div>

        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<!-- End Slider -->
<div class="white_bg">
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6  text-center"  style="cursor: pointer;" onclick="window.location='/trust'">
                <p>
                    <img src="/img/icon-trust.png" class="icon">
                </p>
                <h4><span>家庭信托</span></h4>
                <p class="tp_detail">
                    我们为您提供专业的资产保护与传承规划服务
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 text-center" style="cursor: pointer;" onclick="window.location='/property'">
                <p>
                 <img src="/img/icon-house.png" class="icon">
                </p>
                <h4><span>房产置业</span></h4>
                <p class="tp_detail" style="">
                    我们提供新西兰全境最优质的房源，以及最有保障的服务
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6  text-center"  style="cursor: pointer;" onclick="window.location='/tour'">
                <p>
                    <img src="/img/icon-tour.png" class="icon">

                </p>
                <h4><span>定制旅游</span></h4>
                <p class="tp_detail">
                    新西兰旅游,为您提供梦幻般的旅游,体验不一样的旅程
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 text-center"  style="cursor: pointer;" onclick="window.location='/study'">
                <p>
                    <img src="/img/icon-school.png" class="icon">
                </p>
                <h4><span>移民留学</span></h4>
                <p class="tp_detail">
                    我们提供中小学和大学最权威的留学咨询，以及各类移民资讯
                </p>
            </div>

        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->

<div class="container margin_60">
    <div class="main_title">
        <h2>新西兰 <span>家庭</span> 信托</h2>
        <p>我们倾力打造新西兰各类服务平台，并拥有国内以及新西兰顶级合作伙伴</p>
    </div>
    <div class="row">

        @foreach($trusts as $trust)
            <div class="col-md-4 col-sm-6 wow zoomIn">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="/trust/{{$trust->id}}">
                            <img src="{{$trust->picurl}}"  style="max-height:240px;min-height:240px;max-width: 360px;min-width:360px;" class="img-responsive" alt="">

                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3>{{$trust->title}}</h3>
                    </div>
                </div><!-- End box -->
            </div>
        @endforeach
    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="/trust" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有家庭信托 ({{$trustsCount}}) </a>
    </p>

    <hr>
    <div class="main_title">
        <h2>新西兰 <span>最热</span> 房产</h2>
        <p>我们提供的不仅是房屋买卖交易的桥梁, 我们更加注重开发和创建一个公平开放的合作平台</p>
    </div>
    <div class="row">
        @foreach($hotpropertys as $hotproperty)
        <div class="col-md-4 col-sm-6 wow zoomIn">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="/property/{{$hotproperty->id}}">
                        <img src="{{$hotproperty->picurl}}" class="img-responsive" alt="{{$hotproperty->title}}">

                    </a>
                </div>
                <div class="hotel_title">
                    <h3>{!!str_limit($hotproperty->title,40) !!}</h3>
                </div>
            </div><!-- End box -->
        </div>
        @endforeach
    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="/property" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有房产 ({{$HouseCount}}) </a>
    </p>
    <hr>
    <div class="main_title">
        <h2>新西兰 <span>最热</span> 旅游路线</h2>
        <p>在接下来的行程里，您可以根据实际情况合理调整行程，在新西兰找到最棒的自己。</p>
    </div>
    <div class="row">
        @foreach($travels as $travel)
                <div class="col-md-4 col-sm-6 wow zoomIn">
                    <div class="tour_container">
                        <div class="img_container">
                            <a href="tour/{{$travel->id}}">
                                <img src="{{$travel->picurl}}" class="img-responsive" alt="【{{$travel->bigtitle}}】 {{$travel->title}}">
                                @if($travel->istop==1)) <div class="ribbon top_rated"></div> @endif
                                <div class="short_info">
                                    <span class="price">￥{{ceil($travel->referenceprice)}}</span>
                                </div>
                            </a>
                        </div>
                        <div class="tour_title">
                            <h3><strong>【{{$travel->bigtitle}}】</strong> {{$travel->title}}</h3>
                        </div>
                    </div>
                </div>

        @endforeach
    </div><!-- End row -->
    <p class="text-center add_bottom_30">
        <a href="/tour" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有行程 ({{$travelsCount}}) </a>
    </p>
</div>
<section class="promo_full">
    <div class="promo_full_wp magnific">
        <div>
            <h3>用心服务 只为您的笑容</h3>
            <p>
                Attentively service for your smile.
            </p>
        </div>
    </div>
</section><!-- End section -->
@endsection
@push('script')
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution_func.js"></script>
<script type="text/javascript">
//    var flag=1;
//    $('#rightArrow').click(function(){
//        if(flag==1){
//            $("#floatDivBoxs").animate({right: '-175px'},300);
//            $(this).animate({right: '-5px'},300);
//            $(this).css('background-position','-50px 0');
//            flag=0;
//        }else{
//            $("#floatDivBoxs").animate({right: '0'},300);
//            $(this).animate({right: '170px'},300);
//            $(this).css('background-position','0px 0');
//            flag=1;
//        }
//    });
</script>

@endpush
