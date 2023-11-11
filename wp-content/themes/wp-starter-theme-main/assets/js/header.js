window.addEventListener('DOMContentLoaded', function() {

    // const HEADER = document.getElementById('l-header');
    
    // window.addEventListener('scroll', function() {
    //     let y = window.scrollY;

    //     if(y > 185) {
    //         HEADER.classList.add('is-sticky');
    //         HEADER.style.paddingBottom = "46px";
    //     } else {
    //         HEADER.classList.remove('is-sticky');
    //         HEADER.style.paddingBottom = "0";
    //     }
    // });

    const MOBILE_BTN = document.getElementById('toggle-menu');
    const MENU = document.querySelector('.widget-menu');

    MOBILE_BTN.addEventListener('click', function(e) {
        e.preventDefault();

        if(MENU.getAttribute('aria-expanded') === 'false') {
            MENU.setAttribute('aria-expanded', 'true');
            MOBILE_BTN.innerHTML = '<i class="ri-close-line"></i>';
            document.body.style.overflow = "hidden";
        } else {
            MENU.setAttribute('aria-expanded', 'false');
            MOBILE_BTN.innerHTML = '<i class="ri-menu-line"></i>';
            document.body.style.overflow = "auto";
        }
    });

});
