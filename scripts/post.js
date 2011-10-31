(function() {
  var _base, _ref, _ref2;
  var __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };
  if ((_ref = window.AC) == null) {
    window.AC = {};
  }
  if ((_ref2 = (_base = window.AC).content) == null) {
    _base.content = {};
  }
  AC.content.Post = Backbone.Model.extend({
    initialize: function() {}
  });
  AC.content.Posts = Backbone.Collection.extend({
    model: AC.content.Post,
    initialize: function() {},
    fetchRecent: function() {
      return AC.api.getRecentPosts(__bind(function(posts) {
        var post;
        return this.reset((function() {
          var _i, _len, _results;
          _results = [];
          for (_i = 0, _len = posts.length; _i < _len; _i++) {
            post = posts[_i];
            _results.push(new AC.content.Post(post));
          }
          return _results;
        })());
      }, this));
    }
  });
  AC.content.PostView = Backbone.View.extend({
    tagName: 'article',
    className: 'post',
    events: {},
    render: function() {}
  });
}).call(this);
