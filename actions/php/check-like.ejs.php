$likePlugin = KalturaLikeClientPlugin::get($KalturaClient);
$result = $likePlugin->like->checklikeexists(<%- Lucy.variable('answers.videoID') %>);
<%- Lucy.returnCode("array('liked' => $result)") %>;
