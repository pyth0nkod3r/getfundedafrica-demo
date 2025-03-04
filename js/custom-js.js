// Initialize Swiper
document.addEventListener("DOMContentLoaded", function () {
  // Banner Slider initialization
  const bannerSlider = new Swiper(".banner-slider", {
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    grabCursor: true,
    watchSlidesProgress: true,
    on: {
      progress: function (swiper) {
        const progress = (swiper.realIndex + 1) * (100 / swiper.slides.length);
        document
          .querySelector(".swiper-progress")
          .style.setProperty("--swiper-progress", progress + "%");
      },
      slideChange: function (swiper) {
        // Update the numbers
        const prevNum = String(swiper.realIndex + 1).padStart(2, "0");
        const nextNum = String(
          swiper.realIndex + 2 > swiper.slides.length ? 1 : swiper.realIndex + 2
        ).padStart(2, "0");

        document.querySelector(".number-prev").textContent = prevNum;
        document.querySelector(".number-next").textContent = nextNum;
      },
    },
  });

  // Marquee Slider initialization
  const marqueeSlider = new Swiper(".marquee-slider", {
    slidesPerView: "auto",
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    speed: 20000,
    grabCursor: true,
    mousewheelControl: true,
    keyboardControl: true,
    allowTouchMove: false,
  });
});

//Custom Scripts

function selectPlan(element) {
  // Remove selected class from all cards
  document.querySelectorAll(".pricing-card").forEach((card) => {
    card.classList.remove("selected");
    const btn = card.querySelector(".select-plan-btn");

    // Reset all buttons to outline style
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });

  // Add selected class to clicked card
  element.classList.add("selected");

  // Update button style for selected card
  const selectedBtn = element.querySelector(".select-plan-btn");
  selectedBtn.classList.remove("btn-outline-primary");
  selectedBtn.classList.add("btn-primary");

  // Get the selected plan
  const selectedPlan = element.getAttribute("data-plan");
  console.log("Selected plan:", selectedPlan);
}

// Select the popular plan by default when the page loads
document.addEventListener("DOMContentLoaded", function () {
  const popularPlan = document.querySelector(".pricing-card.popular");
  if (popularPlan) {
    selectPlan(popularPlan);
  }
});
