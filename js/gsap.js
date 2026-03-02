gsap.registerPlugin(ScrollTrigger);

const opening = gsap.timeline();

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
opening.fromTo(".js-mv-ribbon", {
  opacity: 0,
  clipPath: "inset(0 100% 0 0)",
}, {
  opacity: 1,
  clipPath: "inset(0 0% 0 0)",
  duration: 1.5,
  ease: 'power2.inOut',
}, "-=1");
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




let ribbons = document.querySelectorAll('.js-ribbon');

ribbons.forEach((ribbon) => {
  gsap.fromTo(
    ribbon,
    {
      opacity: 0,
      clipPath: "inset(0 100% 0 0)",
    },
    {
      opacity: 1,
      clipPath: "inset(0 0% 0 0)",
      duration: 1.5,
      ease: 'power2.inOut',
      scrollTrigger: {
        trigger: ribbon,
        start: 'top 90%',
      },
    }
  );
});

