const mySwiper = new Swiper(".mySwiper", {
  // Optional parameters
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay: {
    delay: 5000,
  },
  on: {
    transitionStart: function () {
      var videos = document.querySelectorAll("video");

      Array.prototype.forEach.call(videos, function (video) {
        video.pause();
      });
    },

    transitionEnd: function () {
      var activeIndex = this.activeIndex;
      var activeSlide =
        document.getElementsByClassName("swiper-slide")[activeIndex];
      var activeSlideVideo = activeSlide.getElementsByTagName("video")[0];
      activeSlideVideo.play();
    },
  },
});
