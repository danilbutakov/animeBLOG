"use strict";


document.querySelectorAll('.header__burger').onclick = function() {
    open();
};

function open() {
    document.querySelectorAll('.header__burger, .header__menu').toggleClass('active');
    document.querySelectorAll('body').toggleClass('lock');
}