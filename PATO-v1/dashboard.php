<?php
include "dbconfig.php";
?>


<script>
        var userID = <?php echo $_SESSION['id'] ?>
</script>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PATO | Dashboard</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
      <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-inner">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center">
          <img id="logo" class="dashlog" src="images/logo.png" alt="#">
        </div>

        <a class="brand-small text-center" href="index.html">
            <p class="h1 m-0">P</p>
        </a>
      </div>
      <ul class="list-unstyled">
        <li class="sidebar-item"><a class="sidebar-link" href="dashboard.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Profile </a></li>

        <li class="sidebar-item"><a class="sidebar-link" href="track_progress.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#sales-up-1"> </use>
            </svg>Track Progress </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="deposit_processing.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Payments </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="withdraw_processing.php">
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Withdraw funds </a></li>
      </ul>
    </div>
  </nav>
  <div class="page">
    <!-- navbar-->
    <header class="header  pb-2">
      <nav class="nav navbar fixed-top">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="d-flex align-items-center">
              <a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                  <use xlink:href="#menu-1"> Dashboard </use>
                </svg>
              </a> 
              <a class="navbar-brand ms-2" href="index.html">
                <div class="brand-text d-md-inline-block d-sm-inline-block text-uppercase letter-spacing-0">
                  <span class="text-white fw-normal text-xs"> </span>
                  <strong class="text-primary text-sm">Dashboard</strong>
                </div>
              </a>
            </div>
            <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">

              <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="notifications">
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-blue">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#envelope-1"> </use>
                        </svg>
                      </div>
                      <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-green">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#chats-1"> </use>
                        </svg>
                      </div>
                     </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-orange">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#checked-window-1"> </use>
                        </svg>
                      </div>
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-green">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#chats-1"> </use>
                        </svg>
                      </div>
                    </div>
                  </a></li>
              </ul>
              </li>

          </div>
        </div>
      </nav>
    </header>
    <!-- Counts Section -->
    <section class="py-3 ">
      <div class="container-fluid">
        <div class="row">
          <!-- Count item widget-->
          <div class="col-xl-7 col-md-7 bg-light  col-sm-9"  style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row  " >
                  <div class="col-4" >
                    <!-- <img src="images\profile.jpeg" class="img-fluid rounded-start" style="border-radius: 50px" alt="..."> -->
                    <img src="images\profile.jpeg" class="p-2" style="border-radius: 23px">
                  </div>
                  <div class="col-8 sm-12  p-3">
                      <h5 class="card-title h1"> <?php echo $_SESSION['user_name'] ?></h5>
                      <p class="card-text h5"> Verified Pato Investor</p>
                      <p class="card-text py-3">
                        <small class="text-muted">
                        Last logged 3mins ago
                        </small>
                      </p>
                      <div class="offset-lg-9 offset-md-9 offset-sm-9 ">
                        <button class=" btn btn-primary " style=" border-radius: 5px;"> Edit </button>
                      </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      
          
    </section>
    <!-- Header Section-->
    <section class="bg-white py-5">
      <div class="container-fluid">
        <div class="row d-flex align-items-md-stretch">



          <div class="col-lg-12 col-md-12 col-sm-12" id="header1">
            <div class="card shadow-0 text-center col-lg-12 col-sm-12 d-flex container-fluid justify-content-center ">
                <div>
                  <h2 class=" h1 fw-normal col-lg-12" id="invest-heading"> Add Investments </h2>
                </div>
                <div>
                   <button class=" justify-content-center btn btn-primary" id="invest-btn" onclick="showInvestmentModal()" style="border-radius: 5px" >Investment plans</button>
                </div>
                 
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" id="header2">
            <div class="card shadow-0 text-center col-lg-12 col-sm-12 d-flex container-fluid justify-content-center ">
            <div>
                <h2 class=" h1 fw-normal col-lg-12 " id="invest-heading">  Choose your Investment plan 
                  <div>
                    <button class=" float-end btn btn-primary" id='back-InvestmentModal' onclick="removeInvestmentModal()"  style=" border-radius: 5px;"> Back </button>
                  </div>
               </h2>
            </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" id="header3">
            <div class="card shadow-0 text-center col-lg-12 col-sm-12 d-flex container-fluid justify-content-center ">
              <div class="row" >
                <h2 class=" float-start h1 fw-normal col-lg-12 " id="invest-heading"> Payment method
                </h2>
                <h3>Deposit via mobile money </h1>
                   <div>
                    <button class=" right-button btn btn-primary" id='back-plansModal' onclick="removePlanDetailModal()"  style=" border-radius: 5px;"> Back </button>
                  </div>
            </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" id="header4">
          <div class="card shadow-0 text-center col-lg-12 col-sm-12 d-flex container-fluid justify-content-center">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-body">
                <h2 class=" float-start h1  col-lg-12 " id="invest-heading"> Investment details </h2>
                  <!-- <h3 class="card-title">Current Investment</h5>
                  <p class="card-text">Type of Investment: [Type of Investment]</p>
                  <p class="card-text">Amount Invested: [Amount Invested]</p> -->
                  <button class=" mt-2 btn btn-primary" id='' onclick=" window.location.href = 'track_progress.php';"  style=" border-radius: 5px;"> Show progress </button>
                </div>
              </div>
            </div>
          </div>
        </div>


          <!-- pricing starts here -->
          <div id="detail-window" class="m-2 col-xl-11 col-lg-11 col-md-12 col-sm-10 card-body detailed  shadow  container-fluid container" >
          <div class="p-1 col-xl-12 col-lg-12 px-1 py-1 m-1 ">
            <div class="m-1">
              <h1 id="net-heading">
                Choose your mobile network
              </h1>
            </div>
            <div class="p-1 mobile-steps row">
                <div class="p-1 float-start col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <h2>Vodacom Network</h2>
                  <div>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter *150*00# </p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 4 (lipia bili)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 1 (lipa kwa simu)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 1 (vodacom lipa namba )</p>
                     <!-- <p> 5.Enter amount</p> -->
                     <p class="pgx-2 info-bx px-3 py-2 rounded bg-light my-1"> </p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter lipa namba(5791797)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter password </p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1">(name:Emmanuel Nkwabi)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Verify Payment </p>
                   </div>                 
                </div>
                <div class="p-1 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <h2>Airtel Network</h2>
                  <div>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter *150*60# </p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 4 (lipia bili)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 1 (lipa kwa simu)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 1 (airtel lipa namba )</p>
                     <!-- <p> 5.Enter amount</p> -->
                     <p class="pgx-2 info-bx px-3 py-2 rounded bg-light my-1"> </p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter lipa namba(1246216)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter password</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1">(name:PATO SHOP)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Verify Payment </p>
                   </div>                
                </div>
                <div class="p-1 float-end col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <h2>Tigo Network</h2>
                  <div>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter *150*01# </p>
                     <!-- <p> 2.Choose 4 (lipia bili)</p> -->
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 5 (lipa kwa simu)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 1 (tigo pesa )</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Choose 1 (ingiza lipa namba 6611004)</p>
                     <!-- <p> 5.Enter amount</p> -->
                     <p class="pgx-2 info-bx px-3 py-2 rounded bg-light my-1">  </p>
                     <!-- <p> 6.Enter lipa namba()</p> -->
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Enter password</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1">(name:PATO SHOP 1)</p>
                     <p class="info-bx px-3 py-2 rounded bg-light my-1"> Verify Payment </p>
                  </div>                 
                </div>
                
            </div>
                <div>
                    <button class="m-3 justify-content-center btn btn-primary" id='payment-button'  style=" border-radius: 5px;"> Okay </button>
                </div>
          </div>
        </div>

        <div  class="ms-xl-5 col-lg-12 align-items-center container-fluid ">
          <div id="pay-process1" class=" p-2 align-items-center text-center card col-lg-7 col-xl-7" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 5px;">
            <div class="col-lg-7">
              <p>
                Payment processing
              </p>
              <button class="m-3 justify-content-center btn btn-primary" id='cancel-pay' onclick=" "  style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 10px;">cancel</button>
              <button class="m-3 justify-content-center btn btn-primary" id='confirm-pay' onclick=" "  style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 10px;">confirm</button>
            </div>
            
          </div>
          <div id="pay-process2" class="p-3 card col-lg-9" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 5px;">
            <div class="col-lg-7">
            <p>
              Payment complete
            </p>
            <button class="m-3 justify-content-center btn btn-primary" id='confirmed-trans' onclick=" "  style=" border-radius: 5px;">Okay</button>
            </div>
          </div>
        </div>

        
        <form >
        <div  class="pricing1 " id="add-investment" >
        <div class="">
            <div class="">
              <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  text-center">
                  <div class="">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header">
                         <h4 class="my-0 fw-normal"> Weekly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">4% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 3000/=</li>
                         </ul>
                         <button type="button" id="week-pack" name="investment_plan" onclick="showDetailModal()" value="28000" class=" pg-1 w-50 btn btn-outline-primary" style="border-radius: 5px">Tshs 25000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center">
                  <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> Monthly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">20% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 5000/=</li>
                         </ul>
                         <button type="button" id="week-pack" name="investment_plan" onclick="showDetailModal()" value="55000" class=" pg-1 w-50 btn  btn-outline-primary" style="border-radius: 5px">Tshs 50000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  text-center">
                  <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> Quarterly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">70% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 7000/=</li>
                         </ul>
                         <button type="button" id="week-pack" name="investment_plan" onclick="showDetailModal()" value="77000" class=" pg-1 w-50 btn  btn-outline-primary " style="border-radius: 5px">Tshs 70000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
              </div>
               


               <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12  text-center">
                  <div class="">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> half-yearly Pack</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">150% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 10,000/=</li>
                         </ul>
                         <button type="button" id="week-pack" name="investment_plan" onclick="showDetailModal()" value="110000" class=" pg-1 w-50 btn btn-outline-primary " style="border-radius: 5px">Tshs 100000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 text-center">
                  <div class="col ">
                     <div class="card mb-4 rounded-3 shadow-sm">
                       <div class="card-header ">
                         <h4 class="my-0 fw-normal"> Yearly</h4>
                       </div>
                       <div class="card-body shadow-lg">
                         <h1 class="card-title pricing-card-title">300% return<small class="text-muted fw-light"></small></h1>
                         <ul class="list-unstyled mt-3 mb-4">
                           <li>Membership fee Tshs 15,000/=</li>
                         </ul>
                      <button type="button" id="week-pack" name="investment_plan" onclick="showDetailModal()" value="315000" class=" pg-1 w-50 btn btn-outline-primary" style="border-radius: 5px">Tshs 300000/=</button>
                       </div>
                     </div>
                   </div>
               </div>
               </div>
            </div>
         </div>
        </div>
        </form>
    </div>




  <!-- JavaScript files-->
  <script src="js/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/just-validate/js/just-validate.min.js"></script>
  <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
  <script src="js/charts-home.js"></script>
  <!-- Main File-->
  <script src="js/front.js"></script>
  <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

      var ajax = new XMLHttpRequest();
      ajax.open("GET", path, true);
      ajax.send();
      ajax.onload = function(e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
      }
    }
    // this is set to BootstrapTemple website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
  </script>
  <script src="pricing.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <script>
    $(document).ready(function() {
      $("#lineCahrt").click(function() {
        $(".form-check").toggle(); // toggle visibility of all form-check elements
        $(".form-check:hidden").slice(2).show(); // show only the first 2 hidden form-check elements
      });

      $(".green-card").hide();
      $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
      setInterval(() => {
        $(".green-card").hide();
        $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
      }, 3000);
    });
  </script>

</body>

</html>