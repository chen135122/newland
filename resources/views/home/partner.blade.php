@extends('layouts.master')
@section('title')合作伙伴
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner_partner.jpg" data-natural-width="1400" data-natural-height="470">
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
            <li>合作伙伴</li>
        </ul>
    </div>
</div><!-- Position -->

<div class="container">

    <div class="row">
        <div class="col-lg-9 col-md-9">
            <h2 class="page-header">合作伙伴</h2>
             <div class="panel-cont">
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="img_lists">
                             <img src="/img/icon-dvs.png" class="img-thumbnail">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8">
                         <div class="list_desc">
                             <h3>戴维森律师事务所</h3>
                             <p>戴维森律师事务所是新西兰最大的律师事务所之一，提供移民、房产买卖、雇聘法律、遗产管理、财产保护等服务，以其专业的法律服务为中国客户提供法律咨询等业务。</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="img_lists">
                             <img src="/img/icon-xinjia.png" class="img-thumbnail">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8">
                         <div class="list_desc">
                             <h3>NewHome</h3>
                             <p>NewHome是一家致力于新西兰全境的房产设计开发,土地房屋装饰后的地产公司,服务于全球华人，拥有25年行业领先地位，以其创新理念现已成为新西兰最大的房产公司。</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="img_lists">
                                        <img src="/img/icon-wanguo.png" class="img-thumbnail">
                                        </div>
                                 </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="list_desc">
                                        <h3>万国旅行社</h3>
                                        <p>万国旅行社是新西兰旅行社协会(TAANZ)成员，专注新西兰旅游，留学、移民等业务，在各大主要城市拥有多家门店，资深的经验和优质的服务逐步成为客户信赖的旅行社。</p>
                                    </div>
                                 </div>
                            </div>
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="img_lists">
                             <img src="/img/icon-tencent.png" class="img-thumbnail">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-8">
                         <div class="list_desc">
                             <h3>大苏网</h3>
                             <p>大苏网定位为江苏城市生活门户,把握城市脉搏,创造快乐生活,以南京为核心,覆盖整个江苏省,传播本地资讯和文化,为江苏省互联网用户提供最本地化的新闻行业资讯和生活。</p>
                         </div>
                     </div>
                 </div>


                        </div>
        </div>
        <aside class="col-lg-3 col-md-3" style="margin-top: 45px;">

            <div class="box_style_4">
                <i class="icon_set_1_icon-57"></i>
                <h4>需要 <span>帮助?</span></h4>
                <a href="tel://025-58761818" class="phone">+025-58761818</a>
                <small>周一 至 周五 8.30am - 18.30pm</small>
            </div>
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