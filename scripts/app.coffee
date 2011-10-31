window.AppView = Backbone.View.extend {
  el: $("#content")

  initialize: ->
    @currentPosts = new AC.content.Posts()
    @currentPosts.fetchRecent()
}