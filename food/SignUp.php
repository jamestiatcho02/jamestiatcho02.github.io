<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location:index.php");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (firstname, lastname, email, password)
					VALUES ('$firstname','$lastname', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registration Completed.')</script>";
				$firstname = "";
				$lastname = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discover Recipes</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img src= drlogo.png class="logo">
            </div>
        </div> 
        
        <div class="content">
             <h1>Cooking Will <br>Never Break Your<br>Heart</h1>
            <p class="par">Cooking requires proper equipment, ingredients, and a lot of passion.
                <br> Are you ready to discover new recipe?</p>

            
            <div class="slider">    
            </div>

                <div class="form">
                <form action="" method="POST" class="login-email">

                     <input type="text" placeholder="*First Name" name="firstname" value="<?php echo $firstname; ?>" required>

                     <input type="text" placeholder="*Last Name" name="lastname" value="<?php echo $lastname; ?>" required>

                     <input type="email" placeholder="*Email" name="email" value="<?php echo $email; ?>" required>

                    <input type="password" placeholder="*Password" name="password" value="<?php echo $_POST['password']; ?>" required>

                    <input type="password" placeholder="*Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>

                    <button name="submit" class="btnn">Register</button>

                    <p class="link">Already have an account?<br>
                    <a href="index.php">Login </a> here</a></p>
                </form>

                </div>
        </div>    
    </div>

                     <footer>
                 <div class="footer-content">
                    <h3>Discover Recipe</h3>
                    <p> Cooking will never break your heart</p><br>

                        <div class="icons">
                        <a href="https://www.facebook.com/ICHIDiscoverRecipe/"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://instagram.com/discover_recipes?igshid=YmMyMTA2M2Y="><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                

                        </div>
                </div>
                <div class="footer-bottom">
                    <p>copyright &copy;2022 DiscoverRecipe
                    
                </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
