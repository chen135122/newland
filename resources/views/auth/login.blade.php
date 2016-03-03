@extends('layouts.master')

@section('content')
    <section id="hero" class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3 col-sm-5 col-sm-offset-3">
                    <div id="login">
                        <h3>登录
                            @if(isset($errors))
                                @foreach($errors as $key=>$error)
                                   {{$key}}: {{$error}}
                                @endforeach
                            @endif
                        </h3>

                        <hr>
                        <form class="form-horizontal" action="/auth/login" method="post">
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">用户名</label>
                                <div class="col-sm-9"><input type="text" class=" form-control"  placeholder="请输入用户名"  nullmsg="请输入用户名" sucmsg=" " id="username"  name="username">
                                    <span class="Validform_checktip"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword" class="col-sm-3 control-label">密码</label>
                                <div class="col-sm-9"><input type="password" class=" form-control" id="password" name="password" sucmsg=" "  placeholder="密码" datatype="*6-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div id="pass-info" class="clearfix"></div>
                                    <input name="btnSubmit" id="btnSubmit" type="submit" class="btn_1 medium btn-success" value="登录" />

                                </div>
                            </div>
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
    <script src="/js/common.js"></script>
    <script src="/js/Validform.js"></script>
    <script>
        $(function() {
            //AjaxInitForm('#loginform', '#btnSubmit', 1);
        });
    </script>
    @endpush
    @push('style')
    <link href="/js/artdialog/ui-dialog.css" rel="stylesheet" type="text/css" />
    @endpush