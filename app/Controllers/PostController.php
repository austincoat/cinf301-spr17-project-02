<?php
namespace App\Controllers;
use App\Renderer as Renderer;
/**
 * Post Controller, used to render the view and access the global information
 * given from the form in posts.php to display all of searched users posts.
 *
 *  @author austincoat
 */
class PostController
{

  public function postit()
  {
      $_SESSION["user_needed"] = $_GET["user_timeline"];
      $view = new Renderer('views/main/');
      $settings = array(
      'oauth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
      'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
      'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
      'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
      );
      $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
      $getfield = "?screen_name=" . $_SESSION["user_needed"] ."&count=10";
      $requestMethod = 'GET';
      $twitter = new \TwitterAPIExchange($settings);
      $str = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

        $json = json_decode($str, true);
        $_SESSION['posts'] = $json;
      $view->render('posts.php');
  }
  public function error()
  {
      $view = new Renderer('views/main/');
      $view->render('error.php');
  }

}
