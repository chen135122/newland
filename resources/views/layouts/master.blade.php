<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ansonika">
    <title>@yield('title','几维说- 梦想生活从这里启航')</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <!-- BASE CSS -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/newewm.css" rel="stylesheet">

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

			font-family: 'Microsoft YaHei',Arial,sans-serif;
		}
        .main-menu ul li{
            margin-left:15px;
        }


    </style>

    @stack('style')
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?f61c8954a13efd3b3bc39172386a46cf";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>
<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    {{--<div id="preloader">--}}
        {{--<div class="sk-spinner sk-spinner-wave">--}}
            {{--<div class="sk-rect1"></div>--}}
            {{--<div class="sk-rect2"></div>--}}
            {{--<div class="sk-rect3"></div>--}}
            {{--<div class="sk-rect4"></div>--}}
            {{--<div class="sk-rect5"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End Preload -->
    <div class="layer"></div>
    <!-- Header================================================== -->
    <header>
        <div class="header_bg">
         <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-3">
                    <div id="logo">
                         <a href="/"><img src="/img/logo_sticky.png" height="50" alt="All IN New Zealand" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-8 col-sm-9 col-xs-9" style="width:66%;">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>

                        <ul class="head_type">
                            <li class="submenu">
                                <a href="/" class="show-submenu"> <!--<i class="icon_set_1_icon-64"></i>--> 首页 </a>
                            </li>
                            <li class=" megamenu submenu">
                                <a href="/hotel" class="show-submenu-mega"> <!--<i class="icon_set_1_icon-2"></i>--> 旅馆加盟 </a>
                            </li>
                            <li class=" megamenu submenu">
                                <a href="/good" class="show-submenu-mega"> <!--<i class="icon_set_1_icon-2"></i>--> 进口商品代理 </a>
                            </li>
                            <li class="submenu">
                                <a href="/tour" class="show-submenu"><!--<i class="icon_set_1_icon-8"></i>--> 旅游 </a>
                            </li>
                            <li class="submenu">
                                <a href="/newzealand" class="show-submenu"><!--<i class="icon_set_1_icon-8"></i>--> 新西兰业务 </a>
                            </li>

                            <li class="submenu">
                                <a href="/news" class="show-submenu"><!--<i class="icon_set_1_icon-7"></i>--> 资讯 <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    @foreach(\App\Models\ArticleCategory::where('parent_id',4)->select('id','name')->get() as $category)
                                      <li  style="margin-left: 0px;"><a href="/news-{{$category->id}}">{{$category->name}}</a></li>
                                    @endforeach

                                </ul>

                            </li>
                            <li class="submenu">
                                <a href="/about" class="show-submenu">关于我们 <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li  style="margin-left: 0px;"><a href="/about">关于我们</a></li>
                                    <li  style="margin-left: 0px;"><a href="/partner">合作伙伴</a></li>
                                    <li  style="margin-left: 0px;"><a href="/faq">常见问题</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                </nav>
                <div class="col-md-2 col-sm-1 col-xs-6">
                    <div class="top_links">
                      @if (auth()->user())
                                    <a href="/percenter">个人中心</a>
                                    <a href="/auth/logout"> 退出 </a>
                                @else
                                    <a href="/auth/login"  id="access_link">登录</a>
                                @endif
                      <a href="/percenter" id="wishlist_link">收藏<span class="wishlist-num"></span></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

@yield('content')
@include('layouts.footer')
<div id="toTop"></div>
<div id="rightArrow"><a href="javascript:;" title="在线客户"></a></div>
<div id="floatDivBoxs">
    <div class="floatDtt">关注公众号</div>
    <div class="floatShadow">

        <div style="text-align:center;padding:10PX 0 5px 0;background:#EBEBEB;">
            <img src="/img/showqrcode.jpg" width="76" height="76">
            <br>微信公众号</div>
    </div>
    <div class="floatDbg"></div>
</div>
<!-- Common scripts -->
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>
<script>
    var flag=1;
    $('#rightArrow').click(function(){
        if(flag==1){
            $("#floatDivBoxs").animate({right: '-105px'},300);
            $(this).animate({right: '-5px'},300);
            $(this).css('background-position','-30px 0');
            flag=0;
        }else{
            $("#floatDivBoxs").animate({right: '0'},300);
            $(this).animate({right: '100px'},300);
            $(this).css('background-position','0px 0');
            flag=1;
        }
    });
    $(function(){
        setTimeout(wxHidden,5000);
    })
    function wxHidden()
    {
        $("#floatDivBoxs").animate({right: '-105px'},300);
        $('#rightArrow').animate({right: '-5px'},300);
        $('#rightArrow').css('background-position','-30px 0');
        flag=0;
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){

        var $b = $('#query_button'),$i = $('#search_key');

        $i.keyup(function(e){
            if(e.keyCode == 13){
                $b.click();
            }
        });

        $b.click(function(){
            if($('input[name="search_key"]').val()==""){
                alert("搜索关键词不能为空");
                return false;
            }else{
                var keyword = $('input[name="search_key"]').val();
                window.location.href='/search?search_key='+encodeURI(keyword);
                return false;
            }
        });

    });
</script>
@stack('script')
</body>

</html>