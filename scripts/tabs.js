(function($) {
    $(function() {
      
      $('div.tab-cont').on('click', 'button:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('div.tab-content').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
      });
    });
    })(jQuery);