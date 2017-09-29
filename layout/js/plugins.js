/*global $, jquery, alert*/
$(document).ready(function () {

    'use strict';
/*
    $(window).on("load", function () {
        'use strict';
        $(".loader, inner").fadeOut("slow");
    });

 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 840) {
            $('#nav-cover').css({
                backgroundColor: "#173e43",
                boxShadow: "1px 3px 9px 3px rgba(82, 76, 76, 0.74)",
            });
        }else {

            $('#nav-cover').css({
                backgroundColor: "transparent",
                boxShadow: "none",
            });
             
        }
    });*/
    
    $("body").niceScroll();

    
    
    //Hide placeholder On From Focus
    $('[placeholder]').focus(function () {
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).attr('data-text'));
    });
    

    $(".down").click(function () {
        
        $(".content, .about").slideUp(800);
        $(".fix-web, .comment, .footer").fadeIn(1300);
    });

    $(".up").click(function () {

        $(".content, .about").slideDown(1800);
        $(".fix-web, .comment, .footer").fadeOut(1000);
    });
    
    //navBar
    $("#dropdown-x").on("click", function () {
        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(this).children("ul").slideUp("fast");
        } else {
            $(this).addClass("open");
            $(this).children("ul").slideDown("fast");
        }
    });

    $('.card .card-header').on('click', function () {
        $(this).next('.card-body').slideToggle(400);
    });



    var maxText = $('#comLngth').attr('maxlength');

    $('#comLngth').keyup(function () {

        var textLength = $(this).val().length,
            remText = maxText - textLength;

        $('.commLngth').html('<span>' + remText + '</span> عدد الحروف');

        if ($('.commLngth span').text() <= 10) {

            $('.commLngth span').css('color', 'red');
            $('.commLngth').css('color', 'red');
        } else {

            $('.commLngth span').css('color', 'rgb(83, 147, 167)');
            $('.commLngth').css('color', 'rgb(83, 147, 167)');
        }
    });


    var maxText = $('#addLngth').attr('maxlength');

    $('#addLngth').keyup(function () {

        var textLength = $(this).val().length,
            remText = maxText - textLength;

        $('.addwebLngth').html('<span>' + remText + '</span> عدد الحروف');

        if ($('.addwebLngth span').text() <= 10) {

            $('.addwebLngth span').css('color', '#F00');
            $('.addwebLngth').css('color', '#F00');
        } else {

            $('.addwebLngth span').css('color', 'rgb(79, 111, 103)');
            $('.addwebLngth').css('color', 'rgb(79, 111, 103)');
        }
    });

});