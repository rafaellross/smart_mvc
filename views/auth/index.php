<style>
    @media only screen and (max-width: 568px) {
        #login {
            margin-top: 115px;
        }
    }    
</style>
<div class="text-center" id="login">
<link href="assets/css/signin.css" rel="stylesheet"/>
<form class="form-signin" action="?controller=auth&action=login" method="post">
      <img class="" src="assets/img/logo.jpg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <h1 class="h3 mb-3 font-weight-normal">Please fill in your credentials to login.</h1>
      
      <label for="inputEmail" class="sr-only">User Name</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </div>