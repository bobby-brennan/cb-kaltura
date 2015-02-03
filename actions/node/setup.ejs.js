var KalturaConstants = require('./lib/KalturaTypes.js');
var Kaltura = require('./lib/KalturaClient.js');

var KalturaCreds = {
  partner_id: <%- Lucy.variable('answers.partnerID') %>,
  user_id: <%- Lucy.variable('answers.userID') %>,
  admin_secret: <%- Lucy.variable('answers.adminSecret') %>,
}

var config = new Kaltura.KalturaConfiguration(KalturaCreds.partner_id);
KalturaClient = new Kaltura.KalturaClient(config);
KalturaClient.session.start(function(session) {
  KalturaClient.setKs(session);
  Session = session;
}, KalturaCreds.admin_secret,
   KalturaCreds.user_id,
   KalturaConstants.KalturaSessionType.ADMIN,
   KalturaCreds.partner_id,
   KalturaCreds.session_length);
