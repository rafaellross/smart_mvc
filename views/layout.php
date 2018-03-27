<DOCTYPE html>
<html>
  <head>    
      <title><?= $title;?></title>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="brand.ico" />
	  <link rel="apple-touch-icon" href="brand.png">	        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/js/TimeSheet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
    
  </head>
  <body>
      
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/brand.ico" width="30" height="30" alt="Smart Plumbing Solutions"/>
            </a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=users&action=index">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=employees&action=index">Employees</a>
                    </li>

                </ul>
                <ul class="navbar-nav col-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            
                            <?= isset($_SESSION['username']) ? $_SESSION['username'] : ''?>                            
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            
                            <a class="dropdown-item" href="change_password.php">Change Password</a>         
                            
                            <a class="dropdown-item" href="views/logout.php">Logout</a>          
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <?php require_once('routes.php'); ?>

  <body>
<html>