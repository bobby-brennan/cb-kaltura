$likePlugin = KalturaLikeClientPlugin::get($KalturaClient);
$result = $likePlugin->like->like(<%- Lucy.variable('answers.videoID') %>);
<%- Lucy.returnCode("array('liked' => $result)") %>;
