<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/brand/logobg.png">
    <title>
        Calculatuer 28
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    body
{
    font-family: Arial,sans-serif;
}

.header
{
    font-size: 13px;
    text-align: right;
    padding-top: 22px;
    padding-right: 10px;
}

.menuItems
{
    font-size: 13px;
    padding-right: 10px;
    padding-left: 20px;
    display: inline-block;
}

.header a
{
    text-decoration: none;
    color: #000000;
}

.header a:hover
{
    text-decoration: underline;
}

.menu
{
    background-color: white;
    border:none;
    outline:none;
    box-shadow: none;
    padding-right: none;
}

.dropdown-content 
{
    width: 270px;
    padding: 28px;
    margin-right: 82px;
    border: 1px solid #ccc;
    box-shadow: 0 2px 10px rgba(0,0,0,.2);
    display: none;
    z-index: 1;
    position: absolute;
    right: 0; 
}

.menuItems:hover .dropdown-content
{
    display: block;
}

.appLogo
{
    text-align: center;
    display: inline-block;
    width: 86px;
    padding-top: 5px;
    padding-bottom: 5px;
}

.dropdown-content .appLogo:hover 
{
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}

.menuItemLogo
{
    width: 50px;
    height: 50px;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 5px;
}

.userImage
{
    border-radius: 50%;
    margin: -1px;
    overflow: hidden;
    position: relative;
    height: 32px;
    width: 32px;
    vertical-align: middle;
}
@media (max-width: 400px) {
    .container1
{
    padding-top: 140px;
    padding-bottom: 160px;
    max-width:100% !important;
    position: relative;
    
}

}


.search
{
    font-size: 13px;
    margin: auto;
    margin-top: 30px;
    padding: 14px;
    color: #222;
    border: 1px solid #dfe1e5;
    border-radius: 6px;
    outline: none;
    ::-webkit-datetime-edit-year-field:not([aria-valuenow]),
::-webkit-datetime-edit-month-field:not([aria-valuenow]),
::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
    color: transparent;
}
}


.container1 .search:hover
{
    box-shadow: 0 1px 6px 0 rgba(32,33,36,0.28);
    border-color: rgba(223,225,229,0);
}

.container1 .search:focus-within
{
    box-shadow: 0 1px 6px 0 rgba(32,33,36,0.28);
    border-color: rgba(223,225,229,0);
}

.input
{
    text-align: left;
    width:95%;
    border: none;
    outline: none;
    
}

::-webkit-calendar-picker-indicator {
    filter: invert(1);
}

.voiceSearch
{
    float: right;
    height: 16px;
    width: 16px;
    
}

.btn
{
    display: inline-block;
    padding-top: 33px;
    padding: 30px;
}

.btns
{
/*     padding: 18px; */
    margin-right: 7px;
    height: 36px;
    color: #5F6368;
    font-size: 14px;
} 

.btns:hover
{
    border: 1.5px solid lightslategray;
    color: black;
}



    </style>
     <script>
     $(document).ready(function() {
        $("#id_imgcalendar").on("click", function(e) {
       $('#datepickerfrom').datepicker('show');
   });
});
       
       
    </script>
</head>

