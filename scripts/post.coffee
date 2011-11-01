window.AC ?= {}
window.AC.content ?= {}

class AC.content.Post extends Backbone.Model
  initialize: ->

class AC.content.PostView extends Backbone.View
  tagName: 'article'
  className: 'post'
  events: {}

  initialize: ->
    @_initTemplates()

  _initTemplates: ->
    # Cache compiled templates on first load. Can't quite do it at first parse b/c we read it from $.get().
    AC.content.PostView.templates ?= {
      titleBar: _.template $('#template-post-title').html()
      body: _.template $('#template-post-body').html()
    }

  render: ->
    titleHtml = @_renderTemplate 'titleBar'
    bodyHtml = @_renderTemplate 'body'
    $(@el).html(titleHtml + bodyHtml)
    this

  _renderTemplate: (tmplName) ->
    AC.content.PostView.templates[tmplName] @model.toJSON()

class AC.content.Posts extends Backbone.Collection
  model: AC.content.Post

  initialize: ->

  fetchRecent: ->
    AC.api.getRecentPosts (posts) =>
      @reset (new AC.content.Post(post) for post in posts)
