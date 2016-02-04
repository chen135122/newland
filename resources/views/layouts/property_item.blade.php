<div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="img_list"><a href="/property/{{$property->id}}"><div class="ribbon popular" ></div><img src="{{$property->image}}" alt="">
                    <div class="short_info"></div>
                </a>
            </div>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="tour_list_desc">
                <div class="score"><span>9.0</span></div>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                <h3>{{$property->name}}</h3>
                <p>{{$property->desc}}</p>
                <ul class="add_info">
                    <li>
                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="price_list"><div><sup>$</sup>{{$property->price}}<span class="normal_price_list">${{$property->normal_price}}</span><small >*每平米</small>
                    <p><a href="/property/1" class="btn_1">详情</a></p>
                </div>
            </div>
        </div>
    </div>
</div><!--End strip -->
