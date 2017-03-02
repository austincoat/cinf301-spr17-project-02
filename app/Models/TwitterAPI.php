<?php
namespace App\Models;
class TwitterAPI
{
  function twitterPosts($user_name)
  {
    $settings = array(
    'oauth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
    'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
    'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
    'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
    );
    $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    $getfield = "?screen_name=$user_name&count=10";
    $requestMethod = 'GET';
    $twitter = new \TwitterAPIExchange($settings);
    $str = $twitter->setGetfield($getfield)
      ->buildOauth($url, $requestMethod)
      ->performRequest();
      $json = json_decode($str, true);
      foreach ($json as $field)
      {
        echo "<div class = 'container'>
          <div class='row valign-wrapper'>
            <div class='col s6 offset-s3 valign'>
              <div class='card cyan lighten-2'>
                <div class='card-content white-text'>";
        echo "<br></br><h5>".$field["user"]["name"]."</h5>\n\n ".$field["text"]."\n";
        echo "</div>
        </div>
      </div>
    </div>
  </div>";
      }
    }
}
?>
