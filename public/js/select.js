$(document).ready(function () {
    $("#filters_col").Menu({
        eventType: "click"
    });

});

(function ($) {

    var defaults = {
        eventType: "click",
        dropmenu:"#filters_col",
        selectId:"#select",
        hiddentypeID: "#select_type",
        select_nature: "#select_nature",
        select_gender: "#select_gender"


    };

    $.fn.Menu = function (options) {
        return $(this).each(function () {

            var owl = $.extend({}, defaults, options || {});
            //触发按钮
            var $this = $(this);

            //浮动层主div
            var $select_type = $(owl.hiddentypeID);
            var $select_nature = $(owl.select_nature);
            var $select_gender = $(owl.select_gender);
            var $dropmenu = $(owl.dropmenu);
            var $region=$(".regionA",$dropmenu);
            var $rangeSlider=$(".rangeSlider",$dropmenu);

            var $selectregionUl = $("ul", $region);
            var $selectregionli = $("li", $selectregionUl);
            var $selectregion = $("label", $selectregionli);
            var $select_region=$("#select_region",$dropmenu);


            var $regionC=$(".regionC",$dropmenu);

            var $selectregionUlC = $("ul", $regionC);
            var $selectregionliC = $("li", $selectregionUlC);
            var $selectregionC = $("label", $selectregionliC);
            var $select_regionC=$("#select_regionc",$dropmenu);

            var $regionD=$(".regionD",$dropmenu);

            var $selectregionUlD = $("ul", $regionD);
            var $selectregionliD = $("li", $selectregionUlD);
            var $selectregionD = $("label", $selectregionliD);
            var $select_regionD=$("#select_regiond",$dropmenu);


            var $htype=$(".htype",$dropmenu);
            var $htypeUl = $("ul", $htype);
            var $htypeli = $("li", $htypeUl);
            var $htypes = $("label", $htypeli);

            var $nature=$(".nature",$dropmenu);
            var $natureUl = $("ul", $nature);
            var $natureli = $("li", $natureUl);
            var $natures = $("label", $natureli);

            var $gender=$(".gender",$dropmenu);
            var $genderUl = $("ul", $gender);
            var $genderli = $("li", $genderUl);
            var $genders = $("label", $genderli);


            $selectregion.on( "click","a", function () {
                var $p_li = $(this);
                var rid = $p_li.attr("rel");
                $select_region.val(rid);
                $select_regionC.val("");
                $select_regionD.val("");
                dosubmit();
            });

            $selectregionC.on( "click","a", function () {
                var $p_li = $(this);
                var rid = $p_li.attr("rel");
                $select_regionC.val(rid);
                $select_regionD.val("");
                dosubmit();
            });

            $selectregionD.on( "click","a", function () {
                var $p_li = $(this);
                var rid = $p_li.attr("rel");
                $select_regionD.val(rid);
                dosubmit();
            });

            $htypes.on("click","a", function () {
                var $p_li = $(this);
                var rid = $p_li.attr("rel");
                $select_type.val(rid);
                dosubmit();
            });

            $natures.on("click","a", function () {
                var $p_li = $(this);
                var rid = $p_li.attr("rel");
                $select_nature.val(rid);
                dosubmit();
            });
            $genders.on("click","a", function () {
                var $p_li = $(this);
                var rid = $p_li.attr("rel");
                $select_gender.val(rid);
                dosubmit();
            });
            $("#sort_price").change(function(){
                dosubmit();
            })


            var dosubmit = function () {
                var url=window.location.pathname;
                var isschool=false;
                if(url.indexOf("/property")!=-1)
                {
                    var min_price=$(".irs-from").text().split('$')[1].replace(" ","");
                    var max_price=$(".irs-to").text().split('$')[1].trim().replace(" ","");
                    min_price=min_price.replace(" ","");
                    max_price=max_price.replace(" ","");
                    $("#min_price").val(min_price);
                    $("#max_price").val(max_price);
                    url+="?price[]="+min_price+"&price[]="+max_price;

                    var $option= $("#sort_price").children('option:selected');
                        if($option.index()!=0)
                        {
                            url+="&sortPrice="+$option.val();
                        }
                }

                if(url.indexOf("/study-sp")!=-1)
                {
                    isschool=true;
                    url+="?";
                    var values=$select_nature.val();
                    if(values!="" &&values!=undefined)
                        url+="&nature="+values;

                    var value_gender=$select_gender.val();
                    if(value_gender!="" &&value_gender!=undefined)
                        url+="&gender="+value_gender;
                }
                var rid=$select_region.val();
                var cid=$select_regionC.val();
                var did=$select_regionD.val();
                var typeid=$select_type.val();

                if(url.indexOf("/study")!=-1 &&isschool==false){
                    if(rid!="" &&rid!=undefined)
                        url+="?rid="+rid;
                }
                else
                {
                    if(rid!="" &&rid!=undefined)
                        url+="&rid="+rid;
                }

                if(cid!="" &&cid!=undefined&&rid!="0")
                    url+="&cid="+cid;
                if(did!="" &&did!=undefined&&cid!="0")
                    url+="&did="+did;
                if(typeid!="" &&typeid!=undefined)
                    url+="&type="+typeid;

               window.location=url;

            }


        });
    };




})(jQuery);


