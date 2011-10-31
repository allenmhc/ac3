window.AC ?= {}
window.AC.content ?= {}

AC.content.Post = Backbone.Model.extend {
  initialize: ->
}

AC.content.Posts = Backbone.Collection.extend {
  model: AC.content.Post
  initialize: ->

  fetchRecent: ->
    AC.api.getRecentPosts (posts) =>
      @reset(new AC.content.Post(post) for post in posts)
}

AC.content.PostView = Backbone.View.extend {
  tagName: 'article'
  className: 'post'
  events: {}
  render: ->

}
