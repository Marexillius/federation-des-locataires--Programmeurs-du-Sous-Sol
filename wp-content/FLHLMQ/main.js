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

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

// #####################################
//    S E R V I C E S   O F F E R T S
// #####################################
// Alexandre
const servicesCard = document.querySelectorAll(".services__carte");

servicesCard.forEach(card => {
    card.addEventListener("click", function() {
        servicesCard.forEach(element => {
            if (element.classList.contains("services__carte--active")) {
                element.classList.remove("services__carte--active");
            } 
        });
        card.classList.add("services__carte--active");
    })
});