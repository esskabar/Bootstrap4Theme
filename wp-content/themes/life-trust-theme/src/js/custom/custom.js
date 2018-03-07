'use strict';

(function ($) {
    //$('body').css('display', 'none');
    $(window).on('load', function () {
        $('body').addClass('loaded');
    });

    $(window).resize(function () {
        if (this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function () {
            $(this).trigger('resizeEnd');
        }, 600);
    });


    $(document).ready(function () {
        //************************************
        // Top Slider init
        //************************************

        $('.top-slider').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            cssEase: 'linear',
            fade: true,
            speed: 500,
            infinite: true
        });

        $('nav li').addClass('nav-item').find('a').addClass('nav-link');


    });


    $(document).ready(function () {
        //************************************
        // Carousel Slider
        //************************************

        $('.carousel-slider .slider').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            cssEase: 'linear',
            fade: true,
            speed: 500,
            infinite: true,
            dots: true
        });

        var mHeight = $('.carousel-slider').outerHeight() - $('.carousel-slider .headline').outerHeight() - 50;
        $('.carousel-slider .card').css('max-height', mHeight + 'px');



    });


    $(window).on('load resizeEnd', function () {
        var mHeight = $('.carousel-slider').outerHeight() - $('.carousel-slider .headline').outerHeight() - 50;
        $('.carousel-slider .card').css('max-height', mHeight + 'px');
    });


    $(window).on('load resizeEnd', function () {
        $(".collapses").each(function () {
            $(this).find('.card .excerpt:not(.collapsed)').removeAttr('style');
            $(this).find('.card .excerpt:not(.collapsed)').equalHeights();

            $(this).find('.card .card-header').removeAttr('style');
            $(this).find('.card .card-header').equalHeights();
        });
    });

    $(window).on('load resizeEnd', function () {

        $(".collapses .card-text.content").each(function () {

            var $this = $(this);

            $this.on('show.bs.collapse', function () {
                $("html, body").animate({scrollTop: $this.closest('.card-body').offset().top - 50 }, '500');
                $this.prev('.excerpt').css('height',$this.prev(".excerpt").find('.inner').outerHeight() ).addClass('collapsed');
            });

            $this.on('hide.bs.collapse', function () {
                $("html, body").animate({scrollTop: $this.closest('.card-body').offset().top - 50 }, '500');
                $this.prev('.excerpt').removeClass('collapsed');
                $this.closest('.collapses').find('.card .excerpt:not(.collapsed)').equalHeights();
            });
        });
    });


})(jQuery);