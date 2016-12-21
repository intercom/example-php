<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$usr_id = $argv[1];

$client = new IntercomClient(getenv('PAT'), null);
$lead= $client->leads->getLead($usr_id);
var_dump($lead->user_id, $lead->id);
?>
