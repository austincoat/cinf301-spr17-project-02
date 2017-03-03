<?php
 use App\Models\TwitterFollowers as TwitterFollowers;
 $tweets= new TwitterFollowers()
?>

          <p><?php
            $tweets->followers();
          ?></p>
