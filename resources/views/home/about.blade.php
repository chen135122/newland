@extends('layouts.master')
@section('title')我们是谁
@stop
@section('content')

<!-- Mobile menu overlay mask -->
<!-- Header================================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>我们是谁</h1>
            <p></p>
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

<div class="container margin_60">

    <div class="row">
        <div class="col-lg-9 col-md-9" id="faq">
            <h2>关于我们</h2>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            公司简介
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p style="margin: auto;">
                                　　几维说kiwi say是专注于新西兰房地产、定制旅游、移民、留学及游学，新西兰贸易领域的专业服务和投资管理公司，致力于为客户购买房产、后续租赁以及房屋打理修缮等一系列服务，帮客户量身打造私人定制旅行，为客户制定移民、留学方案及全真制插班游学，并提供新西兰最优质的特产。几维说kiwi say的业务遍及新西兰全境，并在新西兰拥有众多顶级合作伙伴，投资新西兰，我们更专业。<br>
                                <h5>房产</h5><br>
                                　　提供最优质的独家房源，最便捷的金融服务，并为您的房产提供后续租赁、打理等一系列全方位服务。<br>
                            <h5>旅游</h5><br>
                                　　针对不同人群，为客户量身打造高端定制旅游，提供丰富的旅游项目，全程最优质的出行体验。<br>
                            <h5> 留学</h5><br>
                                　　提供最有效的小学、中学、大学名校留学方案，解读新西兰留学条件、流程及费用的等问题，一站式服务。<br>
                            <h5>贸易</h5><br>
                                　　我们为您提供新西兰品质最高的蜂蜜、车厘子、奇异果、红酒，快速先进的运输服务为您锁住产品的口感及营养。<br>
                            <h5> 移民</h5><br>
                                　　 我们拥有新西兰最好的律所合作伙伴，为不同的人群提供不同的移民方案，快速便捷的移民通道。<br>
                            <h5> 资讯</h5><br>
                                　　提供最全最新的投资、移民、留学资讯，权威解读，独家服务推送，掌握第一手新西兰信息。<br>
                            <h5> 旅游线路</h5><br>
                                　　 针对不同客户，提供高端优质的定制旅游。<br>
                            <h5>  合作伙伴</h5><br>
                                　　戴维森律师事务所是新西兰前四、南岛最大的律师事务所，提供移民、房产买卖、雇聘法律、遗产管理、财产保护等服务，常年为中国客户提供法律咨询服务，拥有大量经验，同时是我公司签约合作伙伴。

                            </p>
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
                <small>周一 至 周五 9.00am - 7.30pm</small>
            </div>
        </aside>
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