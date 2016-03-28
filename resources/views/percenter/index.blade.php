@extends('layouts.usercenter')

@section('content')

    <div class="layer"></div>
    <div id="position">
        <div class="container">
            <ul id="top_links">
                <li>

                    <div class="dropdown dropdown-access">
                        @if (auth()->user())
                            {{auth()->user()->mobile}}
                        @else
                            <a href="/auth/login" class="dropdown-toggle" data-toggle="dropdown" id="access_link">登录</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- End Position -->

    <div class="margin_60 container">
        <div id="tabs" class="tabs">
            <nav>
                <ul  class="mytab">
                    {{--#section-1--}}
                    <li onclick="window.location='/percenter?type=1'"><a href="" class="icon-booking"><span>订单列表</span></a></li>
                    <li onclick="window.location='/percenter?type=2'"><a href="" class="icon-wishlist"><span>收藏列表</span></a></li>
                    <li id="percenter" ><a href="#section-3" class="icon-profile"><span>个人中心</span></a></li>
                    {{--<li id="gjfw"><a href="#section-4" class="icon-gl"><span>管家服务</span></a></li>--}}
                </ul>
            </nav>
            <div class="content">

                <section id="section-1">
                    @foreach($orderList as $order)
                        <div class="strip_booking">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="date">
                                        <span class="month">{{App\Http\Controllers\PercenterController::Upper(date('n',strtotime($order->created_at)),1) }}</span>
                                        <span class="day"><strong>{{date('d', strtotime($order->created_at))}}</strong>{{App\Http\Controllers\PercenterController::Upper(date('N', strtotime($order->created_at)),2)}}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <h3 class="hotel_booking">
                                        @if(($order->type)==1)
                                            新西兰旅游
                                            @elseif(($order->type)==2)
                                            新西兰房产
                                            @endif
                                        <span>
                                    @if(($order->type)==1)
                                        {{App\Models\Travel::where("id",$order->itemid)->first()->bigtitle}}
                                        @endif
                                        </span>
                                    </h3>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <ul class="info_booking">
                                        <li><strong>订单号</strong> {{$order->sn}}</li>
                                        <li><strong>支付状态</strong>
                                            {{App\Http\Controllers\PercenterController::payType($order->status) }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="booking_buttons">
                                        <a href="/tprint/{{$order->id}}" target="_blank" class="btn_2">详情</a>
                                        @if($order->status==1)
                                            <br>
                                        <a href="/topay/{{$order->id}}" target="_blank" class="btn_2">去支付</a>
                                            @endif
                                    </div>
                                </div>
                            </div><!-- End row -->
                        </div><!-- End strip booking -->
                    @endforeach

                    <div class="text-center">
                        @if($type==1)
                            {{$orderList->render()}}
                        @endif
                    </div>
                </section>

                <section id="section-2">
                    <div class="row">
                        <aside class="col-lg-3 col-md-3">
                            <div class="box_style_cat">
                                <ul id="cat_nav">
                                    <li><a href="?crid=1&type=2" id="active"><i class="icon_set_1_icon-51"></i>房产置业 <span>({{$count1}})</span></a></li>
                                    <li><a href="?crid=2&type=2"><i class="icon_set_1_icon-3"></i>国际旅游 <span>({{$count2}})</span></a></li>
                                    <li><a href="?crid=3&type=2"><i class="icon_set_1_icon-4"></i>移民留学 <span>({{$count3}})</span></a></li>
                                    <li><a href="?crid=4&type=2"><i class="icon_set_1_icon-44"></i>新闻资讯 <span>({{$count4}})</span></a></li>
                                </ul>
                            </div>
                        </aside>
                        <div class="col-lg-9 col-md-9">
                            @foreach($models as $model)
                            <div class="col-md-4 col-sm-6">
                                <div class="hotel_container">
                                    <div class="img_container">
                                        <a href="{{$typeUrl}}/{{$model->id}}">
                                            <img src="{{$model->picurl}}" width="800" height="533" class="img-responsive" alt="">


                                            {{--<div class="short_info hotel">--}}
                                                {{--From/Per night<span class="price"><sup>$</sup>59</span>--}}
                                            {{--</div>--}}
                                        </a>
                                    </div>
                                    <div class="hotel_title">
                                        <h3>{{str_limit($model->title,20)}}</h3>

                                        <div class="wishlist_close_admin">
                                            -
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            @if($type==2)
                                {{$models->render()}}
                            @endif
                        </div>
                    </div><!-- End row -->
                    <!--<button type="submit" class="btn_1 green">更改清单</button>-->
                </section><!-- End section 2 -->


                <section id="section-3">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4>你的基本信息</h4>
                            <ul id="profile_summary">
                                <li>用户名 <span>{{$member->nickname}}</span></li>
                                <li>手机号 <span>{{$member->mobile}}</span></li>
                                <li>地址 <span>{{$member->address}}</span></li>
                                <li>生日<span>{{$member->birthday}}</span></li>
                                <li>所在城市 <span>{{$member->city}}</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="img/tourist_guide_pic.jpg" alt="" class="img-responsive styled profile_pic">

                        </div>
                    </div><!-- End row -->
                    <div class="divider"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>个人信息(<a onclick="edit(this, '0', 'perinfo')">查看</a>/<a  onclick="edit(this, '1', 'perinfo')">编辑</a>)</h4>
                        </div>
                        <div id="perinfo">
                            <form method="post" action="/edit">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>用户名</label>
                                    <span>{{$member->nickname}}</span>
                                    <input class="form-control" name="nickname" value="{{$member->nickname}}" id="first_name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>地址</label>
                                    <span>{{$member->address}}</span>
                                    <input class="form-control" name="address"  value="{{$member->address}}" id="last_name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>所在城市</label>
                                    <span >{{$member->city}}</span>
                                    <input class="form-control" name="city" value="{{$member->city}}" id="email_2" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>生日 <small></small></label>
                                    <span>{{ date('Y/m/d',$member->birthday)}}</span>
                                    <input class="date-pick form-control" name="birthday" data-date-format="yyyy/M/d"  type="text">
                                </div>
                            </div>
                            <input type="submit" class="btn_1" style="display:none;float:right;margin-right:20px;" value="提交" />
                            </form>
                        </div>
                    </div><!-- End row -->

                    {{--<hr>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<h4>地址(<a onclick="edit(this, '0', 'address')">查看</a>/<a onclick="    edit(this, '1', 'address')">编辑</a>)</h4>--}}
                        {{--</div>--}}
                        {{--<div id="address">--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>收货人</label>--}}
                                    {{--<span >zhx</span>--}}
                                    {{--<input class="form-control" name="first_name" id="first_name" value="zhx" type="text">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>手机号</label>--}}
                                    {{--<span >13576031872</span>--}}
                                    {{--<input class="form-control" name="last_name" id="last_name" value="13576031872" type="text">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>地址</label>--}}
                                    {{--<span >南京鼓楼</span>--}}
                                    {{--<input class="form-control" name="email" id="email" value="南京鼓楼" type="text">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>选择要编辑的地址</label>--}}
                                    {{--<span >北京中关村</span>--}}
                                    {{--<select id="country" style="display:none;" class="form-control" name="country">--}}
                                        {{--<option value="">南京鼓楼区</option>--}}
                                        {{--<option value="">北京中关村</option>--}}
                                    {{--</select>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>是否设置为默认</label>--}}
                                    {{--<span >否</span>--}}
                                    {{--<select id="country" style="display:none;" class="form-control" name="country">--}}
                                        {{--<option value="">是</option>--}}
                                        {{--<option value="">否</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<hr />--}}
                            {{--<input type="button" class="btn_1" style="display:none;float:right;margin-right:20px;" value="提交" />--}}
                        {{--</div>--}}


                    {{--</div>--}}

                    <hr>
                </section>
                <section id="section-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4>Your profile</h4>
                            <ul id="profile_summary">
                                <li>Username <span>info@clara.com</span></li>
                                <li>First name <span>Clara</span></li>
                                <li>Last name <span>Tomson</span></li>
                                <li>Phone number <span>+00 032 42366</span></li>
                                <li>Date of birth <span>13/04/1975</span></li>
                                <li>Street address <span>24 Rue de Rivoli</span></li>
                                <li>Town/City <span>Paris</span></li>
                                <li>Zip code <span>002843</span></li>
                                <li>Country <span>France</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img src="img/tourist_guide_pic.jpg" alt="" class="img-responsive styled profile_pic">
                            </p>
                        </div>
                    </div><!-- End row -->

                    <div class="divider"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Edit profile</h4>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input class="form-control" name="first_name" id="first_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input class="form-control" name="last_name" id="last_name" type="text">
                            </div>
                        </div>
                    </div><!-- End row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input class="form-control" name="email_2" id="email_2" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Date of birth <small>(dd/mm/yyyy)</small></label>
                                <input class="form-control" name="email" id="email" type="text">
                            </div>
                        </div>
                    </div><!-- End row -->

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Edit address</h4>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street address</label>
                                <input class="form-control" name="first_name" id="first_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>City/Town</label>
                                <input class="form-control" name="last_name" id="last_name" type="text">
                            </div>
                        </div>
                    </div><!-- End row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Zip code</label>
                                <input class="form-control" name="email" id="email" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select id="country" class="form-control" name="country">
                                    <option value="">Select...</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- End row -->

                    <hr>
                    <h4>Upload profile photo</h4>
                    <div class="form-inline upload_1">
                        <div class="form-group">
                            <input type="file" name="files[]" id="js-upload-files" multiple>
                        </div>
                        <button type="submit" class="btn_1 green" id="js-upload-submit">Upload file</button>
                    </div>

                    <!-- Hidden on mobiles -->
                    <div class="hidden-xs">
                        <!-- Drop Zone -->
                        <h5>Or drag and drop files below</h5>
                        <div class="upload-drop-zone" id="drop-zone">
                            Just drag and drop files here
                        </div>
                        <!-- Progress Bar -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <!-- Upload Finished -->
                        <div class="js-upload-finished">
                            <h5>Processed files</h5>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                            </div>
                        </div><!-- End Hidden on mobiles -->

                        <hr>
                        <button type="submit" class="btn_1 green">Update Profile</button>

                    </div>
                </section><!-- End section 5 -->
            </div><!-- End content -->
        </div><!-- End tabs -->
    </div><!-- end container -->
@endsection

@push('style')
<link href="/css/admin.css" rel="stylesheet">
@endpush

@push('script')
<script src="/js/tabs.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<link href="/css/date_time_picker.css" rel="stylesheet">
<script>new CBPFWTabs(document.getElementById('tabs'));</script>
<script>

    $(function () {
        var type=parseInt('{{$type}}');
        $(".mytab li").each(function(){
            var $this= $(this);
            if(($this.index()+1)==type)
            {
                $this.attr('class','tab-current').siblings().attr('class','');
                //$("#section-"+type).attr('class','content-current').siblings().attr('class','');
                $("#section-"+type).attr('class','content-current').siblings().attr('class','');
            }
        });
        $("#percenter,#gjfw").click(function(){
            $(this).attr('class','tab-current').siblings().attr('class','');
            $("#section-"+($(this).index()+1)).attr('class','content-current').siblings().attr('class','');
        })
    });

    $('.wishlist_close_admin').on('click', function (c) {
        $(this).parent().parent().parent().fadeOut('slow', function (c) {
        });
    });
    $('input.date-pick').datepicker('setDate', 'today');
    function edit(obj,curid,divId)
    {
        if (curid == "0") {
            $("#" + divId).find("input,select").each(function () {
                $(this).hide();
            });
            $("#" + divId).find("span").each(function () {
                $(this).show();
            });
        }
        else {
            $("#" + divId).find("input,select").each(function () {
                $(this).show();
            });
            $("#" + divId).find("span").each(function () {
                $(this).hide();
            });
        }

        //$(obj).parent().next().find("input [type='text']").attr("readonly", "readonly");
    }
</script>
@endpush