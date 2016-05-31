@extends('layouts.master')
@section('title')
    {{$property ->title}}
@stop
@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{isset($property->headimg)?$property->headimg:'/img/house_bg.jpg'}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                         <h1>{{$property ->title}}</h1>
                        @if(isset($property->address))
                        <span>{{$property ->address}}</span>
                         @endif
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main" class="hotel" >
                            <div style="font-size: 20px;"><sup>NZ$</sup><span class="price" style="font-size: 60px;">{{intval($property ->total_price)}}</span>起</div>
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
                <li><a href="/property">房产</a></li>
                <li>详情</li>
            </ul>
        </div>
    </div><!-- End Position -->


    <div class="collapse" id="collapseMap">
        <div id="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a></p><!-- Map button for tablets/mobiles -->
                <div id="img_carousel" class="slider-pro">
                    <div class="sp-slides">
                        @foreach($pic as $p)
                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="/css/images/blank.gif"
                                     data-src="{{$p->picurl}}"
                                     data-small="{{$p->picurl}}"
                                     data-medium="{{$p->picurl}}"
                                     data-large="{{$p->picurl}}"
                                     data-retina="{{$p->picurl}}">
                            </div>
                        @endforeach

                    </div>
                    <div class="sp-thumbnails">
                        @foreach($pic as $p)
                            <img alt="" class="sp-thumbnail" src="{{$p->picurl}}">
                        @endforeach
                    </div>
                </div>


                <div class="row" style="margin-top:32px;">
                    <div id="ml" style="background-color: #333;font-size: 11px;">
                        <div style="width:100%;margin-right: auto;margin-left: auto;">
                            <ul class="c_ul" style="margin: 0;padding: 0;color: #888;">
                                <li class="new_a"><a onclick="removeClass('info', this)" href="#info">房源信息</a></li>
                                <li class="new_a"><a onclick="removeClass('intro', this)" href="#intro">房源介绍</a></li>
                                @if($property->peripheral_support)
                                <li><a href="#cates" onclick="removeClass('cates', this)">周边配套</a></li>
                                @endif
                                @if($property->selling_point)
                                <li><a href="#xmmd" onclick="removeClass('xmmd', this)">项目卖点</a></li>
                                @endif
                                <li><a href="#ldbz" onclick="removeClass('ldbz', this)">房源保证</a></li>
                                <li><a href="#tzys" onclick="removeClass('tzys', this)">投资优势</a></li>
                                <li><a href="#hyzx" onclick="removeClass('hyzx', this)">会员尊享</a></li>
                                <li><a href="#gfyh" onclick="removeClass('gfyh', this)">购房优惠</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-md-12"  id="info">
                        {!! $property ->basic_infor !!}
                    </div>
                </div>
                <hr>
                <div id="lightgallery">
                <div class="row">
                    <div class="col-md-12"  id="intro">
                       {!! $property ->description !!}
                    </div>
                </div>
                <hr>
                @if($property->peripheral_support)
                <div class="row">
                    <div class="col-md-12" id="cates">
                        {!! $property ->peripheral_support !!}
                    </div>
                </div>
                <hr>
                @endif
                @if($property->selling_point)
                <div class="row">
                    <div class="col-md-12"  id="xmmd">
                        {!! $property ->selling_point !!}
                    </div>
                </div>
                <hr>
                @endif
                </div>
                <div class="row">
                    <div class="col-md-12"  id="ldbz">
                        {!! $property ->ensure !!}
                    </div>
                </div>
                <hr>
                @if($property->investment_advantage)
                <div class="row">
                    <div class="col-md-12" id="tzys">
                        {!! $property ->investment_advantage !!}
                    </div>
                </div>
                <hr>
                @endif
                <div class="row">
                    <div class="col-md-12" id="hyzx">
                        {!! $property ->member_services !!}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" id="gfyh">
                        {!! $property ->purchase_discount !!}
                    </div>
                </div>

                <hr>

            </div>

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a>
                </p>
                <div class="box_style_1 expose">
                    <h3 class="inner">开发商介绍</h3>
                    <div class="row">
                        <small> {!! $property->developers->intro !!}</small>
                    </div>

                </div>

                <div class="box_style_1 expose">
                    <h3 class="inner">热门房产</h3>
                    @foreach($hotpropertys as $hotproperty)
                        <div class="row">
                            <div class="col-md-6 col-sm-6 room">
                                <div>
                                    <a href="/property/{{$hotproperty->id}}"><img src="{{$hotproperty->picurl}}" alt="{{$hotproperty->title}}" width="68" height="68" class="/img-circle"></a>
                                </div>
                                <div class="hold_room">
                                    <h4><a href="/property/{{$hotproperty->id}}">{{str_replace('基督城','',$hotproperty->title)}}</a></h4>
                                    <small>{{$hotproperty->address}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <br>

                    <a class="btn_full" href="/property">更多</a>
                </div>
                <div class="box_style_1 expose">
                    <h3 class="inner">最新资讯</h3>
                    @foreach($Lastedarticle as $article2)
                        <div class="row">
                            <div class="col-md-6 col-sm-6 room">
                                <div>
                                    <img src="{{$article2->picurl}}" alt="" width="68" height="68" class="/img-circle">
                                </div>
                                <div class="hold_room">
                                    <h4><a href="/news/{{$article2->id}}">{{$article2->title}}</a></h4>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    <br>

                    <a class="btn_full" href="/news">更多</a>
                </div>
                @include('layouts.partials.right_side')
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
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link href="/dist/css/lightgallery.css" rel="stylesheet">
    <style>
        .c_ul li{
            font-size: 16px !important;
        }
        .main_title p {
            font-size: 14px !important;
            margin-top: 5px;
        }
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
            float: left;
        }

        .tp_d {
            color: #ffffff;
            font-size: 16px;
            text-transform: uppercase;
            font-family: 'Microsoft YaHei';
            /*font-weight: bold;*/
        }

        .tp_detail {
            font-family: 'Microsoft YaHei';
            height: 36px;
            overflow: hidden;
        }

        .col-md-4 p {
            font-size: 14px;
            color: coral;
        }

        .col-md-3 > h4 span {
            color: lightcoral;
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
        #single_tour_desc{
            border-right:1px solid #ccc;
        }
        #single_tour_desc h3 {
            font-size:14px;
            /*height:30px;*/
            margin-top:0;
        }
        /*#single_tour_desc .row p span{*/
            /*font-size:16px !important; line-height: 28px; font-family: 'Microsoft YaHei' !important;}*/
        /*#single_tour_desc .row p strong span { font-size:24px !important;font-family: 'Microsoft YaHei' !important;  line-height: 30px; text-align: center;}*/
        /**/
        .c_ul li{
            display: inline-block;
            padding-right: 8px;
            margin-right: 3px;
            position: relative;
            font-family: 'Microsoft YaHei';
            padding-left:30px;
            width:11.5%;
            padding:10px 0 10px 0;
            text-align:center;
        }
        .c_ul li a{
            color:#fff;
        }
        .strip_all_tour_list { padding:10px;
        }
        .table-condensed tbody tr:first-child td{
            border:none;

        }
        .table-condensed tbody tr td:first-child {
            width:20%;
            text-align:center;
            vertical-align:middle;
        }
        .table1 tbody tr td {
            border:none;
        }
        .xmmd li{
            list-style:none;
            line-height:25px;
        }
        .col-md-9 p{
            font-family:inherit;
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
    var newlocation= '{{$property->location}}';
    var arry=new Array();
    if(newlocation!=""&&newlocation!=null)
    {
        arry=newlocation.split(',');
    }
    else {
        arry[0]=-43.5307484;
        arry[1]=172.6303136;
    }
    var geocoder;
    var map;
    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(arry[0], arry[1]);
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var img = "/img/close.gif";

        if (geocoder) {
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        title: '位置',
                        icon: img

                    });

                }
            });
        }
        map = new google.maps.Map(document.getElementById("collapseMap"), myOptions);
    }
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


