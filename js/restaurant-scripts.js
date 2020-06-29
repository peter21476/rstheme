jQuery(document).ready(function ($) {
    $("#contextual-help-link").click(function () {
        $("#contextual-help-wrap").css("cssText", "display: block !important;");
    });
    $("#show-settings-link").click(function () {
        $("#screen-options-wrap").css("cssText", "display: block !important;");
    });
    $( ".menu-item a" ).click(function( event ) {
        console.log('done');
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
    $('#header').addClass('display-header');

    $('.mobile-toggler').click(function(){
        $('.menu-top-menu-container').toggleClass('show-top-menu');
        let getClass = $('.fas').attr('class');
        if (getClass.indexOf('fa-toggle-on') !== - 1) {
            $('.fas').attr('class', 'fas fa-toggle-off');
        } else {
            $('.fas').attr('class', 'fas fa-toggle-on');
        }
    });

    $('.menu-item a').click(function(){
        $('.menu-top-menu-container').toggleClass('show-top-menu');
    });

});