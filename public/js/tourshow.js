var perNum=2;
$('input.date-pick').datepicker('setDate', 'today');
$(document).ready(function ($) {
    $('#img_carousel').sliderPro({
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
function changeNum(obj)
{
    var $obj = $(obj);
    if (/[^\d.]/g.test($obj.val())) {
        alert('请输入数字！');
        $obj.val("");
    }
    else {
        $("#perNum").text( $(obj).val());
        perNum=$(obj).val();
    }
}

function removeClass(id,obj)
{
    $(obj).parent().addClass("new_a");
    $(obj).parent().siblings().removeClass("new_a");
    var ev = ev || window.event;
    var thisId = document.getElementById(id);
    document.documentElement.scrollTop = document.body.scrollTop = $(thisId).offset().top-99;// - oBtn.offsetHeight;
    ev.preventDefault();
}
function hide() {
    $("#tour_d .form_title").each(function () {
        if ($(this).index() > 2) {
            $(this).hide();
            $(this).next().hide();
        }
    })
    $("#cat_nav li").each(function () {
        if ($(this).index() > 1 && $(this).text() != "收起行程") {
            //alert( $(this).index()+"_"+$("#cat_nav li").length);
            $(this).hide();
        }
    })
}
var current=1;
var show = function (ulid) {
    var text = $(document.getElementById(ulid)).text();
    var length=$("#cat_nav li.newli").length;
    if (text == "展开行程") {
        if(length>8||length<=8)
        {
            $("#cat_nav li.newli").slice(0, 8).show();
            $("#tour_d .form_title").slice(0,8).show();
            $("#tour_d .form_title").slice(0, 8).next().show();
        }
        if(length>8)
        {
            $("#sh").text("+")
        }
        if(length<=8)
        {
            $("#sh").text("收起行程")
        }
    }
    else if (text == "+"&&length>current*8)
    {
        var next=(current-1)*8+ 8,prve=(current-1)*8;
        $("#cat_nav li.newli").slice(prve, next).hide();
        $("#cat_nav li.newli").slice(current*8, current*8+8).show();
        $("#tour_d .form_title").slice(prve, next).hide();
        $("#tour_d .form_title").slice(current*8, current*8+8).show();
        $("#tour_d .form_title").slice(prve, next).next().hide();
        $("#tour_d .form_title").slice(current*8, current*8+8).next().show();
        current++;
        if((current)*8>=length) {
            $("#sh").text("收起行程")
        }
        if($("#cat_nav li").eq(0).text()!="-")
        {
            $li="<li><a href='###' onclick=\"show('sub')\" id='sub'>-</a></li>";
            $("#cat_nav li").eq(0).before($li);
        }
    }
    else if (text == "-"&&length>(current-1)*8)
    {
        var next=(current-2)*8+ 8,prve=(current-2)*8;
        $("#cat_nav li.newli").slice(prve, next).show();
        $("#cat_nav li.newli").slice((current-1)*8, (current-1)*8+8).hide();
        $("#tour_d .form_title").slice(prve, next).show();
        $("#tour_d .form_title").slice((current-1)*8, (current-1)*8+8).hide();
        $("#tour_d .form_title").slice(prve, next).next().show();
        $("#tour_d .form_title").slice((current-1)*8, (current-1)*8+8).next().hide();
        current--;
        if(prve<=0) {
            $("#sub").remove();
        }
        if( $("#sh").text()=="收起行程")
        {
            $("#sh").text("+")
        }
    }
    else if(text == "收起行程") {
        // hide();
        if(length>8)
        {
            $("#cat_nav li.newli").slice((current-1)*8, (current-1)*8+8).hide();
            $("#cat_nav li.newli").slice(0, 2).show();
            $("#tour_d .form_title").slice(0,2).show();
            $("#tour_d .form_title").slice(0, 2).next().show();
            $("#sh").parent().show();
            $("#tour_d .form_title").slice((current-1)*8, (current-1)*8+8).hide();
            $("#tour_d .form_title").slice((current-1)*8, (current-1)*8+8).next().hide();
        }
        else
        {
            $("#cat_nav li.newli").slice(2,length-1).hide();
            $("#tour_d .form_title").slice(2, 8).hide();
            $("#tour_d .form_title").slice(2, 8).next().hide();
            $("#tour_d .form_title").slice(0,2).show();
            $("#tour_d .form_title").slice(0, 2).next().show();
        }
        current=1;
        $("#sh").text("展开行程");
        $("#sub").remove();
    }
}
var cutStr= function (str) {
    var newStr = new Array(str.length + parseInt(str.length / 3));
    var strArray = str.split("");
    newStr[newStr.length - 1] = strArray[strArray.length - 1];
    var currentIndex = strArray.length - 1;
    for (var i = newStr.length - 1; i >= 0; i--) {
        if ((newStr.length - i) % 4 == 0) {
            if (i == 0)
            {
                if ((str.length % 3) != 0)
                    newStr[i] = ",";
                else
                    continue;
            }
            newStr[i] = ",";
        }
        else {
            newStr[i] = strArray[currentIndex--];
        }
    }
    //$(".price").val(newStr.join(""));
    return newStr.join("")
}
$(function () {
    $(".price").each(function () {
        var price = $(this).text().split('$');//.split('¥')[0];
        var newPrice;
        if (price.length == 1) {
            newPrice = price[0].split('¥')[1].trim();
            newPrice = cutStr(newPrice);
            $(this).text("¥"+newPrice);
        }
        else {
            newPrice = price[1].trim();
            newPrice = cutStr(newPrice);
            $(this).text("$" + newPrice);
        }
    })
//            $("#sort_price").change(function(){
//                var $option=$(this).children('option:selected');
//                if($option.index()!=0)
//                {
//                    window.location="/tour?sortPrice="+$option.val();
//                }
//            })
})
window.onresize = function () {
    var $width=$("#ml").width();
    var $ml = $("#ml"), $xingc = $("#xingc"), mpos = $ml.css("position"), xpos = $xingc.css("position");
    if (mpos != "fixed" && window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
        $ml.css("width", $width+"px");
    }
    else {
        $ml.css("width",$width+"px");
    }
    if (xpos != "fixed" && window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
        $xingc.css("width", "8.5%");
    }
    else {
        $xingc.css("width", "12.5%");
    }
}
var arry=new Array();
window.onscroll = function () {
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    var top = $("#tour_xc").offset().top;
    var pl_top = $("#mstj").offset().top;
    var $div=$("#tour_d div.form_title");
    var newarry=new Array();
    for(i=0;i<$div.length;i++)
    {
        if($div.eq(i).css("display")=="block")
        {
            $this=$div.eq(i);
            var topset=$this.offset().top;
            var height=$this.height();
            if(t>topset-100)
            {
                var index=i;
                $("#cat_nav li.newli").eq(index).children(":first-child").attr("class","active");
                $("#cat_nav li.newli").eq(index).siblings().children(":first-child").attr("class","");
            }
        }
    }
var height=$(".sticky").height(),pad=$(".sticky").outerHeight(),mlh=$("#ml").height();
    if (t > (top -100)) {
        var $xingc = $("#xingc");
        $xingc.css("position", "fixed").css("top", (pad+mlh)+"px").css("z-index", "9999");
        if (window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth||navigator.userAgent.indexOf('Chrome') < 0) {
            $xingc.css("width", "8.5%");
        }
        else {
            $xingc.css("width", "8.7%");
        }

        $("#tour_d,#xcjs").css("margin-left", "10%");
    }
    else {
        $("#xingc").css("position", "relative").css("top", "").css("width", "10%");
        $("#tour_d,#xcjs").css("margin-left", "0");
    }
    if (t > (pl_top - $("#xingc").height()-100))
    {
        $("#xingc").css("position", "relative").css("top", "").css("width", "10%");
        $("#tour_d,#xcjs").css("margin-left", "0");
    }
    var ml_top = $("#xcjj").offset().top;
    if (t > (ml_top -pad-mlh))
    {
        var $width=$("#ml").width();
        var $ml = $("#ml");
        $ml.css("position", "fixed").css("top", pad+"px").css("z-index", "999");
        if (window.outerHeight === screen.availHeight || window.outerWidth === screen.availWidth) {
            $ml.css("width", $width+"px");
        }
        else {
            if ((navigator.userAgent.indexOf('Chrome') >= 0))
            {
                $ml.css("width",$width+"px");
            }
            else
            {
                $ml.css("width", $width+"px");
            }
        }
        //$("#ml").css("position", "fixed").css("top", "30px").css("z-index", "999").css("width", "56%");
    }
    else {
        $("#ml").css("position", "relative").css("top", "").css("width", "");
        //$("#tour_d").css("margin-left", "0");
    }
}
$(function () {
    $("#tour_d .form_title").each(function(){
        var topset=$(this).offset().top;
        arry.push(topset);
    });
    //$("#xingc").css("top", $("#tour_xc").offset().top+"px");
    var $tour = $("#tour_d .form_title");
    var $travel_d=$("#tour_d .form_title").length;
    $("#cat_nav li").each(function(){
        //$(this).find("a:first").text("第"+DX($(this).index()+1)+"天");
    });
    if ($travel_d > 2)
    {
        hide();
        $("#cat_nav").append("<li><a href='###' onclick=\"show('sh')\" id=\"sh\">展开行程</a></li>")
    }
    $("#btn_comment").click(function () {
        var txt_comment = $("#txt_comment").val();
        var cmoment="<div class=\"review_strip_single\"> <img src=\"/img/avatar1.jpg\" alt=\"\" class=\"img-circle\"><small> - 10 March 2015 -</small>";
        cmoment = cmoment + "<h4>Jhon Doe</h4><p>" + txt_comment + "</p><div class=\"rating\"><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><i class=\"icon-smile\"></i></div> </div>";
        $("#all_comment").append(cmoment);
        alert("评论成功");
        $(".morph-content").hide();
    })
})
function s (id,gradeId) {
    //var eles = document.getElementsByClassName("star_comment");
    var oStar = document.getElementById(id);
    //var oStar = eles[i];
    var aLi = oStar.getElementsByTagName("li");
    var oUl = oStar.getElementsByTagName("ul")[0];
    var oSpan = oStar.getElementsByTagName("span")[1];
    var oP = oStar.getElementsByTagName("p")[0];
    var i = iScore = iStar = 0;
    var oH = document.getElementById(gradeId);
    var aMsg = [
        "很不满意|非常不满",
        "不满意|不满意",
        "一般|一般",
        "满意|满意",
        "非常满意|非常满意"
    ]

    for (i = 1; i <= aLi.length; i++) {
        aLi[i - 1].index = i;

        //鼠标移过显示分数
        aLi[i - 1].onmouseover = function () {
            fnPoint(this.index);
            //浮动层显示
            // oP.style.display = "block";
            //计算浮动层位置
            //                oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
            //                //匹配浮动层文字内容
            //                oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
        };

        //鼠标离开后恢复上次评分
        aLi[i - 1].onmouseout = function () {
            fnPoint();
            //关闭浮动层
            oP.style.display = "none"
        };

        //点击后进行评分处理
        aLi[i - 1].onclick = function () {
            iStar = this.index;
            oP.style.display = "none";
            oH.setAttribute("value", iStar);
            //oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
        }
    }

    //评分处理
    function fnPoint(iArg) {
        //分数赋值
        iScore = iArg || iStar;
        for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";
    }
};
(function () {
    var docElem = window.document.documentElement, didScroll, scrollPosition;

    // trick to prevent scrolling when opening/closing button
    function noScrollFn() {
        window.scrollTo(scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0);
    }

    function noScroll() {
        window.removeEventListener('scroll', scrollHandler);
        window.addEventListener('scroll', noScrollFn);
    }

    function scrollFn() {
        window.addEventListener('scroll', scrollHandler);
    }

    function canScroll() {
        window.removeEventListener('scroll', noScrollFn);
        scrollFn();
    }

    function scrollHandler() {
        if (!didScroll) {
            didScroll = true;
            setTimeout(function () { scrollPage(); }, 60);
        }
    };

    function scrollPage() {
        scrollPosition = { x: window.pageXOffset || docElem.scrollLeft, y: window.pageYOffset || docElem.scrollTop };
        didScroll = false;
    };

    scrollFn();

    [].slice.call(document.querySelectorAll('.morph-button')).forEach(function (bttn) {
        new UIMorphingButton(bttn, {
            closeEl: '.icon-close',
            onBeforeOpen: function () {
                // don't allow to scroll
                noScroll();
            },
            onAfterOpen: function () {
                // can scroll again
                canScroll();
            },
            onBeforeClose: function () {
                // don't allow to scroll
                noScroll();
            },
            onAfterClose: function () {
                // can scroll again
                canScroll();
            }
        });
    });

    // for demo purposes only
    [].slice.call(document.querySelectorAll('form button')).forEach(function (bttn) {
        bttn.addEventListener('click', function (ev) { ev.preventDefault(); });
    });
})();
$(function () {
    $('.numbers-row div').on("click",function(e){
        $("#perNum").text( $("#adults").val());
        perNum=$("#adults").val();
    });
    $("#comment div.star_comment").each(function () {
        s($(this).attr("id"), $(this).find("input[name='grade']").attr("id"));
    })
})