<?php
namespace App\Models;
class TwitterAPI
{

  public function twitterPosts()
  {


      foreach ($_SESSION['posts'] as $field)
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
        echo "<br></br><h5>".$field["user"]["name"]."</h5>\n\n ".$field["text"]."\n";
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
