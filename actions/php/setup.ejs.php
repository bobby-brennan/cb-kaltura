require_once('lib/KalturaClient.php');
$config = new KalturaConfiguration(<%- Lucy.answer('partnerID') %>);
$config->serviceUrl = 'https://www.kaltura.com/';
$KalturaClient = new KalturaClient($config);
$KalturaSession = $KalturaClient->session->start(
    <%- Lucy.answer('adminSecret') %>,
    "myUser",
    KalturaSessionType::ADMIN,
    <%- Lucy.answer('partnerID') %>,
    null, null);
$KalturaClient->setKS($KalturaSession);
