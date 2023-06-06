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

    // number of investments made
    $sql = "SELECT amount, DATE(created_at) as date, TIME(created_at) as time FROM investments WHERE user_id = '$id'";
    $user_investments = $conn->query($sql);
    $investments = $user_investments->num_rows;

    $total_investment_sql = "SELECT SUM(amount) AS total FROM investments WHERE user_id = '$id'";
    $result = $conn->query($total_investment_sql);
    $total_investment = $result->fetch_assoc()['total'];

    ?>




    <section class="py-3">
      <div class="container-fluid col-12 " id="firstDAta">
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
                <p class="card-text mt-5"> Current Investments: <?php echo $investments; ?></p>
                <p class="card-text"> Value: <?php echo $total_investment; ?></p>
                <!-- <p class="card-text"> Value: <?php echo $daysRemaining; ?></p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-ms-3 align-items-center bg-light col-sm-9" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
            <div class="row align-items-center ">

            </div>
          </div>
        </div>


        <div class="row mt-4" id="">
          <!-- Count item widget-->
          <?php while ($investment = $user_investments->fetch_assoc()) { ?>
            <div class="col col-xl-4 col-md-6 col-sm-12 bg-light">
              <div class="card p-0" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
                <table class="table">
                  <tr>
                    <td class="display-6" colspan="2">Plan</td>
                  </tr>
                  <tr>
                    <td>Amount Invested</td>
                    <td>Tsh: <?php echo $investment['amount']; ?> </td>
                  </tr>
                  <tr>
                    <td>Created</td>
                    <td><?php echo $investment['date']; ?> </td>
                  </tr>
                </table>
              </div>
            </div>
          <?php } ?>

        </div>

        <?php
        $userID = $id;


        $query = "SELECT IP.*, INV.* FROM investment_plans AS IP
JOIN investments AS INV ON IP.id = INV.investment_plan_id
WHERE INV.user_id = '{$userID}'";

        $result = $conn->query($query);

        if ($result) {
          $investmentPlans = $result->fetch_all(MYSQLI_ASSOC);
        } else {
          $response = array('status' => 'error', 'message' => 'Failed to retrieve investment plans');
          echo json_encode($response);
          exit;
        }

        $query = "SELECT * FROM investments WHERE user_id = '{$userID}'";
        $result = $conn->query($query);

        if ($result) {
          $investments = $result->fetch_all(MYSQLI_ASSOC);
        } else {
          $response = array('status' => 'error', 'message' => 'Failed to retrieve user investments');
          echo json_encode($response);
          exit;
        }

        $investmentProgress = array();

        foreach ($investmentPlans as $plan) {
          $planID = $plan['id'];
          $returnPercentage = $plan['return_percentage'];
          $periodInDays = $plan['period_in_days'];
          $membershipFee = $plan['membership_fee'];
          $initialInvestment = $plan['initial_investment'];

          // Retrieve the user's investment data for the current plan
          $investmentData = array_filter($investments, function ($investment) use ($planID) {
            return $investment['investment_plan_id'] == $planID;
          });

          // Calculate investment progress and additional metrics
          foreach ($investmentData as $investment) {
            $investmentID = $investment['id'];
            $investmentAmount = $investment['amount'];
            $investmentDate = $investment['created_at'];

            $progress = $initialInvestment * pow(1 + $returnPercentage, (time() - strtotime($investmentDate)) / (60 * 60 * 24 * $periodInDays));
            $expectedAmount = $initialInvestment * (1 + $returnPercentage);
            $completionDate = date('Y-m-d', strtotime($investmentDate . ' + ' . $periodInDays . ' days'));

            // Add the investment progress and additional metrics to the array
            $investmentProgress[$investmentID] = array(
              'progress' => $progress,
              'expectedAmount' => $expectedAmount,
              'completionDate' => $completionDate
            );
          }
        }

        ?>

        <div class="row mt-4" id="fourDAta">
          <!-- Count item widget-->
          <?php foreach ($investmentProgress as $investmentID => $progressData) : ?>
            <div class="col-xl-6 col-md-12 bg-light">
              <div class="card p-4" style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); border-radius: 20px;">
                <p class="card-text text-dark h2" style="font-weight:normal">Track progress of your Investment</p>
                <table class="table">
                  <tr>
                    <td>Key</td>
                    <td>Value</td>
                  </tr>
                  <tr>
                    <td>Investment ID:</td>
                    <td><?php echo $investmentID; ?></td>
                  </tr>
                  <tr>
                    <td>Progress:</td>
                    <td><?php echo $progressData['progress']; ?></td>
                  </tr>
                  <tr>
                    <td>Expected Amount:</td>
                    <td><?php echo $progressData['expectedAmount']; ?></td>
                  </tr>
                  <tr>
                    <td>Completion Date:</td>
                    <td><?php echo $progressData['completionDate']; ?></td>
                  </tr>
                </table>
              </div>
            </div>
          <?php endforeach; ?>



        </div>
      </div>


    </section>
    <!-- Header Section-->
    <section class="bg-white py-5">
      <div class="container-fluid">
        <div class="row d-flex align-items-md-stretch">

          <!-- Line Chart -->
          <div class="col-lg-12 col-md-12 col-sm-12" id="header1">


          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" id="header2">

          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" id="header3">

          </div>

          <!-- pricing starts here -->
          <div id="detail-window" class="m-2 col-lg-11 card-body detailed  shadow  container-fluid container">


          </div>




          <!-- JavaScript files-->
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
          </script>

</body>

</html>