<?php
namespace App\Models;
class HashTags
{
  function __construct()
  {
    $_SESSION['hashit']="#POTUS";
  }
  function twitterHashs()
  {

      $json = $_SESSION['hashdata'];
      $elementCount  = count($json["statuses"]);
      $i = 0;
      while($i < $elementCount)
      {
        $IMAGEURL = $json["statuses"][$i]["user"]["profile_image_url_https"];
        echo "<div class = 'row valign-wrapper' >
        <div class='col s6 offset-s3 valign'>
            <div class='card horizontal'>
              <div class='card-image'>";
              echo " <img src='$IMAGEURL'>";
              echo "</div>
              <div class='card-stacked'>
                <div class='card-content'>";
        echo "<h5>".$json["statuses"][$i]["user"]["screen_name"]."</h5>\n\n<br></br> ".$json["statuses"][$i]["text"]."\n";
        echo "        </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>";


        $i+=1;
      }

    }
}
?>
