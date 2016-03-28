@extends('layouts.master')
@section('title')
    {{$property ->title}}
@stop
@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="/img/single_hotel_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                         <h1>{{$property ->title}}</h1>
                        <span>{{$property ->address}}</span>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div id="price_single_main" class="hotel">
                            <span><sup>$</sup>{{$property ->total_price}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/property">房产</a></li>
                <li>详情</li>
            </ul>
        </div>
    </div><!-- End Position -->


    <div class="collapse" id="collapseMap">
        <div id="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8" id="single_tour_desc">

                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a></p><!-- Map button for tablets/mobiles -->
                <div id="img_carousel" class="slider-pro">
                    <div class="sp-slides">
                        @foreach($pic as $p)
                            <div class="sp-slide">
                                <img alt="" class="sp-image" src="/css/images/blank.gif"
                                     data-src="{{$p->picurl}}"
                                     data-small="{{$p->picurl}}"
                                     data-medium="{{$p->picurl}}"
                                     data-large="{{$p->picurl}}"
                                     data-retina="{{$p->picurl}}">
                            </div>
                        @endforeach

                    </div>
                    <div class="sp-thumbnails">
                        @foreach($pic as $p)
                            <img alt="" class="sp-thumbnail" src="{{$p->picurl}}">
                        @endforeach
                    </div>
                </div>


                <div class="row">
                    <div id="ml" style="background-color: #333;font-size: 11px;margin-top:32px;">
                        <div style="width:100%;margin-right: auto;margin-left: auto;">
                            <ul class="c_ul" style="margin: 0;padding: 0;color: #888;">
                                <li class="new_a"><a onclick="removeClass('info', this)" href="#info">房源信息</a></li>
                                <li class="new_a"><a onclick="removeClass('intro', this)" href="#intro">房源介绍</a></li>
                                <li><a href="#cates" onclick="removeClass('cates', this)">周边配套</a></li>
                                <li><a href="#xmmd" onclick="removeClass('xmmd', this)">项目卖点</a></li>
                                <li><a href="#ldbz" onclick="removeClass('ldbz', this)">六大保证</a></li>
                                <li><a href="#hyzx" onclick="removeClass('hyzx', this)">会员尊享</a></li>
                                <li><a href="#gfyh" onclick="removeClass('gfyh', this)">购房优惠</a></li>
                                <li><a href="#tzys" onclick="removeClass('tzys', this)">投资优势</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-md-3" id="info">
                        <h3 >房源信息</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <tbody>
                                    <tr>
                                        <td>开发商</td>

                                        <td class="text-center">{{$property ->developers->name}}</td>
                                    </tr>

                                    <tr>
                                        <td>年收益（%）</td>

                                        <td class="text-center">{{ $property ->annual_yield }}</td>
                                    </tr>
                                    <tr>
                                        <td>售价</td>

                                        <td class="text-center">{{ $property ->total_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>居住面积</td>

                                        <td class="text-center">{{$property ->floor_area}}㎡</td>
                                    </tr>
                                    <tr>
                                        <td>占地面积</td>

                                        <td class="text-center">{{$property ->living_area}}㎡</td>
                                    </tr>
                                    <tr>
                                        <td>状态</td>
                                        <td class="text-center">
                                            <?php
                                            switch($property->status)
                                            {
                                                case 0 :echo "未上架"; break;
                                                case 1 :echo "出售中"; break;
                                                case 2 :echo "已预订"; break;
                                                case 3 :echo "已售出"; break;
                                                case 4 :echo "已删除"; break;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>户型</td>
                                        <td class="text-center">{{$property ->bedroom}}室{{$property ->living_room}}厅{{$property ->bathroom}}卫</td>
                                    </tr>
                                    <tr>
                                        <td>类型</td>
                                        <td class="text-center">
                                            <?php
                                                switch($property->type)
                                                    {
                                                    case 1 :echo "独立别墅"; break;
                                                    case 2 :echo "公寓"; break;
                                                    case 3 :echo "单元房Studio"; break;
                                                    case 4 :echo "城市屋Townhouse"; break;
                                                    case 5 :echo "排房Unit"; break;
                                                    case 6 :echo "建地Section"; break;
                                                    case 7 :echo "Home&amp;Income"; break;
                                                    case 8 :echo "乡村别墅Lifestyle Property"; break;
                                                    case 9 :echo "乡村住宅建地Lifestyle Section"; break;
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>位置</td>
                                        <td class="text-center">{{$property->regions->name}}-{{$property->regions_city->name}}-{{$property->regions_district->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>地址</td>
                                        <td class="text-center">{{ $property ->address }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="intro">
                        <h3>房源介绍</h3>
                    </div>
                    <div class="col-md-9">
                        <p>
                            {!! $property ->description !!}
                        </p>
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="cates">
                        <h3>周边配套</h3>
                    </div>
                    <div class="col-md-9">
                        <h4>高尔夫球场</h4>
                        <p>
                            项目距离基督城市中心仅20公里，成熟的商业配套设施，世界名校学区房，超市，酒吧，购物中心，最美沙滩，享受无限快乐的生活方式。24小时的管家保安服务为您提供持续安全保护。
                        </p>

                        <div class="row">
                        </div><!-- End row  -->
                        <div class="carousel magnific-gallery">
                            <div class="item">
                                <a href="/img/gef1.jpg"><img src="/img/gef1.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="/img/gef2.jpg"><img src="/img/gef2.jpg" alt="Image"></a>
                            </div>
                        </div><!-- End photo carousel  -->

                        <hr>

                        <h4>海滩</h4>
                        <p>
                            毗邻全球前100名的高尔夫球场，步行1公里到达新西兰The Kohaga最美沙滩，无论是您在高尔夫球场中寻找更多的体验方式，还是携手爱人漫步在The Kohaga细沙安静的海滩上，陪孩子一起成长，自由呼吸着纯净空气，顷刻间俘获您的心，让您流年忘返，天马镇都是您最佳的选择。
                        </p>

                        <div class="row">
                        </div><!-- End row  -->
                        <div class="carousel magnific-gallery">
                            <div class="item">
                                <a href="/img/ht1.jpg"><img src="/img/ht1.jpg" alt="Image"></a>
                            </div>
                            <div class="item">
                                <a href="/img/ht2.jpg"><img src="/img/ht2.jpg" alt="Image"></a>
                            </div>
                        </div><!-- End photo carousel  -->
                    </div><!-- End col-md-9  -->
                </div><!-- End row  -->
                <hr>
                <div class="row">
                    <div class="col-md-3" id="xmmd">
                        <h3>项目卖点</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <ul class="xmmd">
                                    <li>
                                        <td> <a>√</a> 无印花税;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a>基督城是新西兰第二大城市，人口增长最快，长期房屋供应不足;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 租房市场需求强劲，租金回报率平均高达5%-7%，前三年内保证回报率在6%;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 利率低;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 周边高校多，空置率低，提供代租服务;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 房屋质量有任何问题，三年内无条件退还;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 海量车位，免费，无限制;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 房屋产权为永久产权，999年;</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 交付时间短，仅6-9月。</td>
                                    </li>
                                    <li>
                                        <td><a>√</a> 两年内转售住宅房产，无增值税;</td>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="ldbz">
                        <h3>六大保证</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <ul class="xmmd">
                                    <li>
                                        <a>√</a> 全程海外律师团无缝对接;
                                    </li>
                                    <li>
                                        <a>√</a>学区首选，择校无忧;
                                    </li>
                                    <li>
                                        <a>√</a>三年无条件退房承若;
                                    </li>
                                    <li>
                                        <a>√</a> 精装交付，价享优惠;
                                    </li>
                                    <li>
                                        <a>√</a> 旅游看房一站式服务。
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="hyzx">
                        <h3>会员尊享</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <ul class="xmmd">
                                    <li>
                                        <a>√</a> 积分兑换活动;
                                    </li>
                                    <li>
                                        <a>√</a>房屋里面的卫生定期会有物业公司人上门进行打扫，打扫后通过照片或视频形式发送给客户以便查看(半个月打扫一次);
                                    </li>
                                    <li>
                                        <a>√</a>为了让客户无后顾之忧，我们还为客户提供租赁服务，免费为客户找租客，减少空置率;
                                    </li>
                                    <li>
                                        <a>√</a> 花园草坪的清理，花的维护;
                                    </li>
                                    <li>
                                        <a>√</a> 在安保上物业公司也会提供房屋监管的服务;
                                    </li>
                                    <li>
                                        <a>√</a> 内部大家电有1-3年的保证。
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="gfyh">
                        <h3>购房优惠</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <ul class="xmmd">
                                    <li>
                                        <a>√</a> 买房免费畅游新西兰;
                                    </li>
                                    <li>
                                        <a>√</a>送一年物业费(综合费一年在2000纽币左右);
                                    </li>
                                    <li>
                                        <a>√</a>送一年高尔夫球场会员卡;
                                    </li>
                                    <li>
                                        <a>√</a> 送床，床上四件套及洗漱用品。
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3" id="tzys">
                        <h3>投资优势</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="table-responsive">
                                <ul class="xmmd">
                                    <li>
                                        <a>√</a> 法律健全：购房手续规范，保障投资者的利益，全权由新西兰最权威的律师事务所戴维森律师事务所办理;
                                    </li>
                                    <li>
                                        <a>√</a>产权优势：永久产权，无遗产税，无持有税;
                                    </li>
                                    <li>
                                        <a>√</a>物业优势：房屋租赁市场强劲，空置率极低，增值稳定;
                                    </li>
                                    <li>
                                        <a>√</a> 物业优势：房屋租赁市场强劲，空置率极低，增值稳定;
                                    </li>
                                    <li>
                                        <a>√</a> 贷款优势：海外人士也可以申请贷款，且贷款利率跟本地人相同，手续也相对简单。海外人士买房可申请60-70%的银行贷款，拥有本地身份的人士最高可申请到80%的银行贷款;
                                    </li>
                                    <li>
                                        <a>√</a> 供房优势：高租金收益;
                                    </li>
                                    <li>
                                        <a>√</a> 地域优势：新西兰是移民国家之一，房产长期供不应求。
                                    </li>
                                    <li>
                                        <a>√</a> 交易成本低：无任何交易税费(如印花税、契约税等);
                                    </li>
                                    <li>
                                        <a>√</a> 房产市场健全，增值迅速，回报稳定;
                                    </li>
                                    <li>
                                        <a>√</a> 海外人士购房无任何限制;
                                    </li>
                                    <li>
                                        <a>√</a> 租金回报高，做到以房养房、以房养学;
                                    </li>
                                </ul>
                            </div>
                        </div><!-- End row  -->
                    </div>
                </div>
                <hr>

            </div>

            <aside class="col-md-4">
                <p class="hidden-sm hidden-xs">
                    <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">查看地图</a>
                </p>
                <div class="box_style_1 expose">
                    <h3 class="inner">开发商介绍</h3>
                    <div class="row">
                        <small>{{ $property->developers->intro}}  </small>
                    </div>

                </div>

                <div class="box_style_1 expose">
                    <h3 class="inner">热门房产</h3>
                    @foreach($hotpropertys as $hotproperty)
                        <div class="row">
                            <div class="col-md-6 col-sm-6 room">
                                <div>
                                    <a href="/property/{{$hotproperty->id}}"><img src="{{$hotproperty->picurl}}" alt="{{$hotproperty->title}}" width="68" height="68" class="/img-circle"></a>
                                </div>
                                <div class="hold_room">
                                    <h4><a href="/property/{{$hotproperty->id}}">{{str_replace('基督城','',$hotproperty->title)}}</a></h4>
                                    <small>{{$hotproperty->address}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <br>

                    <a class="btn_full" href="/property">更多</a>
                </div>
                <div class="box_style_1 expose">
                    <h3 class="inner">最新资讯</h3>
                    @foreach($Lastedarticle as $article2)
                        <div class="row">
                            <div class="col-md-6 col-sm-6 room">
                                <div>
                                    <img src="{{$article2->picurl}}" alt="" width="68" height="68" class="/img-circle">
                                </div>
                                <div class="hold_room">
                                    <h4><a href="/news/{{$article2->id}}">{{$article2->title}}</a></h4>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    <br>

                    <a class="btn_full" href="/news">更多</a>
                </div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-90"></i>
                    <h4>联系我们</h4>
                    <a href="tel://004542344599" class="phone">+025-58761818</a>
                    <small>周一 至 周日 9.00am - 7.30pm</small>
                </div>
            </aside>
        </div><!--End row -->
    </div><!--End container -->

@endsection


@push('style')
<!-- CSS -->
<link href="/css/slider-pro.min.css" rel="stylesheet">
<link href="/css/date_time_picker.css" rel="stylesheet">
<link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
    <style>
        .main_title p {
            font-size: 14px !important;
            margin-top: 5px;
        }
        .main_title p {
            /*font-size: 14px !important;*/
            margin-top: 5px;
        }

        .main-menu a {
            font-size: 16px;
            /*font-weight: 700;*/
        }

        .col-md-4 ul li a {
            font-weight: normal;
        }

        #top_links li a {
            /*font-weight: 600;*/
            font-family: 'Microsoft YaHei';
        }


        .col-md-4 ul {
            float: left;
        }

        .tp_d {
            color: #ffffff;
            font-size: 16px;
            text-transform: uppercase;
            font-family: 'Microsoft YaHei';
            /*font-weight: bold;*/
        }

        .tp_detail {
            font-family: 'Microsoft YaHei';
            height: 36px;
            overflow: hidden;
        }

        .col-md-4 p {
            font-size: 14px;
            color: coral;
        }

        .col-md-3 > h4 span {
            color: lightcoral;
        }
        .room {
            width:100%;
            margin-bottom:20px;
        }
        .room div {
            float:left;
        }
        .hold_room {
            width:65%;
            margin:-10px 0 0 10px;
        }
        .hold_room small {
            font-family:'Microsoft YaHei';
        }
        #single_tour_desc h3 {
            font-size:14px;
            /*height:30px;*/
            margin-top:0;
        }
        .c_ul li{
            display: inline-block;
            padding-right: 8px;
            margin-right: 3px;
            position: relative;
            font-family: 'Microsoft YaHei';
            padding-left:30px;
            width:11.5%;
            padding:10px 0 10px 0;
            text-align:center;
        }
        .c_ul li a{
            color:#fff;
        }
        .strip_all_tour_list { padding:10px;
        }
        .table-condensed tbody tr:first-child td{
            border:none;

        }
        .table-condensed tbody tr td:first-child {
            width:20%;
            text-align:center;
            vertical-align:middle;
        }
        .table1 tbody tr td {
            border:none;
        }
        .xmmd li{
            list-style:none;
            line-height:25px;
        }
        .col-md-9 p{
            font-family:inherit;
        }
    </style>
@endpush

@push('script')
<!-- Specific scripts -->
<script src="/js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<!-- Date and time pickers -->
<script src="/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
    var newlocation= '{{$property->location}}';
    var arry=new Array();
    if(newlocation!=""&&newlocation!=null)
    {
        arry=newlocation.split(',');
    }
    else {
        arry[0]=36.8483247;
        arry[1]=174.7636383;
    }
    $( document ).ready(function( $ ) {
        $( '#img_carousel' ).sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>


<!-- Map -->
    <script src="http://maps.google.cn/maps/api/js"></script>
    <script src="/js/map.js"></script>
{{--<script src="/js/infobox.js"></script>--}}
<!-- Carousel -->
<script src="/js/owl.carousel.min.js"></script>
<script>
    var map;
{{--var locationX=parseFloat({{$locationX}});--}}
{{--var locationY=parseFloat({{$locationY}});--}}
//alert(typeof(locationX));
//    alert(locationX);
////            center: {lat:locationX, lng:locationY},
//    alert(locationY);
//    function initMap() {
//        map = new google.maps.Map(document.getElementById('map'), {
//
//            center: {lat: -45.023564, lng: 168.9689589},
//            zoom: 8
//        });
//    }
//    $(document).ready(function(){
//        $(".carousel").owlCarousel({
//            items : 4,
//            itemsDesktop : [1199,3],
//            itemsDesktopSmall : [979,3]
//        });
//        console.debug($(".carousel"));
//    });
</script>
<!--Review modal validation -->

@endpush