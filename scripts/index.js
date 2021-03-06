(function($) {
  $(".info-icon").click(function(e) { e.preventDefault(); });

  $("#archives-chrono").on('click', '.chrono-year', function(e) {
    e.preventDefault();
    var duration = 300;
    var $postList = $(e.target).parent('h4').next('.year-post-list');
    if ($postList.hasClass('collapsed')) {
      var $oldPostList = $('.year-post-list:not(.collapsed)');
      var oldPostHeight = $oldPostList.innerHeight();
      $oldPostList.animate(
        {'height': 0},
        duration,
        function() {
          $oldPostList.addClass('collapsed');
          $oldPostList.css('height', oldPostHeight);
        });
      $postList.removeClass('collapsed');
      var postListHeight = $postList.innerHeight();
      $postList.css('height', 0);
      $postList.animate(
        {'height': postListHeight},
        duration
      );
    }
  });

  $("#archives-toggle").click(function(e) {
    e.preventDefault();
    var $archives = $("#archives");
    var height = ($archives.hasClass("show-category")) ? 'auto' : $("#archives-category").outerHeight();
    $archives.css('height', height);
    $archives.toggleClass('show-category');
  });

  $("#contact-me").find("input, textarea")
    .keydown(function(e) {
      var $formElem = $(e.target);
      $formElem.siblings("label, .reqtxt, .emailreqtxt").addClass("has-input");
    })
    .keyup(function(e) {
      var $formElem = $(e.target);
      if ($formElem.val().length > 0) {
        $formElem.siblings("label, .reqtxt, .emailreqtxt").addClass("has-input");
      } else {
        $formElem.siblings("label, .reqtxt, .emailreqtxt").removeClass("has-input");
      }
    });
})(jQuery);
