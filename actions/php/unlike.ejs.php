$likePlugin = KalturaLikeClientPlugin::get($KalturaClient);
$result = $likePlugin->like->unlike(<%- Lucy.answer('videoID') %>);
<%- Lucy.returnCode("array('liked' => !$result)") %>;
