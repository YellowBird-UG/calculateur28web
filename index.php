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

.container
{
    padding-top: 140px;
    padding-bottom: 160px;
}

.search
{
    font-size: 13px;
    margin: auto;
    margin-top: 30px;
    padding: 14px;
    width: 600px;
    color: #222;
    border: 1px solid #dfe1e5;
    border-radius: 24px;
    outline: none;
}

.container .search:hover
{
    box-shadow: 0 1px 6px 0 rgba(32,33,36,0.28);
    border-color: rgba(223,225,229,0);
}

.container .search:focus-within
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

.voiceSearch
{
    float: right;
    height: 24px;
    width: 24px;
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
                <!--<ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">Components</span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
              <div class="dropdown-menu-inner">
                <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="ni ni-spaceship"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Getting started</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn how to use compiling Scss, change brand colors and more.</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-palette"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Foundation</h6>
                    <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for .</p>
                  </div>
                </a>
                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                    <i class="ni ni-ui-04"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-warning mb-md-1">Components</h5>
                    <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Examples</span>
            </a>
            <div class="dropdown-menu">
              <a href="landing.html" class="dropdown-item">Landing</a>
              <a href="examples/profile.html" class="dropdown-item">Profile</a>
              <a href="examples/login.html" class="dropdown-item">Login</a>
              <a href="examples/register.html" class="dropdown-item">Register</a>
            </div>
          </li>
        </ul>-->
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
                    <!--<li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial/argon-design-system" target="_blank" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>-->
                    <!--<li class="nav-item">
            <a class="btn btn-neutral" href="https://www.creative-tim.com/builder/argon" target="_blank">
              <span class="nav-link-inner--text">Online Builder</span>
            </a>
          </li>-->
                    <!--<li class="nav-item d-none d-lg-block">
            <a href="https://www.creative-tim.com/product/argon-design-system-pro?ref=ads-upgrade-pro" target="_blank" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-play"></i>
              </span>
              <span class="nav-link-inner--text"> Download App</span>
            </a>
          </li>-->
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
                                <section id="app" class="section content has-text-centered">

                                     
    <!-- google image woth search box and buttons -->
    <div class="container" style="text-align: center; margin-left:250px; margin-top:-350px;">
        <img src="assets/img/brand/logobg.png" width="300px" height="250px">
        <br/><br/>
        <small> Use the form below to find out about your next menstruation cycle</small><br/>
        

        <!-- search box -->
        <form method="POST" action=""> 
        <div class="search">
            <input type="date" class="input" name="SearchBox">
            <!--<img class="voiceSearch" src="https://www.gstatic.com/images/branding/googlemic/2x/googlemic_color_24dp.png">-->
        </div>
        <!-- buttons -->
        <div class="btn">
            <button type="submit" class="btns">Calculate</button>
            <button class="btns">Download App</button>
        </div>
        <br/><br/>
        </form>
        <?php

     $num1 = $_POST["SearchBox"];
     $text ="Your next menstruation period will begin on";
    //$num2 = date('Y-m-d', strtotime($num1. ' + 1 days'));;
    
     echo "<p class='subtitle'>$text: </p>" ;
     echo date('F d,Y', strtotime($num1. ' + 28 days'));;
     
?>
        
        
        </h2>
    </div>
    <div class="pr-md-5" style="margin-top:-150px;">
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
                                            <span style="font-size: x-small;">Be confident, everyday all day</span></h1>
                                        <p class="lead  text-white">The design system comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.
                                        </p>
                                        <div class="btn-wrapper">
                                            <!--<a type="" class="btn mb-3 mb-sm-0 btn-icon btn-info" href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html"><span class="btn-inner--icon"><i class="fa fa-code"></i></span><span class="btn-inner--text">
        Components
    </span></a>-->
                                            <a type="" class="btn mb-3 mb-sm-0 btn-icon btn-white" href="https://play.google.com/store/apps/details?id=com.thealphamerc.flutter_healthcare_app"><span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span><!----><span class="btn-inner--text">
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
                                    <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                                <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                              </button>
                                    <button target="_blank" href="#" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
                                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                              </button>
                                    <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                                <span class="btn-inner--icon"><i class="fa fa-instagram"></i></span>
                              </button>
                                    <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="keep up with us">
                                <span class="btn-inner--icon"><i class="fa fa-linkedin-in"></i></span>
                              </button>
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