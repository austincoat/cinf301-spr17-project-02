<?php
 use App\Models\HashTags as HashTags;
 $tweets= new HashTags();
 $_SESSION["hashman"] = $_GET["hashit"];
 /*
  * This class is setting up the notice card
  * and class to pull information.
  *
  *  @author austincoat
  */
?>
<div class = 'container'>
  <div class='row valign-wrapper'>
    <div class='col s6 s6 offset-s3 valign'>
      <div class='card blue dark-2'>
        <div class='card-content white-text'>
          <p>Search up seperate HashTags, to see what people are talking about each topic.<br></br>
            Examples #Dog, #LOL, #POTUS
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<form methods="get">
  <div class="row">
    <div class="input-field col s6 offset-s3 valign">
      <input type = "hidden" name="controller" value="hash">
      <input type = "hidden" name="action" value="HashTags">
      <input value="#POTUS" name="hashit" type="text" class="validate">
      <label class="active" for="hash">HashTags</label>
        <button class="btn waves-effect waves-light" type="submit">Search
          <i class="material-icons right">search</i>
        </button>
    </div>
  </div>
</form>

          <p><?php
            $tweets->twitterHashs();
          ?></p>
