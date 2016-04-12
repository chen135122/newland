<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ansonika">
    <title>@yield('title','All In New Zealand - 新西兰旅游置业')</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- BASE CSS -->
    <link href="/css/base.css" rel="stylesheet">

    <!-- Google web fonts -->
    <link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
    <style>

        .main_title p{
            font-size: 14px !important;
            margin-top: 5px;
        }

        .main-menu a {
            font-size: 15px;
        }
		.tour_list_desc h3{
			line-height: 23px !important;
			font-size: 14px;
			overflow: hidden;
			text-overflow: ellipsis;
			height: 3em;
			font-family: 'Microsoft YaHei',Arial,sans-serif;
		}
    </style>

    @stack('style')
</head>
<body>

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

@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 ">
                <img src="/img/logo_sticky.png" height="60" alt="All IN New Zealand" data-retina="true" class="logo_sticky">
            </div>
            <div class="col-md-6  col-sm-6 col-xs-6 " >
                <p class="footer_l">
                    客服热线：025-58761818 邮箱：services@allinnewzealand.com<br/>
                    地址：江苏省南京市鼓楼区广州路189号民防大厦801<br/>
                    几维说kiwi say 版权所有
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6" >
                <img src="/img/showqrcode.jpg" width="100" height="100"/>
            </div>
        </div>

    </div>
</footer>
<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>

@stack('script')
</body>

</html>