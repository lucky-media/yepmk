import ScrollReveal from 'scrollreveal';
import CookieNotice from "./components/cookie-notice";

window.addEventListener('DOMContentLoaded', (event) => {

    new CookieNotice();

    ScrollReveal({
        duration: 1000
    });

    const nodeList = document.querySelectorAll('.reveal');

    ScrollReveal().reveal(nodeList, {
        delay: 100
    });

    ScrollReveal().reveal('.headline');
    ScrollReveal().reveal('.desc', {
        delay: 100
    });
    ScrollReveal().reveal('.head-btn', {
        delay: 200
    });
    ScrollReveal().reveal('.head-svg', {
        delay: 300
    });

});