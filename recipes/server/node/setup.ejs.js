var KalturaConstants = require('./Kaltura/lib/KalturaTypes.js');
var Kaltura = require('./Kaltura/lib/KalturaClient.js');

var KalturaCreds = {
  partner_id: <%- setup.partner_id %>,
  user_id: '<%- setup.user_id %>',
  admin_secret: '<%- setup.admin_secret %>',
}

var config = new Kaltura.KalturaConfiguration(KalturaCreds.partner_id);
KalturaClient = new Kaltura.KalturaClient(config);
KalturaClient.session.start(function(session) {
  KalturaClient.setKs(session);
  Session = session;
}, KalturaCreds.admin_secret, KalturaCreds.user_id, KalturaConstants.KalturaSessionType.ADMIN,
   KalturaCreds.partner_id, KalturaCreds.session_length);