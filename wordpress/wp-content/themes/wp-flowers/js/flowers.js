function search_toggle(){$(".pictograms form:visible").length?($("#search_button").removeClass("active"),$(".phone_number").show(),$(".pictograms form").hide()):($("#search_button").addClass("active"),$(".phone_number").hide(),$(".pictograms form").fadeIn(300).find("input").focus())}$(function(){$("#products .categories > li").click(function(){$(this).parent().find(".active").removeClass("active"),$(this).addClass("active");var e=this.getAttribute("data-tab");$("#products .tab").removeClass("active"),$("#"+e).addClass("active")}),$(".MP_slider .overview").bxSlider({mode:"horizontal",captions:!1,easing:"linear",startSlide:0,infiniteLoop:!0,pager:!0,auto:!0,autoControls:!1,controls:!0,video:!0,pause:16e3,speed:800,useCSS:!0,nextSelector:".MP_slider .next",prevSelector:".MP_slider .prev"}),$(".serv_menu li:has(ul.inner) a").click(function(e){this.opened||(e.preventDefault(),e.stopPropagation(),this.opened=!0,$("~ ul.inner",this).show())}),$(".serv_menu ul.inner").click(function(e){e.stopPropagation()}),$("body").click(function(){$(".serv_menu ul.inner").hide(),$(".serv_menu li:has(ul.inner) a").each(function(){this.opened=!1})}),$("#search_button").click(function(e){e.preventDefault(),$("#input_search").val(""),search_toggle()})});
//# sourceMappingURL=maps/flowers.js.map
