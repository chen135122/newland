@extends('layouts.master')
@section('title')新西兰留学-大学@stop
@section('content')
    <section class="parallax-window" data-parallax="scroll"
             <?php
             $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','留学-大学')->first();
             if($banner)
                 echo  'data-image-src='.$banner->picurl;
             else
                 echo "data-image-src='http://7xshae.com1.z0.glb.clouddn.com/image/20160406152609328815.jpg'";
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
                <li><a href="/study">新西兰留学-大学</a></li>
            </ul>
        </div>
    </div><!-- Position -->



    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8">
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

        @foreach($studys as $study)
            <div class="strip_all_tour_list wow fadeIn" >
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                            @if ((auth()->check() &&$study->is_fav ))
                                <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart" href="javascript:void(0);" articleId="{{$study->id}}" typeid="3" title="已收藏"></a></div>
                            @else
                                <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart-empty" href="javascript:void(0);" articleId="{{$study->id}}" typeid="3" title="添加到收藏"></a></div>
                            @endif
                        <div class="img_list">
                            <a href="/study/{{$study->id}}">
                                <img src="{{$study->logo}}" alt="">

                                <div class="short_info"></div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="cursor:pointer" onclick="window.location='/study/{{$study->id}}'">
                        <div class="style_list_desc">
                            <div class="rating"></div>
                            <h3>{{$study->cn_name}}</h3>
                            <ul>
                                @if(isset($study->tagsid))
                                    <li>
                                        @foreach(App\Models\Tag::getTag($study->tagsid)->get() as $tag )
                                            <span class="label label-info">{{$tag->name}}</span>    &nbsp;
                                        @endforeach
                                    </li>
                                @endif
                                    <li>英文名：{{$study->en_name}}</li>
                                <li>地区：
                                    <?php
                                    if($study->regions)
                                        echo $study->regions->name.'&nbsp;';

                                    if($study->regions_city)
                                        echo $study->regions_city->name.'&nbsp;';

                                    if($study->regions_district)
                                        echo $study->regions_district->name.'&nbsp;';

                                    ?>
                                </li>
                                <li>费用：NZ${{$study->fee_min}}/年 @if($study->fee_max>0) - NZ${{$study->fee_max}}/年@endif</li>
                                @if($study->ielts_min>0)
                                <li>ielts：{{$study->ielts_min}}-{{$study->ielts_max}}</li>
                                @endif
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
                          <h3 class="inner">热门房产</h3>
                          @foreach($hotpropertys as $hotproperty)
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 room">
                                      <div>
                                          <a href="/property/{{$hotproperty->id}}"><img src="{{$hotproperty->picurl}}" alt="{{$hotproperty->title}}"  class="img-circle"></a>
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

         </div>
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
    /*.col-lg-6{*/
        /*width:55%;*/
    /*}*/
    /*.col-lg-4*/
    /*{*/
        /*width:26.33333333%;*/
    /*}*/

    /*.price_list{*/
        /*height:160px;*/
    /*}*/

    .style_list_desc h3{
        margin-top:40px ;
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
<link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
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
