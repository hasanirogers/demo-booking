const homepage = document.querySelector('body.home');

if (homepage) {
  const options = {
    perView: 1,
    perMove: 1,
    gap: 0,
    slideshow: 0,
    rewind: true,
    center: false,
  };

  const breakpoints = {};

  const hero = homepage.querySelector('kemet-carousel');

  hero.options = options;
  hero.breakpoints = breakpoints;
}
