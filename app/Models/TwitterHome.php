<?php
namespace App\Models;
class TwitterHome
{
  function twitterTimeLine()
  {
    $settings = array(
    'oauth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
    'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
    'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
    'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
    );
    $url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';
    $getfield = "?screen_name=AustinCoates1&count=20";
    $requestMethod = 'GET';
    $twitter = new \TwitterAPIExchange($settings);
    $str = $twitter->setGetfield($getfield)
      ->buildOauth($url, $requestMethod)
      ->performRequest();
      $json = json_decode($str, true);
      $IMAGEURL;
      foreach ($json as $field)
      {
        $IMAGEURL = $field["user"]["profile_image_url_https"];
        echo "<div class = 'row valign-wrapper' >
        <div class='col s6 offset-s3 valign'>
            <div class='card horizontal'>
              <div class='card-image'>";
              echo " <img src='$IMAGEURL'>";
              echo "</div>
              <div class='card-stacked'>
                <div class='card-content'>";
        echo "<h5>".$field["user"]["name"]."</h5>\n\n".$field["text"]."\n";
        echo "        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";
      }
    }
}
?>
