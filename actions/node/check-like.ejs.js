KalturaClient.like.checkLikeExists(function(result) {
  <%-  Lucy.returnCode("{liked: result}"); %>
}, <%- Lucy.variable('answers.videoID') %>);
