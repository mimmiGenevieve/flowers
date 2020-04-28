$(document).ready(function(){
/* the grid on main page */
var $grid = $('.grid');

/*
*
* Product-page
*
*/



if ($(window).width() > 1024) {
  $('.product-image').hide();
  $('.woocommerce-product-details__short-description').hide();

// init packery after all images have loaded
  $grid.packery({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    gutter: 15
  }); 
        

  $grid.on( 'click', '.product_title', function( event ) {
    // change size of item by toggling large class
    $(event.currentTarget).parent('.grid-item').children('.product-image').slideToggle(function() {
      $grid.packery('layout');
    });

    $(event.currentTarget).parent('.grid-item').children('.woocommerce-product-details__short-description').slideToggle(function() {
      $grid.packery('layout');
    });

    $(event.currentTarget).parent('.grid-item').children('.product_meta').slideToggle(function() {
      $grid.packery('layout');
    });

  });
}


});

