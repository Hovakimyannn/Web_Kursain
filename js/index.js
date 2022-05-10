window.onload = function () {
    let models = document.querySelectorAll('.btn');
    for (let i = 0; i < models.length; i++) {
        let id = models[i].textContent;
        models[i].addEventListener('click',function (e){
            e.preventDefault();
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.querySelector('main>div').innerHTML = this.responseText;
                }
            };
            xhr.open("GET", "https://limitless-earth-58194.herokuapp.com/php/get_model.php?q=" + id + "-series", true);
            xhr.send();
        });
    }
}