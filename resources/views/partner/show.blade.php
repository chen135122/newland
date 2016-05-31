@extends('layouts.master')
@section('title')合作伙伴
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="/img/banner_partner.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>合作伙伴</h1>
            <p></p>
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
            <div class="panel-cont">
                {!! $model ->content !!}
            </div>
        </div>
        <aside class="col-lg-4 col-md-4" style="margin-top: 80px;">
            @include('layouts.partials.right_side')
        </aside>
    </div><!-- End row -->
</div><!-- End container -->
    <style>
        .panel-body img{ width: 220px; height:116px;}
        .list_desc p{line-height: 22px; padding: 10px 20px 0 0; font-size: 14px;}
        .panel-cont .row{}
        .panel-cont .img_lists{ min-height: 160px;}
    </style>
@endsection