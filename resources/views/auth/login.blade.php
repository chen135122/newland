@extends('layouts.login')

@section('content')

    <section id="hero" class="login">
        <div style="text-align: left;">
        <img onclick="window.location='/'" src="/img/logo_sticky.png" height="45" style="margin: 20px 0 0 40px;cursor: pointer;">
        </div>
        <div class="container">
            <div class="row">
                <div align="center" id="qrcode">
                    <h3>微信登录</h3>
                    <div>{!!QrCode::size(300)->generate("https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxbf7a6d0b392ce5db&redirect_uri=http://www.kiwisay.cn/login?uuid=".$uuid."&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect")!!}</div>
                </div>
                <br>
                <br>
                {{--<div class="col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-3">--}}
                    {{--<div id="login">--}}
                        {{--<h3>登录--}}
                        {{--</h3>--}}
                        {{--<hr>--}}
                        {{--<form class="form-horizontal" action="/login" method="get" id="loginform" name="loginform">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-sm-3 control-label">用户名</label>--}}
                                {{--<div class="col-sm-9"><input type="text" class=" form-control" datatype="m"  placeholder="请输入手机号码" datatype="*" nullmsg="请输入手机号码" sucmsg=" " errormsg="请输入手机号码" id="txtMobile"  name="txtMobile">--}}
                                    {{--<span class="Validform_checktip"></span></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="userpassword" class="col-sm-3 control-label">密码</label>--}}
                                {{--<div class="col-sm-9"><input type="password" class="form-control" id="password" name="password" sucmsg=" "  placeholder="密码" datatype="*6-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！"></div>--}}
                                {{--<div style="float: right"><a href="/password/reset" target="_blank">忘记密码</a></div>--}}
                                {{--<div style="float: right;margin-right: 30px;"><a href="/register" target="_blank">注册</a></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                                    {{--<div id="pass-info" class="clearfix"></div>--}}
                                    {{--<input name="btnSubmit" id="btnSubmit" type="submit" class="btn_1 medium btn-success" value="登录" />--}}
                                    {{--<input name="btnResult" style="float:right;" onclick="window.location='/'" id="btnResult" type="button" class="btn_1 medium btn-success" value="回到首页" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--@if(isset($msg))--}}
                            {{--<div class="alert alert-danger" role="alert"> {{$msg}}</div>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
@endsection

@push('script')
        <!-- Specific scripts -->
    {{--<script type="text/javascript" charset="utf-8" src="/js/jquery.form.min.js"></script>--}}
    {{--<script type="text/javascript" charset="utf-8" src="/js/artdialog/dialog-plus-min.js"></script>--}}
    <script src="/js/common.js"></script>
    <script src="/js/Validform.js"></script>
    <script>
        $(document).ready(function () {
            setInterval("ajaxstatus()", 1000);
        });
        function ajaxstatus() {
            $.ajax({
                url: "/getlogstatus?uuid="+'{{$uuid}}',//+'{{$uuid}}',
                type: "GET",
                data: "",
                success: function (data) {
                    if (data!="-1") { //确定
                        $status=data["status"];
                        $cusid=data["cusid"];
                        $mobile=data["mobile"];
                        if($status==1)
                        {
                           // $("#txtMobile").val($mobile);
                            window.location.href = "login?txtMobile="+$mobile+"&password=123456";
                        }
                        else {
                        }
                    }
                    else {

                    }
                },
                error: function () {
                    //alert("O No~~~");
                }
            });
        }
    </script>
    @endpush
    @push('style')
    <link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .form-group{ margin-bottom: 5px;}
        footer{ margin-top:0;}

    </style>
    @endpush