require "ruby_client.rb"
include Kaltura
 
kalturaConfig = KalturaConfiguration.new(<%- Lucy.variable('answers.partnerID') %>)
kalturaConfig.service_url = 'http://www.kaltura.com/'
kalturaClient = KalturaClient.new(kalturaConfig)
kalturaSession = client.session_service.start(
    <%- Lucy.variable('answers.adminSecret') %>,
    userId,
    type,
    partnerId,
    expiry, privileges)
kalturaClient.ks = kalturaSession
