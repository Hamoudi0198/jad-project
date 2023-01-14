<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to Covid - Sign up</title>
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
            <h2 class="text-center" id="white-text">Welcome!</h2>
            <img src="assets/img/Sign up-rafiki.png" width="250px" height="250px">
            <div class="signin-text">
            <span class="span-sign-in">Already Have an account?</span>
           <a href="login.php"><button class="donor-signin-btn" value="Sign In">Sign In</button></a>
        </div>
        </div>
     <div class="container-sign-up">
    <h2 class="card-title text-center">Register</h2>

    <?php
        if (isset($_POST["save"])) {
           $first = $_POST["first"];
           $lastname = $_POST["last"];
           $email = $_POST["email"];
           $pass = $_POST["pass"];
           $passwordRepeat = $_POST["cpass"];
           $errors = array();
           
           if (strlen($pass)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($pass!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            $query="INSERT INTO users (first, last, email, password ) VALUES ('$first', '$lastname', '$email', 'md5($pass)')";   
            $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
            header ("Location: login.php?status=success");   
           }
        }
        ?>

<form action="signup.php" method="post" >
			<div class="logo-name-signup">
              <span class="material-symbols-outlined">person</span>
              <input type="text" class="form-control" name="first" id="sign-up-input" placeholder="First Name" required="required">
			</div>        	
            <div class="logo-name-signup">
              <span class="material-symbols-outlined">person</span>
              <input type="text" class="form-control" name="last" id="sign-up-input" placeholder="Last Name" required="required">
            </div>
        <div class="logo-name-signup">
            <span class="material-symbols-outlined">mail</span>
        	<input type="email" class="form-control" name="email" id="sign-up-input" placeholder="Email" required="required">
        </div>
		<div class="logo-name-signup">
            <span class="material-symbols-outlined">lock</span>
            <input type="password" class="form-control" name="pass" id="sign-up-input-password" placeholder="Password" required="required">
        </div>
        <div class="logo-name-signup">
            <span class="material-symbols-outlined">lock</span>
            <input type="password" class="form-control" name="cpass" id="sign-up-input-password" placeholder="Confirm Password" required="required">
        </div>
		<div class="login-create-btn">
        <div class="sign-in-btn">
            <div class="checkbox-text">
                <p class="show-pass-txt">show password</p>
            <input type="checkbox" onclick="showPassword()" class="show-pass-checkbox" value="Show password">

            </div>
            <button type="submit" name="save" class="btn-btn-sign-in">Register Now</button>
        </div>
      </div>
    </form>
    </div>
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