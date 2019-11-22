<?php
  session_start();

  if ( !isset( $_SESSION['username'] ) ) {
    header("Location: ../index.php");
  }
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<title>Navigation Bar</title> 
	
	<meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  
  <link rel="stylesheet" href="awarenesssolution.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>
  
  <link rel="icon" href="../images/logo.png" type="image/x-icon">

  <style>
    #y{
      position: relative;
      left: 255px;
      width:100%;
    }
    #z{
      position: relative;
      right:150px;
      width:100%;
    }
  </style>

  
</head> 

<body> 
	
<div class="page-content p-5" id="content">

<!-- Toggle button -->
<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-3 mb-4"><i class="fa fa-bars" style="font-size:24px;color:red"></i></button>

<div class="wordart blues">        
  <span class="text">E-Prakruthi</span>
</div>

<nav class="navbar navbar-expand-sm bg-success navbar-dark" > 

  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.php"> 
    <img src= "../images/logo.png"
    alt="logo" style="width:40px;"> 
  </a> 

  <div class="collapse navbar-collapse" id="collapse_Navbar"> 
    <ul class="navbar-nav"> 
      <li class="nav-item"> 
        <a class="nav-link" href="../index.php">Home</a> 
      </li> 

      <li class="nav-item"> 
        <a class="nav-link" href="../about/about_us.html">About Us</a> 
      </li> 
    </ul> 
  </div> 

  <form class="form-inline" action="#"> 
    <input class="form-control mr-sm-2" type="text"
        placeholder="Search"> 
    <button class="btn btn-primary" type="submit">Search</button> 
  </form> 

