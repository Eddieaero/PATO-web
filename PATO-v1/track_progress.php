<?php
include "dbconfig.php";





// include "dbconfig.php";

// if (!isset($_SESSION['userID'])) {
//     // User is not logged in, handle the error accordingly
//     $response = array('status' => 'error', 'message' => 'User is not logged in');
//     echo json_encode($response);
//     exit;
// }

// $userID = $_SESSION['userID'];

// // Retrieve user's investment data
// $query = "SELECT * FROM investments WHERE user_id = '$userID'";
// $result = $conn->query($query);

// // Check if the query was successful
// if ($result) {
//     // Fetch the data and store it in an array
//     $investments = $result->fetch_all(MYSQLI_ASSOC);
// } else {
//     // Handle the error if the query fails
//     $response = array('status' => 'error', 'message' => 'Failed to retrieve user investments');
//     echo json_encode($response);
//     exit;
// }

// // Retrieve investment plans data
// $investmentPlans = array();
// $investmentPlansQuery = "SELECT * FROM investment_plans";
// $investmentPlansResult = $conn->query($investmentPlansQuery);
// if ($investmentPlansResult) {
//     // Fetch the data and store it in an array
//     $investmentPlansData = $investmentPlansResult->fetch_all(MYSQLI_ASSOC);
//     foreach ($investmentPlansData as $plan) {
//         $investmentPlans[$plan['id']] = $plan;
//     }
// } else {
//     // Handle the error if the query fails
//     $response = array('status' => 'error', 'message' => 'Failed to retrieve investment plans');
//     echo json_encode($response);
//     exit;
// }

// // Update the investment data
// foreach ($investments as $investment) {
//     $investmentID = $investment['id'];
//     $investmentAmount = $investment['amount'];
//     $investmentDate = $investment['created_at'];
//     $investmentPlanID = $investment['investment_plan_id'];
//     $returnPercentage = $investmentPlans[$investmentPlanID]['return_percentage'];
//     $periodInDays = $investmentPlans[$investmentPlanID]['period_in_days'];

//     // Calculate investment progress and additional metrics
//     // $progress = round($investmentAmount * pow(1 + $returnPercentage, (time() - strtotime($investmentDate)) / (60 * 60 * 24 * $periodInDays)), 2);
//     $currentTime = time();
//     $currentDate = strtotime(date('Y-m-d'));
//     $investmentTime = strtotime($investmentDate);
//     $timeDifference = ($currentTime - $investmentTime);
//     $expectedAmount = $investmentAmount * (1 + $returnPercentage);
//     $completionDate = date('Y-m-d', strtotime($investmentDate . ' + ' . $periodInDays . ' days'));
//     $completionDateTimestamp = strtotime($completionDate);
//     $daysRemaining = max(0, ($completionDateTimestamp - $currentDate) / (60 * 60 * 24));
//     // $percentageProgress = round(($progress / $expectedAmount) * 100, 0);
//     // $percentageProgress = round(($timeDifference / ($periodInDays*60*60*24)) * 100, 2);
//     $percentageProgress = round(($timeDifference / ($periodInDays*60*60*24)) * 100, 4);
//     $progress = $percentageProgress * $expectedAmount/100;
//     // Update the investment record in the database
//     $updateQuery = "UPDATE investments SET days_remaining = '$daysRemaining', progress_amount = '$progress', perc_progress = '$percentageProgress', end_date = '$completionDate' WHERE id = '$investmentID' AND user_id = '$userID'";
//     $updateResult = $conn->query($updateQuery);

//     if (!$updateResult) {
//         // Handle the error if the update fails
//         $response = array('status' => 'error', 'message' => 'Failed to update investment: ' . $conn->error);
//         echo json_encode($response);
//         exit;
//     }
//     else{
//         $response = array('status' => 'success', 'message' => ' update investment successfully: ' );
//         // echo json_encode($response);
//         // echo "<p>Investment ID: $investmentID</p>";
//         // echo "<p>Progress: $progress</p>";
//         // echo "<p>Expected Amount: $expectedAmount</p>";
//         // echo "<p>Percentage of Progress: $percentageProgress%</p>";
//         // echo "<p>Days Remaining: $daysRemaining</p>";
//         // echo "<p>Cash out Day : $completionDate</p>";
//         // echo "<p>invested : $investmentAmount</p>";
//         // exit;
//     }
// }

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


  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">


  <script>
    var brandPrimary = "#33b35a";

    function generateRandomColor() {
      var r = Math.floor(Math.random() * 256);
      var g = Math.floor(Math.random() * 256);
      var b = Math.floor(Math.random() * 256);
      var a = Math.random().toFixed(1);
      return "rgba(" + r + ", " + g + ", " + b + ", " + a + ")";
    }
  </script>



</head>

