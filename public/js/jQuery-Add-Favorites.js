;(function($){
	$.extend($.fn,{
	    Add: function (options) {
	        var self = this,
				$shop = $('#top_line'),
				$title = $('.wishlist-title'),
				$num = $('.wishlist-num');
			var S={
				init:function(){
				    $(self).data('click', true).on('click', this.addFavorites);
				},
				addFavorites: function (e) {
					e.stopPropagation();
					var $target=$(e.target),
						articleId=$target.attr('articleId'),
						typeid=$target.attr('typeid'),
						dis=$target.data('click'),
					    x = $target.offset().left + 30,
						y = $target.offset().top + 10,
						X = $shop.offset().left+$shop.width()/2-$target.width()/2+10,
						Y = $shop.offset().top;
					if(dis){
					   if ($('#floatOrder').length <= 0) {					      
					       $('body').append('<div id="floatOrder"><i class="icon-heart" style="font-size: 35px;color: #82ca9c;"></i></div>');
						};
						var $obj=$('#floatOrder');
						if (!$obj.is(':animated')) {
						    $obj.css({ 'left': x, 'top': y }).animate({ 'left': X, 'top': Y - 80 }, 1000, function () {
						        $obj.stop(false, false).animate({ 'top': Y - 20, 'opacity': 0 }, 1000, function () {
									$obj.fadeOut(300,function(){
										$obj.remove();	
										$target.data('click', false).addClass('disabled');
											num=Number($num.text());
										$num.text(num+1);
									});
								});
							});	
						};
						//ajax添加到收藏夹 开始

							$.ajax({
								type: "post",
								url:  "/tools/Favourite_add",
								data: {
									"article_id" : articleId,
									"typeid" : typeid
								},
								dataType: "json",
								beforeSend: function(XMLHttpRequest) {
									//发送前动作
									$(self).prop("disabled",true).text("请稍候...");
								},
								success: function(data, textStatus) {
									if (data.status == 1) {
										$("#cartInfoHint").remove();
										var HintHtml = '<div id="cartInfoHint" class="msg-tips cart-info">'
											+ '<div class="ico"></div>'
											+ '<div class="msg">'
											+ '<strong>文章已成功添加到收藏夹！</strong>'
											+ '</div>'
											+ '</div>'

									} else {

										var HintHtml = '<div id="cartInfoHint" class="msg-tips cart-info">'
											+ '<div class="ico error"></div>'
											+ '<div class="msg">'
											+ '<strong>文章添加到收藏夹失败！</strong>'
											+ '<p>' + data.msg + '</p>'
											+ '<i class="close" title="关闭" onclick="hintRemove(\'#cartInfoHint\');"><span>关闭</span></i>'
											+ '</div>'
											+ '</div>'
										$(self).after(HintHtml); //添加节点
									}
								},
								error: function (XMLHttpRequest, textStatus, errorThrown) {
									alert("状态：" + textStatus + "；出错提示：" + errorThrown);
								},
								complete: function (XMLHttpRequest, textStatus) {
									$(self).prop("disabled",false).text('ok');
								},
								timeout: 20000
							});
							return false;

						//结束
					};
				},
			};
			S.init(); 
		}
	});	
})(jQuery);

