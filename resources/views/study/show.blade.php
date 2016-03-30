@extends('layouts.master')
@section('title')
    {{$study->cn_name}}
@stop
@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="/img/single_hotel_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                         <h1>{{$study->cn_name}}</h1>
                        {{isset($study->regions->name)? $study->regions->name:""}}
                        {{isset($study->regions_city->name)? $study->regions_city->name:""}}
                        {{isset($study->regions_district->name)? $study->regions_district->name:""}}
                    </div>

                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/study">新西兰留学-大学</a></li>
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
                                        <td class="text-center">
                                            {{isset($study->regions->name)? $study->regions->name:""}}
                                            {{isset($study->regions_city->name)? $study->regions_city->name:""}}
                                            {{isset($study->regions_district->name)? $study->regions_district->name:""}}
                                        </td>
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
    <script src="http://maps.google.cn/maps/api/js"></script>
    <script src="/js/map.js"></script>
<script type="text/javascript">

    var newlocation= '{{$study->location}}';
    var arry=new Array();
    if(newlocation!=""&&newlocation!=null)
    {
         arry=newlocation.split(',');
    }
    else {
        arry[0]=36.8483247;
        arry[1]=174.7636383;
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
    var width=$("#ml").width();
    window.onscroll = function () {
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        var ml_top = $("#xxxx").offset().top;
        if (t > (ml_top -143))
        {
            var $ml = $("#ml");
            $ml.css("position", "fixed").css("top", "30px").css("z-index", "999");
            if (window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
                $ml.css("width", width+"px");
            }
            else {
                if ((navigator.userAgent.indexOf('Chrome') >= 0))
                {
                    $ml.css("width", width+"px");

                }
                else
                {
                    $ml.css("width", width+"px");
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


<!-- Date and time pickers -->
<script src="/js/bootstrap-datepicker.js"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');

</script>
<!-- Map -->

<script src="/js/infobox.js"></script>

<!--Review modal validation -->
<script src="/assets/validate.js"></script>

<script src="/js/datepicker_advanced.js"></script>
@endpush