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

        p.darken {
            display: inline-block;
            padding: 0;
        }

        p.darken img {
            opacity: 0.6;
            display: block;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        p.darken:hover img {
            opacity: 1;
        }

    </style>

@endpush

@section('content')

<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            @foreach($banners as $banner)

            @if($banner->link)
                <li style="cursor:pointer" onclick="self.location='{{$banner->link}}'" data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">

            @else
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    @endif
                            <!-- MAIN IMAGE -->
                    <img src="{{$banner->picurl}}" alt="{{$banner->description}}" data-lazyload="{{$banner->picurl}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="100" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">新西兰一站式服务</div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="1000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">

                        <div class="tp_d">
                            <br>
                            <br>
                            旅馆加盟、商品代理、旅游、全线业务
                        </div>
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
            <div class="col-md-3 col-sm-6 col-xs-6  text-center"  style="cursor: pointer;" onclick="window.location='/hotel'">
                <p class="darken">
                    <img src="/img/icon_car.png" class="icon">
                </p>
                <h4><span>连锁汽车旅馆加盟&管理</span></h4>
                <p class="tp_detail">
                    我们为你提供专业的连锁汽车旅馆加盟和管理
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 text-center" style="cursor: pointer;" onclick="window.location='/good'">
                <p class="darken">
                 <img src="/img/icon_good.png" class="icon">
                </p>
                <h4><span>进口商品代理</span></h4>
                <p class="tp_detail" style="">
                    为您提供新西兰全境最优质的商品
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6  text-center"  style="cursor: pointer;" onclick="window.location='/tour'">
                <p class="darken">
                    <img src="/img/icon_plane.png" class="icon">

                </p>
                <h4><span>新西兰旅游</span></h4>
                <p class="tp_detail">
                    为您提供梦幻般的旅游，体验不一样的旅程
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 text-center"  style="cursor: pointer;" onclick="window.location='/immigrant'">
                <p class="darken">
                    <img src="/img/icon_newzealand.png" class="icon">
                </p>
                <h4><span>新西兰全线业务</span></h4>
                <p class="tp_detail">
                    为您提供新西兰一站式全线服务
                </p>
            </div>

        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->

<div class="container margin_60">
    <div class="main_title">
        <h2>旅馆加盟&管理</h2>
        <p>我们倾力打造新西兰旅馆加盟&管理服务平台，并拥有国内及新西兰顶级合作伙伴</p>
    </div>
    <div class="row">

        @foreach($hotels as $hotel)
            <div class="col-md-4 col-sm-6 wow zoomIn">
                <div class="hotel_container">
                    <div class="img_container">
                        <a href="/hotel/{{$hotel->id}}">
                            <img src="{{$hotel->picurl}}"  style="max-height:240px;min-height:240px;max-width: 360px;min-width:360px;" class="img-responsive" alt="">

                        </a>
                    </div>
                    <div class="hotel_title">
                        <h3>{{$hotel->title}}</h3>
                    </div>
                </div><!-- End box -->
            </div>
        @endforeach
    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="/hotel" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有旅馆加盟&管理 ({{$hotelCount}}) </a>
    </p>

    <hr>
    <div class="main_title">
        <h2>进口商品代理</h2>
        <p>为您提供新西兰全境最优质的商品</p>
    </div>
    <div class="row">
        @foreach($goods as $good)
        <div class="col-md-4 col-sm-6 wow zoomIn">
            <div class="hotel_container">
                <div class="img_container">
                    <a href="/good/{{$good->id}}">
                        <img src="{{$good->picurl}}" class="img-responsive" alt="{{$good->title}}">
                    </a>
                </div>
                <div class="hotel_title">
                    <h3>{!!str_limit($good->title, 40) !!}</h3>
                </div>
            </div><!-- End box -->
        </div>
        @endforeach
    </div><!-- End row -->
    <p class="text-center nopadding">
        <a href="/good" class="btn_1 medium"><i class="icon-eye-7"></i>查看所有进口商品 ({{$goodCount}}) </a>
    </p>
    <hr>
    <div class="main_title">
        <h2>新西兰旅游</h2>
        <p>在接下来的行程里，您可以根据实际情况合理调整行程，体验不一样的新西兰</p>
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
