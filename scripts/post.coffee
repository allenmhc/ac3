window.AC ?= {}
window.AC.content ?= {}

AC.content.Post = Backbone.Model.extend {
  initialize: (@post) ->
}

AC.content.Posts = Backbone.Collection.extend {
  model: AC.content.Post
  initialize: ->
    AC.api.getRecentPosts (posts) =>
      (@add (new AC.content.Post post)) for post in posts
    console.log @length
}

AC.content.PostView = Backbone.View.extend {
  tagName: 'article'
  className: 'post'
  events: {}
  render: ->

}
