<?php
namespace App\Controllers;
use App\Renderer as Renderer;
/**
 * MainController class that provides the main view home page
 * for the application.
 *
 * @author dplante
 *
 */
class PostController
{

  public function postit()
  {
      session_start();
      $view = new Renderer('views/main/');
      $settings = array(
      'oauth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
      'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
      'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
      'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
      );
      $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
      $getfield = "?screen_name=AustinCoates1&count=10";
      $requestMethod = 'GET';
      $twitter = new \TwitterAPIExchange($settings);
      $str = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();
        $json = json_decode($str, true);
        $_SESSION('posts') = $json;
      $view->render('posts.php');
  }
  public function error()
  {
      $view = new Renderer('views/main/');
      $view->render('error.php');
  }

}
?>
