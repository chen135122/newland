@extends('layouts.master')
@section('title')家庭信托
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll"
         <?php
         $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','家庭信托')->first();
         if($banner)
             echo  'data-image-src='.$banner->picurl;
         else
             echo "data-image-src='/img/banner_partner.jpg'";
         ?>
         data-natural-width="1400" data-natural-height="470">
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
            <li>家庭信托</li>
        </ul>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-8">
            <h2 class="page-header">家庭信托</h2>
             <div class="panel-cont">
                 @foreach($models as $model)
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="img_lists">
                             <a href="/trust/{{$model->id}}"> <img src="{{$model->picurl}}" class="img-thumbnail"></a>
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8">
                         <div class="list_desc">
                             <h3><a href="/trust/{{$model->id}}">{{$model->title}}</a></h3>
                             <p> {!!str_limit($model->abstract,125) !!}</p>
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
        .panel-cont .img_lists{  margin-bottom: 15px;}
        .list_desc h3{ margin-top: 20px;}
        .container .panel-cont .row{
            box-shadow:1px 1px 0 0 #eee;border:1px solid #eee;border-radius:3px;border-top:none;
            margin-bottom: 15px;
        }
    </style>
@endsection