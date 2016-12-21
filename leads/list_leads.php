<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$client = new IntercomClient(getenv('PAT'), null);
$leads= $client->leads->getLeads([]);
foreach ($leads->contacts as $lead) {
    print_r($lead->id);
    echo "\n";
}
?>
