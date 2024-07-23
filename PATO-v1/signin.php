<?php include "dbconfig.php"; ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PATO | pricing</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    </head>
   <!-- body -->
   <body class="main-layout">
    <header class="sticky-top fixed-top">
         <!-- header inner -->
         <div class="header ">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="we-do.php">Services</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="pricing.php">Invest</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="signin.php">User</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/PatoSpace2?t=x3U5COBgivHGoustWfWCtQ&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://instagram.com/patospace_101?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>welcome</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our pricing -->
      <div  class="pricing slin">
         <div class="container">
                  <form method="post" action="process_login.php" class="container-fluid text-center col-xl-4 col-lg-4 col-md-6" >
                     <?php if (isset($_GET['error'])){echo "<button class='btn btn-sm text-danger'>Invalid Credentials </button>";}?>
                     <div class="mb-4  ">
                     <!-- <label for="exampleInputEmail1" class="form-label px-3 ">Email address</label> -->
                        <input type="email" name="email" class="form-control" placeholder="Email address"  id="exampleInputEmail1" class="form-signin" aria-describedby="emailHelp">
                     </div>
                     <div class="mb-4 ">
                     <!-- <label for="exampleInputPassword1" class="form-label px-3">Password</label> -->
                        <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                     </div>
                     <div class="mb-4 form-check ">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember-me!</label>
                     </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                     <div class="mb-4 text-center">
                        <label>Don't have an account?</label>
                     <div class="nav-link btn-link">
                        <a class="nav-link btn-link" href="register.php">Register here</a>
                     </div>
                     </div>
                  </form>
            </div>
         </div>
      <!-- end our pricing -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Katavi, Tanzania</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +255 755 920 656</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="www.patospace2022@gmail.com"> Patospace 2022</a></li>
                     </ul>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>About </h3>
                     <p class="variat">Currently, P.A.T.O has more than 50 members who study in different universities in Tanzania sharing the same mission, vision and goals.</p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Team </h3>
                     <p class="variat" >We are well equipped with a team of not only educated but also motivated youth individuals who would strive at anything to ensure that goals and objectives are achieved within the planned window.</p>
                  </div>
                 <div class="col-md-4 col-sm-6">
                     <h3>Subscribe</h3>
                     <form class="bottom_form">
                        <a class="right_btn" href="Javascript:void(0)"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                     <p>© 2023 Pato Space.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

