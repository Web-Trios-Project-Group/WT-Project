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
    $a7=$_POST['q7'];
    $a8=$_POST['q8'];
        
    $host='localhost';
    $user='id11661843_eprakruthi';
    $pass='9876@1234';
    $db='id11661843_multi_login';
    
    $con=mysqli_connect($host,$user,$pass,$db);
    //if($con)
       // echo  '<h2 id="names">Your Response has been recorded</h2>';
    $sql="insert into survey (q1,q2,q3,q4,q5,q6,q7,q8) values ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8')";
    $query=mysqli_query($con,$sql);
    //if($query)
        //echo '<h2 id="names">successfully</h2>';
    header('Location:pollsurvey.php');
} 
?>
  