<body class="landing-page">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
        <div class="container">
            <!--<a class="navbar-brand mr-lg-5" href="index.html">
        <img src="assets/img/brand/logonobg.png">
      </a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.html">
                                <img src="assets/img/brand/logobg.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
                        </div>
                    </div>
                </div>
                
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                            <i class="fa fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <main>
            <div style="transform-origin: center center;">
                <div class="position-relative">
                <section class="section section-lg">
                    <div class="container">
                        <div class="row row-grid align-items-center">
                            <div class="col-md-6 order-md-2">
                                <section  id="app" class="section content has-text-centered">
                                <div class="pr-md-5" style=" text-align: center; margin-top:-150px;">
                                <div class="container1" style="text-align: center;padding-right: -500%;">
        <img src="assets/img/brand/logobg.png" width="300px" height="250px">
        <br/><br/>
        <small> Use the form below to find out about your next menstruation cycle<br/> by entering the first date  date of your current menstruation period</small><br/>
        

        <!-- search box -->
        <form method="POST" action=""> 
       
        <div  class="search">
        <img  style="text-align: right; padding-top: 3px; "  class="voiceSearch" src="data:image/jpeg;base64,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">
        
         <input    type="text" onfocus="(this.type='date')" placeholder="Enter the first Date of your current menstruation date" class="input" style="text-align: left; font-size:12px; " name="SearchBox">
            
        </div>
        <!-- buttons -->
        <div class="" style="padding: 0; margin-top: 20px; margin-bottom:15px;">
            <button type="submit" style="padding: 20px;  margin-right: 15px;" class="btn mb-3 mb-sm-0 btn-icon btn-white">Calculate</button>
            <a href="https://play.google.com/store/apps/details?id=com.thealphamerc.flutter_healthcare_app"><button style="padding: 20px;   margin-left: 15px;" class="btn mb-3 mb-sm-0 btn-icon btn-white"> Download  App</button></a>
        </div>
        <br/><br/>
        </form>

        <div class="col-lg-12">
                                        <div class="card border-0 card-lift--hover shadow">
                                            <!---->
                                            <div class="card-body py-5">
        <?php

     $num1 = $_POST["SearchBox"];
     $text ="Your next menstruation period will likely begin on";
     $text2 ="Your next menstruation period will likely end on";
     $text3 ="Your next Ovulation Day will likely be on";
    //$num2 = date('Y-m-d', strtotime($num1. ' + 1 days'));;
    
     echo "<p class='subtitle'>$text: " ;  echo date('F d,Y', strtotime($num1. ' + 28 days'));
    

     echo "<p class='subtitle'>$text2: " ;
     echo date('F d,Y', strtotime($num1. ' + 33 days'));

     echo "<p class='subtitle'>$text3: " ;
     echo date('F d,Y', strtotime($num1. ' + 15 days'));

    



     
?>
                                            </div>
                                        </div>
        </div>
        
        
        </h2>
    </div>

    </div>
    <br/>
    <br/>
    <!-- google image woth search box and buttons -->
    
    <div class="pr-md-5" style="margin-top:10px;">
                                    <div class="icon icon-shape mb-5 icon-lg icon-shape-success shadow rounded-circle"><i class="ni ni-calendar-grid-58"></i></div>
                                    <h3>Ovulation Cycle Calculator</h3>
                                    <p>This right here is a simple ovulation cycle calendar that can help you to get to know when your next fertile window and ovulation day will occur</p>
                                    <ul class="list-unstyled mt-5">
                                        <li class="py-2">
                                            <div class="d-flex align-items-center"><span class="badge mr-3 badge-success badge-circle"><i class="ni ni-watch-time"></i></span>
                                                <h6 class="mb-0">Know your Next Day of Ovulation</h6>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center"><span class="badge mr-3 badge-success badge-circle"><i class="ni ni-watch-time"></i></span>
                                                <h6 class="mb-0">Know your next Fertile Window</h6>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center"><span class="badge mr-3 badge-success badge-circle"><i class="ni ni-watch-time"></i></span>
                                                <h6 class="mb-0">Predict your next menstruation period</h6>
                                            </div>
                                        </li>
                                        <!--<li class="py-2">
                                            <div class="d-flex align-items-center"><span class="badge mr-3 badge-success badge-circle"><i class="ni ni-satisfied"></i></span>
                                                <h6 class="mb-0">Super friendly support team</h6>
                                            </div>
                                        </li>-->
                                    </ul>
                                </div>

                               

                            </div>
                            
                        </div>
                    </div>
                </section>
                    <section class="section-shaped my-0">
                        <div class="shape shape-style-1 shape-default shape-skew"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                        <div class="container shape-container d-flex">
                            <div class="col px-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="display-3  text-white">Calculatuer 28
                                            <br/>
                                            <span style="font-size:medium;">Be confident, everyday all day</span></h1>
                                        
                                        <div class="btn-wrapper">
                                            <!--<a type="" class="btn mb-3 mb-sm-0 btn-icon btn-info" href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html"><span class="btn-inner--icon"><i class="fa fa-code"></i></span><span class="btn-inner--text">
        Components
    </span></a>-->
                                           <br/> <a type="" class="btn mb-3 mb-sm-0 btn-icon btn-white" href="https://play.google.com/store/apps/details?id=com.thealphamerc.flutter_healthcare_app"><span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span><!----><span class="btn-inner--text">
        Download App
    </span>
    <!---->
