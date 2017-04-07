<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;
$id = $argv[1];

$client = new IntercomClient(getenv('AT'), null);
$client->leads->deleteLead($id);
?>

