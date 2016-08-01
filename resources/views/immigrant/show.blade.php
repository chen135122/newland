@extends('layouts.master')
@section('title'){{$model ->title}}
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll"
         <?php
         $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','移民')->first();
         if($banner)
             echo  'data-image-src='.$banner->picurl;
         else
             echo "data-image-src='/img/banner_partner.jpg'";
         ?>
         data-natural-width="1400" data-natural-height="470">
   <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>移民</h1>
            <p></p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/immigrant">移民</a></li>
        </ul>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-8" >
            <h2 class="page-header">{{$model ->title}}</h2>
            <div class="panel-cont" id="lightgallery">
                {!! $model ->content !!}
            </div>
        </div>
        <aside class="col-lg-4 col-md-4" style="margin-top: 80px;">
            <div class="box_style_4 expose">
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
            <div class="box_style_4 expose">
                <h3 class="inner">著名学校</h3>
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

                <br>

                <a class="btn_full" href="/study">更多</a>
            </div>
            <div class="box_style_4">
                <a href="/news/106"><img src="/img/yiming.jpg"></a>
            </div>
            @include('layouts.partials.right_side')
        </aside>
    </div>
</div>
@endsection
@push('style')
<link href="/dist/css/lightgallery.css" rel="stylesheet">
<style>
    .panel-body img{ width: 220px; height:116px;}
    .list_desc p{line-height: 22px; padding: 10px 20px 0 0; font-size: 14px;}
    .panel-cont .row{}
    .panel-cont .img_lists{ min-height: 160px;}
</style>
@endpush
@push('script')
<script src="/dist/js/lightgallery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lightgallery').find("img").each(function(){
            $(this).css("cursor","pointer");
            $(this).attr("data-src",$(this).attr("src"));
        });
        $('#lightgallery').lightGallery();

    });
</script>
@endpush