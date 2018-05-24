(function($) {
	"use strict"; 
	var fixed_top = 0,
		check_top = true;
	menu();
	
	if ($(".js__tab_plugin").length){
		tab_plugin();
	}
	if ($(".js__product_owlcarousel").length){
		$(".js__product_owlcarousel").each(function(){
			var selector = $(this),
				num = parseInt(selector.data("item"),10),
				single_var = true;
				
			if (num > 1){
				single_var = false
			}else{
				num = 1;
			}
			
			selector.owlCarousel({
				singleItem: single_var,
				items: num,
				pagination: false,
				navigation: true,
				slideSpeed: 400,
				rewindNav: false
			});
		});
	}
	if ($(".js__logo_owl").length){
		$(".js__logo_owl").owlCarousel({
			items:6,
			itemsDesktop : [991,4],
			itemsTablet: [479,2],
			itemsMobile: [320,1],
			slideSpeed: 400,
			pagination: false,
			navigation: true,
			rewindNav: false
		});
	}
	if ($(".js__background").length){
		$(".js__background").each(function(){
			var bg = $(this).data("background");
			if (bg){
				$(this).css({
					"background-image": 'url(' + bg + ')'
				})
			}
		});
	}
	
	if ($(".js__heapbox").length){
		$(".js__heapbox").each(function(){
			var selector = $(this);
			if (selector.hasClass("js__filter_control")){
				
				$(this).heapbox({
					effect: {
						speed: 'fast'
					},
					onChange: function(value,sourceElement){
						var data_filter ="";
						selector.parents(".js__filter_wrap").find(".js__filter_control").each(function(){
							if ($(this).val()){
								
								if($(this).data("number") == true){
									data_filter += ".js__data_" + $(this).data("type") + "_" + $(this).val().toLowerCase();
								}else{
									data_filter += ".js__data_" + $(this).val().toLowerCase();
								}
								
							}
						});
						console.log(data_filter)
						selector.parents(".js__filter_wrap").find(".js__filter_content").isotope({
							filter: data_filter
						})
					}
				});
			}else{
				$(this).heapbox({
					effect: {
						speed: 'fast'
					}
				});
			}
		});
	}
	if ($(".js__menu_click").length){
		menu_click();
	}
	if ($(".js__slider_price").length){
		$(".js__slider_price").each(function(){
			var marginSlider = $(this).get(0),//return DOM Element
				output = $(this).data("output");
			noUiSlider.create(marginSlider, {
				start: [ 280, 650 ],
				margin: 30,
				step: 1,
				connect: true,
				range: {
					'min': 0,
					'max': 650
				}
			});
			if (output === "yes"){
				var wrap = $(this).parents(".js__slider_price_wrap");
				marginSlider.noUiSlider.on('update', function( values, handle ){
					if (handle){
						wrap.find(".js__text_max").text(parseInt(values[handle],10));
						wrap.find(".js__input_max").val(parseInt(values[handle],10));
					}else{
						wrap.find(".js__text_min").text(parseInt(values[handle],10));
						wrap.find(".js__input_min").val(parseInt(values[handle],10));
					}
				});
			}
		});
	}
	if ($("[data-style-width]").length){
		$("[data-style-width]").each(function(){
			$(this).css({
				"width" : $(this).data("style-width")
			})
		});
	}
	if ($(".js__flexslider").length){
		$(".js__flexslider").each(function(){
			var auto = $(this).data("auto"),
				item_margin = parseInt($(this).data("item-margin"),10),
				selector = $(this);
			if (!item_margin){
				item_margin = 0;
			}
			if (auto === "false"){
				auto = false;
			}else{
				auto == true;
			}
			selector.flexslider({
				animation: "slide",
				controlNav: false,
				slideshow: auto,
				minItems: 1,
				itemMargin: item_margin,
				start: function(slider){
					selector.resize();
				},
			});
		});
		
	}
	if($(".js__isotope_wrap").length){
		$(".js__isotope_wrap").each(function(){
			var filter = $(this).find(".js__isotope_filter"),
				content = $(this).find(".js__isotope_content");
			if(filter.length){
				filter.on("click","a",function(event){
					event.preventDefault();
					if (!($(this).hasClass(".js__filter_active"))){
						content.isotope({
							filter : $(this).data("filter")
						});
						filter.find(".js__filter_active").removeClass("js__filter_active");
						$(this).addClass("js__filter_active");
					}
				});
			}
		});
	}
	
	popup();
	popup_style();
	
	if ($(".js__counter").length){
		counter_js();
	}
	
	if ($(".js__tooltipser").length){
		$(".js__tooltipser").each(function(){
			var img_src = $(this).data("src");
			$(this).tooltipster({
				content: $('<img src="' + img_src + '" alt="" />'),
				touchDevices: false,
				position: "left"
			})
		});
	}
	
	$(window).bind("load",function(){
		if ($(".js__column_same_height").length){
			auto_same_height();
			setTimeout(function(){//When images load too fast from cache
				auto_same_height();
			},100);
		}
		if ($(".js__auto_correct_sub_menu").length){
			auto_correct_position_sub_menu();
		}
		if($(".js__isotope_content").length){
			$(".js__isotope_content").each(function(){
				var selector = $(this);
				setTimeout(function(){
					selector.isotope({
						itemSelector: ".js__isotope_item"
					})
				},100);
			});
		}
		if ($(".js__filter_wrap").length){
			setTimeout(function(){
				$(".js__filter_wrap").each(function(){
					var selector = $(this);
					selector.find('.js__filter_control[data-number="true"]').each(function(){
						var filter_seletor = $(this),
							filter_data = filter_seletor.data("type");
						selector.find(".js__filter_item").each(function(){
							var data_this = parseInt($(this).data(filter_data),10),
								child_selector = $(this);
							filter_seletor.children("option").each(function(){
								if ($(this).val() && parseInt($(this).val(),10) <= data_this){
									child_selector.addClass("js__data_" + filter_data + "_" + $(this).val());
								}
							});
						});
					});
					selector.find(".js__filter_content").isotope({
						itemSelector: ".js__filter_item",
						layoutMode: 'cellsByRow'
					})
				});
				
			},100);
		}
	});
	
	$(window).on("resize",function(){
		if ($(".js__column_same_height").length){
			auto_same_height();
		}
		if ($(".js__auto_correct_sub_menu").length){
			auto_correct_position_sub_menu();
		}
	});
	
	$(window).on("scroll",function(){
		if ($(".js__back_to_top").length){
			var height =  $(document).height();
			if ($(this).scrollTop() > height/10) {
				$(".js__back_to_top").addClass("js__active");
			} else {
				$(".js__back_to_top").removeClass("js__active");
			}
		}
		if ($(".js__menu_sticky").length){
			var height =  $(document).height();
			if ($(this).scrollTop() > height/10) {
				$(".js__menu_sticky").addClass("js__active");
			} else {
				if (check_top === true){
					$(".js__menu_sticky").removeClass("js__active");
				}
			}
		}
		if ($(".js__counter").length){
			counter_js();
		}
	});
	
	$(".js__back_to_top").on('click',function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	function menu(){
		$('.js__menu_toggle').on( "click", function(){
			if ($('.js__menu_mobile').hasClass('js__menu_active')){
				$('.js__menu_mobile').removeClass('js__menu_active');
				$('html').removeClass('js__menu_active');
				$('#wrapper').css({
					"top" : 0
				});
				window.scrollTo(0,fixed_top);
				check_top = true;
			}else{
				check_top = false;
				fixed_top = window.scrollY;
				$('.js__menu_mobile').addClass('js__menu_active');
				$('html').addClass('js__menu_active');
				$('#wrapper').css({
					"top" : -fixed_top
				});
			}
		});
		$('.js__menu_close').on("click",function(){
			$('.js__menu_mobile').removeClass('js__menu_active');
			$('html').removeClass('js__menu_active');
			$('#wrapper').css({
				"top" : 0
			});
			window.scrollTo(0,fixed_top);
			check_top = true;
		});
		$(".js__menu_mobile .menu-item-has-children > a").on("click",function(event){
			if ($(window).width() < 1025){
				event.preventDefault();
				$(this).parent().toggleClass("js__menu_active")
			}
		});
		// Touch for mobile
		if ($("#js__hammer").length){
			var hammertime = new Hammer(document.getElementById('js__hammer'));
			hammertime.on("panright touchstart",function(){
				$(".js__menu_mobile").removeClass("js__menu_active");
				$("html").removeClass("js__menu_active");
				$('#wrapper').css({
					"top" : 0
				});
			});
		}
	}
	
	//Make Column Same Height in Row .column__same_height
	function auto_same_height(){
		var maxHeight = $(".js__column_same_height").first().outerHeight()
			,startPosition = $(".js__column_same_height").first().position().top
			,startCounter = 0;
		$(".js__column_same_height").each(function(){
			var currentPosition = $(this).position().top;
			if (startPosition != currentPosition){
				setMinHeight(startCounter,maxHeight);
				//reset
				maxHeight = $(this).outerHeight();
				startCounter = 1;
				startPosition = currentPosition;
				$(this).addClass("js__checking_column");
			}else{
				$(this).addClass("js__checking_column");
				if (maxHeight < $(this).outerHeight()){
					maxHeight = $(this).outerHeight();
				}
				startCounter++;
			}
		});
		setMinHeight(startCounter,maxHeight);//last row
		return false;
	}
	
	function setMinHeight(startCounter,maxHeight){
		if (startCounter === 1){//If 1 col in 1 row, no need same height
			var output = $(".js__checking_column").data("output");
			if (output === "height"){
				mini_remove_css('height',$(".js__checking_column"));
			}else{
				mini_remove_css('min-height',$(".js__checking_column"));
			}
		}else{
			$(".js__checking_column").each(function(){
				var output = $(this).data("output");
				if (output === "height"){
					$(this).css({
						"height": maxHeight
					});
				}else{
					$(this).css({
						"min-height": maxHeight
					});
				}
			});
		}
		$(".js__checking_column").removeClass("js__checking_column");
	}
	
	//END Make Column Same Height in Row .js__column_same_height

	function tab_plugin(){
		var counter = 0;
		$(".js__tab_plugin").each(function(){
			var current = $(this);
			var dToggle = current.data("toggle");
			var dShow = current.data("show");
			counter++;
			current.addClass("js__tab_plugin_" + counter);
			$(this).on("click",".js__tab_control",function(event){
				event.preventDefault();
				var target = $(this).data("target");
				var prevToggle;
				var ani_type = $(this).data("animation-js");
				var ani_time = parseInt($(this).data("animation-time"),10);
				if (ani_time < 100){
					ani_time = 400;
				}
				if (dShow != "all"){
					if ($(this).hasClass("js__tab_active")){
						prevToggle = true;
					}else{
						prevToggle = false;
					}
					current.find(".js__tab_active").removeClass("js__tab_active");//Remove all active
					
					if (dToggle ==="yes"){// Restore current
						if (prevToggle == true){ 
							$(this).removeClass("js__tab_active");
							if (target){
								$(target).removeClass("js__tab_active");
							}else{
								var index = current.find('.js__tab_control').index($(this));
								current.find('.js__tab_content').eq(index).removeClass("js__tab_active");
							}
						}else{
							$(this).addClass("js__tab_active");
							if (target){
								$(target).addClass("js__tab_active");
							}else{
								var index = current.find('.js__tab_control').index($(this));
								current.find('.js__tab_content').eq(index).addClass("js__tab_active");
							}
						}
					}else{
						$(this).addClass("js__tab_active");
						if (target){
							$(target).addClass("js__tab_active");
						}else{
							var index = current.find('.js__tab_control').index($(this));
							current.find('.js__tab_content').eq(index).addClass("js__tab_active");
						}
					}
				}else{
					if (dToggle === "yes"){
						$(this).toggleClass("js__tab_active");
					}else{
						$(this).addClass("js__tab_active");
					}
					if (target){
						if (dToggle === "yes"){
							$(target).toggleClass("js__tab_active");
						}else{
							$(target).addClass("js__tab_active");
						}
					}else{
						var index = current.find('.js__tab_control').index($(this));
						if (dToggle === "yes"){
							current.find('.js__tab_content').eq(index).toggleClass("js__tab_active");
						}else{
							current.find('.js__tab_content').eq(index).addClass("js__tab_active");
						}
					}
				}
			});
		});
		if (counter > 0){
			$("#wrapper").bind('click',function(event){
				var selector = $(event.target);
				for (var i = 1;i <= counter;i++){
					var dOutside = $(".js__tab_plugin_" + i).data("outside");
					if (dOutside === "yes"){
						if (!(selector.hasClass("js__tab_plugin_" + i) || selector.parents(".js__tab_plugin_" + i).length)){
							$(".js__tab_plugin_" + i).find(".js__tab_active").removeClass("js__tab_active");
						}
					}
				}
			});
		}
	}
	
	function child_tab_plugin_toggle(selector,kind,type,time){
		if (kind === "show"){
			selector.addClass(".js__tab_active");
			switch (type){
				case "slide": selector.stop().slideDown(time);break;
				case "show": selector.stop().show(time);break;
			}
		}else{
			if (kind === "hide"){
				selector.removeClass(".js__tab_active");
				switch (type){
					case "slide": selector.stop().slideUp(time);break;
					case "show": selector.stop().hide(time);break;
				}
			}else{
				selector.toggleClass(".js__tab_active");
				switch (type){
					case "slide": selector.stop().slideToggle(time);break;
					case "show": selector.stop().toggle(time);break;
				}
			}
		}
	}
	
	function auto_correct_position_sub_menu(){
		$(".js__auto_correct_sub_menu .menu > li > .sub-menu").each(function(){
			var current_left = $(this).offset().left,
				window_width = $(window).width(),
				current_width = child_return_width($(this),$(this).outerWidth());
			if (current_left + current_width > window_width){
				if (current_left < window_width - current_left){
					$(this).addClass("js__sub_menu_right");
				}else{
					$(this).addClass("js__sub_menu_left");
				}
			}else{
				$(this).addClass("js__sub_menu_right");
			}
		});
	}
	
	function child_return_width(selector,current_width){
		if (selector.children("li").children(".sub-menu").length){
			var max_width = 0;
			selector.children("li").children(".sub-menu").each(function(){
				var this_width = child_return_width($(this),current_width + $(this).outerWidth());
				if (this_width > max_width){
					max_width = this_width;
				}
			});
			return max_width;
		}else{
			return current_width;
		}
	}
	
	function menu_click(){
		$(".js__menu_click").each(function(){
			if ($(this).find("li").length){
				$(this).find("li").each(function(){
					if ($(this).children("ul").length){
						$(this).append('<div class="icon--dropdown js__menu_control"></div>')
						$(this).addClass("js__has_menu");
						$(this).children("ul").addClass("js__menu");
					}
				});
			}
		});
		$(".js__menu_click").on("click",".js__menu_control",function(){
			$(this).toggleClass("js__menu_active");
			$(this).parent().toggleClass("js__menu_active");
		});
	}
	
	function popup_style(){
		$(".js__style_popup .style-toggle").on("click",function(){
			$(".js__style_popup").toggleClass("js__style_active");
		});
		$(".js__style_popup .ss-content .ss-button").on("click",function(event){
			event.preventDefault();
			if (!($(this).hasClass("active"))){
				$(".js__style_popup .ss-content .ss-button.active").removeClass("active");
				$(this).addClass("active");
				if ($(this).hasClass("boxed-button")){
					popup_style_child($(".js__style_popup .ss-content .images .active"));
					$("html").addClass("layout--boxed");
				}else{
					$("html").removeClass("layout--boxed");
					$("body").css({
						"background" : "none"
					});
				}
			}
		});
		$(".js__style_popup .ss-content .bkgd.color").each(function(){
			var color = $(this).data("color");
			$(this).css({
				"background": color
			})
		})
		$(".js__style_popup .ss-content a.bkgd").on("click",function(event){
			event.preventDefault();
			if (!($(this).hasClass("active"))){
				if ($(".js__style_popup .ss-content .boxed-button").hasClass("active")){
					popup_style_child($(this));
				}else{
					alert("Select boxed layout");
				}
			}
		});
		$(".js__style_popup .ss-content .js__color_picker").on("change",function(event){
			if ($(".js__style_popup .ss-content .boxed-button").hasClass("active")){
				var bg_color = $(this).val();
				$("body").css({
					"background" : bg_color
				});
			}else{
				event.preventDefault();
				alert("Select boxed layout");
			}
		});
	}
	
	function popup_style_child(selector){
		var bg_src =selector.data("image");
		$(".js__style_popup .ss-content .bkgd.active").removeClass("active");
		selector.addClass("active");
		if (bg_src){
			$("body").css({
				"background" : "url(" + bg_src + ")"
			});
			if (selector.hasClass("pattern")){
				$("body").addClass("background--pattern");
				$("body").removeClass("background--cover");
			}else{
				$("body").addClass("background--cover");
				$("body").removeClass("background--pattern");
			}
		}else{
			if (selector.hasClass("color")){
				var bg_color = selector.data("color");
				$("body").css({
					"background" : bg_color
				});
			}
		}
	}
	
	function popup(){
		$(".js__popup").bind("click",function(event){
			var selector = $(event.target);
			if (!(selector.hasClass(".js__popup_content") || selector.parents(".js__popup_content").length)){
				$(this).removeClass("js__popup_active");
				$("html").removeClass("js__popup_active");
			}
		});
		
		if($(".js__flex_popup").length){
			$(".js__flex_popup").each(function(){
				var selector = $(this),
					target = selector.data("target");
				if (target){
					selector.find(".js__item").on("click",function(event){
						var index = selector.find('.js__item').index($(this)),
							flex = $(target).find(".js__flexslider").data("flexslider"),
							speed = flex.vars.animationSpeed;
						event.preventDefault();
						flex.vars.animationSpeed = 0;
						$(target).find(".js__flexslider").flexslider(index);
						flex.vars.animationSpeed = speed;
						$(target).addClass("js__popup_active");
						$("html").addClass("js__popup_active");
						setTimeout(function(){
							$(target).find(".js__flexslider").resize();
						},100);
						setTimeout(function(){
							;
						},100);
					});
				}
			});
		}
	}
	
	function counter_js(){
		$(".js__counter").each(function(){
			if (mini_trigger_scroll($(this)) && !($(this).hasClass("js__countered"))){
				var x = parseInt($(this).data('num'),10);
				$(this).addClass("js__countered");
				$(this).animateNumber({number: x},1500);
			}
		});
	}
	
	
	//Mini Function
	function mini_trigger_scroll(selector){
		var current_height = selector.height();
		var window_height = $(window).height();
		var current_offset = selector.offset();
		var current_top = current_offset.top;
		var window_top = window.scrollY;
		if (current_top > window_top) {
			if (((current_top - window_top) <= (window_height / 2)) || ((window_top + window_height - current_top) >= current_height)){
				return true;
			}
		} else {
			if (((window_top - current_top - current_height) <= (window_height / 2)) || (current_top === window_height)){
				return true;
			}
		}
		return false;
	}
	function mini_remove_css(name,selector){
		var myCss = selector.attr('style');
		if (myCss){
			myCss = myCss.replace(name + ': '+selector.css(name)+';', '');
		}
		if(myCss == '') {
			selector.removeAttr('style');
		} else {
			selector.attr('style', myCss);
		}
	}
	
})(jQuery);