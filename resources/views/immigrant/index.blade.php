@extends('layouts.master')
@section('title')移民
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
            <li>移民</li>
        </ul>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-8">
            <h2 class="page-header">移民</h2>
             <div class="panel-cont">
                 @foreach($models as $model)
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="img_lists">
                             <a href="/immigrant/{{$model->id}}"> <img src="{{$model->picurl}}" class="img-thumbnail"></a>
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8">
                         <div class="list_desc">
                             <h3><a href="/immigrant/{{$model->id}}">{{$model->title}}</a></h3>
                             <p> {!!str_limit($model->abstract,125) !!}</p>
                         </div>
                     </div>
                 </div>
                 @endforeach
            </div>
        </div>
        <aside class="col-lg-4 col-md-4 hide" style="margin-top: 80px;">
            <div class="box_style_4 expose ">
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
    </div><!-- End row -->
</div><!-- End container -->
    <style>
        .panel-body img{ width: 220px; height:116px;}
        .list_desc p{line-height: 22px; padding: 10px 20px 0 0; font-size: 14px;}
        .panel-cont .row{}
        .panel-cont .img_lists{  margin-bottom: 15px;}
        .list_desc h3{ margin-top: 40px;}
        .container .panel-cont .row{
            box-shadow:1px 1px 0 0 #eee;border:1px solid #eee;border-radius:3px;border-top:none;
            margin-bottom: 15px;
        }
    </style>
@endsection