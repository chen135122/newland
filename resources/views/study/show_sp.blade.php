@extends('layouts.master')
@section('title')
    {{$study->name}}
@stop
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/img/banner_01_krtr.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                         <h1>{{$study->name}}</h1>
                        <span>
                            {{isset($study->regions->name)? $study->regions->name:""}}
                            {{isset($study->regions_city->name)? $study->regions_city->name:""}}
                            {{isset($study->regions_district->name)? $study->regions_district->name:""}}
                           </span>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/study-sp">新西兰留学-中小学</a></li>
                <li>{{$study->name}}</li>
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
                <div class="row"  style="margin-top:20px;">
                    <ul class="table-list">
                        <li class="odd">
                            <p class="desc-p">
                                <span class="label">地区：</span>
                                <span class="label-val">
                                    {{isset($study->regions->name)? $study->regions->name:""}}
                                    {{isset($study->regions_city->name)? $study->regions_city->name:""}}
                                    {{isset($study->regions_district->name)? $study->regions_district->name:""}}
                                </span>
                            </p>
                        </li>
                        <li>
                            <p class="desc-p clear">
                                <span class="label">地址：</span>
                                <span class="label-val">{{$study->address}}</span>
                            </p>

                        </li>
                        <li>
                            <p class="desc-p">
                                <span class="label">学校性质：</span>
                                <span class="label-val"><?php
                                    switch($study->nature)
                                    {

                                        case 1 :echo "公立学校"; break;
                                        case 2 :echo "私立学校"; break;
                                        case 3 :echo "其他"; break;
                                    }
                                    ?></span>
                            </p>
                        </li>
                        <li>
                            <p class="desc-p">
                                <span class="label">学校学生：</span>
                                <span class="label-val"><?php
                                    switch($study->gender)
                                    {
                                        case 1 :echo "男校"; break;
                                        case 2 :echo "女校"; break;
                                        case 3 :echo "男女混合"; break;
                                    }
                                    ?></span>
                            </p>
                        </li>
                        @if(!empty($study->decile))
                        <li>
                            <p class="desc-p">
                                <span class="label">分制：</span>
                                <span class="label-val">{{$study->decile}}</span>
                            </p>
                        </li>
                        @endif
                        <li>
                            <p class="desc-p">
                                <span class="label">学校类型：</span>
                                <span class="label-val"><?php
                                    switch($study->nature)
                                    {

                                        case 1 :echo "小学"; break;
                                        case 2 :echo "初中"; break;
                                        case 3 :echo "高中"; break;
                                        case 4 :echo "全年级"; break;
                                        case 5 :echo "特殊学校"; break;
                                    }
                                    ?></span>
                            </p>
                        </li>
                        @if(!empty($study->mobile))
                        <li>
                            <p class="desc-p">
                                <span class="label">电话：</span>
                                <span class="label-val">{{$study->mobile}}</span>
                            </p>
                        </li>
                        @endif
                        @if(!empty($study->fax))
                        <li>
                            <p class="desc-p">
                                <span class="label">传真：</span>
                                <span class="label-val">{{$study->fax}}</span>
                            </p>
                        </li>
                        @endif
                        @if(!empty($study->email))
                        <li>
                            <p class="desc-p">
                                <span class="label">邮箱：</span>
                                <span class="label-val">{{$study->email}}</span>
                            </p>
                        </li>
                        @endif
                        @if(!empty($study->siteurl))
                        <li>
                            <p class="desc-p">
                                <span class="label">网址：</span>
                                <span class="label-val">{{$study->siteurl}}</span>
                            </p>
                        </li>
                        @endif
                    </ul>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            {!! $study->description !!}
                        </p>
                    </div>
                </div>

            </div>

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a>
                </p>


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
                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4>联系我们</h4>
                    <a href="tel://004542344599" class="phone">+025-58761818</a>
                    <small>周一 至 周五 8.30am - 18.30pm</small>
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
    #single_tour_desc{ background-color: #ffffff;}
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
    var newlocation= '{{$study->location}}';
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
<script src="/js/infobox.js"></script>

<!--Review modal validation -->
<script src="/assets/validate.js"></script>

<script src="/js/datepicker_advanced.js"></script>
@endpush