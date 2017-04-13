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
var $lensSize = (jQuery('#image-block').width()) * .7;
    jQuery('#bigpic').elevateZoom({
    zoomType: 'lens',
    lensShape: 'round',
    lensSize: $lensSize,
          scrollZoom: true,
        });

      function applyElevateZoom() {
        //var src = jQuery('.thickbox.shown').attr('href');
        //var bigimage = jQuery('.fancybox.shown').attr('href');
        jQuery('#bigpic').elevateZoom({
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


  });



