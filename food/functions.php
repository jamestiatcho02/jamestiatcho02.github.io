<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "contact";

$db = mysqli_connect($server, $user, $pass, $database);

if(isset($_POST['submit_btn'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$query = "INSERT INTO message (name, email, message,) VALUES('$name', '$email', '$message')";
		mysqli_query($db, $query);
	}

?>