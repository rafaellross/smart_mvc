<?php
   session_start();
  require_once('connection.php');
  require_once('global.php');  
    // Initialize the session
  $title = "Smart Plumbing - Administration";
                  
    // If session variable is not set it will redirect to login page
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
    } else {
        $controller = 'pages';
        $action     = 'home';
    }

    if (!isset($_SESSION['username'])) {
        header("location: views/login.php");
    } else if (isset($_GET['output']) && $_GET['output'] == 'json'){
        require_once('routes.php');
    } else {
        require_once('views/layout.php');
    }
  
