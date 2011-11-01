window.AC ?= {}
window.AC.content ?= {}

class window.AppView extends Backbone.View
  el: $("#content")

  initialize: ->
    @alphaView = new AC.content.AlphaView()
    @betaView = new AC.content.BetaView()

class AC.content.AlphaView extends Backbone.View
  el: $("#alpha")

  initialize: ->
    @currentPosts = new AC.content.Posts()
    @currentPosts.fetchRecent()

    @_eventsBind()

  _eventsBind: ->
    @currentPosts.bind 'all', @render, this

  render: ->
    @currentPosts.each (post) =>
      view = new AC.content.PostView {model: post}
      @el.append view.render().el

class AC.content.BetaView extends Backbone.View
  el: $("#beta")