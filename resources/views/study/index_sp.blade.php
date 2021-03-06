@extends('layouts.master')
@section('title')新西兰留学-中小学@stop
@section('content')
        <section class="parallax-window" data-parallax="scroll"
                 <?php
                 $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','留学-中小学')->first();
                 if($banner)
                     echo  'data-image-src='.$banner->picurl;
                 else
                     echo "data-image-src='/img/banner_01_krtr.jpg'";
                 ?>
                 data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>新西兰留学</h1>
                <p>我们提供新西兰最新的学校体验</p>
                @include('layouts.partials.search')
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/study-sp">新西兰留学-中小学</a></li>
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
                                    <div class="filter_type htype">
                                        <h6>学校类型</h6>
                                        <ul>
                                            <li><label><a href="javascript:void(0);" rel="1" {!!($type==1) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>小学</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="2" {!!($type==2) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>初中</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="3" {!!($type==3) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>高中</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="4" {!!($type==4) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>全年级</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="5" {!!($type==5) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>特殊学校</a></label></li>
                                        </ul>
                                    </div>
                                    <div class="filter_type nature">
                                        <h6>学校性质</h6>
                                        <ul>
                                            <li><label><a href="javascript:void(0);" rel="1" {!!($nature==1) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>公立学校</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="2" {!!($nature==2) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>私立学校</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="3" {!!($nature==3) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>其他</a></label></li>
                                        </ul>
                                    </div>
                                    <div class="filter_type gender">
                                        <h6>学校性别</h6>
                                        <ul>
                                            <li><label><a href="javascript:void(0);" rel="1" {!!($gender==1) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>男校</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="2" {!!($gender==2) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>女校</a></label></li>
                                            <li><label><a href="javascript:void(0);" rel="3" {!!($gender==3) ?'class="btn_1" style="padding:3px 10px;"':"" !!}>男女混合校</a></label></li>
                                        </ul>
                                    </div>
                                    <input id="select_region" name="region" type="hidden" value="{{$rid}}">
                                    <input id="select_regionc" name="region" type="hidden" value="{{$cid}}">
                                    <input id="select_regiond" name="region" type="hidden" value="{{$did}}">
                                    <input id="select_type" name="type" type="hidden" value="{{$type}}">
                                    <input id="select_nature" name="type" type="hidden" value="{{$nature}}">
                                    <input id="select_gender" name="type" type="hidden" value="{{$gender}}">
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
                                          @if ((auth()->check() &&$study->is_fav ))
                                              <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart" href="javascript:void(0);" articleId="{{$study->id}}" typeid="5" title="已收藏"></a></div>
                                          @else
                                              <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart-empty" href="javascript:void(0);" articleId="{{$study->id}}" typeid="5" title="添加到收藏"></a></div>
                                          @endif
                                      <div class="img_list">
                                          <a href="/study-sp/{{$study->id}}">
                                             <img src="{{$study->picurl}}" alt="">

                                          </a>
                                      </div>
                                  </div>
                                  <div class="clearfix visible-xs-block"></div>
                                  <div class="col-lg-6 col-md-6 col-sm-6" style="cursor:pointer" onclick="window.location='/study-sp/{{$study->id}}'">
                                      <div class="style_list_desc">
                                          <div class="rating"></div>
                                          <h3>{{$study->name}}</h3>
                                          <ul>
                                              <li>学校类型：
                                                  <?php
                                                  switch($study->type)
                                                  {

                                                  case 1 :echo "小学"; break;
                                                  case 2 :echo "初中"; break;
                                                  case 3 :echo "高中"; break;
                                                  case 4 :echo "全年级"; break;
                                                  case 5 :echo "特殊学校"; break;
                                                  }
                                                  ?>
                                              </li>
                                              <li>学校性质：  <?php
                                                  switch($study->nature)
                                                  {

                                                      case 1 :echo "公立学校"; break;
                                                      case 2 :echo "私立学校"; break;
                                                      case 3 :echo "其他"; break;
                                                  }
                                                  ?>
                                              </li>
                                              <li>学校学生：  <?php
                                                  switch($study->gender)
                                                  {

                                                      case 1 :echo "男校"; break;
                                                      case 2 :echo "女校"; break;
                                                      case 3 :echo "男女混合"; break;
                                                  }
                                                  ?>
                                              </li>

                                              <li>所在地区：
                                                  <?php
                                                  if($study->regions)
                                                      echo $study->regions->name.'&nbsp;';

                                                  if($study->regions_city)
                                                      echo $study->regions_city->name.'&nbsp;';

                                                  if($study->regions_district)
                                                      echo $study->regions_district->name.'&nbsp;';

                                                  ?>
                                              </li> </ul>
                                      </div>
                                  </div>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                      <div class="price_list">
                                          <div>
                                              
                                              <p><a href="/study-sp/{{$study->id}}" class="btn_1">详情</a></p>
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
                  <aside class="col-md-4 hide">
                      <div class="box_style_1 expose">
                          <h3 class="inner">热门房产</h3>
                          @foreach($hotpropertys as $hotproperty)
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 room">
                                      <div>
                                          <a href="/property/{{$hotproperty->id}}"><img src="{{$hotproperty->picurl}}" alt="{{$hotproperty->title}}" class="img-circle"></a>
                                      </div>
                                      <div class="hold_room">
                                          <h4><a href="/property/{{$hotproperty->id}}">{!!str_limit(strip_tags($hotproperty->title),45) !!}</a></h4>
                                          @if(isset($hotproperty->tagsid))
                                              <p class="tags">
                                                  @foreach(App\Models\Tag::getTop2Tag($hotproperty->tagsid)->get() as $tag )
                                                      <span class="label label-info">{{$tag->name}}</span>
                                                  @endforeach
                                              </p>
                                          @endif

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
                                          <img src="{{$article2->picurl}}" alt="" width="68" height="68" class="img-circle">
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
            </div><!-- End col lg-9 -->
        <!-- End row -->
    </div><!-- End container -->
@endsection


@push('style')


<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

<!-- BASE CSS -->
<link href="/css/base.css" rel="stylesheet">
<link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
<!-- Google web fonts -->

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
    .img_list a img {
        transform: none !important;
        width:133px !important;
        height:133px !important;
        margin-top: 22px;
    }
    .img_list img {
        left: 10% !important;
    }
</style>

<!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">

@endpush

@push('script')
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/select.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/artdialog/dialog-plus-min.js"></script>
<script type="text/javascript" src="/js/jQuery-Add-Favorites.js"></script>
<script type="text/javascript">
    $(function () {
        $('.tooltip_flip').Add();
    });
</script>
@endpush
