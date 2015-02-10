liked = kalturaClient[:like_service].checkLikeExists(<%- Lucy.variable('answers.videoID') %>)
<%- Lucy.returnCode('{"liked" => liked}') %>
