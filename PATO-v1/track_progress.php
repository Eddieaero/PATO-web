<?php
include "dbconfig.php";
?>


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
        <div class="sidenav-header-inner text-center"><img id="logo" class="dashlog" src="images/logo.png" alt="#" />
      </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center"
          href="index.php">
          <p class="h1 m-0">P</p>
        </a>
      </div>
      <!-- Sidebar Navigation Menus<span class="text-uppercase text-center text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Tabs</span> -->
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
    <header class="header  pb-3">
      <nav class="nav navbar fixed-top">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="d-flex align-items-center">
              <a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn"
                href="#">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                  <use xlink:href="#menu-1"> Dashboard </use>
                </svg>
              </a>
              <a class="navbar-brand ms-2" href="index.php">
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
                      <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new
                          messages </span><small class="small text-gray-600">4 minutes ago</small></div>
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
    <!--  

    The following section is for the first data on the dashboard
    it contain php code to fetch data from the database and display it on the dashboard
    
    check the variable names to know what they represent
    -->
     <?php
    // fetch user Id from session
    $id = $_SESSION['userID'];
    $username = $_SESSION['user_name'];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    // confirm user existance 
    $result = $conn->query($sql);
    if ($result->num_rows < 1) {
      echo "<script> alert('User not found\nplease login again'); </script>";
    }


    // investment details for a defined user in the system
    
    $userID = $_SESSION['userID'];

    // Retrieve user's investment data
    $query = "SELECT investments.id, investments.investment_plan_id, investment_plans.return_percentage, investment_plans.period_in_days, investments.amount, investments.created_at, investments.days_remaining, investments.progress_amount, investments.perc_progress, investments.end_date 
                FROM investments
                INNER JOIN investment_plans ON investments.investment_plan_id = investment_plans.id
                WHERE investments.user_id = '$userID'";
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
      // Fetch the data and store it in an array
      $investmentData = $result->fetch_assoc();
      // while ($investmentData = $result->fetch_assoc()) {

      // Calculate investment category based on investment plan ID
      // $investmentCategory = "";
    
      if ($investmentData['investment_plan_id'] = 1) {
        $investmentCategory = "Weekly";
      } elseif ($investmentData['investment_plans_id'] = 2) {
        $investmentCategory = "Monthly";
      } elseif ($investmentData['investment_plans_id'] = 3) {
        $investmentCategory = "Quarterly";
      } elseif ($investmentData['investment_plans_id'] = 4) {
        $investmentCategory = "Semi-Annually";
      } elseif ($investmentData['investment_plans_id'] = 5) {
        $investmentCategory = "Annually";
      } else {
        $investmentCategory = "Unknown";
      }


      // Calculate expected value at the end of the investment
      $expectedAmount = $investmentData['amount'] * (1 + $investmentData['return_percentage']);

      // Format the end date as "Day, Month Year"
      $completionDate = date('l, F j, Y', strtotime($investmentData['end_date']));

      // Display the investment details
    

    // }
  }

     else {
      // Handle the case when there are no investments for the user
      echo "<p>No investments found.</p>";
    }
 
    ?> 


    <section class="py-xl-3 py-sm-3">
      <div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-10 mb-xl-3 mb-sm-3" id="firstDAta">
        <div class="row d-sm-flex">
          <!-- Count item widget-->
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 bg-light me-xl-5 me-sm-5 " style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;  ">
            <div class="row me-xl-4 me-lg-4 " style="">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 py-xl-1 py-lg-1 py-md-1 py-sm-1" id="invest-img">
                <img src="images\track.jpg"  class="" style="border-radius: 20px">
              </div>
              <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8  p-xl-3 p-sm-3" id="invest-log">
                <p class="card-text h2"> Track progress of your Investment </p>
                <div class="  ">
                    <p class="card-text mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 text-end fw-normal"> Current Investments <h1 class="text-capitalize fw-semibold  text-end">
                      <?php echo $investmentCategory ?></h1>
                    </p>
                </div>
                <div>
                    <p class="card-text text-end"> Value <h1 class="text-capitalize fw-semibold text-end">
                      <?php echo $investmentData['amount'] ?></h1>
                    </p> 
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-3 col-sm-5 " style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;" id="invest-chart">
            <div class=" col-xl-7 p-xl-3 p-sm-3 chart-container">
              <div id="">
              <p id="chart-percentage" class="text-capitalize fw-semibold text-center "> Growth Percentage</p>
                <canvas id="my-chart">
                 </canvas>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-10 mb-xl-3 mb-sm-3" id="SecondDAta">
        <div class="row d-sm-flex">
          <!-- Count item widget-->
          <div class="col-xl-6 offset-xl-3 col-md-8 bg-light mt-xl-4 mt-sm-4 mb-xl-5 mb-sm-5 me-xl-5 me-sm-5 col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;" id="invest-header">
            <div class="row me-xl-4 me-sm-4 p-xl-2 p-sm-2 ">
              <div class="col-xl-12 col-md-8 p-xl-2 p-sm-4 ">
                <p class="card-text text-center h2"> Analytics of the investment Data </p>
              </div>
            </div>
          </div>

          <div class="col-xl-12 col-md-8 bg-light  col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;" id="invest-progress">
            <div class="col-xl-12 col-sm-12 row  p-xl-2 p-sm-2">
              <div class="col-xl-12 align-items-center col-md-8 p-xl-4 p-sm-4">
                <p class="card-text h2"> Real time Data </p>
                <div class="text-end">
                  <p class="card-text "> Current progress of the investment: </p>
                  <p class="card-text text-end"> <h1 class="text-capitalize fw-semibold text-end">
                      <?php echo $investmentData['progress_amount'] ?></h1>
                  </p> 
                </div> 
             </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-10 mb-xl-5 mb-sm-5 mt-xl-5 mt-sm-5 " id="ThirdDAta">
        <div class="row  ms-xl-5 ms-sm-5 ">
          <!-- Count item widget-->
          <div class="col-xl-5 col-md-5 bg-light   col-sm-5" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;" id="invest-days">
            <div class="row  p-xl-2 p-sm-2">
              <div class="col-xl-12 col-md-8 col-sm-8 p-xl-4 p-sm-4">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text "> stay in touch </p>
                <div class="card-text text-end"> Days remaining: 
                <p class="card-text text-end"> <h1 class="text-capitalize fw-semibold text-end">
                      <?php echo $investmentData['days_remaining'] ?></h1>
                </p> 
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-5 col-md-5 bg-light offset-xl-1 col-sm-5 float-xl-end" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;" id="invest-expected">
            <div class="row  p-xl-2 p-sm-2">
              <div class="col-xl-12 col-md-8 p-xl-4 p-sm-4">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text "> The stake worth</p>
                <div class="card-text text-end"> Expected amount : 
                  <p> <h1 class="text-capitalize fw-semibold text-end">
                      <?php echo $expectedAmount ?></h1>
                  </p> 
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid col-xl-12 col-lg-12 col-md-12 col-sm-10 mb-3" id="FourthDAta">
        <div class="row d-sm-flex">
          <!-- Count item widget-->
          <div class="col-xl-12 col-md-8 bg-light me-xl-5 me-sm-5 col-sm-12" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;" id="invest-img">
            <div class="row p-xl-2 p-sm-2">
              <div class="col-xl-12 col-sm-12 col-md-8 p-xl-4 p-sm-4">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text "> harvest accordingly</p>
                <p class="card-text text-end"> Day to cash out: <p> <h1 class="text-capitalize fw-semibold text-end">
                      <?php echo $completionDate ?></h1></p>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Header Section-->
    <!-- JavaScript files-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>

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
        ajax.onload = function (e) {
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
    <!-- <script src="pricing.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <?php 
      $org = $investmentData['perc_progress'];
      $rest = 100 - $org;

      $progress = array($org, $rest);
      // $progress = json_encode($progress);
    ?>


    <script>
      const data = {
        // labels: [
        //   'Red',
        //   'Blue',
        // ],
        datasets: [{
          label: 'My Progress',
          data: [<?php echo $progress[0].",".$progress[1]; ?>],
          backgroundColor: [
            // 'rgb(255, 99, 132)',
            'rgb(40, 84, 48)',
            // 'rgb(200, 200, 200)',
            'rgb(240, 240, 240)',
          ],
          hoverOffset: 4,
          cutout: '70%',
          borderWidth: 1
        }]
      };

      const config = {
        type: 'doughnut',
        data: data,
          // circumference:200
        // Plugin: [counter]
      };

      var pieChart = new Chart(document.getElementById('my-chart'), config);
    </script>
</body>
</html>