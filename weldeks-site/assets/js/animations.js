let rockerImg = document.getElementById('wdks_rocket_img');
let logoImg = document.getElementById('wdks_logo_img');
let hbDescrioptionText = document.getElementById('wdks_hb_description');
let header = document.getElementById('wdks_header');
let headerWrapper = document.getElementById('wdks_header_wrapper');
let headerLogo = document.getElementById('header_logo_img');


let pastScrollValue = 0;

window.addEventListener('scroll', (event) => {

    if (rockerImg && logoImg && hbDescrioptionText) {

        rockerImg.style.transform = "scale(1.5) translateY(calc(25% - " + window.scrollY / 3 + "px))";
        logoImg.style.transform = "translateY(" + window.scrollY / 3 + "px)";
        hbDescrioptionText.style.transform = "translateY(" + window.scrollY / 4 + "px)";

        if (window.scrollY < 500) {
            logoImg.style.opacity = 1 - (window.scrollY / 500);
            hbDescrioptionText.style.opacity = 1 - (window.scrollY / 500);
            rockerImg.style.opacity = 1 - (window.scrollY / 500);
        }
    }

    if (header && headerWrapper) {
        if (window.scrollY >= pastScrollValue) {
            header.style.top = "-100%";
            pastScrollValue = window.scrollY;

        } else {
            header.style.top = "";
            pastScrollValue = window.scrollY;
        }

        if  (!rockerImg && !logoImg) {
            if (window.scrollY > 600) {
                headerWrapper.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
                header.classList.add('mini-header');
            } 
            else {
                headerWrapper.style.backgroundColor = "";
                header.classList.remove('mini-header');
            }
        } 
        else {
            if (window.scrollY > 900) {
                headerWrapper.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
                headerLogo.style.opacity = "1";
            } 
            else {
                headerWrapper.style.backgroundColor = "";
                headerLogo.style.opacity = "";
            }
        }
    }
});