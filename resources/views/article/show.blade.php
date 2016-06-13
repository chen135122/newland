@extends('layouts.master')
@section('title')
{{$article ->title}}
@stop
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
            <h1>新闻资讯</h1>
            <p>我们提供新西兰最新资讯，实时新闻信息</p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/news">新闻资讯</a></li>
        </ul>
    </div>
</div><!-- Position -->
<div class="container margin_60">
    <div class="row">
        <div class="col-md-8 articleContent">
            <h1 class="title">{{$article ->title}}</h1>
            <p class="date">
                {{(!empty($article->source)? '来源：'.$article->source.'&nbsp;&nbsp;' : '')}}
                发布时间：<?php echo with($article ->created_at)->format('Y/m/d'); ?>
            </p>
            @if($article ->abstract)
            <p class="abstract">{!!$article ->abstract !!}</p>
            @endif
            <div class="artibody">
                {!! $article ->content !!}
            </div>
            <hr>

            <div class="view_pagetitle">
                <span><strong>上一篇:</strong>
                    @if($next)
                        <a href="/news/{{$next->id}}">{{$next->title}}</a>
                    @else
                        没有了...
                    @endif
                </span><br />
                <span><strong>下一篇:</strong>
                    @if($prev)
                        <a href="/news/{{$prev->id}}">{{$prev->title}}</a>
                    @else
                        没有了...
                    @endif

                </span><br />
            </div>

        </div>
        <aside class="col-md-4">
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
                <i class="icon_set_1_icon-57"></i>
                <h4>联系我们</h4>
                <a href="tel://025-58761818" class="phone">+025-58761818</a>
                <small>周一 至 周日  8.30 - 18.30</small>
            </div>
        </aside>
    </div>
</div>
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