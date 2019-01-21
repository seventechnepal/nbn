<!DOCTYPE html>
<html>
<title>DACC-Orders</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: sans-serif}
body{
  background-image: url("https://www.avantida.com/wp-content/uploads/2016/05/Unknown.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  background-size:cover;
}
.Title-bar{
  position: absolute;
  background-color: #616161;
  width: 100%;
  height: 50px;
  top: 0px;
  left: 0px;
}
.User-info{
  background-color: white;
  position: absolute;
  left: 0px;
  background-color:#F5F5F5;;
  width: 350px;
}

ul li {
  padding-top: 5px;
}

</style>
<body>
  <!-- Top container -->
  <div class="Title-bar" >
    <button  class="w3-dark-grey" style=" border:none; margin-top:10px;"><a href="Schedule.php"style="text-decoration:none; ">&nbsp;	&nbsp;Back</a></button>
    <span class="w3-bar-item w3-right" style="padding-top: 5px;margin-top:10px;color:white;" >DACC-Assignment</span>
  </div>
    <hr>
    <div class="w3-white w3-margin-left w3-border w3-round w3-card" style="position:fixed;top:90px;height:350px;width:410px;">
      <form  method="post">
      <ul style="list-style-type: none;">
        <li><p>Warehouse Location : 	<input type="text" name="Warehouse_ID"> </p></li>
        <li><p>Depart : &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp; <input type="text" name="Depart" placeholder="00:00 am/pm"> </p></li>
        <li><p>Destination : &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	<input type="text" name="Destination"> </p></li>
        <li style="padding-top:20px;"><input class="w3-button w3-blue"type="submit"  name="submit"> </p></li>

      </ul>
    </form>

    </div>

</body>
<?php

  require_once('DB_connection.php');

  //(https://docs.microsoft.com/en-us/azure/mysql/connect-php)
  //$coon mean database connection just incase u dunno
  if(mysqli_connect_errno($conn)){
    die('Failed to connect to MySQL: '.mysqli_connect_error());
  }

  if(isset($_POST['submit'])){
    $data_missing = array();

    if(empty($_POST ['Warehouse_ID'])){
      $data_missing[]="Warehouse ID is missing";
    }else{
      $warehouse_ID = trim($_POST ['Warehouse_ID']);

    }

    if(empty($_POST ['Depart'])){
      $data_missing[]="Depart time is missing";
    }else{
      $depart = trim($_POST ['Depart']);

    }

    if(empty($_POST ['Destination'])){
      $data_missing[]="Destination is missing";
    }else{
      $destination = trim($_POST ['Destination']);

    }


    if(empty($data_missing)){

    }else{
      foreach($data_missing as $missing){
            echo "$missing<br/>";
    }

  }


  if(empty($data_missing)){
    if($stmt = mysqli_prepare($conn,"INSERT INTO schedule(Warehouse_Location,Depart,Destination)VALUES(?,?,?)")){
      mysqli_stmt_bind_param($stmt,'sss',$warehouse_ID,$depart,$destination);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);

    }

    // Close the connection
//mysqli_close($dbc);
  }

  }
?>
</html>
