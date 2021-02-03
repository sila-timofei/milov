window.addEventListener('DOMContentLoaded', function() {
    var btnMenu = document.querySelector('.btn-menu'),
        menu = document.querySelector('.nav-links'),
        logo = document.querySelector('.logo'),
        closeMenu = document.querySelectorAll('.btn-menu__line-close');

        btnMenu.addEventListener('click', () => {
            menu.classList.toggle('show-menu');
            logo.classList.toggle('white-logo');
            closeMenu.forEach(i => {
                i.classList.toggle('show-close-menu');
            });
        });
});