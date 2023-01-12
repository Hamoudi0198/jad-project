<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Covid</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="icon" href="assets/img/Covidcenter_logo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="main-wrapper login-body">
        <div class="login-wrapper">
          <div class="container">
            <div class="container-signup">
              <div class="wrapper-sign-in">
              <div class="welcome-back-img">
                  <h2 class="text-center" id="white-text">Welcome Back!</h2>
                  <?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where email='$email' and password='md5($pass)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["first"] = $row['first'];
        $_SESSION["last"] = $row['last']; 
        header("Location: index.html"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
                  <img src="assets/img/Login-amico (2).png" width="250px" height="250px">
                  <div class="signin-text">
                  <span class="span-sign-in">Don't Have an account?</span>
                  <a href="signup.php"><button class="donor-signin-btn" value="Sign In">Sign up</button></a>
              </div>
              </div>
           <div class="container-sign-up">
          <h2 class="card-title text-center">Login</h2>
     
            <form action="login.php" method="post" >
              <div class="logo-name-signup">
                  <span class="material-symbols-outlined">mail</span>
                <input type="email" class="form-control" name="email" id="sign-up-input" placeholder="Email" required="required">
              </div>
          <div class="logo-name-signup">
                  <span class="material-symbols-outlined">lock</span>
                  <input type="password" class="form-control" name="pass" id="sign-up-input" placeholder="Password" required="required">
              </div>
          <div class="login-create-btn">
              <div class="sign-in-btn">
                  <button type="submit" name="save" class="btn-btn-sign-in">Login</button>
              </div>
            </div>
          </form>
          </div>
          </div>
          </div>
          </div>
          </div>
</body>
<script src= "assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</html>