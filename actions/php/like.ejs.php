$likePlugin = KalturaLikeClientPlugin::get($KalturaClient);
$result = $likePlugin->like->like(<%- Lucy.answer('videoID') %>);
<%- Lucy.returnCode("array('liked' => $result)") %>;
