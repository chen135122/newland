@extends('layouts.master')
@section('title'){{ $typename}}_新闻资讯@stop
@section('content')
    <section class="parallax-window" data-parallax="scroll"
             <?php
             $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','资讯')->first();
             if($banner)
                 echo  'data-image-src='.$banner->picurl;
             else
                 echo "data-image-src='/img/banner_01news.jpg'";
             ?>
             data-natural-width="1400" data-natural-height="470">
         <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>{{ $typename}}</h1>

                <p>我们提供新西兰最新资讯，实时{{ $typename}}信息</p>
                @include('layouts.partials.search')
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/news">新闻资讯</a></li>
                <li><a href="/news-{{$type}}">{{ $typename}}</a></li>
            </ul>
        </div>
    </div><!-- Position -->
    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <?php $i=1; ?>
                @foreach($articles as $article)
                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.<?php echo $i++; ?>s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                @if ((auth()->check() &&$article->is_fav ))
                                    <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart" href="javascript:void(0);" articleId="{{$article->id}}" typeid="4" title="已收藏"></a></div>
                                @else
                                    <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart-empty" href="javascript:void(0);" articleId="{{$article->id}}" typeid="4" title="添加到收藏"></a></div>
                                @endif
                                <div class="img_list">
                                    <a href="/news/{{$article->id}}">
                                        <img src="{{$article->picurl}}" alt="">
                                        <div class="short_info"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="cursor:pointer" onclick="window.location='/news/{{$article->id}}'">
                                <div class="tour_list_desc">
                                    <h3>{!!str_limit(strip_tags($article->title),40) !!}</h3>
                                    <p> {!!str_limit($article->abstract,250) !!}</p>
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
                @if($type==6)
                    <div class="box_style_1 expose">
                        <h3 class="inner">推荐行程</h3>
                        @foreach($hottours as $travel)
                            <div class="row">
                                <div class="col-md-6 col-sm-6 room">
                                    <div>
                                        <img src="{{$travel->picurl}}" alt="" width="68" height="68" class="img-circle">
                                    </div>
                                    <div class="hold_room">
                                        <h4><a href="/tour/{{$travel->id}}">{{$travel->title}}</a></h4>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <br>
                        <a class="btn_full" href="/tour">更多</a>
                    </div>
                @endif
                    @if($type==7)
                        <div class="box_style_1 expose">
                            <h3 class="inner">移民途径</h3>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <a href="/immigrant/26"><img src="/img/touzi.jpg" alt="投资移民" width="300" height="167" style="margin-bottom: 10px;"></a>
                                        <a href="/immigrant/25"><img src="/img/chuangye.jpg" alt="创业移民" width="300" height="167" style="margin-bottom: 10px;"></a>
                                        <a href="/immigrant/24"><img src="/img/jishu.jpg" alt="技术移民" width="300" height="167" style="margin-bottom: 10px;"></a>
                                     </div>
                                </div>


                            <br>
                            <a class="btn_full" href="/immigrant">更多</a>
                        </div>
                    @endif
                    @if($type==8)
                        <div class="box_style_1 expose">
                            <h3 class="inner">移民留学</h3>
                            @foreach($hotSchools as $hotSchool)
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 room">
                                        <div>
                                            <a href="/study/{{$hotSchool->id}}"><img src="{{$hotSchool->logo}}" alt="{{$hotSchool->cn_name}}" class="img-circle"></a>
                                        </div>
                                        <div class="hold_room">
                                            <h4><a href="/study/{{$hotSchool->id}}">{!!str_limit(strip_tags($hotSchool->cn_name),45) !!}</a></h4>
                                            @if(isset($hotSchool->tagsid))
                                                <p class="tags">
                                                    @foreach(App\Models\Tag::getTop2Tag($hotSchool->tagsid)->get() as $tag )
                                                        <span class="label label-info">{{$tag->name}}</span>
                                                    @endforeach
                                                </p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach($studysp as $xiaoxue)
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 room">
                                        <div>
                                            <a href="/study-sp/{{$xiaoxue->id}}"><img src="{{$xiaoxue->picurl}}" alt="{{$xiaoxue->name}}" class="img-circle"></a>
                                        </div>
                                        <div class="hold_room">
                                            <h4><a href="/study-sp/{{$xiaoxue->id}}">{!!str_limit(strip_tags($xiaoxue->name),45) !!}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <br>
                            <a class="btn_full" href="/tour">更多</a>
                        </div>
                    @endif
                    @if($type==9)
                       <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <a href="https://wap.koudaitong.com/v2/showcase/homepage?alias=xu0xkqz4" target="_blank"><img src="/img/chanpin.jpg" alt="新西兰商品直邮" width="360" height="200" style="margin-bottom: 10px;"></a>
                             </div>
                        </div>
                    @endif
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
            </div>
        </div>
    @endsection

@push('style')
        <!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">
<link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
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
        .tour_list_desc p{ line-height: 24px;}

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
<script type="text/javascript" charset="utf-8" src="/js/artdialog/dialog-plus-min.js"></script>
<script type="text/javascript" src="/js/jQuery-Add-Favorites.js"></script>
<script type="text/javascript">
        $(function () {
            $('.tooltip_flip').Add();
        });
</script>
@endpush