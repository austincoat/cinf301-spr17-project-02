<?php
  use App\Controllers;

  function route($controller, $action) {

    switch($controller) {
      case 'main':
        $controller = new App\Controllers\MainController();
      break;
    }
    $controller->{ $action }();
  }
  $controllers = array('main' => ['home','posts', 'error']);
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
