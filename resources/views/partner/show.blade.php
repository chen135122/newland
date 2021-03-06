@extends('layouts.master')
@section('title'){{$model ->title}}
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll"
         <?php
         $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','合作伙伴')->first();
         if($banner)
             echo  'data-image-src='.$banner->picurl;
         else
             echo "data-image-src='/img/banner_partner.jpg'";
         ?>
         data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>合作伙伴</h1>
            <p></p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/partner">合作伙伴</a></li>
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
            @include('layouts.partials.right_side')
        </aside>
    </div><!-- End row -->
</div><!-- End container -->

@endsection
@push('style')
<link href="/dist/css/lightgallery.css" rel="stylesheet">
<style>
    .panel-body img{ width: 220px; height:116px;}
    .list_desc p{line-height: 22px; padding: 10px 20px 0 0; font-size: 14px;}
    .panel-cont .row{}
    .panel-cont .img_lists{ min-height: 160px;}
    .parallax-content-1 div h1{ color:#666!important;}
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