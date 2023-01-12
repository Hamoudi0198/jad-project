<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Covid Center - Register as Donor</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="icon" href="assets/img/Covidcenter_logo.png"></head>
<body>
  <div class="main-wrapper login-body">
    <div class="login-wrapper">
    <div class="container">
      <div class="container-signup">
        <div class="wrapper-sign-up">
        <div class="welcome-back-img">
            <h2 class="text-center" id="white-text">Welcome Back!</h2>
            <img src="assets/img/Login-amico (2).png" width="250px" height="250px">
            <div class="signin-text">
            <span class="span-sign-in">Already Registered as Donor?</span>
           <a href="signin-donor.php"><button class="donor-signin-btn" value="Sign In">Sign In</button></a>
        </div>
        </div>
     <div class="container-sign-up">
    <h2 class="card-title text-center">Register</h2>
    <?php
    if (isset($_POST["save"])) {
      $first = $_POST["first_name"];
      $lastname = $_POST["last_name"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $bloodtype = $_POST["blood-type"];
      $age = $_POST["age"];
      $errors = array();
      if (strlen($pass) < 8) {
        array_push($errors, "Password must be at least 8 charactes long");
      }
      require_once "donorDatabase.php";
      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "Email already exists!");
      }
      $msql = "SELECT * FROM user WHERE username = '$username'";
      $result1 = mysqli_query($conn, $msql);
      $rowcount = mysqli_num_rows($result1);
      if ($rowcount > 0) {
        array_push($errors, "Username already exists!");
      }
      $age = $_POST["age"];
      if ($age > 18) {
      echo "";
      } else {
        array_push($errors, "User should be atleast 18!");
      }
      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {
        $query = "INSERT INTO user (first, last, username, email, password, bloodtype, age)  VALUES ('$first', '$lastname','$username', '$email', 'md5($pass)','$bloodtype','$age')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: signin-donor.php?status=success");   
      }
    }
    ?>
      <form action="signup-donor.php" method="post">
        <div class="form-gr1">
      <div class="logo-name-signup">
              <span class="material-symbols-outlined">person</span>
              <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
      </div>        	
            <div class="logo-name-signup">
              <span class="material-symbols-outlined">person</span>
              <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
            </div>
            <div class="logo-name-signup">
                <span class="material-symbols-outlined">person</span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
              </div>    
        </div>
        <div class="logo-name-signup">
            <span class="material-symbols-outlined">mail</span>
          <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
    <div class="logo-name-signup">
            <span class="material-symbols-outlined">lock</span>
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
    <div class="login-create-btn">
            <div class="rating">
            <label for="blood-type">Blood Type:</label>
            <select id="blood-type" name="blood-type" required="required">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="0-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
        </div>
        <div class="age-sign-in">
            <span>Enter Your Age</span>
            <input type="number" min="1" max="150" name="age" placeholder="Age" required="required">
        </div>
        <div class="sign-in-btn">
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
    </div>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src= "assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
















