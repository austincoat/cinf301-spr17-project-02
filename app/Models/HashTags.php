<?php
namespace App\Models;
class HashTags
{
  public $hash;
  function __construct()
  {
    $this->hash="#POTUS";

  }
  function twitterHashs()
  {
    $settings = array(
    'oauth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
    'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
    'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
    'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
    );
    $url = 'https://api.twitter.com/1.1/search/tweets.json';
    $getfield = "?q=$this->hash&count=1&result_type=recent";
    $requestMethod = 'GET';
    $twitter = new \TwitterAPIExchange($settings);
    $str = $twitter->setGetfield($getfield)
      ->buildOauth($url, $requestMethod)
      ->performRequest();
      $json = json_decode($str, true);
      var_dump($json);
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
        echo "<br></br><h5>".$field["hashtags"]["text"]."</h5>\n\n ".$field["text"]."\n";
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
