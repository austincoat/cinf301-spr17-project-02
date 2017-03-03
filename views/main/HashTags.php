<?php
 use App\Models\HashTags as HashTags;
 $tweets= new HashTags();
?>
<div class = 'container'>
  <div class='row valign-wrapper'>
    <div class='col s6 s6 offset-s3 valign'>
      <div class='card blue dark-2'>
        <div class='card-content white-text'>
          <p>Search up seperate HashTags, to see what people are talking about each topic.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<form action= "?controller=hash&action=HashTags"methods="get">
  <div class="row">
    <div class="input-field col s6 offset-s3 valign">
      <input value="POTUS" id="hashs" type="text" class="validate">
      <label class="active" for="hash">HashTags</label>
        <button class="btn waves-effect waves-light" type="submit" name="action">Search
          <i class="material-icons right">search</i>
        </button>
    </div>
  </div>
</form>

          <p><?php
            $tweets->twitterHashs();
          ?></p>
