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
class MainController
{
    public function home()
    {
        $view = new Renderer('views/main/');
        $view->render('home.php');
    }
    public function posts()
    {
        $view = new Renderer('views/main/');
        $view->render('posts.php');
    }
    public function HashTags()
    {
        $view = new Renderer('views/main/');
        $view->render('HashTags.php');
    }
    public function error()
    {
        $view = new Renderer('views/main/');
        $view->render('error.php');
    }
}
