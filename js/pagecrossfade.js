(function ($) {
  $.fn.pageCrossFade = function (options) {
    var settings = $.extend({
      duration: 400,
      easing: 'swing',
      links: 'internal'
    }, options);


    var fadePage = function ($link) {
      $('body').fadeOut(settings.duration, settings.easing, function () {
        window.location.href = $link;
      });
    };

    if (settings.links === 'all') {
      $('.linky').on('click', function (e) {
        e.preventDefault();
        var $link = $(this).attr('href');
        fadePage($link);
      });
    } else if (settings.links === 'internal') {
      $('.linky').on('click', function (e) {
        var a = new RegExp('/' + window.location.host + '/');
        if (a.test(this.href)) {
          console.log("external link");
          e.preventDefault();
          var $link = $(this).attr('href');
          fadePage($link);
        }
      });
    } else {
      $('.linky' + settings.links).on('click', function (e) {
        e.preventDefault();
        var $link = $(this).attr('href');
        fadePage($link);
      });
    }

  };
}(jQuery));