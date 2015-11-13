<?php
session_start();
require_once('twitteroauth/twitteroauth.php'); //Path to twitteroauth library
  
$twitteruser = "understandesign"; //your twitter username
$notweets = 1; //number of tweets to show
$consumerkey = "l3OW3RIixazZGKQiOuoiw";
$consumersecret = "apCC0ytFgpNshWwdiAPwkx5dg5d43TCcZ8flgQ5Le0";
$accesstoken = "226235677-jNwv1b1sczA2Yskgtb7o4DlBgOcmzLJSxIvwYUQW";
$accesstokensecret = "O8piJ1Ldk4DafguDbYkYHwvQTrBuXdX9uxKox51qQ";
  
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
   
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
  
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
  
echo json_encode($tweets);
?>