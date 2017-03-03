<?php
  use App\Controllers;

  function route($controller, $action) {

    switch($controller) {
      case 'main':
        $controller = new App\Controllers\MainController();
      break;
      case 'post':
        $controller = new App\Controllers\PostController();
      break;
      case 'hash':
        $controller = new App\Controllers\HashController();
      break;
      case 'follow':
        $controller = new App\Controllers\FollowersController();
      break;
    }
    $controller->{ $action }();
  }
  $controllers = array('main' => ['home', 'error'],
                       'post' => ['postit', 'error'],
                       'hash' => ['HashTags', 'error'],
                       'follow' => ['followers', 'error']);
  if (array_key_exists($controller, $controllers))
  {
    if (in_array($action, $controllers[$controller]))
    {
      route($controller, $action);
    }
    else
    {
      route('main', 'error');
    }
  }
  else
  {
    route('main' ,'error');
  }
?>
