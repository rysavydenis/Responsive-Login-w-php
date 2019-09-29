<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url('pic.jpg');
  background-repeat:no-repeat;
  background-size:cover;
  align:center;
  background-color: hsla(0,0%,10%,0.70);
  background-blend-mode: overlay;
  
}

.topnav {
  overflow: hidden;
  background-color:black;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: rgb(76, 147, 175);
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

#main {
  padding:20px;
  text-align:center;
  margin-top:15%;
  margin-bottom:500px;
  color:white;
  text-align:center;

}

#footer {
  position:fixed;
  bottom:0px;
  height: 100px;
  width:  100%;
  background-color:#4c93af;
  text-align:center;
  padding-top:25px;

}
 
h1 {
  margin-bottom:50px;
}

#message {
  
  color:red;
  text-align:center;
  background-color:#4c93af;
  padding:10px;
  border-radius:5%;



}

input {
  margin:15px;
}

h4 {
  background-color:#4c93af;
  color:black;
}

</style>
</head>
<body>





<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<div id="main">


<?php 
   $badUserCredentials = $_GET["badUserCredentials"];


   if($badUserCredentials) {
     echo "<h2 id='message'>Username or Password is wrong! Please try again.</h2>";
     echo "<script>document.getElementById('username').focus();</script>";
     echo"<h4>(name = rysavy, password = password123)</h4>";
   }

?>
<?php 

if(isset($_SESSION['isloggedIn'])){
  echo"<p>You are already logged in !</p>";
} else {

$theForm  = <<<THEFORM


<h1>Welcome to my LogIn-example Page </h1>
<p>'Please enter your name and password to log in.'</p>


<form method="post" action="loginresponse.php">
    <input type="text" 
    name="userName" 
    id="username"
    placeholder="Enter your name here ..">

    <input type="password" 
    name="password" 
    id="password"
    placeholder="Enter your password here..">

    <input type="submit"
    value="Log In">


 </form>
</div>

THEFORM;
echo $theForm;
}
?>





</div>



<div id="footer">
    <p>&copy; 2019 exampleFooter.com<p>
</div>






<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>