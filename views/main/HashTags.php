<?php
 use App\Models\HashTags as HashTags;
 session_start();
 $_SESSION['hashs'];
 $tweets= new HashTags();
?>

          <p><?php
            $tweets->twitterHashs();
          ?></p>
