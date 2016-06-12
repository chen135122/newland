


<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
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
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/color-green.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet">

    <link href="/css/menu.css" rel="stylesheet">
    <link href="/css/pop_up.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <style>
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
        .table tbody tr td {
            width:50%;
            text-align:center;
        }
    </style>
</head>
<body style="background-color:#fff;">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">

                <h3>订单号 # {{$order->sn}}</h3><h3 class="pull-right"></h3>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#f5f5f5;border:none;">
                    <h3 class="panel-title" style="margin-left:15%;"><strong>订单信息</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="contact-box">
                            <a href="/property/{{$property->id}}" target="_blank">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="image" class="m-t-xs img-responsive" src="{{$property->picurl}}">
                                        <div class="m-t-xs font-bold"><a href="/property/{{$property->id}}" target="_blank">{{$property->title}}</a></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3><strong>名称：<a href="/property/{{$property->id}}" target="_blank">{{$property->title}}</a></strong></h3>
                                    <p> 房源价格：NZ${{$property->total_price}}<br>
                                        联系人：{{$order->username}}<br>
                                        手机号码：{{$order->phone}}<br>
                                        电子邮件：{{$order->email}}<br>
                                        @if($order->remark)
                                        备注：{{$order->remark}}<br>
                                        @endif
                                        支付状态：{{App\Http\Controllers\TourController::status($order->status)}}<br>创建时间:{{$order->created_at}}</p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>