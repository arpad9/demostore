$( document ).ready(function() {
  console.log( "ready!" );

  $('.flyout-parent').hover( function() {
    $(this).find('.flyout-box').show();
  }, function() {
    $(this).find('.flyout-box').hide();
  });
});
