$filter = new KalturaMediaEntryFilter();
$filter->nameLike = <%- Lucy.variable('answers.nameLike') %>;
$result = $KalturaClient->media->listAction($filter, null)->objects;
<%- Lucy.returnCode("$result") %>;
