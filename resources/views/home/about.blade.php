@extends('layouts.master')
@section('title')我们是谁
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll"
         <?php
         $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','关于我们')->first();
         if($banner)
             echo  'data-image-src='.$banner->picurl;
         else
             echo "data-image-src='/img/home_bg_1.jpg'";
         ?>
         data-natural-width="1400" data-natural-height="470">
   <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>我们是谁</h1>
            <p></p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li>我们是谁</li>
        </ul>
    </div>
</div><!-- Position -->

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-8" >
            <h2 class="page-header">关于我们</h2>
              <div class="panel-cont">
                          {!! $content !!}
                            </div>
        </div>
        <aside class="col-lg-4 col-md-4" style="margin-top: 80px;">
            @include('layouts.partials.right_side')
        </aside>
    </div><!-- End row -->
</div><!-- End container -->
    <style>
        .panel-cont p{line-height: 22px; padding: 10px 20px 0 0; font-size: 14px;}
    </style>
@endsection