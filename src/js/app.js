//scroll navbar
window.onscroll = function(){
    const header = document.querySelector('header');
    const fixNav = header.offsetTop;

    if(window.pageYOffset > fixNav){
        header.classList.add('navbar-fixed');
    }else{
        header.classList.remove('navbar-fixed');
    }
}

//hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click',function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

//Dark Mode
const checkbox = document.querySelector('#toggle');
const hmtl = document.querySelector('html');

checkbox.addEventListener('click',function(){
    checkbox.checked ? hmtl.classList.add('dark'):hmtl.classList.remove('dark');
})