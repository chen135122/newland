@extends('layouts.master')

@section('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>新西兰房产</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
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

<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<div  class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <p>
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">地图查看</a>
                </p>

                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>筛选 <i class="icon-plus-1 pull-right"></i></a>
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>价格</h6>
                            <input type="text" id="range" name="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>等级</h6>
                            <ul>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
						</span>(15)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
						</span>(45)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(35)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(25)</label></li>
                                <li><label><input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(15)</label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>评分</h6>
                            <ul>
                                <li><label><input type="checkbox">完美: 9+ (77)</label></li>
                                <li><label><input type="checkbox">非常好: 8+ (552)</label></li>
                                <li><label><input type="checkbox">很好: 7+ (909)</label></li>
                                <li><label><input type="checkbox">一般: 6+ (1196)</label></li>
                                <li><label><input type="checkbox">无评分 (198)</label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>设施</h6>
                            <ul>
                                <li><label><input type="checkbox">Wifi</label></li>
                                <li><label><input type="checkbox">Spa</label></li>
                                <li><label><input type="checkbox">餐馆</label></li>
                                <li><label><input type="checkbox">泳池</label></li>
                                <li><label><input type="checkbox">烧烤</label></li>
                                <li><label><input type="checkbox">健身房</label></li>
                            </ul>
                        </div>
                        <div class="filter_type">
                            <h6>区</h6>
                            <ul>
                                <li><label><input type="checkbox">陶波</label></li>
                                <li><label><input type="checkbox">陶朗加</label></li>
                                <li><label><input type="checkbox">皇后镇</label></li>
                                <li><label><input type="checkbox">基督城</label></li>
                            </ul>
                        </div>
                    </div><!--End collapse -->
                </div><!--End filters col-->
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>需要 <span>帮助?</span></h4>
                    <a href="tel://004542344599" class="phone">+45 123 888 88</a>
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
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list"><a href="/property/1"><div class="ribbon popular" ></div><img src="img/hotel_1.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">Superb<span>9.0</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                                <h3><strong>Auckland Central 1房 </strong> 奥市CBD全新精装公寓</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>8000<span class="normal_price_list">$8600</span><small >*每平米</small>
                                    <p><a href="/property/1" class="btn_1">详情</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list"><a href="/property/1"><div class="ribbon top_rated" ></div><img src="img/hotel_2.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">Superb<span>9.0</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                                <h3><strong>Takanini 中心 黄金零售商铺住宅两用项目</strong> 居住优势得天独厚 创业机会无与伦比</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>39*<span class="normal_price_list">$99</span><small >每平米</small>
                                    <p><a href="/property/1" class="btn_1">Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list"><a href="/property/1"><div class="ribbon top_rated" ></div><img src="img/hotel_3.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">Superb<span>9.0</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i></div>
                                <h3><strong>Epsom 2房 Alexandra Park 高端奢华精品公寓 </strong> 未来规划的新兴生活区</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>129*<span class="normal_price_list">$99</span><small >每平米</small>
                                    <p><a href="/property/1" class="btn_1">Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list"><a href="/property/1"><div class="ribbon top_rated" ></div><img src="img/hotel_4.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">Good<span>7.5</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></div>
                                <h3><strong>Wigram 2房 Golden Homes </strong> 两大名校之间的高品质住宅小区</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>119*<span class="normal_price_list">$99</span><small >每平米</small>
                                    <p><a href="/property/1" class="btn_1">Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list"><a href="/property/1"><div class="ribbon top_rated" ></div><img src="img/hotel_5.jpg" alt="">
                                    <div class="short_info"></div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="score">Very Good<span>8.0</span></div>
                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i></div>
                                <h3><strong>Auckland Central 2房 奥克兰的未来所在 </strong> Queens Residences高尚精品公寓</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                                <ul class="add_info">
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>129*<span class="normal_price_list">$99</span><small >每平米</small>
                                    <p><a href="/property/1" class="btn_1">Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <hr>

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
                </div><!-- end pagination-->

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
<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="/js/map_hotels.js"></script>
<script src="/js/infobox.js"></script>

@endpush