<?php
  class AuthController {
    public function index() {
      // we store all the posts in a variable      
      require_once('views/auth/index.php');
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
    
    public function login(){
      $user = User::findByUsername($_POST['username']);        

      //check if user exists
      if($user){      
          //check if password matches         
        if($user->checkPassword($_POST['password'])){
                      
            $_SESSION['username'] = $user->username;      
             $_SESSION['administrator'] = $user->administrator;                           
             require_once('views/pages/home.php');            
        } else {
            $password_err = "Password doesn't match";
        }
      } else {
          $user_err = "User doesn't exists";
      }      
    }
    
    static public function logout(){

        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session.
        session_destroy();

        // Redirect to login page
        header("location: views/login.php");
        exit;
        
    }
  }
