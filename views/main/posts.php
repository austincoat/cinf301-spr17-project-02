<?php
 use App\Models\TwitterAPI as TwitterAPI;
 session_start();
 $_SESSION['posts']="AustinCoates1";
 $tweets= new TwitterAPI()
?>
<form action= "?controller=main&action=posts"methods="get">
  <div class="row">
    <div class="input-field col s6 offset-s3 valign">
      <input value="AustinCoates1" id="user_timeline" type="text" class="validate">
      <label class="active" for="user_timeline">UserID</label>
        <button class="btn waves-effect waves-light" type="submit" name="action">Search
          <i class="material-icons right">send</i>
        </button>
    </div>
  </div>
</form>
          <p><?php
            $tweets->twitterPosts($_GET["user_timeline"]);
          ?></p>
