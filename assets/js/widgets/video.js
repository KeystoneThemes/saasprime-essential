/* global WDB_ADDONS_JS */
(function ($) {
  /**
   * @param $scope The Widget wrapper element as a jQuery element
   * @param $ The jQuery alias
   */
  const SaaSPrimeVideo = function ($scope, $) {

    const video = $('.saasprime--video .video', $scope);
    const play_video = $('.saasprime--video .play-video', $scope);

    video.on('click', function () {
      if( this.paused ) {
        this.play();
      } else {
        this.pause();
      }
      play_video.toggle();
    })

  };

  // Make sure you run this code under Elementor.
  $(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/saasprime--video.default', SaaSPrimeVideo);
  });
})(jQuery);
