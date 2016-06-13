
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
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>订单页</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="/css/base.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/jquery.switch.css" rel="stylesheet">

    <style>
        #top_links{
            float: right;
        }
        #top_links li{
            float: left;
        }
        .bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {
            background-color:#e04f67;
        }
        .add_bottom_15 a{
            float:left;
            width:15%;
            margin-left:15%;
        }
        #access_link:before ,#wishlist_link:before{
            color:#999;
        }
    </style>
</head>
<body>
@include('layouts.partials.top')
<div class="container margin_60" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12 add_bottom_15">
            <div class="form_title">
                <h3>名称 </h3>

            </div>
            <div class="form_title">
                <p>
                   {{$salhouse->title}}
                </p>
            </div>
            <div class="step" style="border-left:none;">
                <table class="table confirm">
                    <thead>
                    <tr>
                        <th>
                            项目名称
                        </th>
                        <th>
                            类型
                        </th>
                        <th>
                            收/支
                        </th>
                        <th>
                            价格
                        </th>
                        <th>
                            说明
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($salservice as $service)
                    <tr>
                        <td style="width: 20%;">
                            {{$service->title}}
                        </td>
                        <td style="width: 20%;">
                            @if(!empty(\App\Models\Tag::find($service->tagid)))
                            {{\App\Models\Tag::find($service->tagid)->name}}
                            @endif
                        </td>
                        <td style="width: 20%;">
                            @if($service->type==0)
                                收入
                            @else
                                支出
                            @endif
                        </td>
                        <td style="width: 20%;">
                            {{$service->price}}
                        </td>
                        <td style="width: 20%;">
                            {{$service->message}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!--End step -->
        </div><!--End col-md-8 -->

    </div><!--End row -->
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 ">
                <img src="/img/logo_sticky2.png" height="60" alt="All IN New Zealand" data-retina="true" class="logo_sticky">
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
<!-- Jquery -->
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/common_scripts_min.js"></script>
<script src="/js/functions.js"></script>
</body>
</html>