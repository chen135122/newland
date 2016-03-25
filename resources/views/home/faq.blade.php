
@extends('layouts.master')

@section('content')
<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->
<div class="layer"></div>
<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>常见问题</h1>
            <p></p>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="#">新西兰</a></li>
            <li>常见问题</li>
        </ul>
    </div>
</div><!-- Position -->

<div class="container margin_60">

    <div class="row">
        <aside class="col-lg-3 col-md-3">
            <div class="box_style_cat">
                <ul id="cat_nav">
                    <li><a href="#" class="active"><i class="icon_set_1_icon-95"></i>付款</a></li>
                    <li><a href="#"><i class="icon_set_1_icon-95"></i>建议和提示</a></li>
                    <li><a href="#"><i class="icon_set_1_icon-95"></i>旅游建议</a></li>
                    <li><a href="#"><i class="icon_set_1_icon-95"></i>法律条款</a></li>
                    <li><a href="#"><i class="icon_set_1_icon-95"></i>预订和凭证</a></li>
                </ul>
            </div>

            <div class="box_style_2">
                <i class="icon_set_1_icon-57"></i>
                <h4>需要 <span>帮助?</span></h4>
                <a href="tel://025-58761818" class="phone">+025-58761818</a>
                <small>周一 至 周五 9.00am - 7.30pm</small>
            </div>
        </aside><!--End aside -->
        <div class="col-lg-9 col-md-9" id="faq">
            <h2>付款</h2>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">第一条<i class="indicator icon-minus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">第二条<i class="indicator icon-plus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">第三条<i class="indicator icon-plus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">第四条<i class="indicator icon-plus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">第五条<i class="indicator icon-plus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">第六条<i class="indicator icon-plus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                            <p>一个项目合同有预付款、项目验收款及质保金，经双方达成协议，预付款与项目验收款待项目安装完成验收合格后一起支付，剩余一部分合同款作为质保金，待一年质保期到了再支付</p>
                        </div>
                    </div>
                </div>
            </div>




        </div><!-- End col lg-9 -->
    </div><!-- End row -->
</div><!-- End container -->


<div id="toTop"></div><!-- Back to top button -->
@endsection
@push('style')
<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<link href="/css/slider-pro.min.css" rel="stylesheet">
<link href="/css/date_time_picker.css" rel="stylesheet">
<link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
<link href="/css/component.css" rel="stylesheet">
<link href="/css/content.css" rel="stylesheet">

<!-- Specific scripts -->
<!-- Cat nav mobile -->
<script src="js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>