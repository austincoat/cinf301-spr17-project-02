<?php
 use App\Models\TwitterHome as TwitterHome;
 session_start();
 $tweets= new TwitterHome()
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
