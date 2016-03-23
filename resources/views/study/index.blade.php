@extends('layouts.master')
@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>新西兰留学</h1>
                <br>
                <p>我们提供新西兰最新的学校体验</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/indexNew.html">首页</a></li>
                <li><a href="#">新西兰留学</a></li>
            </ul>
        </div>
    </div><!-- Position -->



    <div class="container margin_60">

               <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div id="filters_col">
                            <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>筛选 <i class="icon-plus-1 pull-right"></i></a>
                            <div class="collapse" id="collapseFilters">
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
                                    <input id="select_region" name="region" type="hidden" value="{{$rid}}">
                                    <input id="select_regionc" name="region" type="hidden" value="{{$cid}}">
                                    <input id="select_regiond" name="region" type="hidden" value="{{$did}}">
                            </div>
                        </div>
                        
                    </div>
                     </div>
              <div class="row">
                  <div class="col-lg-8 col-md-8">

					   @foreach($studys as $study)
                          <div class="strip_all_tour_list wow fadeIn" >
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                      <div class="img_list">
                                          <a href="/study/{{$study->id}}">
                                             <img src="{{$study->logo}}" alt="">
                                              <div class="short_info">{{ isset($study->world_ranking) ? '世界排名第'.$study->world_ranking."位": '' }}</div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="clearfix visible-xs-block"></div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <div class="style_list_desc">
                                          <div class="rating"></div>
                                          <h3>{{$study->cn_name}}</h3>
                                          <ul>
                                              <li>英文名： {{$study->en_name}}</li>
                                              <li>地区： {{$study->country}}-{{ $study->city}}</li>
                                              <li>费用： {{$study->fee_min}}-{{$study->fee_max}}</li>
                                              <li>ielts： {{$study->ielts_min}}-{{$study->ielts_max}}</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                      <div class="price_list">
                                          <div>
                                              
                                              <p><a href="/study/{{$study->id}}" class="btn_1">详情</a></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div><!--End strip -->
                      @endforeach

                      <hr>
                      <div class="text-center">
                          {{$studys->render()}}
                      </div>
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
                      <div class="box_style_2">
                          <i class="icon_set_1_icon-57"></i>
                          <h4>需要 <span>帮助?</span></h4>
                          <a href="tel://025-58761818" class="phone">+025-58761818</a>
                          <small>周一 至 周五 9.00am - 7.30pm</small>
                      </div>
                  </aside>
            </div><!-- End col lg-9 -->
        <!-- End row -->
    </div><!-- End container -->
    @endsection


@push('style')


        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

        <!-- BASE CSS -->
        <link href="/css/base.css" rel="stylesheet">

        <!-- Google web fonts -->
        <link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.useso.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='http://fonts.useso.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

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
    .tour_list_desc h3 {
        margin-top:40px;
    }
    .tour_list_desc h3 {
        line-height: 23px !important;
        font-size: 14px;
        overflow: hidden;
        text-overflow: ellipsis;
        height: 3em;
        font-family:'Microsoft YaHei',Arial,sans-serif;
    }
    #top_links li a {
        /*font-weight: 600;*/
        font-family: 'Microsoft YaHei';
    }
    .price_list {
        font-size: 23px !important;
    }
    .col-md-4 ul li a {
        font-weight:normal;
        font-size:12px;
    }
</style>

<!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">

@endpush

@push('script')
<script src="/js/html5shiv.min.js"></script>
<script src="/js/respond.min.js"></script>
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/select.js"></script>
@endpush
