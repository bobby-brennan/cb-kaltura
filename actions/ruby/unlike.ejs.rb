unliked = kalturaClient[:like_service].unlike(<%- Lucy.variable('answers.videoID') %>)
<%- Lucy.returnCode('{"liked" => !unliked}') %>
