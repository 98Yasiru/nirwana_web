<?php
session_start();
if (!isset($_SESSION['login'])){
    header("location: index.php");
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ayurweda</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4-Calendar-No-Custom-Code.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4-1.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-1.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-10.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-2.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-3.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-4.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-5.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-6.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-7.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-8.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-9.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/dh-row-text-image-right.css">
    <link rel="stylesheet" href="assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons-1.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="assets/css/HMY-Responsive-nav-menu-V1-1.css">
    <link rel="stylesheet" href="assets/css/HMY-Responsive-nav-menu-V1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---2-Register.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-1.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Powerful-Calendar.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/Social-Icon--hover-effect.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Ultimate-Event-Calendar.css">
</head>

<body style="background: #7CBCBC;">
    <nav class="navbar navbar-light navbar-expand-md" style="background: #81b1b1;height: 13%;">
        <div class="container-fluid">
            <div><a class="navbar-brand d-none" href="#"> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div><img src="assets/img/logo1.png" width="80">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav fs-2 ms-auto main-nav" style="text-align: right; float: right;">
                    <li class="nav-item"><a class="nav-link fs-4" id="home" href="dashboard.php"><span style="text-decoration: underline;">Home </span></a></li>
                    <li class="nav-item"><a class="nav-link fs-4" href="medicine.php">Medicine</a></li>
                    <li class="nav-item"><a class="nav-link fs-4" href="doctors.php">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link fs-4" href="AboutUS.php">About Us</a></li>
                    <li class="nav-item"> <a class="nav-link fs-4" href="#" style="float: left; color: #2b542c"><?php

                            echo $_SESSION['uname'];?></a> </li>
                </ul>
            </div>
        </div>
    </nav><a href="medicine.php"><i class="icon ion-android-arrow-back fs-2 d-none d-print-inline d-md-inline d-lg-inline d-xl-inline d-xxl-inline"></i></a>
    <section style="height: 100%;margin-top: -10%;">
        <div class="container" style="height: 100%;margin-top: 8%;padding-bottom: 8%;color: rgb(10,10,10);max-width: 100%;width: 100%;">
            <div class="photo-card" style="height: 100%;background: rgba(45,54,56,0);max-width: 100%;padding-right: 3%;">
                <div class="photo-background" style="background: url(&quot;assets/img/ayurveda-medicine-therapy-panchakarma-health-health-9342e682d4a669a94204e49e76a8a20d.png&quot;) center / contain no-repeat, rgba(255,255,255,0);margin-right: 5%;"></div>
                <div class="photo-details" style="background: linear-gradient(-8deg, rgba(255,255,255,0.58) 0%, rgba(0,0,0,0) 100%), url(&quot;assets/img/logo.png&quot;) center / contain no-repeat, rgba(255,255,255,0.19);border-style: solid;border-color: rgb(255,255,255);border-radius: 40px;margin-left: 5%;color: rgb(255,253,253);">
                    <h1 style="color: rgb(0,0,0);"><strong><span style="text-decoration: underline;">Diabetes.&nbsp;&nbsp;දියවැඩියාව.</span></strong></h1>
                    <p class="fs-6" style="color: rgb(0,0,0);background: rgba(255,255,255,0);">කහ ඔබේ ආහාර වලට එකතු කර ගන්න,&nbsp;<br>නැතහොත් ඔබේ උණු කිරි වලට කහ කුඩු&nbsp;<br>ස්වල්පයක් එක් කර පානය කරන්න.<br><br>කෝමාරිකා ජෙල් තේ හැදි 1, තේ කොළ තේ&nbsp;හැදි 1/2, සහ කහ තේ හැදි ½ හ් ගෙන මිශ්‍ර&nbsp;කර දිනකට දෙවරක් ගන්න (දිවා ආහාරයට&nbsp;සහ රාත්‍රී ආහාරයට පෙර)<br><br>කරවිල යුෂ දියවැඩියාව සඳහා හොඳම පිළියමක් ලෙස සැලකේ.<br><br>දිනපතා උදෑසන නෙල්ලි යුෂ මේස හැදි 2<br>කට කහ කුඩු ස්වල්පයක් එක් කර පානය&nbsp;<br>කරන්න.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-1.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-10.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-11.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-12.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-13.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-14.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-2.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-3.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-4.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-5.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-6.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-7.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-8.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-9.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/HMY-Responsive-nav-menu-V1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="assets/js/Navbar---Apple.js"></script>
    <script src="assets/js/Powerful-Calendar.js"></script>
    <script src="assets/js/Ultimate-Event-Calendar.js"></script>
</body>

</html>