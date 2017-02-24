<?php
require_once __DIR__ . ('/../../vendor/autoload.php');
require_once __DIR__ . ('/../../vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');



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

$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=J7mbo';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();




?>
