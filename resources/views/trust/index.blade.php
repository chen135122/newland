@extends('layouts.master')
@section('title')合作伙伴
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner_partner.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>家庭信托</h1>
            <p></p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li>合作伙伴</li>
        </ul>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-8">
            <h2 class="page-header">合作伙伴</h2>
             <div class="panel-cont">
                 @foreach($models as $model)
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="img_lists">
                             <a href="/partner/{{$model->id}}"> <img src="{{$model->picurl}}" class="img-thumbnail"></a>
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8">
                         <div class="list_desc">
                             <h3><a href="/partner/{{$model->id}}">{{$model->title}}</a></h3>
                             <p> {!!str_limit($model->abstract,350) !!}</p>
                         </div>
                     </div>
                 </div>
                 @endforeach
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