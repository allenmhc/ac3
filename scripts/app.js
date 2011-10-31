(function() {
  window.AppView = Backbone.View.extend({
    el: $("#content"),
    initialize: function() {
      return this.currentPosts = new AC.content.Posts();
    }
  });
}).call(this);
