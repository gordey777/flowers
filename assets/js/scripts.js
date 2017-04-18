// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}



jQuery(document).ready(function() {
  var $lensSize = (jQuery('#image-block').width()) * .5;
  jQuery('#bigpic').ezPlus({
    zoomType: 'lens',
    lensShape: 'round',
    lensSize: $lensSize,
    scrollZoom: true,
  });

  function applyElevateZoom() {
    //var src = jQuery('.thickbox.shown').attr('href');
    //var bigimage = jQuery('.fancybox.shown').attr('href');
    jQuery('#bigpic').ezPlus({
      zoomType: 'lens',
      lensShape: 'round',
      lensSize: $lensSize,
      scrollZoom: true,
    });
  }
  jQuery(document).on('mouseover', '#views_block a', function() {
    displayImage(jQuery(this));
  });

  jQuery('#views_block a').hover(function() {
    restartElevateZoom();
  });

  function restartElevateZoom() {
    jQuery(".zoomContainer").remove();
    applyElevateZoom();
  };

  function displayImage(domAAroundImgThumb, no_animation) {
    if (typeof(no_animation) == 'undefined')
      no_animation = false;
    if (domAAroundImgThumb.attr('href')) {
      var new_src = domAAroundImgThumb.attr('href').replace('thickbox', 'large');
      var new_title = domAAroundImgThumb.attr('title');
      var new_href = domAAroundImgThumb.attr('href');
      if (jQuery('#bigpic').attr('src') != new_src) {
        jQuery('#bigpic').attr({
          'src': new_src,
          'alt': new_title,
          'title': new_title
        }).load(function() {
          if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled)
            jQuery(this).attr('rel', new_href);
        });
      }
      jQuery('#views_block .slide').removeClass('active');
      jQuery(domAAroundImgThumb).parent("li").addClass('active');
    }
  }



  //thumbs slider
  jQuery(function() {
    var countLi = jQuery('#thumbs_list>ul>li').size();

    if (countLi > 3) {

      jQuery('.thumbs_nav').removeClass('thumbs_nav_hide');

      jQuery("#thumbs_list").jCarouselLite({
        btnNext: ".views_block_down",
        btnPrev: ".views_block_up",
        vertical: true,

        visible: 3,
        start: 0,
      });
    }
  });

});


//Ajax
jQuery(function($) {
  $('#true_loadmore').click(function() {
    $(this).text('Загружаю...');
    var data = {
      'action': 'loadmore',
      'query': true_posts,
      'page': current_page
    };
    $.ajax({
      url: ajaxurl,
      data: data,
      type: 'POST',
      success: function(data) {
        if (data) {
          $('#true_loadmore').text('Показать ещё').before(data);
          current_page++;
          if (current_page == max_pages) $("#true_loadmore").remove();
        } else {
          $('#true_loadmore').remove();
        }
      }
    });
  });
});




$(function() {
  //Переключалка табов со статусами на главной
  $('#products .categories > li').click(function() {
    $(this).parent().find('.active').removeClass('active');
    $(this).addClass('active');
    var tab = this.getAttribute('data-tab');
    $('#products .tab').removeClass('active');
    $('#' + tab).addClass('active');
    //  $('#products .button_wrap .button').show();
    //  if ($('#products .tab.active > *').length < 6
    //    || typeof $('#' + tab)[0].page != 'undefined'
    //    && $('#' + tab)[0].page == $('#' + tab)[0].pages_count)
    //      $('#products .button_wrap .button').hide();
    //
  });
  /*
    $('body').on('click', '.product .slide', function() {
      if ($(this).hasClass('active')) return 1;
      $(this).closest('.slider').find('.active').removeClass('active');
      $(this).addClass('active');
      var src = $('img', this).data('bigimg');
      $(this).parent().next().find('img')[0].src = src;
    });*/


  $('.MP_slider .overview').bxSlider({
    mode: 'horizontal',
    captions: false,
    easing: 'linear',
    startSlide: 0,
    infiniteLoop: true,
    pager: true,
    auto: true,
    autoControls: false,
    controls: true,
    video: true,
    pause: 16000,
    speed: 800,
    useCSS: true,
    nextSelector: '.MP_slider .next',
    prevSelector: '.MP_slider .prev',
  });

  //Отдельное поведение раскрывающихся пунктов меню
  $('.serv_menu li:has(ul.inner) a').click(function(e) {
    if (!this.opened) {
      e.preventDefault();
      e.stopPropagation();
      this.opened = true;
      $('~ ul.inner', this).show();
    }
  });
  $('.serv_menu ul.inner').click(function(e) {
    e.stopPropagation();
  });
  $('body').click(function() {
    $('.serv_menu ul.inner').hide();
    $('.serv_menu li:has(ul.inner) a').each(function() {
      this.opened = false;
    });
  })


  $('#search_button').click(function(e) {
    e.preventDefault();
    $('#input_search').val('');
    search_toggle();
  });
});



//Скрытие/показ строки поиска
function search_toggle() {
  if (!$('.pictograms form:visible').length) {
    $('#search_button').addClass('active');
    $('.phone_number').hide();
    $('.pictograms form').fadeIn(300).find('input').focus();
  } else {
    $('#search_button').removeClass('active');
    $('.phone_number').show();
    $('.pictograms form').hide();
  }
}
