<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$tag = $argv[1];
$id = $argv[2];
$user_id = $argv[3];
$email = $argv[4];

$client = new IntercomClient(getenv('AT'), null);
$client->tags->tag([
  "name" => $tag,
  "users" => [
      ["id" => $id,
      "user_id" => $user_id,
      "email" => $email],
    ]]
);
?>
