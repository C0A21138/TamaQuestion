import './bootstrap';

$(document).ready(function () {
    $('.nav-item').click(function () {
        $('.nav-item').removeClass('active');
        $(this).addClass('active');
    });
});

var prevScrollPos = window.pageYOffset;

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    var bottomNavigation = document.querySelector('.bottom-menu');

    if (prevScrollPos > currentScrollPos) {
        bottomNavigation.style.bottom = '0';
    } else {
        bottomNavigation.style.bottom = '-60px'; /* メニューバーの高さ分隠す */
    }

    prevScrollPos = currentScrollPos;
};