@extends('layouts.master')
@section('title')进口商品代理@stop
@section('content')
    <section class="parallax-window" data-parallax="scroll"
             <?php
             $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','房产')->first();
              if($banner)
                  echo  'data-image-src='.$banner->picurl;
              else
              echo "data-image-src='/img/house_bg.jpg'";
             ?>
             data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>进口商品代理</h1>
                <p>我们提供最完善、最有保障的商品代理服务</p>
                @include('layouts.partials.search')
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/property">进口商品代理</a></li>
            </ul>
        </div>
    </div><!-- Position -->



    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8">

                @foreach($properties as $property)
                    <div class="strip_all_tour_list wow fadeIn" >
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                 @if ((auth()->check() &&$property->is_fav ))
                                        <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart" href="javascript:void(0);" articleId="{{$property->id}}" typeid="1" title="已收藏"></a></div>
                                    @else
                                        <div class="wishlist"><a class="tooltip_flip tooltip-effect-1 icon-heart-empty" href="javascript:void(0);" articleId="{{$property->id}}" typeid="1" title="添加到收藏"></a></div>
                                    @endif

                                <div class="img_list">
                                    <a href="/property/{{$property->id}}">
                                        {{--ribbon popular--}}
                                        <div class=""></div><img src="{{$property->picurl}}" alt="">
                                        <div class="short_info"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="cursor:pointer" onclick="window.location='/property/{{$property->id}}'">
                                <div class="tour_list_desc">
                                    <h3>{{$property->title}}</h3>
                                    @if(isset($property->tagsid))
                                        <p>
                                        @foreach(App\Models\Tag::getTag($property->tagsid)->get() as $tag )
                                                <span class="label label-info">{{$tag->name}}</span>
                                        @endforeach
                                        </p>
                                    @endif
                                    <p>
                                    <p> {!!str_limit($property->expound,180) !!}</p>
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="price_list">
                                    <div>
                                        {{--<span class="price_mod">NZ$<span class="price">{{intval($property->total_price)}}</span>起</span><small>总价</small>--}}
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
                </div>
            </div>
            <aside class="col-md-4 hide ">
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
                    @if(count($Lastedarticle)>0)
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
                    @endif
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
<!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">
<link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
<!-- Range slider -->
<link href="/css/ion.rangeSlider.css" rel="stylesheet" >
<link href="/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <style>
        .tour_list_desc h3{ margin-top: 20px;}

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
        .price_list .price{ margin-top: 5px;}
        .tour_list_desc p{ font-size:14px;
            line-height:24px;;}
        .strip_all_tour_list .label-info{line-height:2.2;}
    </style>
@endpush

@push('script')
        <!-- Specific scripts -->
    <!-- Check and radio inputs -->
    <script src="/js/icheck.js"></script>
    <script>
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

                var newPrice= $(this).text();
                    newPrice = cutStr(newPrice);
                    $(this).text(newPrice);
            })
        })
    </script>
    <script type="text/javascript" charset="utf-8" src="/js/artdialog/dialog-plus-min.js"></script>
    <script type="text/javascript" src="/js/jQuery-Add-Favorites.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.tooltip_flip').Add();
        });
    </script>
    @endpush