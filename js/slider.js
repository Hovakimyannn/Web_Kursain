/*
window.onload = function () {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let models = JSON.parse(this.responseText);
        }
    };
    xhr.open("POST", "/php/get_all_name.php", true);
    xhr.send();
}
*/

$( document ).ready(function() {
    $('.slide').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        dots:false,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 3000,
    });
});