KalturaClient.like.checkLikeExists(function(result) {
  <%-  Lucy.returnCode("{liked: result}"); %>
}, <%- Lucy.answer('likeButton', 'videoID') %>;
