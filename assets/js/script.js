$(document).ready(function() {
    var menuBtn = $('.top-nav-btn');
    var sidebarBtn = $('.left-sidebar-btn')
    var menu = $('.top-nav-menu');
    var sidebarMenu = $('.left-sidebar-menu')

    $('[data-target="modal"]').on('click', function(event){
        event.preventDefault();
        $('.modal').show();
    });

    $('.close').on('click', function(event){
        event.preventDefault();
        $('.modal').hide();
    });

    menuBtn.on('click', function(event){
        event.preventDefault();
        menu.toggleClass('top-nav-menu__active');
    });
    sidebarMenu.on('click', function(event){
        event.preventDefault();
        sidebarBtn.toggleClass('left-sidebar-menu__active');
    });

$('.direction-blocks').slick({
    arrows: false,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
    ]
});

var elem = document.querySelector('.calc-range');
var init = new Powerange(elem, { min: 100000, 
                                max: 3000000, 
                                start: 100000, 
                                hideRange: true,
                                step: 100000 });
var per, month, result, total, monthly;
var money = +$('.calc-range').val();


$('input[name="programms"]').on('change', function(event){
    month = +$(this).attr('data-month');
    per = +$(this).attr('data-per');
    result = Math.round(per / 12 * month * money);
    total = result + money;
    monthly = parseInt(result / month);
    $('#total').text(total.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
    $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
    $('#month').text(month);
});

$('.calc-range').on('change', function(event) {
    $('.calc-summ-invest-num span').text($(this).val().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
    var radio = $('input[name="programms"]:checked');
    money = +$(this).val();
    month = +radio.attr('data-month');
    per = +radio.attr('data-per');
    result = Math.round(per / 12 * month * money);
    total = result + money;
    monthly = parseInt(result / month);
    $('#total').text(total.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
    $('.calc-monthly span').text(monthly.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
});

});