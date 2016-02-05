@extends('layouts.master')

@section('content')

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>新西兰旅游</h1>
                <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section><!-- End section -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="#">新西兰旅游</a></li>
            </ul>
        </div>
    </div><!-- Position -->

    <div  class="container margin_60">

        <div class="row">
            <aside class="col-lg-3 col-md-3">
                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>所有路线 <span>(141)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>城市风光 <span>(20)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-4"></i>博物馆 <span>(16)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-44"></i>历史名胜 <span>(12)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-37"></i>徒步之乐 <span>(11)</span></a></li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>吃喝玩乐 <span>(20)</span></a></li>
                    </ul>
                </div>
                @include('layouts.side_contact')
            </aside><!--End aside -->
            <div class="col-lg-9 col-md-9">

                <div id="tools">

                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>价格排序</option>
                                    <option value="lower">从低到高</option>
                                    <option value="higher">从高到低</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="styled-select-filters">
                                <select  name="sort_rating" id="sort_rating">
                                    <option value="" selected>评价排序</option>
                                    <option value="lower">从低到高</option>
                                    <option value="higher">从高到低</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--/tools -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list"><a href="single_tour.html"><div class="ribbon popular" ></div><img src="img/tour_box_1.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-4"></i>名胜古迹 </div></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                                <h3><strong>【南北岛精华游】</strong> 奥克兰+怀托摩萤火虫洞+罗托鲁瓦+蒂卡波湖+基督城+箭镇+皇后镇10天</h3>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>开团时间</h4>
                                                <strong>周一 至 周五</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>周六</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>周日</strong> <span class="label label-danger">不发团</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>地点</h4>
                                                Musée du Louvre, 75058 Paris - France<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>语言</h4>
                                                English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>交通</h4>
                                                <strong>地铁: </strong>Musée du Louvre station (line 1)<br>
                                                <strong>公交车:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div>45800<span class="normal_price_list"></span><small >*每人</small>
                                    <p><a href="single_tour.html" class="btn_1">详情</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated" ></div><img src="img/tour_box_2.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-44"></i>Churches</div></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                                <h3><strong>Notredame</strong> tour</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>Address</h4>
                                                Musée du Louvre, 75058 Paris - France<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>Languages</h4>
                                                English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>Parking</h4>
                                                1-3 Rue Elisée Reclus<br>
                                                76 Rue du Général Leclerc<br>
                                                8 Rue Caillaux 94923<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>Transport</h4>
                                                <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                                <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>42*<span class="normal_price_list">$99</span><small >*Per person</small>
                                    <p><a href="single_tour.html" class="btn_1">Details</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated" ></div><img src="img/tour_box_3.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-44"></i>Historic Buildings</div></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                                <h3><strong>Versailles</strong> tour</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>Address</h4>
                                                Musée du Louvre, 75058 Paris - France<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>Languages</h4>
                                                English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>Parking</h4>
                                                1-3 Rue Elisée Reclus<br>
                                                76 Rue du Général Leclerc<br>
                                                8 Rue Caillaux 94923<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>Transport</h4>
                                                <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                                <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>39*<span class="normal_price_list">$99</span><small >*Per person</small>
                                    <p><a href="single_tour.html" class="btn_1">Details</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated" ></div><img src="img/tour_box_4.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-37"></i>Walking tour</div></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                                <h3><strong>Pompidue</strong> tour</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>Address</h4>
                                                Musée du Louvre, 75058 Paris - France<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>Languages</h4>
                                                English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>Parking</h4>
                                                1-3 Rue Elisée Reclus<br>
                                                76 Rue du Général Leclerc<br>
                                                8 Rue Caillaux 94923<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>Transport</h4>
                                                <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                                <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>69*<span class="normal_price_list">$59</span><small >*Per person</small>
                                    <p><a href="single_tour.html" class="btn_1">Details</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated" ></div><img src="img/tour_box_14.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-28"></i>Skyline tour</div></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                                <h3><strong>Tour Eiffel</strong> tour</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>Address</h4>
                                                Musée du Louvre, 75058 Paris - France<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>Languages</h4>
                                                English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>Parking</h4>
                                                1-3 Rue Elisée Reclus<br>
                                                76 Rue du Général Leclerc<br>
                                                8 Rue Caillaux 94923<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>Transport</h4>
                                                <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                                <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>49*<span class="normal_price_list">$59</span><small >*Per person</small>
                                    <p><a href="single_tour.html" class="btn_1">Details</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.7s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="wishlist">
                                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                            </div>
                            <div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated" ></div><img src="img/tour_box_5.jpg" alt="">
                                    <div class="short_info"><i class="icon_set_1_icon-44"></i>Historic Building</div></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                                <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small></div>
                                <h3><strong>Pantheon</strong> tour</h3>
                                <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                            <div class="tooltip-content"><h4>Address</h4>
                                                Musée du Louvre, 75058 Paris - France<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                            <div class="tooltip-content"><h4>Languages</h4>
                                                English - French - Chinese - Russian - Italian
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                            <div class="tooltip-content"><h4>Parking</h4>
                                                1-3 Rue Elisée Reclus<br>
                                                76 Rue du Général Leclerc<br>
                                                8 Rue Caillaux 94923<br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                            <div class="tooltip-content"><h4>Transport</h4>
                                                <strong>Metro: </strong>Musée du Louvre station (line 1)<br>
                                                <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list"><div><sup>$</sup>49*<span class="normal_price_list">$59</span><small >*Per person</small>
                                    <p><a href="single_tour.html" class="btn_1">Details</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--End strip -->

                <hr>

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- end pagination-->

            </div><!-- End col lg-9 -->
        </div><!-- End row -->
    </div><!-- End container -->
@endsection

@push('style')
<!-- Radio and check inputs -->
<link href="/css/skins/square/grey.css" rel="stylesheet">

<!-- Range slider -->
<link href="/css/ion.rangeSlider.css" rel="stylesheet" >
<link href="/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<style>
    .tour_list_desc h3 {
        line-height: 25px !important;
        font-size: 17px;
        overflow : hidden;
        text-overflow: ellipsis;
        height:3em;
    }

    .price_list{
        font-size: 23px !important;
    }
</style>
@endpush

@push('script')
<!-- Specific scripts -->
<!-- Check and radio inputs -->
<script src="/js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>

<script src="/js/vue.min.js"></script>
<script>

</script>
@endpush