<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discover Recipes</title>
    <link rel="stylesheet" href="index.css">
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
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Email " value="<?php echo $email; ?>" required >
                    <input type="password" name="password" placeholder="Password " value="<?php echo $_POST['password']; ?>" required>
                    <button name="submit" class="btnn">Login</button>

                    <p class="link">Don't have an account?<br>
                    <a href="SignUp.php">Sign up </a> here</a></p>
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
                        <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
                

                        </div>
                </div>
                <div class="footer-bottom">
                    <p>copyright &copy;2022 DiscoverRecipe
                    
                </div>
                                
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>