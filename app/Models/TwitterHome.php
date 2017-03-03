<?php
namespace App\Models;
class TwitterHome
{
  function twitterTimeLine()
  {
      $IMAGEURL;
      foreach ($_SESSION['home'] as $field)
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
