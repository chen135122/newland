@extends('layouts.master')

@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
    <section id="hero" class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-3">
                    <div id="login">
                        <h3>短信取回密码
                        </h3>

                        <hr>
                        <form class="form-horizontal" action="/password/reset_password" method="post" id="pwdform" name="pwdform">
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">用户名</label>
                                <div class="col-sm-9">
                                    <input type="text" class=" form-control"  placeholder="请输入用户名"  datatype="s3-50"  nullmsg="请输入用户名" sucmsg=" " id="txtUserName"  name="txtUserName" ajaxurl="/password/validate_username">
                                        <span class="Validform_checktip"></span>
                                 </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">短信验证码</label>
                                <div class="col-sm-9">
                                    <div class="col-sm-5" style="padding: 0;">  <input type="text" class="form-control" id="txtCode" name="txtCode" sucmsg=" " placeholder="输入验证码"></div>
                                    <div class="col-sm-7" style="padding-right:0;"><a class="btn_1 medium" href="javascript:;" onclick="sendSMS(this,'#txtUserName','/password/sendsms',1);" id="btnSendcode" style="text-align: center;width: 100%;">发送验证码</a></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userpassword" class="col-sm-3 control-label">新密码</label>
                                <div class="col-sm-9"><input type="password" class="form-control" id="password" name="password" sucmsg=" "  placeholder="密码" datatype="*6-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！"></div>
                            </div>
                            <div class="form-group">
                                <label for="userpassword2" class="col-sm-3 control-label">确认新密码</label>
                                <div class="col-sm-9"> <input type="password" class=" form-control" id="userpassword2" datatype="*" sucmsg=" " placeholder="确认密码" recheck="password" nullmsg="请再输入一次密码！" errormsg="您两次输入的密码不一致！" ></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4" style="float: right;">
                                    <div id="pass-info" class="clearfix"></div>
                                    <input name="btnSubmit" id="btnSubmit" type="submit" class="btn_1 medium btn-success" value="重置密码" />

                                </div>
                            </div>
                            <input id="turl" type="hidden" value="" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection

    @push('script')
            <!-- Specific scripts -->
    <script type="text/javascript" charset="utf-8" src="/js/jquery.form.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/js/artdialog/dialog-plus-min.js"></script>
    <script src="/js/Validform.js"></script>
    <script src="/js/common.js"></script>

    <script>
        $(function() {
            AjaxInitForm('#pwdform', '#btnSubmit', 1 ,'#turl');
        });
    </script>
    @endpush
    @push('style')
    <link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .form-group{ margin-bottom: 5px;}
    </style>
    @endpush