gsap.registerPlugin(ScrollTrigger);

const elementIsVisibleInViewport = (el, partiallyVisible = false) => {
  const { top, left, bottom, right } = el.getBoundingClientRect();
  const { innerHeight, innerWidth } = window;
  return partiallyVisible
    ? ((top > 0 && top < innerHeight) ||
        (bottom > 0 && bottom < innerHeight)) &&
        ((left > 0 && left < innerWidth) || (right > 0 && right < innerWidth))
    : top >= 0 && left >= 0 && bottom <= innerHeight && right <= innerWidth;
};

// e.g. 100x100 viewport and a 10x10px element at position
// {top: -1, left: 0, bottom: 9, right: 10}

function heroVideo() {
  if ($(".hero-video")) {
    $(".hero-video").each(function () {
      this.loop = false;
      this.onended = function () {
        this.load();
      };
      this.play();
    });
  }
}

function teaserVideo() {
  const video = false;
  if (document.getElementById("teaser-video")) {
    $(window).on("scroll", function () {
      if (elementIsVisibleInViewport(document.getElementById("teaser-video"))) {
        !video && $("#teaser-video").find("video").get(0).play();
      }
    });
  }
}

function slider() {
  const slider = $("#slider");
  const image = $(slider).find(".js-comparision");
  const imageWrapper = $(slider).find(".js-image-wrapper");
  const imageWrapperImg = $(slider).find(".js-image-wrapper-img");
  const imageIso = $(slider).find(".js-image-iso");
  const imageIsoImg = $(slider).find(".js-image-iso-img");

  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: image,
      start: "top+=12% top",
      end: "bottom-=25% center",
      scrub: true,
      markers: false,
    },
  });

  for (let i = 0; i < imageWrapper.length; i++) {
    if (i < imageWrapper.length - 1) {
      timeline.fromTo(
        imageWrapper[i],
        {
          xPercent: 0,
        },
        {
          xPercent: -100,
        },
        `${20 * i}%`
      );

      timeline.fromTo(
        imageWrapperImg[i],
        {
          xPercent: 0,
        },
        {
          xPercent: 100,
        },
        `${20 * i}%`
      );

      timeline.fromTo(
        imageIso[i],
        {
          xPercent: 0,
        },
        {
          xPercent: -100,
        },
        `${20 * i}%`
      );

      timeline.fromTo(
        imageIsoImg[i],
        {
          xPercent: 0,
        },
        {
          xPercent: 100,
        },
        `${20 * i}%`
      );
    }
  }
}

$(document).ready(function () {
  slider();
  heroVideo();
  $(".slick").slick({
    prevArrow:
      "<div class='slick-custom-arrow'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' fill='currentColor'><path d='M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z'></path></svg></div>",
    nextArrow:
      "<div class='slick-custom-arrow slick-custom-arrow--right'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' fill='currentColor'><path d='M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z'></path></svg></div>",
  });
  teaserVideo();
});
