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


</style>
<body>
  <!-- Top container -->
  <div class="Title-bar" >
    <button  class="w3-dark-grey " style=" border:none; margin-top:10px;"><a href="index.php"style="text-decoration:none; " >Log-out</a></button>
    <span class="w3-bar-item w3-right" style="padding-top: 5px;margin-top:10px;color:white;" >DACC-Assignment</span>
  </div>
  <nav class="w3-sidebar " style="background-color:#F5F5F5;z-index:3;width:300px;margin-top:50px;" id="mySidebar"><br>
    <div class="w3-container w3-row" >
      <div class="w3-col s4">
        <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
      </div>
      <div class="User-info" style="padding-left:10px;">
        <span>Welcome, <strong>Admin</strong></span><br>

      </div>
    </div>
    <hr>

    <div class="w3-bar-block">

        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="Homepage.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Homepage</a>
        <a href="Orders.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Orders</a>
        <a href="Schedule.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Schedule</a>
        <a href="Add_container.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-truck fa-fw"></i>  Add Container</a><br><br>

    </div>
  </nav>

<div class="w3-collapse w3-white w3-animate-left" style=" height: 100%; position: fixed;margin-left: 300px;top:50px;width: 350px; ">
  <div class="w3-bar-block" style="padding-top:47px;">
    <a href="Cargo_Order.php" class="w3-bar-item w3-hover-blue w3-button w3-padding ">	&nbsp;	&nbsp;	&nbsp;	&nbsp;Order Cargo</a>
    <a href="Cargo_shift.php" class="w3-bar-item w3-hover-blue w3-button w3-padding ">	&nbsp;	&nbsp;	&nbsp;	&nbsp;Shift Cargo</a>
    <a href="Cargo_view.php"  class="w3-bar-item w3-hover-blue w3-button w3-padding ">	&nbsp;	&nbsp;	&nbsp;	&nbsp;View Order</a>
 </div>
</div>


</body>




?>
</html>
