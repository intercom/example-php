<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$usr_id = $argv[1];
$intercom= new IntercomClient(getenv('PAT'), null);
$usr = $intercom->users->getUsers(array(
  "user_id" => $usr_id
));
var_dump($usr);
?>
