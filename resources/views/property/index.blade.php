@extends('layouts.master')

@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="/img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
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
                <li><a href="/property">新西兰房产</a></li>
            </ul>
        </div>
    </div><!-- Position -->



    <div class="container margin_60">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>筛选 <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>价格</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <input type="hidden" value="{{$minprice}}" name="price[]" id="min_price" class="rangeSlider" >
                        <input type="hidden" value="{{$maxprice}}" name="price[]" id="max_price" class="rangeSlider" >
                        @if(isset($regionlist))
                        <div class="filter_type regionA">
                            <h6>地区</h6>
                            <ul>
                                @foreach($regionlist as $region )
                                <li ><label><a href="javascript:void(0);" rel="{{$region->id}}" {!!($rid==$region->id) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>{{$region->name}}</a></label></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(isset($regionclist))
                        <div class="filter_type regionC">
                            <h6>城市</h6>
                            <ul>
                               @foreach($regionclist as $region )
                                    <li><label><a href="javascript:void(0);"  rel="{{$region->id}}" {!!($cid==$region->id) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>{{$region->name}}</a></label></li>
                                @endforeach

                            </ul>
                        </div>
                        @endif
                        @if(isset($regiondlist))
                        <div class="filter_type regionD">
                            <h6>城镇</h6>
                            <ul>
                                 @foreach($regiondlist as $region )
                                    <li><label><a href="javascript:void(0);"  rel="{{$region->id}}" {!!($did==$region->id) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>{{$region->name}}</a></label></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="filter_type htype">
                            <h6>类型</h6>
                            <ul>
                                <li><label><a href="javascript:void(0);" rel="0"  {!!($type==0) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>全部</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="1"  {!!($type==1) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>独立别墅</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="2"   {!!($type==2) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>公寓</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="3"  {!!($type==3) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>单元房</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="4"  {!!($type==4) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>城市屋</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="5"  {!!($type==5) ?'class="btn_1" style="padding:3px 10px;"':"" !!} >排房</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="6"  {!!($type==6) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>建地</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="7"   {!!($type==7) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>Home</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="8"  {!!($type==8) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>乡村别墅</a></label></li>
                                <li><label><a href="javascript:void(0);" rel="9"  {!!($type==9) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>乡村住宅建地</a></label></li>
                            </ul>
                        </div>
                    </div>
                    <input id="select_region" name="region" type="hidden" value="{{$rid}}">
                    <input id="select_regionc" name="region" type="hidden" value="{{$cid}}">
                    <input id="select_regiond" name="region" type="hidden" value="{{$did}}">
                    <input id="select_type" name="type" type="hidden" value="{{$type}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>价格排序</option>
                                    <option value="lower">从高到低</option>
                                    <option value="higher">从低到高</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--/tools -->
                @foreach($properties as $property)
                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="img_list">
                                    <a href="/property/{{$property->id}}">
                                        <div class="ribbon popular"></div><img src="{{$property->picurl}}" alt="">
                                        <div class="short_info"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tour_list_desc">
                                    <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                                    <h3>{{$property->title}}</h3>
                                    <p>{{$property->address}}</p>
                                    <ul class="add_info">
                                        <li>
                                            <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="{{$property->bedroom}}个卧室">
                                                <i class="icon_set_2_icon-104"></i> {{$property->bedroom}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="餐馆"><i class="icon_set_1_icon-58"></i> 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="price_list">
                                    <div>
                                        <span class="price">{{$property->total_price}}</span><span class="normal_price_list"></span><small>总价</small>
                                        <p><a href="/property/{{$property->id}}" class="btn_1">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End strip -->
                @endforeach
                <hr>

                <div class="text-center">
                    {{$properties->render()}}
                </div><!-- end pagination-->
            </div>
            <aside class="col-md-4">
                <div class="box_style_1 expose">
                    <h3 class="inner">热门旅游</h3>
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
        </div><!-- End col lg-9 -->
        <!-- End row -->
    </div><!-- End container -->


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
                var price = $(this).text();//.split('¥')[0];
                var newPrice;
                if (price.length == 1) {
                    newPrice = price;
                    newPrice = cutStr(newPrice);
                    $(this).text(newPrice);
                }
                else {
                    newPrice = price;
                    newPrice = cutStr(newPrice);
                    $(this).text(newPrice);
                }
            })
            $("#sort_price").change(function(){
                var $option=$(this).children('option:selected');
                if($option.index()!=0)
                {
                    window.location="/property?sortPrice="+$option.val();
                }
            })
        })
        function su()
        {

            $("#min_price").val($(".irs-from").text().split('$')[1].replace(" ",""));
            $("#max_price").val($(".irs-to").text().split('$')[1].trim().replace(" ",""));
            form1.submit();
        }
        $(function () {
            'use strict';
            $("#range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 0,
                max:'{{$maxprice}}',
                from: '{{$minprice}}',
                to: '{{$toprice}}',
                type: 'double',
                step: 1,
                prefix: "$",
                grid: true
            });

        });
    </script>

    <script src="/js/vue.min.js"></script>
    <script src="/js/select.js"></script>
    <script>

    </script>
    @endpush