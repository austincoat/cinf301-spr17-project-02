<?php
 use App\Models\TwitterHome as TwitterHome;
 $tweets= new TwitterHome();
 /*
  * This class is setting up the welcome card,
  * and calling the function to pull out the data.
  *
  *  @author austincoat
  */
?>

<div class = 'container'>
  <div class='row valign-wrapper'>
    <div class='col s6 s6 offset-s3 valign'>
      <div class='card blue dark-2'>
        <div class='card-content white-text'>
          <p> Welcome Home Austin!</p>
        </div>
      </div>
    </div>
  </div>
</div>

          <p><?php
            $tweets->twitterTimeLine();
          ?></p>