<!-- Map -->
    <script src="http://maps.google.cn/maps/api/js"></script>
    <script src="/js/map.js"></script>
{{--<script src="/js/infobox.js"></script>--}}
<!-- Carousel -->
<script src="/js/owl.carousel.min.js"></script>
<script>

    window.onscroll = function () {

        var t = document.documentElement.scrollTop || document.body.scrollTop;
        var ml_top = $("#info").offset().top,pad=$(".sticky").outerHeight(),mlh=$("#ml").outerHeight();
        if (t > (ml_top -143))
        {
            var $width=$("#ml").width();
            var $ml = $("#ml");
            $ml.css("position", "fixed").css("top", pad+"px").css("z-index", "999");
            if (window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
                $ml.css("width", $width+"px");
            }
            else {
                if ((navigator.userAgent.indexOf('Chrome') >= 0))
                {
                    $ml.css("width", $width+"px");
                }
                else
                {
                    $ml.css("width", $width+"px");
                }

            }
            //$("#ml").css("position", "fixed").css("top", "30px").css("z-index", "999").css("width", "56%");
        }
        else {
            $("#ml").css("position", "relative").css("top", "").css("width", "");
            //$("#tour_d").css("margin-left", "0");
        }
    }
    function removeClass(id,obj)
    {
        var ev = ev || window.event;
        var thisId = document.getElementById(id);
        document.documentElement.scrollTop = document.body.scrollTop = $(thisId).offset().top-100-64;// - oBtn.offsetHeight;
        ev.preventDefault();
    }
</script>
    {{--<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>--}}


    <script src="/js/picturefill.min.js"></script>
    <script src="/dist/js/lightgallery.js"></script>
    <script src="/dist/js/lg-fullscreen.js"></script>
    <script src="/dist/js/lg-autoplay.js"></script>
    <script src="/dist/js/lg-zoom.js"></script>
    <script src="/dist/js/lg-hash.js"></script>
    <script src="/dist/js/lg-pager.js"></script>
    <script src="/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').find("img").each(function(){
                $(this).css("cursor","pointer");
                $(this).attr("data-src",$(this).attr("src"));
            });
            $('#lightgallery').lightGallery();

        });
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
            return newStr.join("")
        }
        $(function () {
            $(".price").each(function () {
                var newPrice=$(this).text();
                    newPrice = cutStr(newPrice);
                    $(this).text(newPrice);
            })
        })
    </script>
@endpush