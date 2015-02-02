$filter = new KalturaMediaEntryFilter();
$filter->nameLike = <%- Lucy.answer('nameLike') %>;
$result = $KalturaClient->media->listAction($filter, null)->objects;
<%- Lucy.returnCode("$result") %>;
