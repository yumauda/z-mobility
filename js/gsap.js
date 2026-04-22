gsap.registerPlugin(ScrollTrigger);

const refreshScrollTriggers = () => {
  ScrollTrigger.refresh();
};

window.addEventListener("load", refreshScrollTriggers);

document.querySelectorAll("img").forEach((img) => {
  if (img.complete) {
    return;
  }

  img.addEventListener("load", refreshScrollTriggers, { once: true });
});

const opening = gsap.timeline();

var webStorage = function () {
  if (sessionStorage.getItem('access')) {
    opening.set(".p-loading", {
      display: "none",
    });

  } else {
    sessionStorage.setItem('access', 0);

    opening.fromTo(".p-loading", {
      opacity: 0,
      zIndex: 0,
    }, {
      opacity: 1,
      zIndex: 99999,
      duration: 1,
      ease: "power2.inOut",
    });
    opening.fromTo(".p-loading__img", {
      opacity: 0,
      filter: "blur(10px)",
    }, {
      opacity: 1,
      filter: "blur(0px)",
      duration: 1,
      ease: "power2.inOut",
    });
    opening.fromTo(".p-loading__text", {
      opacity: 0,
      clipPath: "inset(100% 0 0 0)",
    }, {
      opacity: 1,
      clipPath: "inset(0% 0 0 0)",
      duration: 1.2,
      ease: "power2.inOut",
    });
    opening.to(".p-loading__text", {
      scale: 15,
      opacity: 0,
      delay: 1,
    });
    opening.to(".p-loading__img", {
      opacity: 0,
      duration: 1,
      delay: 0.5,
      ease: "power2.inOut",
    });
    opening.to(".p-loading", {
      opacity: 0,
      duration: 1,
      ease: "power2.inOut",
      zIndex: 0,
    });
    opening.to(".p-loading", {
      display: "none",
    });

  }
}
webStorage();



opening.fromTo(".js-mv-img", {
  opacity: 0,
  clipPath: "inset(0 100% 0 0)",
}, {
  clipPath: "inset(0 0% 0 0)",
  opacity: 1,
  stagger: 0.2,
  ease: "power2.inOut",
  duration: 1.5,
}, "-=1");
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
  "--width": "101%",
}, "-=0.5");
opening.fromTo(".js-top-header", {
  opacity: 0,
  y: -100,
}, {
  y: 0,
  opacity: 1,
  ease: "power2.inOut",
  duration: 1,
});




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
      duration: 3,
      ease: 'power3.out',
      delay: 0.5,
      scrollTrigger: {
        trigger: ribbon,
        start: 'top 90%',
      },
    }
  );
});

let newsRibbons = document.querySelectorAll('.js-news-ribbon');

newsRibbons.forEach((newsRibbon) => {
  gsap.fromTo(
    newsRibbon,
    {
      opacity: 0,
      clipPath: "inset(0 100% 0 0)",
    },
    {
      opacity: 1,
      clipPath: "inset(0 0% 0 0)",
      duration: 1.5,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: newsRibbon,
        start: 'top 90%',
      },
    }
  );
});


let pageMainTitles = document.querySelectorAll('.js-page-main-title');

pageMainTitles.forEach((pageMainTitle) => {
  gsap.fromTo(
    pageMainTitle,
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
        trigger: pageMainTitle,
        start: 'top 90%',
      },
    }
  );
});

let clipPathFromBottom = document.querySelectorAll('.js-clip-path-from-bottom');

clipPathFromBottom.forEach((clipPathFromBottom) => {
  gsap.fromTo(
    clipPathFromBottom,
    {
      opacity: 0,
      clipPath: "inset(100% 0 0 0)",
    },
    {
      opacity: 1,
      clipPath: "inset(0% 0 0 0)",
      duration: 1.5,
      ease: 'power2.inOut',
      scrollTrigger: {
        trigger: clipPathFromBottom,
        start: 'top 90%',
      },
    }
  );
});
let opacityWords = document.querySelectorAll('.js-opacity-word');

opacityWords.forEach((opacityWord) => {
  gsap.fromTo(
    opacityWord,
    {
      opacity: 0,
    },
    {
      opacity: 1,
      duration: 1,
      ease: 'power2.inOut',
      scrollTrigger: {
        trigger: opacityWord,
        start: 'top 90%',
      },
    }
  );
});
let proWords = document.querySelectorAll('.js-pro-word');

proWords.forEach((proWord) => {
  gsap.fromTo(
    proWord,
    {
      "--width": "0%",
      opacity: 0,
    },
    {
      "--width": "101%",
      opacity: 1,
      duration: 1.5,
      ease: 'power3.out',
      stagger: 0.08,
      scrollTrigger: {
        trigger: proWord,
        start: 'top 90%',
      },
    }
  );
});
gsap.fromTo(".js-pro-img", {
  opacity: 0,
  scale: 0.3,
  filter: "blur(200px)",
}, {
  opacity: 1,
  scale: 1,
  filter: "blur(0px)",
  duration: 1.5,
  ease: 'power3.out',
  scrollTrigger: {
    trigger: ".js-pro-img",
    start: 'top 90%',
  },
});

let parallaxImgs = document.querySelectorAll('.js-parallax');

parallaxImgs.forEach((parallaxImg) => {
  gsap.fromTo(
    parallaxImg.querySelector('img'),
    {
      y: -60,
    },
    {
      y: 0,
      duration: 1,
      ease: 'power2.inOut',
      scrollTrigger: {
        trigger: parallaxImg,
        start: 'top bottom',
        end: 'bottom top',
        scrub: true,
      },
    }
  );
});