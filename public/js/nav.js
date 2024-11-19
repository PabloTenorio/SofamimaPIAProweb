document.addEventListener('DOMContentLoaded', () => {
    const nav = document.getElementById('nav')
    const a = document.getElementById('nav-a')
    const icon = document.getElementById('icon-socialmedia')
    const img = document.getElementById('img-nav')

    window.addEventListener('scroll', () => {
        if(window.scrollY > 100) {
            nav.classList.remove('transparent-color')
            nav.classList.add('black-color');
            a.classList.add('white-color-a');
            icon.classList.add('white-color-icon')
            img.classList.add('logo-sofa-white')
        }else{
            nav.classList.remove('black-color');
            a.classList.remove('white-color-a');
            icon.classList.remove('white-color-icon')
            img.classList.remove('logo-sofa-white')
            nav.classList.add('transparent-color')
        }
    });
});
