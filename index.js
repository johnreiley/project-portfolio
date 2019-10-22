
let body = document.querySelector('body');
document.querySelector('.content-container').appendChild(buildPageFooter());

/******************************************************/

function buildPageFooter() {
    let footer = document.createElement('footer');
    let year = new Date().getFullYear();
    footer.innerHTML = `John Reiley - Copyright ©${year}`;
    return footer;
}