</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <section class="section section-lg pt-lg-0 mt--200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="row row-grid">
                                    <div class="col-lg-4">
                                        <div class="card border-0 card-lift--hover shadow">
                                            <!---->
                                            <div class="card-body py-5">
                                                <div class="icon icon-shape mb-4 icon-shape-primary rounded-circle">
                                                    <i class="ni ni-check-bold"></i></div>
                                                <h6 class="text-primary text-uppercase">Get to Know your next Ovulation Day</h6>
                                                <p class="description mt-3">With Calculateur 28, you can track and know whe your next day of ovulation will happen. This is very useful when planning to get pregnant</p>
                                                <div>
                                                    <span class="badge badge-primary badge-pill">👶</span>
                                                </div>

                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border-0 card-lift--hover shadow">
                                            <!---->
                                            <div class="card-body py-5">
                                                <div class="icon icon-shape mb-4 icon-shape-success rounded-circle"><i class="ni ni-check-bold"></i></div>
                                                <h6 class="text-success text-uppercase">Get to know your Fertile Window</h6>
                                                <p class="description mt-3">With Calculateur 28, discover your fertile period where you this time gives you the best chance of getting pregnant</p>
                                                <div><span class="badge badge-success badge-pill"> 🤰</span></div>

                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card border-0 card-lift--hover shadow">
                                            <!---->
                                            <div class="card-body py-5">
                                                <div class="icon icon-shape mb-4 icon-shape-warning rounded-circle"><i class="ni ni-check-bold"></i></div>
                                                <h6 class="text-warning text-uppercase">Get to know your next Menstruation Window</h6>
                                                <p class="description mt-3">With Calculateur 28, track your Menstruation period easily so as you can plan for it.</p>
                                                <div><span class="badge badge-warning badge-pill">🩸</span></div>

                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="section bg-secondary">
                    <div class="container">
                        <div class="row row-grid align-items-center">
                            <div class="col-md-6">
                                <img class="card-img-top" width="2500 px-3" src="assets/img/2screenshot.png" />
                                <!--<div class="card bg-default shadow border-0"><img class="card-img-top" data-src="img/theme/img-1-1200x1000.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading">
                                    <blockquote class="card-blockquote"><svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg"><polygon points="0,52 583,95 0,95" class="fill-default"></polygon><polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"></polygon></svg>
                                        <!--<h4 class="display-3 font-weight-bold text-white">Design System</h4>
                                        <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.
                                        </p>
                                
                                    </blockquote>
                                </div>-->

                            </div>
                            <div class="col-md-6">
                                <div class="pl-md-5">
                                    <div class="icon icon-shape mb-5 icon-lg icon-shape-warning shadow rounded-circle"><i class="ni ni-settings"></i></div>
                                    <h3>App features</h3>
                                    <p class="lead">Events timeline</p>
                                    <p>The events of your ovulation cycle are listed for you in a timeline view</p>
                                    <p class="lead">Calendar tracker</p>
                                    <p>The events of your ovulation cycle can be tracked on a calendar</p>
                                    <br/>
                                    <p class="lead">Mood tracker</p>
                                    <p>calculatuer 28 tells you which mood you are likely to be in </p>
                                    <!--<p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>-->
                                    <a href="#" class="font-weight-bold text-warning mt-5">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section class="section section section-shaped my-0 overflow-hidden">
                    <div class="shape shape-style-1 bg-gradient-warning shape-skew"><span></span><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="container py-0">
                        <div class="row row-grid align-items-center">
                            <div class="col-md-6 order-lg-2 ml-lg-auto">
                                <div class="position-relative pl-md-5"><img src="img/ill/ill-2.svg" class="img-center img-fluid"></div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="d-flex px-3">
                                    <div>
                                        <div class="icon icon-shape bg-gradient-white icon-lg shadow rounded-circle text-primary"><i class="ni ni-building"></i></div>
                                    </div>
                                    <div class="pl-4">
                                        <h4 class="display-3 text-white">Modern Interface</h4>
                                        <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                                    </div>
                                </div>
                                <div class="card shadow-lg--hover mt-5 shadow">
                                    
                                    <div class="card-body">
                                        <div class="d-flex px-3">
                                            <div>
                                                <div class="icon icon-shape bg-gradient-success shadow rounded-circle text-white"><i class="ni ni-satisfied"></i></div>
                                            </div>
                                            <div class="pl-4">
                                                <h5 class="title text-success">Awesome Support</h5>
                                                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p><a href="#" class="text-success">Learn more</a></div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="card shadow-lg--hover mt-5 shadow">
                                    
                                    <div class="card-body">
                                        <div class="d-flex px-3">
                                            <div>
                                                <div class="icon icon-shape bg-gradient-warning shadow rounded-circle text-white"><i class="ni ni-active-40"></i></div>
                                            </div>
                                            <div class="pl-4">
                                                <h5 class="title text-warning">Modular Components</h5>
                                                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p><a href="#" class="text-warning">Learn more</a></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section class="section section-lg">
                    <div class="container">
                        <div class="row justify-content-center text-center mb-lg">
                            <div class="col-lg-8">
                                <h2 class="display-3">The amazing Team</h2>
                                <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                                <div class="px-4"><img class="rounded-circle img-center img-fluid shadow shadow-lg--hover" data-src="img/theme/team-1-800x800.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading" style="width: 200px;">
                                    <div class="pt-4 text-center">
                                        <h5 class="title"><span class="d-block mb-1">Ryan Tompson</span><small class="h6 text-muted">Web Developer</small></h5>
                                        <div class="mt-3">
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-warning" href="#">
                                               <i class="fa fa-twitter"></i>
                                                
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-warning" href="#">
                                                <i class="fa fa-facebook"></i>
                                                
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-warning" href="#">
                                                <i class="fa fa-dribbble"></i>
                                               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                                <div class="px-4"><img class="rounded-circle img-center img-fluid shadow shadow-lg--hover" data-src="img/theme/team-2-800x800.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading" style="width: 200px;">
                                    <div class="pt-4 text-center">
                                        <h5 class="title"><span class="d-block mb-1">Romina Hadid</span><small class="h6 text-muted">Marketing Strategist</small></h5>
                                        <div class="mt-3">
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-primary" href="#">
                                               <i class="fa fa-twitter"></i>
                                               
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-primary" href="#">
                                                <i class="fa fa-facebook"></i>
                                                
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-primary" href="#">
                                               <i class="fa fa-dribbble"></i>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                                <div class="px-4"><img class="rounded-circle img-center img-fluid shadow shadow-lg--hover" data-src="img/theme/team-3-800x800.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading" style="width: 200px;">
                                    <div class="pt-4 text-center">
                                        <h5 class="title"><span class="d-block mb-1">Alexander Smith</span><small class="h6 text-muted">UI/UX Designer</small></h5>
                                        <div class="mt-3">
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-info" href="#">
                                                <i class="fa fa-twitter"></i>
                                                
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-info" href="#">
                                                <i class="fa fa-facebook"></i>
                                                
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-info" href="#">
                                               <i class="fa fa-dribbble"></i>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                                <div class="px-4"><img class="rounded-circle img-center img-fluid shadow shadow-lg--hover" data-src="img/theme/team-4-800x800.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" lazy="loading" style="width: 200px;">
                                    <div class="pt-4 text-center">
                                        <h5 class="title"><span class="d-block mb-1">John Doe</span><small class="h6 text-muted">Founder and CEO</small></h5>
                                        <div class="mt-3">
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-success" href="#">
                                               <i class="fa fa-twitter"></i>
                                               
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-success" href="#">
                                                <i class="fa fa-facebook"></i>
                                                
                                            </a>
                                            <a type="" class="btn rounded-circle btn-icon-only btn-icon btn-success" href="#">
                                                <i class="fa fa-dribbble"></i>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
                <!--<section class="section section-lg pt-0">
                    <div class="container">
                        <div class="card border-0 shadow-lg bg-gradient-warning">
                            
                            <div class="p-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <h3 class="text-white">We made website building easier for you.</h3>
                                        <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
                                    </div>
                                    <div class="col-lg-3 ml-lg-auto">
                                        <a type="" class="btn btn-block btn-white btn-lg" href="https://www.creative-tim.com/product/vue-argon-design-system">
                                            
                                            Download Vue
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>-->
                <section class="section section-shaped my-0 overflow-hidden">
                    <div class="shape shape-style-3 bg-gradient-default shape-skew"><span></span><span></span><span></span><span></span></div>
                    <div class="container pt-lg pb-300">

                        <div class="container">
                            <div class="row row-grid align-items-center mb-5">
                                <div class="col-lg-6">
                                    <h3 style="color:floralwhite;">Thank you for using Calculateur 28 </h3>
                                    <h4 style="color: floralwhite; font-size: medium;">Let's get in touch on any of these platforms.</h4>
                                </div>
                                <div class="col-lg-6 text-lg-center btn-wrapper">
                                    <!--<button style="width:10;"  target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                                <span  class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                              </button>
                                    <button target="_blank" href="#" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
                                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                              </button>
                                    <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                                <span class="btn-inner--icon"><i class="fa fa-instagram"></i></span>
                              </button>
                                    <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="keep up with us">
                                <span class="btn-inner--icon"><i class="fa fa-linkedin-in"></i></span>
                              </button>-->
                              <!-- Add font awesome icons -->
