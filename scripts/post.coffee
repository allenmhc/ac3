window.AC ?= {}
window.AC.content ?= {}

class AC.content.Post extends Backbone.Model
  initialize: ->

class AC.content.PostView extends Backbone.View
  events: {}

  initialize: ->
    @_initTemplates()

  _initTemplates: ->
    # Cache compiled templates on first load. Can't quite do it at first parse b/c we read it from $.get().
    AC.content.PostView.templates ?= {
      full: _.template $('#template-post-full').html()
      link: _.template $('#template-post-link').html()
    }

  render: ->
    this

  renderPost: ->
    fullPost = $(@_renderTemplate 'full')
    date = Date.parse @model.get('date')
    timeElem = fullPost.find '.metainfo time'
    timeElem.attr 'datetime', date.toString('yyyy-MM-dd')
    timeElem.text date.toString('MMM d, yyyy')
    fullPost

  renderLink: ->
    @_renderTemplate 'link'

  _renderTemplate: (tmplName) ->
    AC.content.PostView.templates[tmplName] @model.toJSON()

class AC.content.Posts extends Backbone.Collection
  model: AC.content.Post

  initialize: ->

  fetchRecent: (num) ->
    AC.api.getRecentPosts num, (posts) =>
      @reset (new AC.content.Post(post) for post in posts)
