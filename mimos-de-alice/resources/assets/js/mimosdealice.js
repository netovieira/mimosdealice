var sections = $('section'),
    nav = $('nav.pin-top'),
    nav_height = nav.outerHeight();

$(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('li').removeClass('active');
            nav.find('a[href="#'+$(this).attr('id')+'"]').closest('li').addClass('active');
        }
    });
});


nav.find('a').on('click', function(event){
    var end = $(this).attr('href');
    end = $(end).offset().top;
    var body = $("html, body");
    body.stop().animate({scrollTop:end - 64}, '750', 'linear');
});

ajustPositionCandies();
$(window).resize(function () {
    ajustPositionCandies();
});

function ajustPositionCandies(){
    var candies = $('.candies'),
        candy = $('.candies .candy'),
        candyCount = candy.length;

    for ( var i = 0; i < candyCount; i++ ) {
        candy = $('.candies .candy:eq(' + i + ')');

        if ((i % 10 === 0 ) || ( i % 10 === 7 )) {
            candy.width((candies.width() / 2) - 20);
            candy.height(candy.width());
            if ( i % 10 === 7 ){
                candy.css({'float'        : 'right',
                    'margin-right' : 32.5 });
            }
        } else {

            if ( (i === 3) || ( (i+1) % 3 === 0) ){
                candy.find('.card-reveal').css({
                    'display': 'block',
                    'transform': 'translateY(-100%)'
                });
            }

            candy.width((candies.width() / 4) - 20);
            candy.height(candy.width());
        }
    }
}