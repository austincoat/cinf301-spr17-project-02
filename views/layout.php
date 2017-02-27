<DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="views/main/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="views/main/js/materialize.min.js"></script>

</head>
  <body>
    <nav>
      <div class="nav-wrapper cyan lighten-2">
        <a href="#!" class="brand-logo center">Twitter RM</a>
        <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="/cinf301-spr17-project-02/?controller=main&action=home">Home</a></li>
            <li><a href="/cinf301-spr17-project-02/?controller=main&action=posts">Posts</a></li>
            </ul>
            <ul class="side-nav" id="mobile">
              <li><a href="/cinf301-spr17-project-02/?controller=main&action=home">Home</a></li>
              <li><a href="/cinf301-spr17-project-02/?controller=main&action=posts">Posts</a></li>
            </ul>
        </div>
      </nav>

	<table>
	</table>
	<?php require_once('routes.php'); ?>
  <body>
<html>
