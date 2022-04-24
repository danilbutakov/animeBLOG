"use strict";

$('.header__burger').click(function(event) {
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock');
});

document.querySelectorAll('.header__burger').onclick = function() {
    open();
};

function open() {
    document.querySelectorAll('.header__burger,.header__menu').toggleClass('active');
    document.querySelectorAll('body').toggleClass('lock');
}