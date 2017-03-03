<?php
namespace App\Models;
/**
 * This class is used to parse through the JSON from the FollowersController.php
 * and puts them neatly on their own personal card.
 *
 *  @author austincoat
 */
class TwitterFollowers
{

  public function followers()
  {
      $json = $_SESSION['followers'];
      $elementCount  = count($json["users"]);
      $i = 0;
      while($i < $elementCount)
      {
        $IMAGEURL = $json["users"][$i]["profile_image_url"];
        echo "<div class = 'row valign-wrapper' >
        <div class='col s6 offset-s3 valign'>
            <div class='card horizontal'>
              <div class='card-image'>";
              echo " <img src='$IMAGEURL'>";
              echo "</div>
              <div class='card-stacked'>
                <div class='card-content'>";
        echo "<br></br><h5>".$json["users"][$i]["screen_name"]."</h5>\n\n ";
        echo "        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";
          $i+=1;
      }
  }




}
