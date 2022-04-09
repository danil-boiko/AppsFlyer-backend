export default function(){

    const header = document.querySelector('header.header')

    function scrollHeader(){

        if (window.pageYOffset > 0){
            header.classList.add('header--scrolled')
        } else {
            header.classList.remove('header--scrolled') 
        }
    }

    window.addEventListener('scroll', () => { scrollHeader() })


}