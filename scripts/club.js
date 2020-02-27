var btn1 = document.querySelector(".bouton__btn1");
var btn2 = document.querySelector(".bouton__btn2");

var histoireduvolley = document.querySelector(".histoireduvolley");
var leclub = document.querySelector(".leclubnone");

btn1.addEventListener("click", function() {
    if (leclub.classList.contains("leclub")) {
        leclub.classList.remove("leclub");
        leclub.classList.add("leclubnone");
        histoireduvolley.classList.remove("histoireduvolleynone");
        histoireduvolley.classList.add("histoireduvolley");
    }
});

btn2.addEventListener("click", function() {
    if (histoireduvolley.classList.contains("histoireduvolley")) {
        histoireduvolley.classList.remove("histoireduvolley");
        histoireduvolley.classList.add("histoireduvolleynone");
        leclub.classList.remove("leclubnone");
        leclub.classList.add("leclub");
    }
});