(function() {
  var API, _ref;
  API = (function() {
    function API(rootUrl) {
      this.rootUrl = rootUrl;
    }
    API.prototype.get = function(method, params, success, error) {
      if (params == null) {
        params = {};
      }
      if (success == null) {
        success = null;
      }
      if (error == null) {
        error = null;
      }
      return $.get("" + this.rootUrl + "/api/" + method, params, function(data, textStatus, jqXHR) {
        if (data === !"ok" && (error != null)) {
          error(data, jqXHR);
          return;
        }
        if (success != null) {
          return success(data);
        }
      });
    };
    API.prototype.getRecentPosts = function(num, callback) {
      return this.get("get_recent_posts_full", {
        'count': num
      }, function(data) {
        return callback(data.posts);
      });
    };
    return API;
  })();
  if ((_ref = window.AC) == null) {
    window.AC = {};
  }
  window.AC.api = new API(rootUrl);
}).call(this);
