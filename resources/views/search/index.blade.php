@extends('layouts.master')
@section('title'){{$search_key}}查询结果
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="/img/banner_partner.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>查询</h1>
            <p></p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li>"{{$search_key}}"查询结果</li>
        </ul>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-8" >
            <h2 class="page-header">"<span style="color:red;">{{$search_key}}</span>"查询结果，共{{$row}}条结果</h2>
            <div class="panel-cont">
                <?php $i=1; ?>
                    @foreach($models as $model)
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.<?php echo $i++; ?>s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">

                            <div class="img_list">
                                <a href="{{$model->url}}">
                                    <div class=""></div><img src="{{$model->picurl}}" alt="">
                                    <div class="short_info">【{{$model->module}}】</div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="cursor:pointer" onclick="window.location='{{$model->url}}'">
                            <div class="tour_list_desc">
                                <h3>{!! $model->title !!}</h3>
                               {!! $model->short_info !!}
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div>
                                    <p><a href="{{$model->url}}" class="btn_1">详情</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <hr>

            <div class="text-center">
                {{$paginator->render()}}
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
                                <h4><a href="/property/{{$hotproperty->id}}">{{$hotproperty->title}}</a></h4>
                                @if(isset($hotproperty->tagsid))
                                    <p class="tags">
                                        @foreach(App\Models\Tag::getTag($hotproperty->tagsid)->get() as $tag )
                                            <span class="label label-info">{{$tag->name}}</span>
                                        @endforeach
                                    </p>
                                @endif
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
                @if(count($Lastedarticle)>0)
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
                @endif
                <br>

                <a class="btn_full" href="/news">更多</a>
            </div>
            @include('layouts.partials.right_side')


        </aside>
    </div><!-- End row -->
</div><!-- End container -->
    <style>
        .panel-body img{ width: 220px; height:116px;}
        .list_desc p{line-height: 22px; padding: 10px 20px 0 0; font-size: 14px;}
        .panel-cont .row{}
        .panel-cont .img_lists{ min-height: 160px;}
        .img_list{
            min-height:200px;}
        .img_list a img {
            transform: none !important;
            width:133px !important;
            height:133px !important;
            margin-top: 22px;
        }
        .img_list img {
            left: 10% !important;
        }
        .short_info{ background: none; color:#000;     left: 10% !important; }

    </style>
@endsection