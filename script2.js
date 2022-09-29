// portfolio
if(wScroll > $('.portfolio').offset().top - 250) {
    $('.portfolio .thumbnail').each(function (i) {
        setTimeout(function () {
            $('.portfolio .thumbnail').eq(i).addClass('muncul');
        }, 300 * (i+1));
    });

    
 }