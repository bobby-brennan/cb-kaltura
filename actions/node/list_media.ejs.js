var filter = new Kaltura.objects.KalturaMediaEntryFilter();
filter.nameLike = <%- Lucy.variable('answers.nameLike') %>;
var pager = new Kaltura.objects.KalturaFilterPager();
KalturaClient.media.listAction(function(results) {
  <%- Lucy.code.returnCode("results.objects") %>
}, filter, pager);
