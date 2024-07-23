<?php
include "dbconfig.php";
?>

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
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css">
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
      <style>  
         .valid { 
            border-right: 5px solid greenyellow; 
            border-radius: 4px;
            margin-bottom: 3px;
         } 
         .invalid {
             border-right: 5px solid red;
             border-radius: 4px;
            margin-bottom: 3px;
            } 
         #password-requirements{
            border-width: 2px;
            border-color: gray;
         }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
     <header class="sticky-top fixed-top">
         <!-- header inner -->
         <div class="header">
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
                     <h2>register here</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our pricing -->
      <div  class="pricing slin">
         <div class="container">
            <div class="container-fluid text-center col-xl-6 col-lg-6">
              <!-- <div class="text-center col-xl-6 col-lg-6 "> -->
           
               <form method="post" action="process_registration.php">
               <?php if (isset($_GET['error'])){echo "<button class='btn btn-sm text-danger'>Invalid Credentials </button>";}?>
                  <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" />
                     </div>
                    </div>
                  <div class=" mb-4">
                      <div class="form-outline">
                        <input type="text" id="surname" name="surname"  placeholder="Surname" class="form-control" />
                      </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline datepicker">
                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Birthday date"/>
                      </div>
                    </div>

                    <div class="justify-content-center text-center  mb-4">
                        <label for="gender" class="form-label" id="gender" >Choose Gender</label>
                           <div class=" form-check-inline">
                              <label class="form-check-label" for="inlineCheckbox1">
                                 <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender" value="male">
                                 male</label>

                              <label class="form-check-label mx-3" for="inlineCheckbox2">
                                 <input class="form-check-input" type="radio" id="inlineCheckbox2" name="gender" value="female">
                                 female</label>
                           </div>
                     </div>
                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" />
                      </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="tel" id="phone" name="phone" placeholder="Mobile Number" class="form-control" />
                      </div>
                    </div>

                    <div class=" mb-4" >
                      <div class="form-outline">
                        <input type="password" id="password" name="password" placeholder="password" onkeyup="validatePassword()" class="form-control" />
                        
                        <ul id="password-requirements">
                           <li id="uppercase-requirement">Include At least one uppercase letter</li>
                           <li id="lowercase-requirement">Include At least one lowercase letter</li>
                           <li id="number-requirement">Include At least one number</li>
                           <li id="length-requirement">Include At least 6 characters</li>
                        </ul>
                       </div>
                    </div>

                    <div class=" mb-4">
                      <div class="form-outline">
                        <input type="password" id="conf_password" name="conf_password" placeholder="confirm password" oninput="validatePassword()" class="form-control" />
                       </ul>
                      </div>
                    </div>

                  <div class="col-12">
                    <div class="form-check">
                      <!-- <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required> -->
                      <label class="form-check-label" for="invalidCheck">
                        <span id="showTermsButton" class="btn btn-secondary" onclick="openModal()">View Pato User Agreement</span>
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                    <div class="modal-backdrop1" id="modal-backdrop">
                        <div class="modal-container">
                           <!-- <div class="modal-close" onclick="closeModal()">&#10005;</div>&#10004; -->
                           <div class="modal-text">
                              <h1 class=" modal-text-1 text-center pt-2 " id="userAgreement-text">Pato User Agreement</h1>
                              <li>
                                 <p class="mb-3">1. If an individual chooses a plan the money is termed as locked 🔒 savings. Any attempts to withdraw before the plan's specified time will result in a loss of 60% of already accumulated interest.</p>
                              </li>
                              <li>
                                 <p class="mb-3">2. The joining fee is paid once and is non-refundable.</p>
                              </li>
                              <li>
                                 <p class="mb-3">3. As per every profit withdrawal, the investor will pay 2% of withdrawn cash as tax, while the total withdrawal of all funds will result in a 5% tax cut.</p>
                              </li>
                              <li>
                                 <p class="mb-3">4. If an investor wishes to withdraw funds invested before the locked period is over, he/she has to inform the company secretary at least one week before.</p>
                              </li>
                              <li>
                                 <p>5. All transactions will be done via mobile money or bank transfers, there won't be any cash transactions</p>
                              </li>
                              

                           </div>

                           <li>
                                    <p class="mt-3 ">please read carefully, then accept the agreement.</p>
                           </li>

                           <div class="modal-close btn" onclick="closeModal()">&#10004; Accept </div>

                        </div>
                        </div>
                  </div>

                    <div class="col-12">
                      <div class="col-md-4 mb-4">    
                        <div class="mt-4">
                          <input name="submit_button" id="submitButton" class="text-center btn btn-warning btn-lg" type="submit" value="Submit" />
                        </div>     
                      </div>
                    </div>

                </form>
               <!-- </div> -->
            </div>
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
                     <p>© 2023 Pato Space.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script>
          function validatePassword() {
            const passwordInput = document.getElementById("password");
            const password = passwordInput.value;

            const confirmPasswordInput = document.getElementById("conf_password");
            const confirmPassword = confirmPasswordInput.value;

            const passwordValidation = document.getElementById("password-validation");
            const uppercaseRequirement = document.getElementById("uppercase-requirement");
            const lowercaseRequirement = document.getElementById("lowercase-requirement");
            const numberRequirement = document.getElementById("number-requirement");
            const lengthRequirement = document.getElementById("length-requirement");
            const matchRequirement = document.getElementById("match-requirement");

            const containsUpperCase = /[A-Z]/.test(password);
            const containsLowerCase = /[a-z]/.test(password);
            const containsNumber = /\d/.test(password);
            const containsLength = password.length >= 6;
            const matchPassword = password === confirmPassword;

            if (containsUpperCase) {
               uppercaseRequirement.classList.add("valid");
               uppercaseRequirement.classList.remove("invalid");
            } else {
               uppercaseRequirement.classList.add("invalid");
               uppercaseRequirement.classList.remove("valid");
            }

            if (containsLowerCase) {
               lowercaseRequirement.classList.add("valid");
               lowercaseRequirement.classList.remove("invalid");
            } else {
               lowercaseRequirement.classList.add("invalid");
               lowercaseRequirement.classList.remove("valid");
            }

            if (containsNumber) {
               numberRequirement.classList.add("valid");
               numberRequirement.classList.remove("invalid");
            } else {
               numberRequirement.classList.add("invalid");
               numberRequirement.classList.remove("valid");
            }

            if (containsLength) {
               lengthRequirement.classList.add("valid");
               lengthRequirement.classList.remove("invalid");
            } else {
               lengthRequirement.classList.add("invalid");
               lengthRequirement.classList.remove("valid");
            }




            if (matchPassword) {
               confirmPasswordInput.classList.add("valid");
               confirmPasswordInput.classList.remove("invalid");
               passwordValidation.style.color = "green";
            } else {
               confirmPasswordInput.classList.add("invalid");
               confirmPasswordInput.classList.remove("valid");
               passwordValidation.style.color = "red";
               
            }

            if (containsUpperCase && containsLowerCase && containsNumber && containsLength ) {
               passwordInput.classList.add("valid");
               passwordInput.classList.remove("invalid");
               passwordValidation.style.color = "green";
            } else {
               passwordInput.classList.add("invalid");
               passwordInput.classList.remove("valid");
               passwordValidation.style.color = "red";
            }           
         }		
	   </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="pricing.js"></script>
   </body>
</html>

