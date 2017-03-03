<?php
 use App\Models\HashTags as HashTags;
 session_start();
 $tweets= new HashTags();
?>
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
