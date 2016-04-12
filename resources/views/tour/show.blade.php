@extends('layouts.master')

@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="{{isset($travel->head_img)?$travel->head_img:img/single_tour_bg_1.jpg}}" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h1>【{{$travel->bigtitle}}】{{$travel->title}}</h1>
                        <span></span>
                        {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>--}}
                        <span class="rating"></span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main">
                            {{$travel->singlem}}<span class="price">¥{{$travel->referenceprice}}
                               </span> <p>{{$travel->expound}}</p>
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
                <li><a href="/tour">新西兰旅游</a></li>
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

                <div id="img_carousel" class="slider-pro" style="margin-bottom: 32px;">
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

                <hr>
                <div id="ml" style="background-color: #333;font-size: 11px;">
                    <div  style="width:100%;margin-right: auto;margin-left: auto;">
                        <ul class="c_ul" style="margin: 0;padding: 0;color: #888;">
                            <li class="new_a" ><a href="#xcjj" onclick="removeClass('xcjj', this)">行程简介</a></li>
                            <li><a href="#cpts" onclick="removeClass('cpts',this)">产品特色</a></li>
                            <li><a href="#hbxx" onclick="removeClass('hbxx',this)">费用包含</a></li>
                            <li><a href="#xcjs" onclick="removeClass('xcjs', this)">行程介绍</a></li>
                            <li><a href="#mstj" onclick="removeClass('mstj', this)">美食推荐</a></li>
                            {{--<li><a href="#zxpl" onclick="removeClass('zxpl', this)">评论区域</a></li>--}}
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3" id="xcjj">
                        <h3>行程简介</h3>
                    </div>
                    <div class="col-md-9">
                        <h4></h4>
                        {!!$travel->introduction !!}
                        {{--<h4>行程特色</h4>--}}
                        {{--<p>--}}
                            {{--以上报价仅供参考，可能会因为不同的出发城市及时间会有所浮动--}}
                        {{--</p>--}}

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="cpts">
                        <h3>产品特色</h3>
                    </div>
                    <div class="col-md-9">
                        <h4></h4>
                            {!! $travel->feature !!}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="hbxx">
                        <h3>费用包含</h3>
                    </div>
                    <div class="col-md-9">
                        <h4></h4>
                        {!!$travel->feeinclude!!}
                    </div>
                </div>

                <hr>

                <div class="container margin_60">

                    <div class="row" id="tour_xc">
                        <aside id="xingc" class="col-lg-3 col-md-3" style="width:10%;">
                            <div class="box_style_cat">
                                <ul id="cat_nav">
                                    @for($i=0;$i<count($travelDay);$i++)
                                        <li><a href="#travelInfo_{{$i}}" onclick="removeClass('travelInfo_{{$i}}',this)">
                                              第  {{$i+1}}  天
                                            </a></li>
                                     @endfor
                                </ul>
                            </div>
                        </aside>
                        <div class="col-md-3" id="xcjs">
                            <h3>行程介绍</h3>
                        </div>
                        <div class="col-md-8 add_bottom_15" id="tour_d" style="">
                            @for($i=0;$i<count($travelDay);$i++)
                            <div class="form_title" id="travelInfo_{{$i}}">
                                <h3><strong>{{$i+1}}</strong>DAY{{$i+1}}</h3>
                            </div>
                                <div class="step">
                                    <div class="row">
                                        <div class=" table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        第{{$i+1}}天:{{$travelDay[$i]->title}}
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(($travelDay[$i]->dayDetail()->get()) as $detail)
                                                    <tr>
                                                        <td style="width: 100px;">
                                                            {{$detail->title}}
                                                        </td>
                                                        <td>
                                                            @if(!empty($detail->introduction))
                                                                {!! $detail->introduction !!}
                                                                @else
                                                                {{$detail->title}}
                                                                @endif
                                                             @if(count($detail->detailImg()->get())>0)
                                                                    <ul class="time_photo">
                                                                        @foreach(($detail->detailImg()->get()) as $img)
                                                                            <li>
                                                                                <img src="{{$img->picurl}}">
                                                                                <p style="text-align:center;padding-top:10px;font-family:'Microsoft YaHei' ">{{empty($img->title)?$travelDay[$i]->title:$img->title}}</p>
                                                                            </li>
                                                                            @endforeach
                                                                    </ul>
                                                                @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div><!--End row -->
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-3" id="mstj">
                        <h3>美食推荐</h3>
                    </div>
                    <div class="col-md-9">
                        <div class=" table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        美食推荐
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($travel->cate()->get() as $cate)
                                    <tr>
                                        <td style="width: 50px;">
                                            {{--{{$cate->title}}--}}
                                        </td>
                                        <td>
                                            {!! $cate->introduction !!}
                                            <ul class="time_photo">
                                                @if(count($cate->foodImg()->get())>0)
                                                    <ul class="time_photo">
                                                        @foreach(($cate->foodImg()->get()) as $img)
                                                            <li>
                                                                <img src="{{$img->picurl}}">
                                                                <p style="text-align:center;padding-top:10px">{{empty($img->title)?$cate->title:$img->title}}</p>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" id="zxpl">
                        {{--<div class="mockup-content">--}}

                            {{--<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed" >--}}
                                {{--<button type="button" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">撰写评论</button>--}}
                                {{--<div class="morph-content" style="background-color:#fff;">--}}
                                    {{--<div>--}}
                                        {{--<div class="content-style-form content-style-form-1" id="comment">--}}
                                            {{--<span class="icon icon-close">Close the dialog</span>--}}
                                            {{--<form>--}}
                                                {{--<p><a style="color:#000;font-family:'Microsoft YaHei';">评论内容:</a><textarea id="txt_comment" style="width:100%;height:80px;"></textarea></p>--}}


                                                {{--<div class="star_comment" id="mstar_comment">--}}
                                                    {{--<a>景点评分:</a>--}}
                                                    {{--<span></span>--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>--}}
                                                    {{--</ul>--}}
                                                    {{--<span></span>--}}
                                                    {{--<p></p>--}}
                                                    {{--<input name="grade" id="mstar_grade" type="hidden" value="" />--}}
                                                {{--</div>--}}
                                                {{--<br />--}}

                                                {{--<div class="star_comment" id="jstar_comment">--}}
                                                    {{--<a>价格评分:</a>--}}
                                                    {{--<span></span>--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>--}}
                                                    {{--</ul>--}}
                                                    {{--<span></span>--}}
                                                    {{--<p></p>--}}
                                                    {{--<input name="grade" id="jstar_grade" type="hidden" value="" />--}}
                                                {{--</div>--}}
                                                {{--<br />--}}
                                                {{--<div class="star_comment" id="dstar_comment">--}}
                                                    {{--<a>导游评分:</a>--}}
                                                    {{--<span></span>--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>--}}
                                                    {{--</ul>--}}
                                                    {{--<span></span>--}}
                                                    {{--<p></p>--}}
                                                    {{--<input name="grade" id="dstar_grade" type="hidden" value="" />--}}
                                                {{--</div>--}}
                                                {{--<br/>--}}
                                                {{--<div class="star_comment" id="zstar_comment">--}}
                                                    {{--<a>质量评分:</a>--}}
                                                    {{--<span></span>--}}
                                                    {{--<ul>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">1</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">2</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">3</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">4</a></li>--}}
                                                        {{--<li><i class="icon-smile voted"></i><a href="javascript:;">5</a></li>--}}
                                                    {{--</ul>--}}
                                                    {{--<span></span>--}}
                                                    {{--<p></p>--}}
                                                    {{--<input name="grade" id="zstar_grade" type="hidden" value="" />--}}
                                                {{--</div>--}}

                                                {{--<p><button id="btn_comment">提交</button></p>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                    {{--<div class="col-md-9" id="all_comment">--}}
                        {{--<div id="general_rating">--}}
                            {{--11条评论--}}
                            {{--<div class="rating">--}}
                                {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>--}}
                            {{--</div>--}}
                        {{--</div><!-- End general_rating -->--}}
                        {{--<div class="row" id="rating_summary">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--目的地--}}
                                        {{--<div class="rating">--}}
                                            {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--导游--}}
                                        {{--<div class="rating">--}}
                                            {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--价格--}}
                                        {{--<div class="rating">--}}
                                            {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--质量--}}
                                        {{--<div class="rating">--}}
                                            {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div><!-- End row -->--}}
                        {{--<hr>--}}
                        {{--<div class="review_strip_single">--}}
                            {{--<img src="/img/avatar1.jpg" alt="" class="img-circle">--}}
                            {{--<small> - 10 March 2015 -</small>--}}
                            {{--<h4>Jhon Doe</h4>--}}
                            {{--<p>--}}
                                {{--"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."--}}
                            {{--</p>--}}
                            {{--<div class="rating">--}}
                                {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>--}}
                            {{--</div>--}}
                        {{--</div><!-- End review strip -->--}}

                        {{--<div class="review_strip_single">--}}
                            {{--<img src="/img/avatar3.jpg" alt="" class="img-circle">--}}
                            {{--<small> - 10 March 2015 -</small>--}}
                            {{--<h4>Jhon Doe</h4>--}}
                            {{--<p>--}}
                                {{--"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."--}}
                            {{--</p>--}}
                            {{--<div class="rating">--}}
                                {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>--}}
                            {{--</div>--}}
                        {{--</div><!-- End review strip -->--}}

                        {{--<div class="review_strip_single last">--}}
                            {{--<img src="/img/avatar2.jpg" alt="" class="img-circle">--}}
                            {{--<small> - 10 March 2015 -</small>--}}
                            {{--<h4>Jhon Doe</h4>--}}
                            {{--<p>--}}
                                {{--"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."--}}
                            {{--</p>--}}
                            {{--<div class="rating">--}}
                                {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>--}}
                            {{--</div>--}}
                        {{--</div><!-- End review strip -->--}}
                    {{--</div>--}}
                </div>
            </div><!--End  single_tour_desc-->

            <aside class="col-md-4">
                <div class="box_style_1 expose">
                    <h3 class="inner">- 预定 -</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> 出发日期</label>
                                <input id="start_date" class="date-pick form-control" data-date-format="yyyy/M/d" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>人数</label>
                                <div class="numbers-row">
                                    <input type="text" onkeyup="changeNum(this)" value="2" id="adults" class="qty2 form-control" name="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table class="table table_summary" style="margin-top:-15px;">
                        <tbody>
                        <tr>
                            <td>
                                人数
                            </td>
                            <td id="perNum" class="text-right">
                                2
                            </td>
                        </tr>
                        <tr>
                            {{--<td>--}}
                               {{--出发日期--}}
                            {{--</td>--}}
                            {{--<td id="perNum" class="text-right">--}}
                                {{--{{  date("Y-n-d",$travel->start_time) }}--}}
                            {{--</td>--}}
                        </tr>

                        </tbody>
                    </table>
                    <a class="btn_full" onclick="linkto()">马上预定</a>
                </div><!--/box_style_1 -->
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
        <style>
            .main_title p {
                margin-top: 5px;
            }

            .main-menu a {
                font-size: 16px;
            }

            #top_links li a {
                /*font-weight: 600;*/
                font-family: 'Microsoft YaHei';
            }

            .star_comment { position: relative; margin: 0px auto 5px auto; height: 44px; float: left; z-index:100;}
            .star_comment a {
                float:left;
                color:#000000;
                font-family:'Microsoft YaHei';
            }
            .star_comment ul, #star_comment span { float: left; display: inline; }
            .star_comment ul { margin: 0 10px; }
            .star_comment ul li a {
                display:none;
            }
            .star_comment ul li i {
                font-size:20px;
            }
            .star_comment li { float: left; width: 29px; height: 27px; cursor: pointer;content:'\e93b';color:#ddd; /*text-indent: -9999px;*/ background-size: cover;list-style:none;}
            .star_comment strong { color: #f60; padding-left: 10px; }
            .star_comment li.on { background-position: 0 0px;content:'\e93b';color:#F90; /*background: url(/img/star_red.png) no-repeat;*/ background-size: cover; }
            .star_comment p { position: absolute; top: 20px; width: 159px; height: 60px; color:#F90;display: none; padding: 7px 10px 0; }
            .star_comment p em { color: #f60; display: block; font-style: normal; }
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
            ul#cat_nav li a {
                font-family:'Microsoft YaHei';
                padding:10px 5px;

                text-align:center;
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
            ul#cat_nav li a:after {
                content:"";
                right:0;
            }
            ul#cat_nav li a {
                color:#fff;
                background-color:#82ca9c;
            }

            .step {
                width: 75%;
            }
            #position ul li:after {
                content:"";
            }
            .c_ul li{
                display: inline-block;
                padding-right: 8px;
                margin-right: 3px;
                position: relative;
                font-family: 'Microsoft YaHei';
                padding-left:30px;
                width:19%;
                padding:10px 0 10px 0;
                text-align:center;
            }
            .c_ul li a{
                color:#fff;
            }
            .new_a {
                background-color:#666;
            }
            /*.form_title {
                margin-left: 22.5%;
            }*/
        </style>
<!-- CSS -->
<link href="/css/slider-pro.min.css" rel="stylesheet">
<link href="/css/date_time_picker.css" rel="stylesheet">
{{--<link href="/css/owl.carousel.css" rel="stylesheet">--}}
{{--<link href="/css/owl.theme.css" rel="stylesheet">--}}
<link href="/css/component.css" rel="stylesheet">
<link href="/css/content.css" rel="stylesheet">
<style>
    #price_single_main span {
        font-size: 60px;
        color: #f60;
    }
    .c_ul li{
        font-size: 16px !important;
    }
    .col-md-9 p, .col-md-9 span{
        font-size:16px !important;
        font-family: "Microsoft YaHei"; !important;
        color:#666 !important;
    }
    .table tbody  td, .table tbody p, .table tbody span{
        font-size:16px !important;
        color:#666 !important;
    }
    .table thead  td, .table thead p, .table thead span{
        font-size:16px !important;
        color:#666 !important;
    }
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
    #single_tour_desc{
        border-right:1px solid #ccc;
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
<script src="/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/js/classie.js"></script>
<script type="text/javascript" src="/js/uiMorphingButton_fixed.js"></script>
<script type="text/javascript" src="/js/tourshow.js"></script>
<script>
    $(function(){
        var per= 0,j=1;
        per=j;
    })
    function linkto(){
        var date=new Date($("#start_date").val());
        date.setDate(date.getDate()+1);
        window.location="/order?num="+perNum+"&routid="+'{{$travel->id}}'+"&date="+ Date.parse(date)/1000;
    }
    var date=new Date();
    date.setDate(date.getDate()+45);
    $("#start_date").val(date.getFullYear()+"/"+(date.getMonth()+1)+"/"+date.getDate());
    $("#start_date").datepicker("setStartDate",date);
</script>
<!-- Map -->
{{--<script src="http://maps.google.cn/maps/api/js"></script>--}}
{{--<script src="/js/map.js"></script>--}}
{{--<script src="/js/infobox.js"></script>--}}

<!--Review modal validation -->
<script src="/assets/validate.js"></script>

<script src="/js/datepicker_advanced.js"></script>
@endpush