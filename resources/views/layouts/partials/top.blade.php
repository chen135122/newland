<header>
    <div class="header_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-3">
                    <div id="logo">
                        <a href="/"><img style="margin-bottom: 10px;" src="/img/logo_sticky.png" height="50" alt="All IN New Zealand" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-8 col-sm-9 col-xs-9" style="width:65%;">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img  src="/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>

                    </div><!-- End main-menu -->
                </nav>
                <div class="col-md-2 col-sm-1 col-xs-6">
                    <div class="top_links">
                        @if (auth()->user())
                            <a href="/percenter"> {{auth()->user()->nickname}}</a>
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