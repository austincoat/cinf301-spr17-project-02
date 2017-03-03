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
    }
    $controller->{ $action }();
  }
  $controllers = array('main' => ['home', 'followers', 'error'],
                       'post' => ['postit', 'error'],
                       'hash' => ['HashTags', 'error']);
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
