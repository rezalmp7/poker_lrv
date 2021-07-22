$(document).ready(function () {
    $("#body #tentang #readmore").click(function () {
        var max_height = $('#body #tentang #text-tentang').css('max-height');
        if (max_height == '50px')
        {
            $("#body #tentang #text-tentang").css("max-height", "1500px");
        }
        else
        {
            $("#body #tentang #text-tentang").css("max-height", "50px");
        }
    });
});

$('#slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 3
        },
        1000: {
            items: 7
        }
    }
});
$('#bank-status .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});
$(document).ready(function () {
    $('#chatus #start').show();
    $('#chatus #pesan_body').hide();

    $('#chatus #start img').click(function () {
        $('#chatus #pesan_body').show();
        $('#chatus #start').hide();
    });
    
    
});
function hide_body_pesan() {
    $('#chatus #pesan_body').hide();
    $('#chatus #start').show();
};

$('#header_mobile .btn').click(function () {
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
});


$('#header_mobile .sidebar ul li a').click(function () {
    var id = $(this).attr('id');
    $('nav.sidebar ul li ul.item-show-' + id).toggleClass("show");
    $('nav.sidebar ul li #' + id + ' span').toggleClass("rotate");

});

$('#header_mobile nav.sidebar ul li').click(function () {
    $(this).addClass("active").siblings().removeClass("active");
});