"use strict";

function readMore() {
    let dots = document.getElementById("dots");
    let more = document.getElementById("more");
    let btn = document.getElementById("btn2");

    if(dots.style.display === "none") {
        dots.style.display="inline";
        btn.innerHTML="Скрыть";
        more.style.display="none";
    } else {
        dots.style.display="none";
        btn.innerHTML="Подробнее";
        more.style.display="inline";
    }
}