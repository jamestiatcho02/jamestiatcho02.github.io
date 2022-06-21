
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Discover Recipes</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>

      <div class="main">
        <div class="navbar">
            <div class="icon">
            
                <img src= drlogo.png class="logo">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.php"><span style="color:#DB9E2F">CONTACT</span></a></li>
                    <li><a href="account.php">ACCOUNT</a></li>
                </ul>
            </div>

             <div class="search">
                <input class="srch" type="search" name="" placeholder="Type text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div>

  <div class="container">
    <div class="content">
      <div class="leftcontent">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Manila,</div>
          <div class="text-two">Philippines</div>
        </div>

        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+6390 6372 0276</div>
          <div class="text-two">+6396 3434 5678</div>
        </div>

        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">DiscoverRecipe@gmail.com</div>
        </div>
      </div>
    </div>

      <div class="right-side">
        <div class="topic-text">Send us a Message</div>
       
     <form action="welcome.php" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div class="input-box message-box">
           <input type="text" placeholder="Enter your Message" name="message">
        </div>
        <div class="button">
          <a href="welcome.php"><button type="submit" name="submit_btn">Submit</button></td></a>
        </div>
      </form>
</div>
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