<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$db = mysqli_connect('localhost', 'root', '', 'multi_login');
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['email'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT multi_login FROM users WHERE email='$email' AND password='$password' LIMIT 1";
$ses_sql = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['emal'];
?>