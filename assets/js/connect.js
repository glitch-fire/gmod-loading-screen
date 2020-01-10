$('.preloader div span.meme').html(phrase);

$(window).on('load', function() {
    setTimeout(function() {
        $('.preloader div').fadeOut('slow', function() {
            $(this).children().css({'display':'none', 'visibility':'hidden'});
            $(this).css({'display':'none', 'visibility':'hidden'});
        });
        $('.preloader').delay(500).fadeOut('slow', function() {
            $(this).css({'display':'none', 'visibility':'hidden'});
            $('body').delay(500).css({'overflow':'visible'});
        });
    }, 3000);
})