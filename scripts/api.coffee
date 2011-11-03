class API
  constructor: (@rootUrl) ->

  get: (method, params = {}, success = null, error = null) ->
    $.get(
      "#{@rootUrl}/api/#{method}"
      params
      (data, textStatus, jqXHR) ->
        if data is not "ok" && error?
          error data, jqXHR
          return
        success(data) if success?
    )

  getRecentPosts: (num, callback) ->
    @get "get_recent_posts", {'count': num}, (data) ->
      callback data.posts

window.AC ?= {}
window.AC.api = new API(rootUrl)
