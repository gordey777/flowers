//PR Solution, 2016
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

  //Вертикальный слайдер картинок товара
  $('#views_block .slider .up, #views_block .slider .down').click(function() {
    var slider = $('#views_block .slider .icons'),
      slider_size = slider.data('size');
    if (slider.data('inview'))
      var inview = slider.data('inview'); //Номер картинки, которая находится у верха
    else
      var inview = 1;

    if ($(this).hasClass('up') && inview > 1)
      inview -= 3; //3 - количество пролистываний за раз
    else if ($(this).hasClass('down') && inview < slider_size - 2)
      inview += 3;
    if (inview < 1) inview = 1;
    if (inview > slider_size - 2) inview = slider_size - 2;

    slider.data('inview', inview);
    var top = '-' + (inview - 1) * 120 + 'px';
    $('> li', slider).css({
      'top': top
    });
    $(this).closest('.slider').find('.dot').removeClass('active');
    var page = Math.ceil((inview + 2) / 3);
    $(this).closest('.slider').find('.dot[data-dot=' + page + ']').addClass('active');
  });

  $('.product_page .slider').on('wheel', function(ev) {
    ev.preventDefault();
    if (ev.originalEvent.deltaY)
      if (Math.sign(ev.originalEvent.deltaY) > 0)
        $('.product_page .slider .down').trigger('click');
      else
        $('.product_page .slider .up').trigger('click');
  });

  //Листалка слайдера точками
  $('.main_info .dot').click(function() {
    $(this).closest('.dots').find('.dot').removeClass('active');
    $(this).addClass('active');
    var offs = this.getAttribute('data-dot'),
      slider = $(this).closest('.slider'),
      inview = (offs - 1) * 3 + 1;
    if (inview > $('.icons', slider).data('size') - 2) inview = $('.icons', slider).data('size') - 2;
    var top = '-' + (inview - 1) * 120 + 'px';
    slider.find('.icons').data('inview', inview);
    $('.icons > li', slider).css({
      'top': top
    });
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
