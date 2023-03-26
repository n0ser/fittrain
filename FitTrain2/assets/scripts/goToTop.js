function trackScroll() {
    let scrolled = window.pageYOffset;
    let coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
        goTopBtn.classList.add('go-to-top-show');
    }
    if (scrolled < coords) {
        goTopBtn.classList.remove('go-to-top-show');
    }
    };

    function backToTop() {
    if (window.pageYOffset > 0) {
        window.scrollBy(0, -80);
        setTimeout(backToTop, 0);
        }
    };

    let goTopBtn = document.querySelector('.go-to-top');

    window.addEventListener('scroll', trackScroll);
    goTopBtn.addEventListener('click', backToTop);