<?php
 use App\Models\TwitterAPI as TwitterAPI;
 session_start();
 $tweets= new TwitterAPI()
?>
<form method="get">
  <div class="row">
    <div class="input-field col s6 offset-s3 valign">
      <input value="AustinCoates1" name="user_timeline" type="text" class="validate">
      <label class="active" for="user_timeline">UserID</label>
        <button class="btn waves-effect waves-light" type="submit" name="action" value = "">Search
          <i class="material-icons right">send</i>
        </button>
    </div>
  </div>
</form>
          <p><?php
            $tweets->twitterPosts();
          ?></p>
