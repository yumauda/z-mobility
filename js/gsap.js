const opening = gsap.timeline()

opening.fromTo(".js-mv-img", {
  opacity: 0,
  clipPath: "inset(0 100% 0 0)",
}, {
  clipPath: "inset(0 0% 0 0)",
  opacity: 1,
  stagger: 0.2,
  ease: "power2.inOut",
  duration: 1.5,
});
opening.fromTo(".js-en-title", {
  opacity: 0,
  clipPath: "inset(100% 0 0 0)",
}, {
  clipPath: "inset(0% 0 0 0)",
  opacity: 1,
  stagger: 0.2,
  ease: "power2.inOut",
  duration: 1,
});
opening.fromTo(".js-ja-title", {
  opacity: 0,
  clipPath: "inset(100% 0 0 0)",
}, {
  clipPath: "inset(0% 0 0 0)",
  opacity: 1,
  ease: "power2.inOut",
  duration: 1,
  "--width": "100%",
}, "-=0.5");