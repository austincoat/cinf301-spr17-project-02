<?php
namespace App\Models;
/**
 * This class is used to parse through the JSON from the MainController.php
 * and puts them neatly on their own personal card.
 *
 *  @author austincoat
 */
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
