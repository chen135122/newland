@extends('layouts.master')

@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>新西兰房产</h1>
                <br>
                <p>我们提供新西兰最新的居民住宅，商业地产和农场买卖信息</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/news">新闻资讯</a></li>
            </ul>
        </div>
    </div><!-- Position -->
    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                @foreach($articles as $article)
                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">添加到收藏</span></span></a>
                                </div>
                                <div class="img_list">
                                    <a href="/news/{{$article->id}}">
                                        <img src="{{$article->picurl}}" alt="">
                                        <div class="short_info"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tour_list_desc">
                                    <div class="rating"></div>
                                    <h3>{{$article->title}}</h3>
                                    <p>{!!$article->abstract !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="price_list">
                                    <div>

                                        <p><a href="/news/{{$article->id}}" class="btn_1">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <hr>

                <div class="text-center">
                    {{$articles->render()}}
                </div>
            </div>
            <aside class="col-md-4">
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
                                    {{--<small>宽敞舒适精美靓宅 绝佳地段双校网 必售房源速来抢购 </small>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach

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
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>需要 <span>帮助?</span></h4>
                    <a href="tel://025-58761818" class="phone">+025-58761818</a>
                    <small>周一 至 周五 9.00am - 7.30pm</small>
                </div>
            </aside>
            </div>
        </div>
    @endsection

@push('style')
        <!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">

<!-- Range slider -->
<link href="/css/ion.rangeSlider.css" rel="stylesheet" >
<link href="/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <style>
        .main_title p {
            font-size: 14px !important;
            margin-top: 5px;
        }
        .col-md-4 ul {
            float:left;
        }
        .price {
            display:block;
            text-align:center;
        }
        .col-lg-2 {
            width:18.66666667%;
        }
        .col-lg-6 {
            width:48%;
        }
        .filter_type { clear:both;border-bottom:#dedede solid 1px; padding:7px 0 7px 80px; width:100%; line-height:24px;
        }
        .filter_type h6{display:inline; margin-right:20px; border:none;
        }
        .filter_type ul {display:inline;
        }
        .filter_type li { display:inline; margin-right:20px;
        }
        .filter_type:last-child {border-bottom:none;
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
    </style>
@endpush

@push('script')
        <!-- Specific scripts -->
<!-- Check and radio inputs -->
<script src="/js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>

<script src="/js/vue.min.js"></script>
<script>

</script>
@endpush