//jay
const BurgerButton = document.querySelector("#Burger");
const OriginalSiteButton = document.querySelector("#OriginalSite");
const closePopUp = document.querySelector("#ClosePopUp");

let isClosed = localStorage.getItem("popupClosed");
console.log(isClosed)
if (isClosed) {
  document.querySelector(".projet").style.display = "none";
}

closePopUp.addEventListener("click", function() {
    document.querySelector(".projet").style.display = "none";
    localStorage.setItem("popupClosed", "true");
})

OriginalSiteButton.addEventListener("click", function() {
    window.open("https://www.flhlmq.com/fr", "_blank");
})

const swiperHero = new Swiper('.hero__swipper', {
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
const swiperService = new Swiper('.service__swipper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: "cards",
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});