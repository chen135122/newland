@extends('layouts.master')

@section('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="/img/single_hotel_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span>
                    <h1>{{$property->title}}</h1>
                    <span>{{$property->address}}</span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        <span><sup>$</sup>{{$property->total_price}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="#">房产</a></li>
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
                            Lorem ipsum dolor sit amet </h3>
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

            <hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>房源介绍</h3>
                </div>
                <div class="col-md-9">
                    {!! $property->description !!}
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

            <hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>Rooms Types</h3>
                </div>
                <div class="col-md-9">
                    <h4>Single Room</h4>
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                    </p>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_icons">
                                <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                <li><i class="icon_set_2_icon-106"></i> Safety  box</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                            </ul>
                        </div>
                    </div><!-- End row  -->
                    <div class="carousel magnific-gallery">
                        <div class="item">
                            <a href="/img/carousel/1.jpg"><img src="/img/carousel/1.jpg" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="/img/carousel/2.jpg"><img src="/img/carousel/2.jpg" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="/img/carousel/3.jpg"><img src="/img/carousel/3.jpg" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="/img/carousel/4.jpg"><img src="/img/carousel/4.jpg" alt="Image"></a>
                        </div>
                    </div><!-- End photo carousel  -->

                    <hr>

                    <h4>Double Room</h4>
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                    </p>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_icons">
                                <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                <li><i class="icon_set_2_icon-106"></i> Safety  box</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                            </ul>
                        </div>
                    </div><!-- End row  -->
                    <div class="carousel magnific-gallery">
                        <div class="item">
                            <a href="/img/carousel/1.jpg"><img src="/img/carousel/1.jpg" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="/img/carousel/2.jpg"><img src="/img/carousel/2.jpg" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="/img/carousel/3.jpg"><img src="/img/carousel/3.jpg" alt="Image"></a>
                        </div>
                        <div class="item">
                            <a href="/img/carousel/4.jpg"><img src="/img/carousel/4.jpg" alt="Image"></a>
                        </div>
                    </div><!-- End photo carousel  -->
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

            <hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>评论</h3>
                    <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">写评论</a>
                </div>
                <div class="col-md-9">
                    <div class="review_strip_single">
                        <img src="/img/avatar1.jpg" alt="" class="/img-circle">
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
                        <img src="/img/avatar2.jpg" alt="" class="/img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i>
                            <i class="icon-smile voted"></i>
                            <i class="icon-smile voted"></i>
                            <i class="icon-smile voted"></i>
                            <i class="icon-smile"></i>
                        </div>
                    </div><!-- End review strip -->

                </div>
            </div>
        </div><!--End  single_tour_desc-->

        <aside class="col-md-4">
            <p class="hidden-sm hidden-xs">
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a>
            </p>
            <div class="box_style_1 expose">
                <h3 class="inner">Check Availability</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i> Check in</label>
                            <input class="form-control" data-date-format="M d, D" type="text" id="check_in" placeholder="Check in">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i> Check out</label>
                            <input class="form-control" data-date-format="M d, D" type="text" id="check_out" placeholder="Check out">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Adults</label>
                            <div class="numbers-row">
                                <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Children</label>
                            <div class="numbers-row">
                                <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <a class="btn_full" href="cart_hotel.html">Check now</a>
            </div><!--/box_style_1 -->

            <div class="box_style_4">
                <i class="icon_set_1_icon-90"></i>
                <h4>联系我们</h4>
                <a href="tel://004542344599" class="phone">+45 123 888 88</a>
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
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="/js/map.js"></script>
<script src="/js/infobox.js"></script>
<!-- Carousel -->
<script src="/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".carousel").owlCarousel({
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
        console.debug($(".carousel"));
    });
</script>

<!--Review modal validation -->
<script src="/assets/validate.js"></script>

<script src="/js/datepicker_advanced.js"></script>
@endpush