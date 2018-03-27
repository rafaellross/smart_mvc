
<?php

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
        break;
      case 'users':
        // we need the model to query the database later in the controller
        require_once('models/user.php');
        $controller = new UsersController();
        break;
      case 'employees':
        // we need the model to query the database later in the controller
        require_once('models/employee.php');
        $controller = new EmployeesController();
        break;
      case 'auth':
        // we need the model to query the database later in the controller
        require_once('models/user.php');
        $controller = new AuthController();
        break;
      case 'timesheets':
        // we need the model to query the database later in the controller
        require_once('models/timesheet.php');
        $controller = new TimeSheetsController();
        break;
    
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show'],
                       'users' => ['index', 'show'],
                       'employees' => ['index', 'show', 'allJson'],
                       'timesheets' => ['index', 'show', 'selection', 'add'],      
                       'auth' => ['index', 'login', 'logout']            
    );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {       
        if((!isset($_SESSION['username']) || empty($_SESSION['username'])) && $controller !== 'auth'){
          call('auth', 'index');            
          exit;
        } else {
            call($controller, $action);            
        }              
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>