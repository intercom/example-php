<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$usr_id = $argv[1];
$client = new IntercomClient(getenv('PAT'), null);
$usr = $client->users->getUsers(array(
  "user_id" => $usr_id
));
var_dump($usr);
?>
