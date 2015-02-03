$likePlugin = KalturaLikeClientPlugin::get($KalturaClient);
$result = $likePlugin->like->unlike(<%- Lucy.variable('answers.videoID') %>);
<%- Lucy.returnCode("array('liked' => !$result)") %>;
