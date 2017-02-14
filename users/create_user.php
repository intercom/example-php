<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;
$longopts  = array(
    "uid::",     // Required value
    "email::",    // Optional value
    "uname::",
    "cid::",
    "cname::",
);
$options = getopt("", $longopts);
# Check if either email or user_id has been provided
if (!array_key_exists('uid', $options) && !array_key_exists('cname', $options)){
    #Then neither the user_id or email has been provided so exit
    echo "You need to provide either a user_id or an email \n";
    return;
}
# Initialize the Intercom client
$intercom = new IntercomClient(getenv('AT'), null);

# Setup the create structure
$create_data=(["last_request_at" => time()]);

if (array_key_exists('cid', $options) && array_key_exists('cname', $options)){
    $companies = array("company_id" => $options['cid'],"name" => $options['cname']);
    $create_data["companies"] = array($companies);
}
if (array_key_exists('uid', $options)){
    $create_data["user_id"] = $options['uid'];
}
 
if (array_key_exists('email', $options)){
    $create_data["email"] = $options['email'];
}
if (array_key_exists('uname', $options)){
    $create_data["name"] = $options['uname'];
}
if (array_key_exists('last_request_at', $options)){
    $create_data["name"] = $options['last_request_at'];
}
$intercom->users->create($create_data);
?>