<body>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-inner">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img id="logo" class="dashlog" src="images/logo.png" alt="#" />
          <!-- <h2 class="h5 text-white text-uppercase mb-0">Nathan Andrews</h2>
            <p class="text-sm mb-0 text-muted">Web Developer</p> -->
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
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
                      <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div> -->
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-orange">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#checked-window-1"> </use>
                        </svg>
                      </div>
                      <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div> -->
                    </div>
                  </a></li>
                <li><a class="dropdown-item py-3" href="#!">
                    <div class="d-flex">
                      <div class="icon icon-sm bg-green">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                          <use xlink:href="#chats-1"> </use>
                        </svg>
                      </div>
                      <!-- <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div> -->
                    </div>
                  </a></li>
                <!-- <li><a class="dropdown-item all-notifications text-center" href="#!"> <strong class="text-xs text-gray-600">view all notifications  </strong></a></li> -->
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

          } else {
          // Handle the case when there are no investments for the user
          echo "<p>No investments found.</p>";
          }

          echo "<p>Investment Category: $investmentCategory</p>";
          echo "<p>Initial Investment: ".$investmentData['amount']."</p>";
          echo "<p>Percentage Progress: ".$investmentData['perc_progress']."%</p>";
          echo "<p>Progress Value: ".$investmentData['progress_amount']."</p>";
          echo "<p>Days Remaining: ".$investmentData['days_remaining']."</p>";
          echo "<p>Expected Value at the End: ".$expectedAmount."</p>";
          echo "<p>Investment Completion Date: ".$completionDate."</p>";






    // number of investments made
    // $sql = "SELECT amount, DATE(created_at) as date, TIME(created_at) as time FROM investments WHERE user_id = '$id'";
    // $user_investments = $conn->query($sql);
    // $investments = $user_investments->num_rows;

    // $total_investment_sql = "SELECT SUM(amount) AS total FROM investments WHERE user_id = '$id'";
    // $result = $conn->query($total_investment_sql);
    // $total_investment = $result->fetch_assoc()['total'];

    ?>




    <section class="py-3">
      <div class="container-fluid col-xl-12 col-lg-12 mb-3" id="firstDAta">
        <div class="row ">
          <!-- Count item widget-->
          <div class="col-xl-8 col-md-8 bg-light me-5 col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row me-4 ">
              <div class="col-3 py-1">
                <!-- <img src="images\profile.jpeg" class="img-fluid rounded-start"  alt="..."> -->
                <img src="images\track.jpg" class="p-2" style="border-radius: 20px">
              </div>
              <div class="col-8 col-md-8 py-3 px-1">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text mt-5"> Current Investments: <?php echo $investmentCategory ?></p>
                <p class="card-text"> Value: <?php echo $investmentData['amount'] ?></p>
                <!-- <p class="card-text"> Value: <?php echo $daysRemaining; ?></p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-ms-3  col-sm-9" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class=" chart-container">
              <div>
                <!-- <canvas class="my-chart"></canvas> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid col-xl-12 col-lg-12 mb-3" id="SecondDAta">
        <div class="row ">
          <!-- Count item widget-->
          <div class="col-xl-12 col-md-8 bg-light me-5 col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row me-4 ">
              
              <div class="col-8 col-md-8 py-3 px-1">
                <p class="card-text h2"> Analytics of the investment Data </p>
                <p class="card-text mt-5"> Current progress of the investment: <?php echo $investmentData['progress_amount']; ?></p>
                <!-- <p class="card-text"> Value: <?php echo $investmentAmount; ?></p> -->
                <!-- <p class="card-text"> Value: <?php echo $daysRemaining; ?></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid col-xl-12 col-lg-12 mb-3" id="ThirdDAta">
        <div class="row ">
          <!-- Count item widget-->
          <div class="col-xl-5 col-md-8 bg-light me-5 col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row me-4 ">
              <div class="col-8 col-md-8 py-3 px-1">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text mt-5"> stay in touch </p>
                <p class="card-text"> Days remaining: <?php echo $investmentData['days_remaining']; ?></p>
                <!-- <p class="card-text"> Value: <?php echo $daysRemaining; ?></p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-md-8 bg-light col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row me-4 ">
              <div class="col-8 col-md-8 py-3 px-1">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text mt-5"> The stake worth</p>
                <p class="card-text"> Expected amount : <?php echo $expectedAmount; ?></p>
                <!-- <p class="card-text"> Value: <?php echo $daysRemaining; ?></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid col-xl-12 col-lg-12 mb-3" id="FourthDAta">
        <div class="row ">
          <!-- Count item widget-->
          <div class="col-xl-12 col-md-8 bg-light me-5 col-sm-8" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row me-4 ">
              <div class="col-8 col-md-8 py-3 px-1">
                <p class="card-text h2"> Track progress of your Investment </p>
                <p class="card-text mt-5"> harvest accordingly</p>
                <p class="card-text"> Day to cash out: <?php echo $expectedAmount; ?></p>
                <!-- <p class="card-text"> Value: <?php echo $daysRemaining; ?></p> -->
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
          <script src="vendor/chart.js/Chart.min.js"></script>
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

              // card -playlist
              // var cards = $(".green-card");
              // var currentCard = 0;

              // function nextCard() {
              //   cards.removeClass("active");
              //   cards.eq(currentCard).addClass("active");
              //   currentCard = (currentCard + 1) % cards.length;
              // }

              // // Show first card
              // cards.eq(currentCard).addClass("active");

              // // Set interval to change card every 3 seconds
              // 

              $(".green-card").hide();
              $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
              setInterval(() => {
                $(".green-card").hide();
                $(".green-card").eq(Math.floor(Math.random() * 6)).fadeIn();
              }, 3000);
            });
            <script>
              var PIECHART = document.getElementById("chart");
              var target_color = generateRandomColor();
              var myPieChart = new Chart(PIECHART, {
                type: "doughnut",
                data: {
                  labels: ["percentage of progress"],
                  datasets: [{
                    data: [<?php echo $percentageProgress; ?>],
                    borderWidth: [1],
                    backgroundColor: [brandPrimary, target_color, "#FFCE56"],
                    hoverBackgroundColor: [brandPrimary, "rgba(75,192,192,1)", "#FFCE56"],
                  }, ],
                },
              });
            </script>


</body>

</html>