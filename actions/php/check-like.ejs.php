$likePlugin = KalturaLikeClientPlugin::get($KalturaClient);
$result = $likePlugin->like->checklikeexists(<%- Lucy.answer('videoID') %>);
<%- Lucy.returnCode("array('liked' => $result)") %>;
