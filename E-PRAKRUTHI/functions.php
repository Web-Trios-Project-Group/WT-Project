<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'id11661843_eprakruthi', '9876@1234', 'id11661843_multi_login');

	
	if (!$db) {
		echo "Not Connected!!";
		//die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
	}

	// variable declaration
	$username = "";
	$email    = "";

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	// REGISTER USER
	function register(){
		global $db;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);

		$password = md5($password_1);//encrypt the password before saving in the database
		
		$query = "INSERT INTO users (username,email,password) 
				  VALUES ('$username', '$email', '$password')";

		$result = mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		if($result){
            echo "<script>
					alert('Registered Successfully!!')</script>";
        }	
	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username;

		// grap form values
		$username  =  e($_POST['username']);
		$password = e($_POST['password']);
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { // user found			
			$_SESSION['username'] = $username;
			header("Location: updates/updates.php");
			// echo "<script>
			// 		alert('Logged in Successful')</script>";
			
		}else {
			echo "<script>
					alert('User Not Found')</script>";
		}
	
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	mysqli_close($db);

?>