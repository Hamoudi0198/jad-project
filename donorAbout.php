<?php
session_start();
include 'database.php';
$id= $_SESSION["id"];
$sql=mysqli_query($conn,"SELECT * FROM users where id='$id' ");
$row  = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Covid Center - About</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="icon" href="assets/img/Covidcenter_logo.png">
</head>
<body>
<div class="main-wrapper">
<div class="header">
        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="assets/img/Covidcenter2.png" style="max-height: 60px;width: 149px;" alt="Logo">
            </a>
            <a href="index.php" class="logo logo-small">
                <img src="assets/img/Covidcenter_logo.png" id="mini-logo" width="30" height="30">
            </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
            <span class="material-symbols-outlined" id="material-symbols-outlined-menu">menu</span></a>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
            </a>
            <ul class="nav user-menu" id="nav user-menu">
                <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa-solid fa-user" id="fa-solid-fa-user"></i>
                <span class="user-img"><p id="account-name"><?php echo $_SESSION["first"] ?> <?php echo $_SESSION["last"] ?></p></span>
                </a>
                <div class="dropdown-menu">
                <div class="user-text">
                <h6 class="text-align"><?php echo $_SESSION["first"] ?> <?php echo $_SESSION["last"] ?></h6>
                <a class="dropdown-item" href="login.php">Logout</a>
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
                            <a href="index.php"><span class="material-symbols-outlined" id="sidebar-icon">home</span><span>Dashboard</span></a>
                        </li>   
                        <li>
                            <a href="chart.php"><span class="material-symbols-outlined" id="sidebar-icon">analytics</span><span>Charts</span></a>
                        </li>
                        <li>
                            <a href="rapid test.php"><span class="material-symbols-outlined" id="sidebar-icon">labs</span><span>Rapid Test</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="material-symbols-outlined" id="sidebar-icon">bloodtype</span><span>Plasma Donor</span><span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                            <li><a href="donorAbout.php" id="submenu-a-flex"><span id="dropmenu-span-register">About</span></a></li>
                            <li><a href="signup-donor.php" id="submenu-a-flex"><span id="dropmenu-span-register">Register</span></a></li>
                            <li><a href="list-of-donor.php" id="submenu-a-flex"><span id="dropmenu-span-register">Donors List</span></a></li>
                            </ul>
                            </li>
                        <li>
                            <a href="hospital.php"><span class="material-symbols-outlined" id="sidebar-icon">home_health</span><span>Hospitals</span></a>
                        </li>
                        <li>
                            <a href="news.php"><span class="material-symbols-outlined" id="sidebar-icon">newspaper</span><span>News</span></a>
                        </li>

                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<div class="page-wrapper">
<div class="container-donor-about">
            <div class="section-header-donor-about"> 
                <h3 class="title-donor-about" data-title="What Is">Convalescent <br>Plasma Donation</h3>
                <p class="text-donor-about m-t-15">Convalescent plasma is the plasma that comes from people who have recovered from an infection,  Plasma from donors who have recovered from COVID-19 regardless of the vaccination status may contain antibodies to SARS-CoV-2 that could help suppress viral replication. These antibodies are proteins that your immune system makes after you have had an infection that can neutralize or kill the virus and help to recover. </p>
                <a href="https://www.mayoclinic.org/tests-procedures/convalescent-plasma-therapy/about/pac-20486440" target="_blank" class="btn-about small"> Read More</a>
            </div>
            <div class="section-header-donor-about"> 
                <h3 class="title txt-bold" id="title-about" data-title="Who Can Donate"> Convalescent Plasma </h3>
                <p class="text-donor-about">Get to know more about who can donate Convalescent plasma</p>
            </div>
            <div class="cards-donor-about">
                <div class="card-wrap-donor-about"> 
                <div class="card-donor-about">
                    <div class="card-content-donor-about">
                        <img src="assets/img/check-up.png" class="icon">
                        <h3 class="title-sm"> Blood Donor Criteria </h3>
                        <p class="text-donor-about">
                           Donor age between 18 to 60 years, shall not weigh less than 45 kilograms, temperature and pulse shall be normal and hemoglobin shall not be less than 12.5 g/dl 
                        </p>
                    </div>
                </div>
                </div>
                <div class="card-wrap-donor-about"> 
                <div class="card-donor-about">
                    <div class="card-content">
                        <img src="assets/img/19_jan_2.png" class="icon">
                        <h3 class="title-sm">Tested Positive For COVID-19</h3>
                        <p class="text-donor-about">
                          You need to have had a positive test for COVID-19 in order to be able to donate plasma you should have already been infected by the virus so that you can help to recover     
                        </p>
                    </div>
                </div>
            </div>
                    <div class="card-wrap-donor-about"> 
                        <div class="card-donor-about">
                            <div class="card-content-donor-about">
                                <img src="assets/img/blood-drop_1.png" class="icon">
                                <h3 class="title-sm"> Recovered From COVID-19</h3>
                                <p class="text-donor-about">
                                    You need to have recovered from the virus with no symptoms for atleast 28 days, if you have recovered for atleast 14 days  then you need to have a repeat test that shows that you are now negative
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container-donor-about">
            <div class="section-header-donor-about"> 
                <h3 class="title-donor-about" data-title="Where  You Donate">Plasma</h3>
                <h1><a href="https://www.dsclebanon.org/en/" id="a-about-black" target="_blank" >DSC Donner Sang Compter</h1></a>
                <p class="text-donor-about">DSC is a lebanese independent non profit and non governmental blood donor organization registered on the 31st of may 2010 </p>
                    <div class="list-container-donor-about">           
                            <div class="house">
                                <div class="house-img">
                                    <img src="assets/img/DSC.png"> 
                                </div>  
                                <div class="text-donor-about">
                                <div class="house-info-donor-about"></div>   
                                <p class="donor-about-txt"><span class="material-symbols-outlined">location_on</span><a href="https://www.google.com/maps/search/Ain+Wzen+Hospital/@33.8590071,35.3797205,11z/data=!3m1!4b1"  target="_blank" id="a-about"> Badaro  </a> </p>
                                   <p class="donor-about-txt"><span class="material-symbols-outlined">call</span> 01/390320</p>
                                    <p>Open 8 AM-10 PM</p>
                                    <h4>From Mon To Sun</h4>
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