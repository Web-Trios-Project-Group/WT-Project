<?php 
 include('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-PRAKRUTHI</title>
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->

  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link href="style.css" rel="stylesheet">
  
</head>

<body class="w3-light-green"> 
  <!-- START OF PROJECT-->
    <!-- START OF PART 1 -->
      <div id="parent" class="bgimg w3-display-container w3-animate-opacity w3-text-white ">
        <!-- START OF NAVIGATION BAR -->
          <div class="w3-display-topleft w3-padding-large w3-xlarge">
            <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-white"><img id="logo" src="images/small_logo.png" alt="logo"></a>
          </div>
          <div class="w3-display-topright w3-padding-large w3-xlarge">
              <a href="about/about_us.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
              <a href="updates/updates.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Updates</a>
          </div>
        <!-- END OF NAVIGATION BAR -->

          <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top">Welcome</h1>
            <hr class="w3-border-grey" style="margin:auto;width:80%">
            <p class="w3-large w3-center">Future Is Here</p>
          </div>
        

        <!--START FORM-->
          <div id="child1">
            <!--Modal: Login / Register Form-->
            <div class="modal fade" data-remodal-id="test" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog cascading-modal " role="document">
                <!--Content-->
                <div class="modal-content ">
                  <!--Modal cascading tabs-->
          
                  <div class="modal-c-tabs #eceff1 blue-grey lighten-5">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2 " role="tablist">
                      <li class="nav-item stylish-color-dark">
                        <a id="login" class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1 "></i>
                          Login</a>
                      </li>
                      <li class="nav-item stylish-color-dark">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                          Register</a>
                      </li>
                    </ul>
          
                    
          
                    <!-- Tab panels -->
                    <div class="tab-content">
                      <!--Panel 7-->
                      <div class="tab-pane fade in show active " id="panel7" role="tabpanel">
            
                        <!--Body-->
                        <div class="modal-body mb-1 ">
                        <form action="index.php" method="post">    <!--data-dismiss=modal-->
                          
                          <div class="md-form form-sm mb-5">
                                <i class="fas fa-user prefix"></i>
                                <input type="text" name="username" value="<?php echo $username; ?>" id="modalLRInput10" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your Username</label>
                          </div>
            
                          <div class="md-form form-sm mb-4">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" name="password" id="modalLRInput13" class="form-control form-control-sm validate" required>
                            <label data-error="wrong"  for="modalLRInput13">Your password</label>
                          </div>
          
                          <div class="text-center mt-2">
                            <button type="submit" name="login_btn" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                          </div>
                        </form>
                        </div>
                      </div>
                      <!--/.Panel 7-->
            
                      <!--Panel 8-->
                      <div class="tab-pane fade" id="panel8" role="tabpanel">
            
                        <!--Body-->
                        <div class="modal-body">
          
                          <form action="index.php" method="post">
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-user prefix"></i>
                                <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-sm validate" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Full Name</label>
                            </div>
          
                          <div class="md-form form-sm mb-5">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="email" name="email" value="<?php echo $email; ?>" id="modalLRInput12" class="form-control form-control-sm validate" required>
                            <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                          </div>
            
                          <div class="md-form form-sm mb-5">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" name="password_1" id="psw" class="form-control form-control-sm validate" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="15" required>
                            <label data-error="wrong" data-success="right" for="psw">Your password</label>
                          </div>
          
                          <div id="message" class="#d0d6e2 mdb-color lighten-5">
                              <h5 style="font-size: 130%; font-family:-apple-system;color:rgb(15, 19, 17)">Password must contain the following:</h5>
                              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                              <p id="number" class="invalid">A <b>number</b></p>
                              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                          </div>
            
                          <div class="text-center form-sm mt-2">
                            <button type="submit" name="register_btn" class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                          </div>
                        </form>
                        </div>
                        <!--Footer-->
                        
                      </div>
                      <!--/.Panel 8-->
                    </div>
            
                  </div>
                </div>
                <!--/.Content-->
              </div>
            </div>
            <!--Modal: Login / Register Form-->

            <div class="text-center">
                <a href="" class="btn btn-outline-success waves-effect" data-toggle="modal" data-target="#modalLRForm"><b style="color:rgb(11, 240, 145)">LogIn/Register</b></a>
            </div>
          </div>
        <!--END FORM-->

        <!--START SUBSCRIBE-->
          <div id="child2">
            <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            
              <div class="modal-dialog" role="document">

                <div class="modal-content blue-grey lighten-5" >

                  <div class="modal-header text-center stylish-color-dark">
                    <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                <form action="sendmail.php" method="post" target="_blank">
                  <div class="modal-body mx-3">
                      <div class="md-form mb-4">
                          <i class="fas fa-envelope prefix grey-text"></i>
                          <input type="email" name="email" id="form2" class="form-control validate required">
                          <label data-error="wrong" data-success="right" for="form2">Your email</label>
                        </div>
                  </div>

                  <div class="modal-footer d-flex justify-content-center">
                      <button type="submit" class="btn btn-indigo">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                  </div>
                </form>

                </div>

            </div>
            </div>

            <div class="text-center">
            <a href="" class="btn btn-outline-success waves-effect" data-toggle="modal" data-target="#modalSubscriptionForm"><b style="color:rgb(11, 240, 145)">Subscription Form</b></a>
            </div>   
          </div>
        <!--END SUBSCRIBE-->

      </div>
    <!-- END OF PART 1 -->

    <!-- START OF PART 2 -->
    <div class="w3-light-green w3-center w3-sepia-min w3-opacity-min">
      <br><br>
        <!--START NODE STRUCTURE-->
          <div class="w3-row-padding w3-padding w3-container">
                <div class="container ciclegraph">
                  <!--Add any number of div you want-->
                  <div class="circle shape"><figure><a href="updates/updates.php">>><p style="color:red"><b>Updates</b></p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw58DwZ_ZshAwQ6ZccYDPTpFt2NOnAc8mYKQ0B5w5wGpOFvIhP"></a></figure></a></div>
                  <div class="circle shape"><figure><a href="graphs/graph_and_interpretation.php">>><p style="color:red"><b>Graphs</b></p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw58DwZ_ZshAwQ6ZccYDPTpFt2NOnAc8mYKQ0B5w5wGpOFvIhP"></a></figure></div>
                  <div class="circle shape"><figure><a href="about/about_us.html">>><p style="color:red"><b>About Us</b></p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw58DwZ_ZshAwQ6ZccYDPTpFt2NOnAc8mYKQ0B5w5wGpOFvIhP"></a></figure></div>
                  <div class="circle shape"><figure><a href="awareness/awarenesssolution.php">>><p style="color:red"><b>Awareness</b></p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw58DwZ_ZshAwQ6ZccYDPTpFt2NOnAc8mYKQ0B5w5wGpOFvIhP"></a></figure></div>
                  <div class="circle shape"><figure><a href="polls/pollsurvey.php" >>><p style="color:red"><b>Polls and Survey</b></p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw58DwZ_ZshAwQ6ZccYDPTpFt2NOnAc8mYKQ0B5w5wGpOFvIhP"></a></figure></div>
                  <div class="circle shape"><figure><a href="findout/find_out.php" >>><p style="color:red"><b>Find Out</b></p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw58DwZ_ZshAwQ6ZccYDPTpFt2NOnAc8mYKQ0B5w5wGpOFvIhP"></a></figure></div>

                  <figure class="center-circle zoom"><img class="middle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSaYnjVpE2hWl95g6NPPLxBRfEQ-UaVqd6Q8k25kRZhkYI-yurP"/></figure>

              </div>
          </div>
        <!--END NODE STRUCTURE-->
      <br><br><br><br>
    </div>
    <!-- END OF PART 2 -->

    <!-- START OF PART 3 -->
    <div class="w3-light-green">
      <br><br>
    
      <div class="w3-row-padding w3-light-green w3-padding w3-margin-right w3-container">
          <div class="w3-content">
            <div class="w3-third w3-center">
                <i class="fa fa-leaf fa-10x w3-padding-64 w3-text-white w3-margin-right"></i>
            </div>
        
            <div class="w3-twothird">
              <h1>Motivation</h1>
              <h5 class="w3-padding-32"><b>The more energy-efficient we become as a nation, the less we need to develop additional energy sources.</b></h5>
        
              <h5 class="w3-text-black"><b>The only way forward, if we are going to improve the quality of the environment, is to get everybody involved.</b></h5><br>

              <h5 class="w3-text-black"><b>Nature provides a free lunch, but only if we control our appetites.</b></h5><br>
              <br>
            </div>
          </div>
      </div>
  
      <div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
          <h1 class="w3-margin w3-xlarge">Contact Us : </h1>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-github" ></i>
          <i class="fab fa-google-plus"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-square"></i>
          <i class="fab fa-pinterest"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube-play"></i>
          <br><br>
      </div>
    </div>
    <!-- END OF PART 3 -->

  <!-- END OF PROJECT -->

  <!-- SCRIPTS -->
  <script  src="index.js"></script>

  <!-- <script>
    var id = setTimeout(trigger,1000);
    function trigger() {                                                
      $("[data-remodal-id=test]").modal().open();                            
    };
  </script> -->

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

</body>

</html>