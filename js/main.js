window.addEventListener('DOMContentLoaded', function() {
    var btnMenu = document.querySelector('.btn-menu'),
        menu = document.querySelector('.nav-links'),
        lineMenu = document.querySelectorAll('.btn-menu__line-animation'),
        turnActivity = document.querySelectorAll('.off-link');

        btnMenu.addEventListener('click', () => {
            menu.classList.toggle('show-menu');
            lineMenu[0].classList.toggle('btn-menu__one-line');
            lineMenu[1].classList.toggle('btn-menu__one-line1');
        });

        turnActivity.forEach(i => {
            i.addEventListener('click', (e) => {
                e.preventDefault();
            });
        });
});