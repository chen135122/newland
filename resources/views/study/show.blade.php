@extends('layouts.master')

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/img/single_hotel_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                         <h1>{{$study->cn_name}}</h1>
                        <span>{{$study->country}}-{{ $study->city}}</span>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/study">留学</a></li>
                <li>{{$study->cn_name}}</li>
            </ul>
        </div>
    </div><!-- End Position -->


    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a></p>
                <div id="img_carousel" class="slider-pro">
                    <div class="sp-slides">
                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/1_medium.jpg"
                                 data-small="/img/slider_single_tour/1_small.jpg"
                                 data-medium="/img/slider_single_tour/1_medium.jpg"
                                 data-large="/img/slider_single_tour/1_large.jpg"
                                 data-retina="/img/slider_single_tour/1_large.jpg">
                        </div>
                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/2_medium.jpg"
                                 data-small="/img/slider_single_tour/2_small.jpg"
                                 data-medium="/img/slider_single_tour/2_medium.jpg"
                                 data-large="/img/slider_single_tour/2_large.jpg"
                                 data-retina="/img/slider_single_tour/2_large.jpg">
                            <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                                Lorem ipsum dolor sit amet
                            </h3>
                            <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                                consectetur adipisicing elit
                            </p>
                            <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/3_medium.jpg"
                                 data-small="/img/slider_single_tour/3_small.jpg"
                                 data-medium="/img/slider_single_tour/3_medium.jpg"
                                 data-large="/img/slider_single_tour/3_large.jpg"
                                 data-retina="/img/slider_single_tour/3_large.jpg">
                            <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                                Lorem ipsum dolor sit amet
                            </p>
                            <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                                consectetur adipisicing elit
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/4_medium.jpg"
                                 data-small="/img/slider_single_tour/4_small.jpg"
                                 data-medium="/img/slider_single_tour/4_medium.jpg"
                                 data-large="/img/slider_single_tour/4_large.jpg"
                                 data-retina="/img/slider_single_tour/4_large.jpg">
                            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/5_medium.jpg"
                                 data-small="/img/slider_single_tour/5_small.jpg"
                                 data-medium="/img/slider_single_tour/5_medium.jpg"
                                 data-large="/img/slider_single_tour/5_large.jpg"
                                 data-retina="/img/slider_single_tour/5_large.jpg">
                            <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/6_medium.jpg"
                                 data-small="/img/slider_single_tour/6_small.jpg"
                                 data-medium="/img/slider_single_tour/6_medium.jpg"
                                 data-large="/img/slider_single_tour/6_large.jpg"
                                 data-retina="/img/slider_single_tour/6_large.jpg">
                            <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/7_medium.jpg"
                                 data-small="/img/slider_single_tour/7_small.jpg"
                                 data-medium="/img/slider_single_tour/7_medium.jpg"
                                 data-large="/img/slider_single_tour/7_large.jpg"
                                 data-retina="/img/slider_single_tour/7_large.jpg">
                            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/8_medium.jpg"
                                 data-small="/img/slider_single_tour/8_small.jpg"
                                 data-medium="/img/slider_single_tour/8_medium.jpg"
                                 data-large="/img/slider_single_tour/8_large.jpg"
                                 data-retina="/img/slider_single_tour/8_large.jpg">
                            <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                                Lorem ipsum dolor sit amet
                            </p>
                            <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <div class="sp-slide">
                            <img alt="" class="sp-image" src="/css/images/blank.gif"
                                 data-src="/img/slider_single_tour/9_medium.jpg"
                                 data-small="/img/slider_single_tour/9_small.jpg"
                                 data-medium="/img/slider_single_tour/9_medium.jpg"
                                 data-large="/img/slider_single_tour/9_large.jpg"
                                 data-retina="/img/slider_single_tour/9_large.jpg">
                        </div>
                    </div>
                    <div class="sp-thumbnails">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/1_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/2_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/3_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/4_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/5_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/6_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/7_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/8_medium.jpg">
                        <img alt="" class="sp-thumbnail" src="/img/slider_single_tour/9_medium.jpg">
                    </div>
                </div>
                <div class="row">
                    <div id="ml" style="background-color: #333;font-size: 11px;margin-top:32px;">
                        <div style="width:100%;margin-right: auto;margin-left: auto;">
                            <ul class="c_ul" style="margin: 0;padding: 0;color: #888;">
                                <li class="new_a"><a onclick="removeClass('xxxx', this)" href="#xxxx">学校信息</a></li>
                                <li class="new_a"><a onclick="removeClass('xxjj', this)" href="#xxjj">学校简介</a></li>
                                <li><a href="#xxls" onclick="removeClass('xxls', this)">学校历史</a></li>
                                <li><a href="#xxts" onclick="removeClass('xxts', this)">学校特色</a></li>
                                <li><a href="#yxts" onclick="removeClass('yxts', this)">院校特色</a></li>
                                <li><a href="#xxss" onclick="removeClass('xxss', this)">学校设施</a></li>
                                <li><a href="#xxsu" onclick="removeClass('xxsu', this)">学校宿舍</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-md-3" id="xxxx">
                        <h3>学校信息</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <tbody>
                                    <tr>
                                        <td>英文名称</td>

                                        <td class="text-center">{{$study->en_name}} </td>
                                    </tr>
                                    <tr>
                                        <td>中文名称</td>

                                        <td class="text-center">{{$study->cn_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>雅思</td>
                                        <td class="text-center">{{$study->fee_min}} 至 {{$study->fee_max}}</td>
                                    </tr>
                                    <tr>
                                        <td>位置</td>
                                        <td class="text-center">{{$study->country}}-{{ $study->city}}</td>
                                    </tr>
                                    <tr>
                                        <td>offer发放速度(几周)</td>
                                        <td class="text-center">{{$study->offer_release_rate}}</td>
                                    </tr>
                                    <tr>
                                        <td>海外学生比例（百分比）</td>
                                        <td class="text-center">{{$study->overseas_stu_rate}}</td>
                                    </tr>
                                    <tr>
                                        <td>位置</td>
                                        <td class="text-center">{{$study->country}}-{{ $study->city}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="xxjj">
                        <h3>学校简介</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            {!! $study->intro !!}
                        </p>
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="xxls">
                        <h3>学校历史</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            {!! $study->history !!}
                        </p>
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="xxts">
                        <h3>学校特色</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            {!! $study->school_feature !!}
                        </p>
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="yxts">
                        <h3>院校特色</h3>
                    </div>
                    <div class="col-md-9">
                        <p> {!!$study->college_feature  !!}  </p>
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="xxss">
                        <h3>学校设施</h3>
                    </div>
                    <div class="col-md-9">
                        <p>{!! $study->facility !!}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="xxsu">
                        <h3>学校宿舍</h3>
                    </div>
                    <div class="col-md-9">
                        <p>{!! $study->dormitory !!}</p>
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->

                <hr>
            </div>

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a>
                </p>


                <div class="box_style_1 expose">
                    <h3 class="inner">热门房产</h3>
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
<!-- CSS -->
<link href="/css/slider-pro.min.css" rel="stylesheet">
<link href="/css/date_time_picker.css" rel="stylesheet">
<link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
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
<script>
    $('input.date-pick').datepicker('setDate', 'today');
</script>
<!-- Map -->
<script src="http://maps.google.cn/maps/api/js"></script>
<script src="/js/map.js"></script>
<script src="/js/infobox.js"></script>

<!--Review modal validation -->
<script src="/assets/validate.js"></script>

<script src="/js/datepicker_advanced.js"></script>
@endpush