<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discover Recipes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        
*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: url(foodbg.jpg);
    background-position: center;
    background-size: cover;
    height: 1000px;
}
.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    width: 200px;
    height: 200px;
    padding-left: 60px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.container{
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 500px;
  padding-top: 300px;
  padding-bottom: 70px;
 
}
.content{
  display: flex;
  align-items: center;
  width: 700px;
  height: 260PX;
  background: #fff;
  border-radius: 6px;
  box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
}
.continue{
	padding-left: 70px;
	padding-bottom: 140px;
	padding-top: 20px;
}
.continue h1{
	font-size: 30px;
	padding-top: 20px;
}

.design button{
    background-color: darkslategray;
    color: #000;
    font-size: 23px;
    font-weight: 600;
    border-radius: 10px;
    width: 200px;
    height: 60px;
    border:1px;

}
.design{
    padding-top: 90px;
    padding-left: 30px;
}

.design button:hover{
    color: #fff;
}

</style>
</head>
<body>

      <div class="main">

      	<div class="icon">
            
                <img src= drlogo.png class="logo">
        </div>
     
    <div class="container">
    <div class="content">
    <div class="continue">
	<h1>Your Message has been Sent.</h1>
	<h1>Thank you!</h1>
    </div>
    
     <div class="design"> 
    <a href="contact.php"><button>  Continue </button></a>
     </div>

</div>
</div>
</div>
</body>
</html>
