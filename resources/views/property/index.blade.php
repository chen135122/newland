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
            <li><a href="#">首页</a></li>
            <li><a href="#">新西兰房产</a></li>
        </ul>
    </div>
</div><!-- Position -->

<div  class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>筛选 <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>价格</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>

                        <div class="filter_type">
                            <h6>地区</h6>
                            <ul>
                                <li><label><input type="checkbox">陶波</label></li>
                                <li><label><input type="checkbox">陶朗加</label></li>
                                <li><label><input type="checkbox">皇后镇</label></li>
                                <li><label><input type="checkbox">基督城</label></li>
                            </ul>
                        </div>

                        <div class="filter_type">
                            <h6>类型</h6>
                            <ul>
                                <li><label><input type="checkbox">独立别墅</label></li>
                                <li><label><input type="checkbox">公寓</label></li>
                                <li><label><input type="checkbox">单元房</label></li>
                                <li><label><input type="checkbox">城市屋</label></li>
                            </ul>
                        </div>

                        <div class="filter_type">
                            <h6>卧室</h6>
                            <ul>
                                <li><label><input type="radio" name="bedroom">1室</label></li>
                                <li><label><input type="radio" name="bedroom">2室</label></li>
                                <li><label><input type="radio" name="bedroom">3室</label></li>
                                <li><label><input type="radio" name="bedroom">4室</label></li>
                                <li><label><input type="radio" name="bedroom">5室以上</label></li>
                            </ul>
                        </div>

                        <div class="filter_type">
                            <h6>浴室</h6>
                            <ul>
                                <li><label><input type="radio" name="bashroom">1室</label></li>
                                <li><label><input type="radio" name="bashroom">2室</label></li>
                                <li><label><input type="radio" name="bashroom">3室</label></li>
                                <li><label><input type="radio" name="bashroom">4室</label></li>
                                <li><label><input type="radio" name="bashroom">5室以上</label></li>
                            </ul>
                        </div>
                    </div><!--End collapse -->
                </div><!--End filters col-->
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>需要 <span>帮助?</span></h4>
                    <a href="tel://004512388888" class="phone">+45 123 888 88</a>
                    <small>周一 至 周日 9.00am - 7.30pm</small>
                </div>
            </aside><!--End aside -->

            <div class="col-lg-9 col-md-9">

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
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select  name="sort_rating" id="sort_rating">
                                    <option value="" selected>评价排序</option>
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
                                    <a href="/property/{{$property->sn}}"><div class="ribbon popular" ></div><img src="{{$property->picurl}}" alt="">
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
                                            <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="Free Wifi"> <i class="icon_set_2_icon-104"></i> 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="Restaurant"><i class="icon_set_1_icon-58"></i> 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="price_list"><div>${{$property->total_price}}<span class="normal_price_list"></span><small >总价</small>
                                        <p><a href="/property/{{$property->sn}}" class="btn_1">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End strip -->
                @endforeach
                <hr>
                <!--
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">上一页</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">下一页</li>
                    </ul>
                </div>
                end pagination-->
                <div class="text-center">
                {{$properties->render()}}
                </div>

            </div><!-- End col lg-9 -->
        </div><!-- End row -->
    </div><!-- End container -->


@endsection

@push('style')
<!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">

<!-- Range slider -->
<link href="/css/ion.rangeSlider.css" rel="stylesheet" >
<link href="/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<style>
    .tour_list_desc h3 {
        line-height: 25px !important;
        font-size: 17px;
        overflow : hidden;
        text-overflow: ellipsis;
        height:3em;
    }

    .price_list{
        font-size: 23px !important;
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