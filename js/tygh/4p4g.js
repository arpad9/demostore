$( document ).ready(function() {
  $('.flyout-parent').hover( function() {
    $(this).closest('.sidebox-body, .popup-content').find('.flyout-box').hide();
    $(this).find('.flyout-box').show();
  });
  $('.flyout-parent').closest('.sidebox-body, .popup-content').mouseleave( function() {
    $(this).find('.flyout-box').hide();
  });

  //ugly hack to prevent ugly insertion of html
  $('body').on('DOMNodeInserted', '#tygh_container', function(e) {
    $(e.target).find('.span1,.span2').remove();
    $(e.target).find('.tygh-content.clearfix').remove();
  });
});