</nav><br>

      <div id="text">
        <h1 id="heading">Awareness and Solutions:</h1><br>
        <div class="card-deck">
        <div class="card" style="width: 28rem;">
            <img src="../images/awareness.jpg" class="card-img-top" alt="..." width="20%">
            <div class="card-body">
              <h5 class="card-title">IS IT REALLY WORTHY?</h5>
              <p class="card-text"><b>Alternative energy sources are available for free of cost and do not tax the environment for their usage. 
                Power generation through alternative sources of energy is clean and green. If we shift to use power 
                generated from these sources, then carbon dioxide emission from the conventional energy sources will 
                be greatly reduced, and the problem of global warming will be solved in a few years.</b></p>
              
            </div>
          </div>
          <div class="card" style="width: 28rem;">
           <h1 style="background-color:aqua">TIMER FOR NEXT GREEN-UP DAY:</h1>
            <h2 id="timer"></h2>
            <div class="card-body">
              <h5 class="card-title">WHY?</h5>
              <p class="card-text">
                <ul id="ul1">
                
                    <li>Renewables Are <big> <b>Growing Faster</b> </big> than Fossil Fuels</li>
                    <li>Renewables Can <big><b> Cost Less </b></big> than Fossil Fuels</li>
                    <li>Renewable Energy is <big><b>Cleaner</b>  </big> than Fossil Fuels</li>
                    <li>Renewable energy provides <big><b>reliable power supplies </b></big>and <big><b>fuel diversification</b> </big>, which enhance energy security, lower risk of fuel spills, and reduce the need for imported fuels.</li>
                </ul>
              </p>
              
            </div>
          </div>
          </div>
          <div class="card" style="width: 50rem;top:10px">
            
            <div class="card-body">
              
              <p class="card-text">
                <h1> HOW ?</h1>
                <h4>Well there are several ways to achieve this phase shift!</h4></div></div>
            <div class="card" style="width: 50rem;top:40px;down:40px">
            
                    <div class="card-body">
                      
                      <p class="card-text">
                        
                        <h4><b>1.Rooftop Solar Panels</b>
                    
                            <p>
                                Depending on your latitude and the orientation of the panels, you could generate <big>10 or more watts per square foot</big>. A typical house consumes <big> at least a kilowatt of power</big>, so a few square feet of solar panels should be enough to power most or all of your needs.
                            </p></h4></div></div><br>
            <div class="card" style="width: 50rem;top:40px;down:40px">
            
                            <div class="card-body">
                              
                              <p class="card-text">
                                <h4><b>2.Wind Turbines</b>
                    
                                    <p>
                                        If you own an estate ,then you can opt for this one! Wind power is <big>more stable than solar</big>, and a good-sized wind turbine can easily generate most or all of your electricity needs. Depending on your area, wind might be a <big>better renewable investment than solar</big>.
                                    </p></h4></div></div><br>
            <div class="card" style="width: 50rem;top:40px;down:40px">
            
                                        <div class="card-body">
                                          
                                            <p class="card-text">
                                                <h4><b>3.Solar Ovens</b>
                                    
                                                    <p> Perhaps you're not ready to power your entire home with renewable energy. That's a big project, and maybe it's just not feasible for all sorts of reasons. You can still power a part of your home with renewable energy by building a solar oven.Using <big>one solar oven is equivalent to reducing 4 gas cylinders per annum!</big>

                                             </p></h4></div></div><br>
            <div class="card" style="width: 50rem;top:40px;down:40px">
            
                                                    <div class="card-body">
                                                      
                                                <p class="card-text">
                                            <h4><b>4.Solar Water Heaters</b>
                                     <p>                        Solar water heaters use the sun to heat a reserve of water, which can then be pumped through your radiators or out your faucets or showerheads. This<big> system is much cheaper than using gas or electricity</big> to heat your water, and is easier to install than solar panels.

                                                                </p></h4></div></div><br>
                                                                <div class="card" style="width: 50rem;top:40px;down:40px">
            
                                                                    <div class="card-body">
                                                                      
                                                                <p class="card-text">
                                                            <h4><b>Few Research Papers Which elaborate the importance of E-resources</b>
                                                     <p> <a href="https://escholarship.org/uc/item/09q3n18n" color="red" target="_blank"><font size="5px">Alternative Transportation Fuels: An Environmental and Energy Solution - Sperling ,Daniel</font></a><br><br><br>
                                                        <a href ="https://www.sciencedirect.com/science/article/pii/S0965856409000718" target="_blank"><font size="5px">The Alternative Motor Fuels Act, alternative-fuel vehicles, and greenhouse gas emissions-Yimin Liu</font></a>                                                                      
                                                        
                
                                                                                </p></h4></div></div><br>
                                
              
            
          
      </div>
    </div>
      
   <!-- Vertical navbar -->
   <div class="vertical-nav bg-white" id="sidebar">
      <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="../images/user.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
          <div class="media-body">
            <h4 class="m-0"> Welcome </h4>
            <p class="font-weight-light text-muted mb-0"><b><?php echo $_SESSION['username']; ?></b></p>
          </div>
        </div>
      </div>
  
      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
  
      <ul class="nav flex-column bg-white mb-0" id="main">
        <li class="nav-item">
          <a href="../findout/find_out.php" class="nav-link font-italic ">
                    <i class="fa fa-search-plus mr-3 text-primary fa-fw"></i>
                    Search & Find Out
                </a>
          </li>
        
        <li class="nav-item">
          <a href="../graphs/graph_and_interpretation.php" class="nav-link font-italic">
                    <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                    Statistical Analysis & Graphs
                </a>
        </li>
        <li class="nav-item">
          <a href="../polls/pollsurvey.php" class="nav-link font-italic">
                    <i class="fa fa-list-ul mr-3 text-primary fa-fw"></i>
                    Polls & Surveys
                </a>
        </li>
        <li class="nav-item">
          <a href="../updates/updates.php" class="nav-link font-italic">
                    <i class="fa fa-newspaper-o mr-3 text-primary fa-fw"></i>
                    Newsletters
                </a>
        </li>
        <li class="nav-item">
          <a href="../awareness/awarenesssolution.php" class="nav-link font-italic">
                    <i class="fa fa-sitemap mr-3 text-primary fa-fw"></i>
                    Awareness & Solutions  
                </a>
        </li>
      </ul>
  
      <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Login Credentials</p>
    
      <ul class="nav flex-column bg-white mb-0" id="login">
        <li class="nav-item">
          <a href="../index.php" class="nav-link font-italic">
                    <i class="fa fa-unlock mr-3 text-primary fa-fw"></i>
                    Register/Login
                </a>
        </li>
        <li class="nav-item">
          <a href="../logout.php" class="nav-link font-italic">
          <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
          Logout
                </a>
        </li>
      </ul>
  </div>
  <!-- End vertical navbar -->

  
  <div  id="y" class="w3-light-green">
    <div id="z" class="w3-container w3-transparent w3-center w3-opacity w3-padding-32">
        <h1 class="w3-margin w3-xlarge">Contact Us : </h1>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-github" ></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-square"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
        <br><br>
    </div>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"> </script> 

  <script src="awarenesssolution.js"></script>
  
</body> 

</html>					 