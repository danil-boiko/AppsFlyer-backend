export default function(){

    const contactForms = document.querySelectorAll( '.wpcf7' );
    const closeNotice = document.querySelector('.contact-form-response-close');
    const formNotice = document.querySelector('.contact-form-response')

    contactForms && contactForms.forEach(form => {
        form.addEventListener( 'wpcf7mailsent', function( event ) {
            formNotice.classList.add('show');
        }, false );
    });


    closeNotice.addEventListener('click', e => {
        formNotice.classList.remove('show');
    })
    
}