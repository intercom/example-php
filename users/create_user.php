<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;
$longopts  = array(
    "uid:",     // Required value
    "email::",    // Optional value
    "uname::",
    "cid::",
    "cname::",
);
$options = getopt("", $longopts);
$intercom = new IntercomClient(getenv('PAT'), null);
if (array_key_exists('cid', $options) && array_key_exists('cname', $options)){
    $companies = array("company_id" => $options['cid'],"name" => $options['cname']);
} 
$intercom->users->create([
  "user_id" => $options['uid'],
  "email" => $options['email'],
  "name" => $options['uname'],
  "last_request_at" => time(),
  "companies" => array($companies)
]);
?>