<a style="margin-right: 10px;" href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center justify-content-md-between">
                                <div class="col-md-6">
                                    <div class="copyright">
                                        &copy; 2020 <a href="" target="_blank">Calculateur 28</a>.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="nav nav-footer justify-content-end">
                                        <li class="nav-item">
                                            <a href="" class="nav-link" target="_blank">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link" target="_blank">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link" target="_blank">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link" target="_blank">License</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section class="section section-lg pt-lg-0 section-contact-us">
                    <div class="container">
                        <div class="row justify-content-center mt--300">
                            <div class="col-lg-8">
                                <div class="card shadow bg-gradient-secondary">
                                  
                                    <div class="card-body p-lg-5">
                                        <h4 class="mb-1">Want to work with us?</h4>
                                        <p class="mt-0">Your project is very important to us.</p>
                                        <div class="form-group mt-5 input-group input-group-alternative">
                                           
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-user-run"></i></span></div><input aria-describedby="addon-right addon-left" placeholder="Your name" class="form-control">
                                            
                                            
                                        </div>
                                        <div class="form-group input-group input-group-alternative">
                                            
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-email-83"></i></span></div><input aria-describedby="addon-right addon-left" placeholder="Email address" class="form-control">
                                            
                                        </div>
                                        <div class="form-group mb-4">
                                            
                                           <textarea name="name" rows="4" cols="80" placeholder="Type a message..." class="form-control form-control-alternative"></textarea>
                                            
                                        </div><button type="button" class="btn btn-block btn-default btn-lg" round="">
