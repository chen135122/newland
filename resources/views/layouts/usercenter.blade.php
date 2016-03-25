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

        #position ul li:first-child:before {
            content:"";
        }
        ul.info_booking li,.strip_booking h3 {
            font-family:'Microsoft YaHei';
        }
        .icon_set_1_icon-51:before {
            content:'\36';
        }
        .icon_set_1_icon-3:before {
            content:'\24';
        }
        .icon_set_1_icon-4:before {
            content:'\3e';
        }
        .icon_set_1_icon-44:before {
            content:'\79';
        }
        .col-md-12 h4 a {
            cursor:pointer;
            color:#337ab7;
        }
        .form-group span{
            display:block;
            font-family:'Microsoft YaHei';
        }
        .form-group input,select {
            display:none;
        }
    </style>

    @stack('style')
</head>
<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->
@yield('content')

  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>需要帮助?</h3>
                    <a href="#" id="phone">+025-58761818</a>
                    <a href="#" id="email_footer">services@allinnewzealand.com</a>
                </div>
                <div class="col-md-2 col-sm-3" style="margin-left:10%;">
                    <h3>关于我们</h3>
                    <ul>
                        <li><a href="#">我们是谁</a></li>
                        <li><a href="/faq.html">常见问题</a></li>
                        <li><a href="#">使用条款</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3" style="margin-left:10%;">
                    <h3>其他内容</h3>
                    <ul>
                        <li><a href="#">最新资讯</a></li>
                        <li><a href="#">热门房产</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© All New Zealand 2016</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->
<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>

@stack('script')
</body>

</html>