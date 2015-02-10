liked = kalturaClient[:like_service].like(<%- Lucy.variable('answers.videoID') %>)
<%- Lucy.returnCode('{"liked" => liked}') %>
