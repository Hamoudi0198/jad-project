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
<title>Covid Center - Dashboard</title>
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
    
                <ul class="nav user-menu">
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
                                        <li><a href="signup-donor.php" id="submenu-a-flex"><span id="dropmenu-span-register">Register</span></a></li>
                                        <li><a href="list-of-donor.php" id="submenu-a-flex"><span id="dropmenu-span-register">Donors List</span></a></li>
                                        </ul>
                                        </li>
                                    <li class="active">
                                        <a href="hospital.php"><span class="material-symbols-outlined" id="sidebar-icon">home_health</span><span>Hospitals</span></a>
                                    </li>
                                    <li>
                                        <a href="news.php"><span class="material-symbols-outlined" id="sidebar-icon">newspaper</span><span>News</span></a>
                                    </li>
                                    <!-- <li>
                                        <a href="profileSetting.php"><span class="material-symbols-outlined" id="sidebar-icon">settings</span><span>Settings</span></a>
                                    </li> -->
                                </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    </div>
    <div class="page-wrapper">

        <main>
       
            <div class="container-2"> 
                <div class="list-container">
                    <div class="left-col">
                        <h1>Recommended Hospitals  To Treat And Recover From COVID-19</h1>
                        <div class="house">
                            <div class="house-img">
                                <img src="assets/img/Ain_wazen_.jpg"> 
                            </div>  
                            <div class="house-info">
                               <p  class="title-color">Private Hospital</p>
                               <h3 class="hospital-title-flex">Ain Wzen Hospital  </h3>
                               <a href="https://www.google.com/maps/search/Ain+Wzen+Hospital/@33.8590071,35.3797205,11z/data=!3m1!4b1" id="ain-wzen-hospital"  target="_blank" ><p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Al Chouf</p></a>
                               <p class="hospital-text-align"> <span class="material-symbols-outlined">
                                call
                                </span> 05/509001 - 05/509002 - 05/509003 - 05/509004</p>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <div class="house-price"> 
                                    
                                <p>Open 24h</p>
                                <h4>From Mon To Sat</h4>
                                </div>
                            </div>
                        </div>
                        <div class="house">
                            <div class="house-img">
                                <img src="assets/img/AUB_hospital.jpg"> 
                            </div>  
                            <div class="house-info">
                               <p  class="title-color">Private Hospital</p>
                               <h3 class="hospital-title-flex1">American University Of Beirut Medial Center</h3>
                               <a href="https://www.google.com/maps?rlz=1C1BNSD_enLB1001LB1001&q=American+University+Of+Beirut+Medical+Center&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjUsNeijqz8AhXARKQEHbnzBiIQ_AUoAXoECAEQAw" target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Beirut</p></a> 
                               <p class="hospital-text-align"> <span class="material-symbols-outlined">
                                call
                                </span> 01/350000 - 01/340460</p>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <div class="house-price"> 
                                    
                                <p>Open 24h</p>
                                <h4>From Mon To Sat</h4>
                                </div>
                            </div>
                        </div>
                        <div class="house">
                            <div class="house-img">
                                <img src="assets/img/Baalbaack_hosp.png"> 
                            </div>  
                            <div class="house-info">
                               <p  class="title-color"> Public Hospital </p>
                               <h3 class="hospital-title-flex">Baalbeck Governmental Hospital</h3>
                               <a href="https://www.google.com/maps/place/%D9%85%D8%B3%D8%AA%D8%B4%D9%81%D9%89+%D8%A8%D8%B9%D9%84%D8%A8%D9%83+%D8%A7%D9%84%D8%AD%D9%83%D9%88%D9%85%D9%8A%E2%80%AD/@33.9990124,36.2115953,17z/data=!3m1!4b1!4m5!3m4!1s0x1518a3d5cd8122dd:0x17c8a4e104644752!8m2!3d33.9990124!4d36.213784" target="_blank"><p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Baalback</p></a>
                               <p class="hospital-text-align"> <span class="material-symbols-outlined">
                                call
                                </span>08/370880</p>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star-half-alt"></i>
                                <i class="fa-regular fa-star"></i>
                                <div class="house-price"> 
                                    
                                <p>Open 24h</p>
                                <h4>From Mon To Sat</h4>
                                </div>
                            </div>
                        </div>
                        <div class="house">
                            <div class="house-img">
                                <img src="assets/img/Bahman_hosp.jpg"> 
                            </div>  
                            <div class="house-info">
                               <p  class="title-color">Private Hospital</p>
                               <h3 class="hospital-title-flex">Bahman Hospital</h3>
                               <a href="https://www.google.com/maps?q=bahman+hospital+lebanon&rlz=1C1BNSD_enLB1001LB1001&uact=5&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzILCC4QgAQQxwEQrwEyAggmMgIIJjIFCAAQhgM6CggAEEcQ1gQQsAM6BwgAELADEEM6EgguEMcBEK8BEMgDELADEEMYAToFCAAQgAQ6CwguEK8BEMcBEIAEOgQIABBDSgQIQRgASgQIRhgBUKYDWLsLYOQMaAFwAXgAgAHfA4gB7QqSAQM0LTOYAQCgAQHIARTAAQHaAQYIARABGAg&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiq6fqLg6f8AhV9UqQEHV0dAh8Q_AUoAXoECAEQA" target="_blank"> <p class="hospital-text-align"> <span class="material-symbols-outlined">location_on</span>Baabda</p></a>
                               <p class="hospital-text-align"> <span class="material-symbols-outlined">
                                call
                                </span> 01/545000 - 01/544000</p>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <div class="house-price"> 
                                    
                                <p>Open 24h</p>
                                <h4>From Mon To Sat</h4>
                                </div>
                            </div>
                        </div>
                        <div class="house">
                            <div class="house-img">
                                <img src="assets/img/Bcheri_hosp_.jpg"> 
                            </div>  
                            <div class="house-info">
                               <p  class="title-color">Public Hospital</p>
                               <h3 class="hospital-title-flex">Bcharreh Governmental Hospital </h3>
                               <a href="https://www.google.com/maps?bih=730&biw=1517&rlz=1C1BNSD_enLB1001LB1001&hl=en&q=Bcharre+Governmental+Hospital&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj44ImAgaf8AhVNTaQEHdRYAiEQ_AUoAXoECAEQAw"   target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Bcharreh</p></a>
                               <p class="hospital-text-align"> <span class="material-symbols-outlined">
                                call
                                </span> 06/671357</p>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <div class="house-price"> 
                                    
                                <p>Open 24h</p>
                                <h4>From Mon To Sat</h4>
                                </div>
                            </div>
                        </div>
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Bint_jbail_hosp.png"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Public Hospital</p>
                   <h3 class="hospital-title-flex">Bint jbeil governmental hospital</h3>
                   <a href="https://www.google.com/maps/place/Bint+Jbeil+Governmental+Hospital/@33.12751,35.4334637,17z/data=!3m1!4b1!4m5!3m4!1s0x151e9daa8b224519:0x9169befe476fe2e8!8m2!3d33.12751!4d35.4356524"  target="_blank"><p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Bint Jbeil</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span> 07/452000</p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div> 
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/chu_notre_dame.jpg"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Public Hospital</p>
                   <h3 class="hospital-title-flex">CHU Notre Dame De Secours Hospital </h3>
                   <a href="https://www.google.com/maps?q=CHU+Notre+Dame+De+Secours+Hospital&rlz=1C1BNSD_enLB1001LB1001&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiggJHajqz8AhVRVqQEHadoASAQ_AUoAXoECAEQAw"  target="_blank"><p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Jbeil</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span> 09-541700   </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Dar_al_amal_hosp.png"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Private Hospital</p>
                   <h3 class="hospital-title-flex">Dar Al Amal Hospital  </h3>
                   <a href="https://www.google.com/maps/place/Dar+Al+Amal+University+Hospital/@33.9839773,36.1588969,17z/data=!3m1!4b1!4m5!3m4!1s0x1518a462286fd7d1:0x6e45682cb11bd825!8m2!3d33.9839773!4d36.1610856"  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Baalback</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span> 08/340620 - 08/340523 </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Ftouh_Keserwan_hospial.jpg"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Public Hospital</p>
                   <h3 class="hospital-title-flex">Ftouh Keserwan Govermnental Hospital</h3>
                   <a href="https://www.google.com/maps/search/Ftouh+Keserwan+Governmental+Hospital/@34.0454402,35.6313593,15z/data=!3m1!4b1?hl=en      target="_blank"><p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span> Keserwan </p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span>09/440440  </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Hermil_hospital.png"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Public Hospital</p>
                   <h3 class="hospital-title-flex">Hermel Governmental Hospital </h3>
                   <a href="https://www.google.com/maps/place/Hermel+Governmental+Hospital+%D9%85%D8%B3%D8%AA%D8%B4%D9%81%D9%89+%D8%A7%D9%84%D9%87%D8%B1%D9%85%D9%84+%D8%A7%D9%84%D8%AD%D9%83%D9%88%D9%85%D9%8A%E2%80%AD/@34.3814384,36.4222345,17z/data=!3m1!4b1!4m5!3m4!1s0x1522434595b36667:0xa757c302fc132418!8m2!3d34.3814384!4d36.4244232"  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Hermel</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span> 08/225310 </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/1652371727-38-hotel-dieu-hospital.jpg"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Private Hospital</p>
                   <h3 class="hospital-title-flex">Hotel Dieu hospital </h3>
                   <a href="https://www.google.com/maps?q=Hotel+Dieu+hospital&rlz=1C1BNSD_enLB1001LB1001&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiNppfGjqz8AhU0XaQEHfyLCicQ_AUoAXoECAEQAw"  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Beirut</p></a> 
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span> 01/615300 - 01/615400   </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p> 
                    <h4>From Mon To Fri</h4>
                    <p>Open 6AM - 7PM</p> 
                    <h4>On Sat</h4>
                    </div>
                </div>
            </div> 
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/2018-08_Makassed_Hospital_01.jpg"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color">Private Hospital</p>
                   <h3 class="hospital-title-flex">Makasid Hospital  </h3>
                   <a href="https://www.google.com/maps?q=MAKASSED+hospital+lebanon&bih=730&biw=1517&rlz=1C1BNSD_enLB1001LB1001&hl=en&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjqwaS7gqf8AhVgaqQEHWh1Bq0Q_AUoAXoECAEQAw "  target="_blank"><p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span> Beirut</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span> 01-636000  </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fa-regular fa-star"></i>
                   <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Elias_hrawi_hospital.png"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color"> Public Hospital</p>
                   <h3 class="hospital-title-flex1">President Elias Harawi Governmental Hospital </h3>
                   <a href="https://www.google.com/maps?q=President+Elias+Harawi+Governmental+Hospital&rlz=1C1BNSD_enLB1001LB1001&uact=5&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIHCCEQoAEQCjIHCCEQoAEQCjIHCCEQoAEQCkoECEEYAEoECEYYAFC_A1i_A2CPCGgBcAF4AIABmgKIAZoCkgEDMi0xmAEAoAEBoAECsAEAwAEB&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj5gqTsjqz8AhUScKQEHTItDjQQ_AUoA3oECAEQBQ"  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Beirut</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined">
                    call
                    </span>08-825600 </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                   <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                        
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>     
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Rizk_hospital.jpg"> 
                </div>  
                <div class="house-info">
                   <p class="title-color"> Private Hospital</p>
                   <h3 class="hospital-title-flex">Rizk Hospital - LAU Medical Center</h3>
                   <a href="https://www.google.com/maps/place/LAU+Medical+Center-Rizk+Hospital/@33.885264,35.5128443,17z/data=!3m1!4b1!4m5!3m4!1s0x151f170247c61139:0xd9ea41e9cfc6011e!8m2!3d33.885264!4d35.515033?hl=en "  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Beirut</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined"> call  </span> 01/200800 - 01/328800</p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>     
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/sacrecoeur_hop.jpg"> 
                </div>  
                <div class="house-info">
                   <p class="title-color"> Private Hospital</p>
                   <h3 class="hospital-title-flex">Sacre Coeur Hospital  </h3>
                   <a href="https://www.google.com/maps?q=Sacre+Coeur+Hospital+lebanon&source=lmns&bih=666&biw=1517&rlz=1C1BNSD_enLB1001LB1001&hl=en&sa=X&ved=2ahUKEwir-MDhgqf8AhWwZaQEHWj7ApYQ_AUoAXoECAEQAQ"  target="_blank"> B<p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span>Baabda</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined"> call  </span>05/456293 </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                   <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>     
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Saida_hosp.png"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color"> Public Hospital</p>
                   <h3 class="hospital-title-flex">Saida Governmental Hospital  </h3>
                   <a href="https://www.google.com/maps/place/Sidon+Governmental+Hospital/@33.545985,35.3796607,17z/data=!3m1!4b1!4m5!3m4!1s0x151ef02e5e3b4519:0x7eea25f57133aacc!8m2!3d33.545985!4d35.3818494?hl=en"  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span> Saida</p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined"> call  </span>07/721606 - 07/751329 </p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
                   <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>     
            <div class="house">
                <div class="house-img">
                    <img src="assets/img/Tripoli_hospital_2.png"> 
                </div>  
                <div class="house-info">
                   <p  class="title-color"> Public Hospital</p>
                   <h3 class="hospital-title-flex">Tripoli Governmental Hospital</h3>
                   <a href="https://www.google.com/maps/place/Tripoli+Governmental+hospital/@34.4374228,35.8580718,17z/data=!3m1!4b1!4m5!3m4!1s0x1521f425fbbbc3e9:0x4cbffb9bd0ad17c8!8m2!3d34.4374228!4d35.8602605"  target="_blank"> <p class="hospital-text-align"><span class="material-symbols-outlined">location_on</span> Tripoli </p></a>
                   <p class="hospital-text-align"> <span class="material-symbols-outlined"> call  </span>06/385300</p>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fa-regular fa-star"></i>
                   <i class="fa-regular fa-star"></i>
                    <div class="house-price"> 
                    <p>Open 24h</p>
                    <h4>From Mon To Sat</h4>
                    </div>
                </div>
            </div>       
            </div>
        </main>
    </div>
    </div>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src= "assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>