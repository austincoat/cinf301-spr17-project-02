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
class HashController
{
public function HashTags()
{

    $view = new Renderer('views/main/');
    $settings = array(
    'oauth_access_token' => "311741741-cYBfxFIooBZaf07vSkeqACfEFW8IMybVq585j202",
    'oauth_access_token_secret' => "lfHFl4pyh9zASrtWABe3JPti3z6ttdZMzUunOS3b8SruE",
    'consumer_key' => "oPQ1szUuO4Uc7Hdta69BMqMLn",
    'consumer_secret' =>"eiGuqGkOZ3QqQHybGEjH8YbBFIRV8oroUaNWBV50FzvZrAksSF"
    );
    $url = 'https://api.twitter.com/1.1/search/tweets.json';
    $getfield = "?q=#POTUS&count=10&result_type=recent";
    $requestMethod = 'GET';
    $twitter = new \TwitterAPIExchange($settings);
    $str = $twitter->setGetfield($getfield)
      ->buildOauth($url, $requestMethod)
      ->performRequest();
      $json = json_decode($str, true);
      $_SESSION['hashdata'] = $json;
    $view->render('HashTags.php');
}

public function error()
{
    $view = new Renderer('views/main/');
    $view->render('error.php');
}
}
?>
