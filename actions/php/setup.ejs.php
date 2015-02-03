require_once('lib/KalturaClient.php');
$config = new KalturaConfiguration(<%- Lucy.variable('answers.partnerID') %>);
$config->serviceUrl = 'https://www.kaltura.com/';
$KalturaClient = new KalturaClient($config);
$KalturaSession = $KalturaClient->session->start(
    <%- Lucy.variable('answers.adminSecret') %>,
    "myUser",
    KalturaSessionType::ADMIN,
    <%- Lucy.variable('answers.partnerID') %>,
    null, null);
$KalturaClient->setKS($KalturaSession);
