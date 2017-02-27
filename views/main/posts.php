      <?php
       use App\Models\TwitterAPI as TwitterAPI;
      ?>
      <div class = "container">
        <div class="row valign-wrapper">
          <div class="col s6 offset-s3 valign">
            <div class="card cyan lighten-2">
              <div class="card-content white-text">
                <span class="card-title">Feed</span>
                <p><?php $tweets= new TwitterAPI; $tweets->twitterPosts();?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
