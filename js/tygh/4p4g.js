$( document ).ready(function() {
  $('.flyout-parent').hover( function() {
    $(this).closest('.sidebox-body, .popup-content').find('.flyout-box').hide();
    $(this).find('.flyout-box').show();
  });
  $('.flyout-parent').closest('.sidebox-body, .popup-content').mouseleave( function() {
    $(this).find('.flyout-box').hide();
  })
});
