@extends('layouts.master')

@section('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="/img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
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
            <li><a href="/">首页</a></li>
            <li><a href="/news">新闻资讯</a></li>
        </ul>
    </div>
</div><!-- Position -->
<div class="container margin_60">
    <div class="row">
        <div class="col-md-8 articleContent">
            <h1 class="title">{{$article ->title}}</h1>
            <p class="date">发布时间：<?php echo with($article ->created_at)->format('Y/m/d'); ?></p>
            <p class="abstract">{!!$article ->abstract !!}</p>
            <div class="img_wrapper"><img src="{{$article ->picurl}}" title="{{$article ->title}}">
                </div>
            <div class="artibody">
                {!! $article ->content !!}
            </div>
            <hr>

            <div class="view_pagetitle">
                <span><strong>上一篇:</strong>
                @if($prev)
               <a href="/news/{{$prev->id}}">{{$prev->title}}</a>
                @else
               没有了...
                @endif
                </span><br />
                <span><strong>下一篇:</strong>
                    @if($next)
                        <a href="/news/{{$next->id}}">{{$next->title}}</a>
                    @else
                        没有了...
                    @endif
                </span><br />
            </div>

        </div>
        <aside class="col-md-4">
            <div class="box_style_1 expose">
                <h3 class="inner">最新资讯</h3>
                @foreach($Lastedarticle as $article2)
                <div class="row">
                    <div class="col-md-6 col-sm-6 room">
                        <div>
                            <img src="{{$article2->picurl}}" alt="" width="68" height="68" class="/img-circle">
                        </div>
                        <div class="hold_room">
                            <h4><a href="/news/{{$article2->id}}">{!!str_limit($article2->title,40)!!}</a></h4>
                            <small>{!!str_limit($article2->abstract,40)!!} </small>
                        </div>
                    </div>
                </div>
                @endforeach
                <br>

                <a class="btn_full" href="/news">更多</a>
            </div>
            <div class="box_style_1 expose">
                <h3 class="inner">热门资讯</h3>
                @foreach($Hotdarticle as $article2)
                    <div class="row">
                        <div class="col-md-6 col-sm-6 room">
                            <div>
                                <img src="{{$article2->picurl}}" alt="" width="68" height="68" class="/img-circle">
                            </div>
                            <div class="hold_room">
                                <h4><a href="/news/{{$article2->id}}">{!!str_limit($article2->title,40)!!}</a></h4>
                                <small>{!!str_limit($article2->abstract,40)!!} </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <br>

                <a class="btn_full" href="/news">更多</a>
            </div>
            <div class="box_style_2">
                <i class="icon_set_1_icon-57"></i>
                <h4>需要 <span>帮助?</span></h4>
                <a href="tel://025-58761818" class="phone">+025-58761818</a>
                <small>周一 至 周五 9.00am - 7.30pm</small>
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