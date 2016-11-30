<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$id = $argv[1];
$client = new IntercomClient(getenv('PAT'), null);
$usr = $client->users->getUser($id);
var_dump($usr);
?>
