KalturaClient.like.unlike(function(result) {
  <%-  Lucy.returnCode("{liked: result}"); %>
}, <%- Lucy.variable('answers.videoID') %>);
