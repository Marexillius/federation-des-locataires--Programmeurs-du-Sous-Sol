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


const hero = document.querySelector(".hero");
const heros = document.querySelectorAll(".hero__nouvelles");

for (let index = 0; index < heros.length; index++) {
    heros[index].style.transitionDuration = "1s";
    heros[index].style.transitionTimingFunction = "linear";

    heros[index].addEventListener("click", function() {
        heros[0].style.transitionDuration = "1s";
        heros[1].style.transitionDuration = "1s";
        heros[2].style.transitionDuration = "1s";

        if (this == heros[0]) {
            this.style.transform = "translateX(-100%)";
            
            
            heros[1].style.transform = "translate(0, -103%)";

            heros[2].style.transitionDuration = "0s";
            heros[2].style.transform = "translate(100%, -206%)";
        } else if (this == heros[1]) {
            this.style.transform = "translate(-100%, -103%)";
            

            heros[2].style.transform = "translate(0, -206%)";
            
            heros[0].style.transitionDuration = "0s";
            heros[0].style.transform = "translateX(100%)";

        } else if (this == heros[2]) {
            this.style.transform = "translate(-100%, -206%)";

            heros[0].style.transform = "translate(0, 0%)";
            
            heros[1].style.transitionDuration = "0s";
            heros[1].style.transform = "translate(100%, -103%)";
        } 
        
 
    })  
}
//.style.transitionDuration = "1s";
//.style.transitionTimingFunction = "linear";