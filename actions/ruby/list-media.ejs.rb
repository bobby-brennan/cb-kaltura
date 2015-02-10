filter = KalturaMediaEntryFilter.new()
filter.nameLike = <%- Lucy.variable('answers.nameLike') %>
pager = KalturaFilterPager.new()
@result = kalturaClient.media_service.list(filter, pager);
<%- Lucy.returnCode('@result') %>
