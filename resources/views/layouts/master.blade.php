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
    <title>All In New Zealand - 新西兰旅游置业</title>

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
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>025-58761818</strong></div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    @if (auth()->user())
                                     {{auth()->user()->mobile}}
                                    @else
                                     <a href="/auth/login" class="dropdown-toggle" data-toggle="dropdown" id="access_link">登录</a>
                                    @endif
                                    <div class="dropdown-menu">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="#">忘记密码？</a>
                                        <input type="submit" name="Sign_in" value="登录" id="Sign_in" class="button_drop">
                                        <input type="submit" name="Sign_up" value="注册" id="Sign_up" class="button_drop outline">
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                            <li><a href="wishlist.html" id="wishlist_link">收藏<span class="wishlist-num">0</span></a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3" style="width:50%;">
                    <div id="logo">
                        <a href="#"><img src="/img/logo2.png" height="55" alt="All IN New Zealand" data-retina="true" class="logo_normal"></a>
                        <a href="#"><img src="/img/logo_sticky.png" height="34" alt="All IN New Zealand" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9" style="width:50%;">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul class="head_type">
                            <li class="submenu">
                                <a href="#" class="show-submenu"> <!--<i class="icon_set_1_icon-64"></i>--> 首页 </a>
                            </li>
                            <li class=" megamenu submenu">
                                <a href="/property" class="show-submenu-mega"> <!--<i class="icon_set_1_icon-2"></i>--> 房产置业 </a>
                            </li>
                            <li class="submenu">
                                <a href="/tour" class="show-submenu"><!--<i class="icon_set_1_icon-8"></i>--> 国际旅游 </a>
                            </li>
                            <li class="submenu">
                                <a href="/study" class="show-submenu"><!--<i class="icon_set_1_icon-43"></i>--> 移民留学 </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu"> <!--<i class="icon_set_1_icon-14"></i>--> 积分商城 </a>
                            </li>
                            <li class="submenu">
                                <a href="/news" class="show-submenu"><!--<i class="icon_set_1_icon-7"></i>--> 新闻资讯 </a>
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

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