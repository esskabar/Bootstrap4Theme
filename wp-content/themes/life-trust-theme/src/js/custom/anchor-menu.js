'use strict';

(function ($) {

        $(document).ready(function(){
            /* Page Scroll to id fn call */
            $(".menu-item a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
                highlightSelector:".menu-item  a"
            });

            /* demo functions */
            $("a[rel='next']").click(function(e){
                e.preventDefault();
                var to=$(this).parent().parent(".section").next().attr("id");
                $.mPageScroll2id("scrollTo",to);
            });
            $(window).load(function(){



            });

            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                        && location.hostname == this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top - 80 //offsets for fixed header
                            }, 1000);
                            return false;
                        }
                    }
                });
                //Executed on page load with URL containing an anchor tag.
                if($(location.href.split("#")[1])) {
                    var target = $('#'+location.href.split("#")[1]);
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 80 //offset height of header here too.
                        }, 1000);
                        return false;
                    }
                }
            });
        });



})(jQuery);