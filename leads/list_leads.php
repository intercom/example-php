<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

if (array_key_exists(1, $argv) == true){
    $email= $argv[1];
}

$client = new IntercomClient(getenv('AT'), null);
if (empty($email)){
    $leads= $client->leads->getLeads([]);
} else {
    $leads= $client->leads->getLeads(['email' => $email]);
}

foreach ($leads->contacts as $lead) {
    print_r($lead->id);
    echo "\n";
}
?>
