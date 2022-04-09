//Libs
import AOS from 'aos';

//Components
import header from './components/header';

// DOM content load
document.addEventListener("DOMContentLoaded", () => {

    header();

    setTimeout(function(){
        AOS.init({
            duration: 750,
        });
    }, 500);

})