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
<title>Welcome to Covid</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="icon" href="assets/img/Covidcenter_logo.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/Covidcenter2.png" style="max-height: 60px;width: 149px;" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/Covidcenter_logo.png" id="mini-logo" width="30" height="30">
                </a>
            </div>
    
            <a href="javascript:void(0);" id="toggle_btn">
                <span class="material-symbols-outlined" id="material-symbols-outlined-menu">menu</span></a>
                
                <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
                </a>
    
                <ul class="nav user-menu">
    
    
    
                    <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-user" id="fa-solid-fa-user"></i>
                    <span class="user-img"><p id="account-name"></p></span>
                    </a>
                    <div class="dropdown-menu">
                    <div class="user-text">
                    <h6>Seema Sisty</h6>
                    <a class="dropdown-item" href="profileSetting.html">My profile</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                    </div>
                    </li>
                    </ul>
    
    
    
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul class="sidebar-ul1">
                            <li class="menu-title">
                            </li>
                            <li>
                                <a href="index.html"><span class="material-symbols-outlined" id="sidebar-icon">home</span><span>Dashboard</span></a>
                            </li>   
                            <li>
                                <a href="chart.html"><span class="material-symbols-outlined" id="sidebar-icon">analytics</span><span>Chart</span></a>
                            </li>
                            <li>
                                <a href="rapid test.html"><span class="material-symbols-outlined" id="sidebar-icon">labs</span><span>Rapid Test</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><span class="material-symbols-outlined" id="sidebar-icon">bloodtype</span><span>Plasma Donor</span><span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                <li><a href="signup-donor.html" id="submenu-a-flex"><span class="material-symbols-outlined">note_alt</span><span id="dropmenu-span-register">Register as donor</span></a></li>
                                <li><a href="list-of-donor.php" id="submenu-a-flex"><span class="material-symbols-outlined">description</span><span id="dropmenu-span-register">List of donors</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="hospital.html"><span class="material-symbols-outlined" id="sidebar-icon">home_health</span><span>Hospital</span></a>
                            </li>
                            <li>
                                <a href="news.html"><span class="material-symbols-outlined" id="sidebar-icon">newspaper</span><span>News</span></a>
                            </li>
                            <li>
                                <a href="profileSetting.html"><span class="material-symbols-outlined" id="sidebar-icon">settings</span><span>Settings</span></a>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
<div class="page-wrapper">
<div class="container-signup">
        <div class="wrapper-sign-in">
        <div class="welcome-back-img">
            <h2 class="text-center" id="white-text">Welcome Back!</h2>
            <img src="assets/img/Login-amico (2).png" width="250px" height="250px">
            <div class="signin-text">
            <span class="span-sign-in">Don't Have an account?</span>
            <a href="signup.php"><button class="donor-signin-btn" value="Sign In">Sign up</button></a>
        </div>
        </div>
     <div class="container-sign-up">
    <h2 class="card-title text-center">Login</h2>
    <?php
        if (isset($_POST["save"])) {
           $email = $_POST["email"];
           $password = $_POST["pass"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
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