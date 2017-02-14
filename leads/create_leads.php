<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;
$name = $argv[1];
$attr_name = $argv[2];
$attr_email= $argv[3];

$client = new IntercomClient(getenv('AT'), null);
$client->leads->create(array(
  "name" => $name,
  'custom_attributes' => [$attr_name => $attr_email]
));
?>
