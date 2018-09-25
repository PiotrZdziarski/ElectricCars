window.onload = function() {
    if(this.scrollY !== 0) {
        document.getElementById('mainnav').classList.add('backgroundWhite');
        document.getElementById('menu').classList.add('hrefColor');
    }

    document.getElementById('mainnav').classList.add('navTransition');
}

window.addEventListener('scroll', function () {
    if(this.scrollY !== 0) {
        document.getElementById('mainnav').classList.add('backgroundWhite');
        document.getElementById('menu').classList.add('hrefColor');
    }
    if(this.scrollY === 0) {
        document.getElementById('mainnav').classList.remove('backgroundWhite');
        document.getElementById('menu').classList.remove('hrefColor');
    }
});