// Alexandre
gsap.set(".error__sign", {rotation: 0 -15});
const anim = gsap.timeline({repeat:-1, yoyo: true,});
anim.to(".error__sign", {rotation: 0 -0+15, duration: 4, ease: "power1.inOut"});
