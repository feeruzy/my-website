var main = function() {

    $('.arrow-next').click(function() {

        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next();
        var currentDot = $('.active-dot');
        var nextDot = currentDot.next();

        if(nextSlide.length == 0) {
            nextSlide = $('.slide').first();
            nextDot = $('.dot').first();
        }

        currentSlide.fadeOut(100).removeClass('active-slide');
        nextSlide.fadeIn(100).addClass('active-slide');
        currentDot.removeClass('active-dot');
        nextDot.addClass('active-dot');

    });

    $('.arrow-prev').click(function() {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();
        var currentDot = $('.active-dot');
        var prevDot = currentDot.prev();

        if(prevSlide.length == 0) {
            prevSlide = $('.slide').last();
            prevDot = $('.dot').last();
        }

        currentSlide.fadeOut(100).removeClass('active-slide');
        prevSlide.fadeIn(100).addClass('active-slide');
        currentDot.removeClass('active-dot');
        prevDot.addClass('active-dot');

    });
}

$(document).ready(main);