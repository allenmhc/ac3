(function() {
  var _base, _ref, _ref2;
  var __hasProp = Object.prototype.hasOwnProperty, __extends = function(child, parent) {
    for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; }
    function ctor() { this.constructor = child; }
    ctor.prototype = parent.prototype;
    child.prototype = new ctor;
    child.__super__ = parent.prototype;
    return child;
  }, __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };
  if ((_ref = window.AC) == null) {
    window.AC = {};
  }
  if ((_ref2 = (_base = window.AC).content) == null) {
    _base.content = {};
  }
  AC.content.Post = (function() {
    __extends(Post, Backbone.Model);
    function Post() {
      Post.__super__.constructor.apply(this, arguments);
    }
    Post.prototype.initialize = function() {};
    return Post;
  })();
  AC.content.PostView = (function() {
    __extends(PostView, Backbone.View);
    function PostView() {
      PostView.__super__.constructor.apply(this, arguments);
    }
    PostView.prototype.events = {};
    PostView.prototype.initialize = function() {
      return this._initTemplates();
    };
    PostView.prototype._initTemplates = function() {
      var _base2, _ref3;
      return (_ref3 = (_base2 = AC.content.PostView).templates) != null ? _ref3 : _base2.templates = {
        full: _.template($('#template-post-full').html()),
        link: _.template($('#template-post-link').html())
      };
    };
    PostView.prototype.render = function() {
      return this;
    };
    PostView.prototype.renderPost = function() {
      var date, fullPost, timeElem;
      fullPost = $(this._renderTemplate('full'));
      date = Date.parse(this.model.get('date'));
      timeElem = fullPost.find('.metainfo time');
      timeElem.attr('datetime', date.toString('yyyy-MM-dd'));
      timeElem.text(date.toString('MMM d, yyyy'));
      return fullPost;
    };
    PostView.prototype.renderLink = function() {
      return this._renderTemplate('link');
    };
    PostView.prototype._renderTemplate = function(tmplName) {
      return AC.content.PostView.templates[tmplName](this.model.toJSON());
    };
    return PostView;
  })();
  AC.content.Posts = (function() {
    __extends(Posts, Backbone.Collection);
    function Posts() {
      Posts.__super__.constructor.apply(this, arguments);
    }
    Posts.prototype.model = AC.content.Post;
    Posts.prototype.initialize = function() {};
    Posts.prototype.fetchRecent = function(num) {
      return AC.api.getRecentPosts(num, __bind(function(posts) {
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
    };
    return Posts;
  })();
}).call(this);
