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
  window.AppView = (function() {
    __extends(AppView, Backbone.View);
    function AppView() {
      AppView.__super__.constructor.apply(this, arguments);
    }
    AppView.prototype.el = $("#content");
    AppView.prototype.INIT_POSTS = 20;
    AppView.prototype.INIT_RECENT_POSTS = 20;
    AppView.prototype.initialize = function() {
      this.alphaView = new AC.content.AlphaView();
      this.betaView = new AC.content.BetaView();
      this.currentPosts = new AC.content.Posts();
      this.currentPosts.fetchRecent(this.INIT_RECENT_POSTS);
      return this._eventsBind();
    };
    AppView.prototype._eventsBind = function() {
      return this.currentPosts.bind('all', this.render, this);
    };
    AppView.prototype.render = function() {
      var i;
      this.alphaView.clearPosts();
      this.betaView.clearRecentPosts();
      i = 0;
      return this.currentPosts.each(__bind(function(post) {
        var view;
        view = new AC.content.PostView({
          model: post
        });
        if (i < this.INIT_POSTS) {
          this.alphaView.addPost(view);
        }
        if (i < this.INIT_RECENT_POSTS) {
          this.betaView.addRecentPostLink(view);
        }
        return i += 1;
      }, this));
    };
    return AppView;
  })();
  AC.content.AlphaView = (function() {
    __extends(AlphaView, Backbone.View);
    function AlphaView() {
      AlphaView.__super__.constructor.apply(this, arguments);
    }
    AlphaView.prototype.el = $("#alpha");
    AlphaView.prototype.addPost = function(post) {
      return this.el.append(post.renderPost());
    };
    AlphaView.prototype.clearPosts = function() {
      return this.el.html('');
    };
    return AlphaView;
  })();
  AC.content.BetaView = (function() {
    __extends(BetaView, Backbone.View);
    function BetaView() {
      BetaView.__super__.constructor.apply(this, arguments);
    }
    BetaView.prototype.el = $("#beta");
    BetaView.prototype["class"] = 'sidebar';
    BetaView.prototype.initialize = function() {
      this.recentPosts = $('<ul id="recent-posts" />');
      return this.el.append(this.recentPosts);
    };
    BetaView.prototype.addRecentPostLink = function(post) {
      var linkHtml;
      linkHtml = $(post.renderLink());
      this.recentPosts.append(linkHtml);
      return linkHtml.wrap('<li>');
    };
    BetaView.prototype.clearRecentPosts = function() {
      return this.recentPosts.html('');
    };
    return BetaView;
  })();
}).call(this);
