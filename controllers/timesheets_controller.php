<?php
  class TimeSheetsController {
    public function index() {
      // we store all the posts in a variable
      $timesheets = TimeSheet::all();
      require_once('views/timesheets/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $employees = Employee::find($_GET['id']);
      require_once('views/employees/show.php');
    }

    public function selection() {
      // we store all the posts in a variable      
        require_once('views/timesheets/selection.php');
    }
    
    public function add() {
        require_once('models/employee.php');
        
        $employee = Employee::find($_GET['employee']);
        $Days = TimeSheet::Days();
        $jobs = [2, 3, 4];
        $list_jobs = TimeSheet::Jobs();
        require_once('views/timesheets/add.php');
    }
    
  }
