@extends('layouts.master')

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>新西兰旅游</h1>
                <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="#">新西兰旅游</a></li>
            </ul>
        </div>
    </div><!-- Position -->

    <div class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <div id="filters_col">
                    <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>筛选 <i class="icon-plus-1 pull-right"></i></a>
                    <form id="form1" name="form1">
                    <div class="collapse" id="collapseFilters">
                        <div class="filter_type">
                            <h6>价格</h6>
                            <input type="text" id="range" value="">
                        </div>
                        <div class="filter_type">
                            <h6>分类</h6>
                            <ul>

                                @foreach($travelCategorys as $travelCategory)
                                <?php $vs=false   ?>
                                    @if(count($category)>0)
                                        @foreach($category as $key=>$value)
                                          @if($value==$travelCategory->id)
                                                <?php $vs=true   ?>
                                            @endif
                                        @endforeach
                                    @endif
                                  @if($vs==true)
                                        <li> <label> <input name="category[]" type="checkbox" checked="checked" value="{{$travelCategory->id}}"> {{$travelCategory->name}}</label></li>
                                   @else
                                        <li> <label> <input name="category[]" type="checkbox"  value="{{$travelCategory->id}}"> {{$travelCategory->name}}</label></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <input type="hidden" value="{{$minprice}}" name="price[]" id="min_price" >
                        <input type="hidden" value="{{$maxprice}}" name="price[]" id="max_price">
                        <input type="button" onclick="su()" value="确定" class="btn_full">
                    </div>
                    </form>
                </div>
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>需要 <span>帮助?</span></h4>
                    <a href="tel://025-58761818" class="phone">+025-58761818</a>
                    <small>周一 至 周五 9.00am - 7.30pm</small>
                </div>
            </aside>
            <div class="col-lg-9 col-md-9">

                <div id="tools">

                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>价格排序</option>
                                    <option value="lower">从低到高</option>
                                    <option value="higher">从高到低</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--/tools -->

				@foreach($travels as $travel)
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">添加到收藏</span></span></a>
                            </div>
                            <div class="img_list">
                                <a href="/tour/{{$travel->id}}">
                                    <div class="ribbon popular"></div><img src="{{$travel->picurl}}" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-4"></i>{{$travel->start_place}} </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating">{{--<i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>--}}</div>
                                <h3><strong>【南北岛精华游】</strong> {{$travel->title}}</h3><p>{!! $travel->description !!}</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div>
                                    <span class="price">${{$travel->oprice}}</span><span class="normal_price_list"></span><small>每人</small>
                                    <p><a href="/tour/{{$travel->id}}" class="btn_1">详情</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

        
                @endforeach
                <hr>
                <div class="text-center">
                {{$travels->render()}}
                </div>
                

            </div><!-- End col lg-9 -->
        </div><!-- End row -->
    </div><!-- End container --
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
	.col-lg-6{
		width:55%;
	}
	.col-lg-4
	{
		width:26.33333333%;
	}
	 .img_list{
	 min-height:180px;
 }
 .tour_list_desc
 {
	 height:180px;
 }
 .price_list{
	 height:160px;
 }
 .img_list img{
	 height:160px;
}
    .price_list{
        font-size: 23px !important;
    }
		.tour_list_desc h3 {
		line-height: 23px !important;
		font-size: 15px;
		overflow: hidden;
		text-overflow: ellipsis;
		height: 3em;
		font-family:'Microsoft YaHei';
	}

	.price_list {
		font-size: 23px ;
	}
	#top_links li a {
		font-family:'Microsoft YaHei';
	}
		.main_title p {
		/*font-size: 14px !important;*/
		margin-top: 5px;
	}

	.main-menu a {
		font-size: 16px;
	}
	h3 {
		color:#111;
	}
	.price {
		width:100%;
		text-align:center;
		display:block;
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
        //$(".price").val(newStr.join(""));
        return newStr.join("")
    }
        $(function () {
            $(".price").each(function () {
                var price = $(this).text().split('$');//.split('¥')[0];
                var newPrice;
                if (price.length == 1) {
                    newPrice = price[0].split('¥')[1].trim();
                    newPrice = cutStr(newPrice);
                    $(this).text("¥"+newPrice);
                }
                else {
                    newPrice = price[1].trim();
                    newPrice = cutStr(newPrice);
                    $(this).text("$" + newPrice);
                }
            })
            $("#sort_price").change(function(){
                var $option=$(this).children('option:selected');
                if($option.index()!=0)
                {
                    window.location="/tour?sortPrice="+$option.val();
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
<script>

</script>
@endpush