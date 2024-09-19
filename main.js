//jay
const BurgerButton = document.querySelector("#Burger");
const OriginalSiteButton = document.querySelector("#OriginalSite");
const closePopUp = document.querySelector("#ClosePopUp");

closePopUp.addEventListener("click", function() {
    document.querySelector(".projet").style.display = "none";
})

OriginalSiteButton.addEventListener("click", function() {
    window.open("https://www.flhlmq.com/fr", "_blank");
})