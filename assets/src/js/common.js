//Libs
import AOS from 'aos';

//Components
import header from './components/header';
import form from './components/contact-form';

// DOM content load
document.addEventListener("DOMContentLoaded", () => {

    header();
    form();
    setTimeout(function(){
        AOS.init({
            duration: 750,
        });
    }, 500);

})