<?php
 use App\Models\TwitterAPI as TwitterAPI;
 $tweets= new TwitterAPI()
 /*
  * This class is setting up the instruction card,
  * and calling the function to pull out the data from TwitterAPI.php.
  *
  *  @author austincoat
  */
?>

<div class = 'container'>
  <div class='row valign-wrapper'>
    <div class='col s6 s6 offset-s3 valign'>
      <div class='card blue dark-2'>
        <div class='card-content white-text'>
          <p>Look up your tweets, and others.<br></br>
            Examples sensanders, POTUS, realDonaldTrump</p>
        </div>
      </div>
    </div>
  </div>
</div>


<form method="get">
  <div class="row">
    <div class="input-field col s6 offset-s3 valign">
      <input type = "hidden" name="controller" value="post">
      <input type = "hidden" name="action" value="postit">
      <input value="AustinCoates1" name="user_timeline" type="text" class="validate">
      <label class="active" for="user_timeline">UserID</label>
        <button class="btn waves-effect waves-light" type="submit" name="user_timeline1">Search
          <i class="material-icons right">send</i>
        </button>
    </div>
  </div>
</form>
          <p><?php
            $tweets->twitterPosts();
          ?></p>
