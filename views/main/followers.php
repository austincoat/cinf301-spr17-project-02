<?php
 use App\Models\TwitterFollowers as TwitterFollowers;
 $tweets= new TwitterFollowers();
 /*
  * This class is setting up the intro card
  * and pulling infor from TwitterFollowers.
  *  @author austincoat
  */
?>

<div class = 'container'>
  <div class='row valign-wrapper'>
    <div class='col s6 s6 offset-s3 valign'>
      <div class='card blue dark-2'>
        <div class='card-content white-text'>
          <p>Look at your personal followers</p>
        </div>
      </div>
    </div>
  </div>
</div>

          <p><?php
            $tweets->followers();
          ?></p>
