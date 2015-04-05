$(function(){
    $('.slides div').hide();
    $('.slide:first-child').fadeIn(2000);
    setInterval(function () {
            $('.slide:first-child').fadeOut()
                .next('.slide').fadeIn()
                .end().appendTo('.slides');}
        ,10000);
});


