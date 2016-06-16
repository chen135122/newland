@extends('layouts.master')
@section('title')常见问题
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll"
         <?php
         $banner=\App\Models\Banner::join('nz_category', 'nz_banner.catid', '=', 'nz_category.id')->where('name','常见问题')->first();
         if($banner)
             echo  'data-image-src='.$banner->picurl;
         else
             echo "data-image-src='/img/home_bg_1.jpg'";
         ?>
         data-natural-width="1400" data-natural-height="470">
   <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>常见问题</h1>
            <p></p>
            @include('layouts.partials.search')
        </div>
    </div>
</section><!-- End section -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="/">首页</a></li>
            <li>常见问题</li>
        </ul>
    </div>
</div><!-- Position -->

<div class="container margin_60">

    <div class="row">
        <aside class="col-lg-3 col-md-3">
            <div class="box_style_cat">
                <ul id="cat_nav">
                    <li><a  class="active"><i class="icon_set_1_icon-37"></i>旅游</a></li>
                    <li><a class="icon-booking"><i class="icon_set_1_icon-23"></i>房产</a></li>
                    <li><a class="icon-booking"><i class="icon_set_1_icon-30"></i>留学</a></li>
                    <li><a class="icon-booking"><i class="icon_set_1_icon-87"></i>资讯</a></li>
                </ul>
            </div>

            <div class="box_style_4">
                <i class="icon_set_1_icon-57"></i>
                <h4>联系我们</h4>
                <a href="tel://025-58761818" class="phone" style="font-size: 21px;">+025-58761818<span style="color:#85c99d;">转0</span></a>
                <small>周一 至 周日  8.30 - 18.30</small>
            </div>
        </aside><!--End aside -->
        <div>
        <section id="section-1">
        <div class="col-lg-9 col-md-9" id="faq">
            <h2>旅游</h2>
            <div class="panel-group" id="accordion">
                @if(count(App\Models\Faq::where("type",1)->orderby("displayorder","asc")->select('title','content')->get())<=0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">暂时没有数据！</a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                　　{!! $faq->content !!}
                            </div>
                        </div>
                    </div>
                @else
                <?php
                    $i=0;
                ?>
                @foreach(App\Models\Faq::where("type",1)->orderby("displayorder","asc")->select('title','content')->get() as $faq)
                        <?php
                            $i++;
                        ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">{{$faq->title}}<i class="indicator pull-right icon-plus"></i></a>
                        </h4>
                    </div>
                    <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                        　　{!! $faq->content !!}
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div><!-- End col lg-9 -->
        </section>
        <section id="section-2" style="display: none;">
                <div class="col-lg-9 col-md-9" id="faq">
                    <h2>房产</h2>
                    <div class="panel-group" id="accordion">
                        @if(count(App\Models\Faq::where("type",2)->orderby("displayorder","asc")->select('title','content')->get())<=0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">暂时没有数据！</a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    　　{!! $faq->content !!}
                                </div>
                            </div>
                        </div>
                        @else
                        <?php
                        $i=0;
                        ?>
                        @foreach(App\Models\Faq::where("type",2)->orderby("displayorder","asc")->select('title','content')->get() as $faq)
                            <?php
                            $i++;
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">{{$faq->title}}<i class="indicator pull-right icon-plus"></i></a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        　　{!! $faq->content !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>

                </div><!-- End col lg-9 -->
            </section>
        <section id="section-3" style="display: none;">
            <div class="col-lg-9 col-md-9" id="faq">
                <h2>留学</h2>
                <div class="panel-group" id="accordion">
                    @if(count(App\Models\Faq::where("type",2)->orderby("displayorder","asc")->select('title','content')->get())<=0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">暂时没有数据！</a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    　　{!! $faq->content !!}
                                </div>
                            </div>
                        </div>
                    @else
                    <?php
                    $i=0;
                    ?>
                    @foreach(App\Models\Faq::where("type",3)->orderby("displayorder","asc")->select('title','content')->get() as $faq)
                        <?php
                        $i++;
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">{{$faq->title}}<i class="indicator pull-right icon-plus"></i></a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    　　{!! $faq->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                   @endif
                </div>
            </div><!-- End col lg-9 -->
        </section>
        <section id="section-4" style="display: none;">
                <div class="col-lg-9 col-md-9" id="faq">
                    <h2>资讯</h2>
                    <div class="panel-group" id="accordion">
                        @if(count(App\Models\Faq::where("type",2)->orderby("displayorder","asc")->select('title','content')->get())<=0)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">暂时没有数据！</a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        　　{!! $faq->content !!}
                                    </div>
                                </div>
                            </div>
                        @else
                        <?php
                        $i=0;
                        ?>
                        @foreach(App\Models\Faq::where("type",4)->orderby("displayorder","asc")->select('title','content')->get() as $faq)
                            <?php
                            $i++;
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">{{$faq->title}}<i class="indicator pull-right icon-plus"></i></a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        　　{!! $faq->content !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       @endif
                    </div>

                </div><!-- End col lg-9 -->
            </section>
        </div>
    </div><!-- End row -->
</div><!-- End container -->
    <style>
        .table tbody tr{
            border-right:1px solid #ddd;
            border-left:1px solid #ddd;
        }
        .table tbody tr td:first-child{
            width: 150px;
            vertical-align: middle;
        }
        .table tbody tr td{
            border-right:1px solid #ddd;
            line-height: 40px;
            text-align: center;
        }
    </style>
@endsection
@push('script')
<script src="/js/tabs.js"></script>
<script>
    $("#cat_nav li").each(function(index){
        $(this).click(function(){
            var currentSet=$("#section-"+(index+1));
            currentSet.show();
            currentSet.siblings().hide();
        })
    })
</script>
@endpush