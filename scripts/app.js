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
    AppView.prototype.initialize = function() {
      this.alphaView = new AC.content.AlphaView();
      return this.betaView = new AC.content.BetaView();
    };
    return AppView;
  })();
  AC.content.AlphaView = (function() {
    __extends(AlphaView, Backbone.View);
    function AlphaView() {
      AlphaView.__super__.constructor.apply(this, arguments);
    }
    AlphaView.prototype.el = $("#alpha");
    AlphaView.prototype.initialize = function() {
      this.currentPosts = new AC.content.Posts();
      this.currentPosts.fetchRecent();
      return this._eventsBind();
    };
    AlphaView.prototype._eventsBind = function() {
      return this.currentPosts.bind('all', this.render, this);
    };
    AlphaView.prototype.render = function() {
      return this.currentPosts.each(__bind(function(post) {
        var view;
        view = new AC.content.PostView({
          model: post
        });
        return this.el.append(view.render().el);
      }, this));
    };
    return AlphaView;
  })();
  AC.content.BetaView = (function() {
    __extends(BetaView, Backbone.View);
    function BetaView() {
      BetaView.__super__.constructor.apply(this, arguments);
    }
    BetaView.prototype.el = $("#beta");
    return BetaView;
  })();
}).call(this);
