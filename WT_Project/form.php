<!DOCTYPE Html>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<title>Navigation Bar</title> 
	
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <link rel="stylesheet" href="pollsurvey.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"> </script> 

  <script src="pollsurvey.js"></script>
  <style>

    #names{
        border: 5 px solid black;
        border-radius:10% 10%;
        background-image:linear-gradient(to right,#fff,#fff,#fff);
        transition:0.4s;
    }
    #names:hover{
        transform:scale(1.04);

    }
</style>

</head> 

<body> 
	
    <div class="page-content p-5" id="content">

      <!-- Toggle button -->
      <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-3 mb-4"><i class="fa fa-bars" style="font-size:24px;color:red"></i></button>
      
      <div class="wordart blues">        
        <span class="text">E-Prakruthi</span></div>

      <nav class="navbar navbar-expand-sm bg-success navbar-dark" > 
        
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#"> 
          <img src= 
  "https://www.geeksforgeeks.org/wp-content/uploads/gfg_transparent_white_small.png"
          alt="logo" style="width:40px;"> 
        </a> 
        
        <div class="collapse navbar-collapse" id="collapse_Navbar"> 
          <ul class="navbar-nav"> 
            <li class="nav-item"> 
              <a class="nav-link" href="#">Home</a> 
            </li> 
          
            <li class="nav-item"> 
              <a class="nav-link" href="#">Abount Us</a> 
            </li> 
          
            <li class="nav-item"> 
              <a class="nav-link" href="#">Feedback</a> 
                      </li> 
                      
            <li class="nav-item"> 
              <a class="nav-link" href="#">Help</a> 
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
        <h1 id="heading">POLLS AND SURVEY:</h1>

<?php

if ( isset( $_POST['submit'] ) )
{
    
    echo '<h2 id="names">form data retrieved by using the $_POST METHOD<br>Your Response has been recorded succesfully</h2>';
    $a1 = $_POST['q1'];
    $a2= $_POST['q2'];
    $a3=$_POST['q3'];
    $a4=$_POST['q4'];
    $a5=$_POST['q5'];
    $a6=$_POST['q6'];
    $a7=$_POST['q8'];
        
    $host='localhost';
    $user='root';
    $pass='';
    $db='responses';
    $con=mysqli_connect($host,$user,$pass,$db);
    //if($con)
       // echo  '<h2 id="names">Your Response has been recorded</h2>';
    $sql="insert into survey (q1,q2,q3,q4,q5,q6,q7) values ('$a1','$a2','$a3','$a4','$a5','$a6','$a7')";
    $query=mysqli_query($con,$sql);
    //if($query)
        //echo '<h2 id="names">successfully</h2>';
    header('Location:http://localhost/polls/pollsurvey.html');
    }
    

    ?>
    
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="image.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">Name</h4>
          <p class="font-weight-light text-muted mb-0">User</p>
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
  
    <ul class="nav flex-column bg-white mb-0" id="main">
      <li class="nav-item">
        <a href="#" class="nav-link font-italic ">
                  <i class="fa fa-search-plus mr-3 text-primary fa-fw"></i>
                  Search & Find Out
              </a>
        </li>
            <li class="nav-item">
              <a href="#" class="nav-link font-italic">
                  <i class="fa fa-assistive-listening-systems mr-3 text-primary fa-fw"></i>
                  Greenometer    
              </a>
        </li>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  Statistical Analysis & Graphs
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-list-ul mr-3 text-primary fa-fw"></i>
                  Polls & Surveys
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-newspaper-o mr-3 text-primary fa-fw"></i>
                  Newsletters
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-sitemap mr-3 text-primary fa-fw"></i>
                  Awareness & Solutions  
              </a>
      </li>
    </ul>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Login Credentials</p>
  
    <ul class="nav flex-column bg-white mb-0" id="login">
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-unlock mr-3 text-primary fa-fw"></i>
                  Register
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-sign-in mr-3 text-primary fa-fw"></i>
                  Login
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-italic">
                  <i class="fa fa-thumbs-o-up mr-3 text-primary fa-fw"></i>
                  Subscribe
              </a>
      </li>
    </ul>
    </div>
  <!-- End vertical navbar -->

  
</body> 

</html>					 
  