<!DOCTYPE html>
<html>
<head><title>DACC login</title></head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background:#e0e0e0;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;

}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: white;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #2196F3;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background:#00BFFF;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: white; /* fallback for old browsers */

  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form" method="post">
        <input type="text" placeholder="name">
        <input type="password" placeholder="password">
        <input type="text" placeholder="email address">
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" method="post">
        <input type="text" name="username"  placeholder="username">
        <input type="password"  name="password" placeholder="password">
        <button type="submit" name="submit">login</button>
          <p></p>
        <button><a href="Registration.php" style="text-decoration:none;color:white;">Register</button>
      </form>
    </div>
  </div>
</body>
</html>
<?php

 require_once('DB_connection.php');

 if(mysqli_connect_errno($dbc)){
   die('Failed to connect to MySQL: '.mysqli_connect_error());
 }
 if(isset ($_POST['submit'])){
   $Username = $_POST['username'];
   $Password = $_POST['password'];
   echo "SUCCESS";

   echo $Username = stripcslashes($Username);
   echo $Password = stripcslashes($Password);


   $row = array();
   $query = "Select * FROM user WHERE username = '$Username' and password = '$Password'";
   $getID= mysqli_fetch_assoc(mysqli_query($dbc,$query));


   $row [1]= $getID['username'];
   $row [2]= $getID['password'];

   if($row[1] == $Username && $row[2]== $Password){
     header("Location:https://localhost/cms/Homepage");
   }else{
 		echo"Please insert the correct username";
 	}
 }

?>
