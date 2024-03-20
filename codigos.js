'use strict'

const switcher = document.querySelector('.bt');

switcher.addEventListener('click', function(){
    document.body.classList.toggle('dark-mode')

    var cor = document.body.className;
    if(cor == "light-mode"){
        this.textContent= "Escuro";
    }
    else {
        this.textContent="Claro";
    }
});
