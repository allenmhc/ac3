(function() {
  window.AppView = Backbone.View.extend({
    el: $("#content"),
    initialize: function() {
      this.currentPosts = new AC.content.Posts();
      return this.currentPosts.fetchRecent();
    }
  });
}).call(this);
