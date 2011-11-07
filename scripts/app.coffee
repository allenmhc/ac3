window.AC ?= {}
window.AC.content ?= {}

class window.AppView extends Backbone.View
  el: $("#content")

  INIT_POSTS: 1,
  INIT_RECENT_POSTS: 5

  initialize: ->
    @alphaView = new AC.content.AlphaView()
    @betaView = new AC.content.BetaView()
    @currentPosts = new AC.content.Posts()
    @currentPosts.fetchRecent(@INIT_RECENT_POSTS)

    @_eventsBind()

  _eventsBind: ->
    @currentPosts.bind 'all', @render, this

  render: ->
    @alphaView.clearPosts()
    @betaView.clearRecentPosts()

    i = 0
    @currentPosts.each (post) =>
      view = new AC.content.PostView {model: post}
      @alphaView.addPost(view) if i < @INIT_POSTS
      @betaView.addRecentPostLink(view) if i < @INIT_RECENT_POSTS
      i += 1

class AC.content.AlphaView extends Backbone.View
  el: $("#alpha")

  addPost: (post) ->
    @el.append post.renderPost()

  clearPosts: ->
    @el.html ''

class AC.content.BetaView extends Backbone.View
  el: $("#beta")
  class: 'sidebar'

  initialize: ->
    @recentPosts = $('<ul id="recent-posts" />')
    @el.append(@recentPosts)

  addRecentPostLink: (post) ->
    linkHtml = $(post.renderLink())
    @recentPosts.append linkHtml
    linkHtml.wrap('<li>')

  clearRecentPosts: ->
    @recentPosts.html ''