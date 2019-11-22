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
  
  <link rel="stylesheet" href="graph_and_interpretation.css">
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
        <h1 id="heading">Graphs and Interpretations:</h1><br>
          <caption><h3 id="caption">Analysis on Natural Resources :</h3></caption>
            <table id="table1">
              <ul>
                <tr>
                  <td><li>This graph symbolizes the usage of traditional fuel over several years.</li></td>
                  <td rowspan="3"><img src="../images/graph1.png" width="500px" height="220px" class="popup" onclick="poped1()"/>
                    <span class="popuptext1" id="myPopup1"><img src="../images/graph1.png" width="550px" height="380px"></span>
                  </td>
                  </td>
                </tr>
                <tr>
                  <td><li>Period on X-axis versus Energy produced in GTOE on Y-axis.</li></td>
                </tr>
                <tr>
                  <td><li>GTOE - GigaTons of Oil Equivalent.</li></td>
                </tr>
              </ul>
            </table><br><br><br><br>

            <caption><h3 id="caption">Interpretation on Renewable resources :</h3></caption>
            <table id="table2">
              <ul>
                <tr>
                  <td rowspan="4"><img src="../images/graph2.png" width="500px" height="220px" class="popup" onclick="poped2()"/>
                    <span class="popuptext2" id="myPopup2"><img src="../images/graph2.png" width="550px" height="380px"></span>
                  </td>
                  <td><li>This is a stacked bar graph.</li></td>
                </tr>
                <tr>
                  <td><li>It interprets the usage of renewable resources in past years and predicts its future use.</li></td>
                </tr>
                <tr>
                  <td><li>X-axis : Period ; Y-axis : Relative Quantity of Usage</li></td>
                </tr>
              </ul>
              </table><br><br><br><br>

                <caption><h3 id="caption">Solar Panel Instalation and Cost :</h3></caption>
                <table id="table3">
                  <ul>
                    <tr>
                      <td><li>This is a continuous line plot.</li></td>
                      <td rowspan="4"><img src="../images/graph3.jpg" width="500px" height="220px" class="popup" onclick="poped3()"/>
                      <span class="popuptext3" id="myPopup3"><img src="../images/graph3.jpg" width="550px" height="380px"></span>
                    </td>
                    </tr>
                    <tr>
                      <td><li>It includes two graphs and their interpretation as their X-axis is same.</li></td>
                    </tr>
                    <tr>
                      <td><li>X-axis : Period ; Y-axis on left : Price ; Y-axis on right : Solar Panel Installation.</li></td>
                    </tr>
                  </ul>
                  </table><br><br><br><br>

                  <caption><h3 id="caption">Pattern of Patents on Alternate Energy Sources :</h3></caption>
                  <table id="table4">
                    <ul>
                      <tr>
                        <td rowspan="4"><img src="../images/graph4.svg" width="500px" height="220px" class="popup" onclick="poped4()"/>
                          <span class="popuptext4" id="myPopup4"><img src="../images/graph4.svg" width="550px" height="380px"></span>
                        </td>
                        <td><li>This is a left skewed plot.</li></td>
                      </tr>
                      <tr>
                        <td><li>It is a continuous representation of stacked graphs.</li></td>
                      </tr>
                      <tr>
                        <td><li>X-axis : Period ; Y-axis : Number of patents.</li></td>
                      </tr>
                    </ul>
                    </table><br><br><br><br>

                  <caption><h3 id="caption">Chart on Investment in Renewable Energies :</h3></caption>
                  <table id="table5">
                    <ul>
                      <tr>
                        <td><li>This is a pie chart.</li></td>
                        <td rowspan="4"><img src="../images/graph5.png" width="500px" height="220px" class="popup" onclick="poped5()"/>
                          <span class="popuptext5" id="myPopup5"><img src="../images/graph5.png" width="550px" height="380px"></span>
                        </td>
                      </tr>
                      <tr>
                        <td><li>It signifies the investment done by different countries in the year 2018.</li></td>
                      </tr>
                      <tr>
                        <td><li>Labels : Countries ; Values : Investments.</li></td>
                      </tr>
                    </ul>
                  </table><br><br>
        

                  
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

  <script src="graph_and_interpretation.js"></script>

</body> 

</html>					 
