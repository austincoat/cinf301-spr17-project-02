<?php
require_once('vendor/autoload.php');

class twitterAPI
{

  function __construct()
  {
  $settings = array(
    'o  auth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
    'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
    'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
    'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
);

$postfields = array(
    'screen_name' => 'usernameToBlock',
    'skip_status' => '1'
);

$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();

$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=J7mbo';
$requestMethod = 'GET';

$twitter1 = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
  }
}


?>
