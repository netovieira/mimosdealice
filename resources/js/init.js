(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('nav#top-nav').pushpin({ top: $('nav#top-nav').offset().top });
  }); // end of document ready
})(jQuery); // end of jQuery name space