Send Message
</button></div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
                <!--- <section class="section section-lg">
                    <div class="container">
                        <div class="row row-grid justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h2 class="display-3">Do you love this awesome
                                    <span class="text-success">Design System for Bootstrap 4?</span></h2>
                                <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
                                <div class="btn-wrapper"><a href="https://www.creative-tim.com/product/vue-argon-design-system" class="btn btn-primary mb-3 mb-sm-0">Download Vue</a></div>
                                <div class="text-center">
                                    <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-2 col-4">
                                            <a href="https://getbootstrap.com/" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library"><img class="img-fluid" data-src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    lazy="loading"></a>
                                        </div>
                                        <div class="col-lg-2 col-4">
                                            <a href="https://www.sketchapp.com/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Sketch - Digital design toolkit"><img class="img-fluid opacity-5" data-src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    lazy="loading"></a>
                                        </div>
                                        <div class="col-lg-2 col-4">
                                            <a href="https://www.adobe.com/products/photoshop.html" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation"><img class="img-fluid  opacity-5" data-src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    lazy="loading"></a>
                                        </div>
                                        <div class="col-lg-2 col-4">
                                            <a href="https://vuejs.org/" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework"><img class="img-fluid" data-src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    lazy="loading"></a>
                                        </div>
                                        <div class="col-lg-2 col-4">
                                            <a href="https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop"><img class="img-fluid opacity-5" data-src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    lazy="loading"></a>
                                        </div>
                                        <div class="col-lg-2 col-4">
                                            <a href="https://reactjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces"><img class="img-fluid opacity-5" data-src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    lazy="loading"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
            </div>
        </main>





    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
    <script src='https://unpkg.com/vuejs-datepicker'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
    <script src="script.js"></script>

</body>

</html>