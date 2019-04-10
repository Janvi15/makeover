<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include 'assets.php';
?>
</head>
<body>
<?php
include '../header.php';
?>
      
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewAllAppointments.php">View Appointments</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link disabled" href="manageaccount.php">Manage Account  <span class="sr-only">(current)</span></a>
        </li>
          </ul>
      <form class="form-inline ml-auto">
   
          <button type="submit" class="btn btn-white btn-just-icon btn-round">
              <i class="material-icons">settings_power</i>
          </button>
          
</form>
</div>
</div>
</nav>
</BR>
</div>

      <div>
      	<!-- <center><img src="page-under-construction3.gif" align="center;"></center>
         </div> -->
        <center>
        <form style="width: 50%;"> 
          <fieldset>
            <legend>Basic Details</legend>
            Owner Name:<input type="text" name="o_name">
            <img src="pic_trulli.jpg" alt="Italian Trulli" style="float: right;">
          </fieldset><br>

          <fieldset>
            <legend>Shop Details</legend>
            Shop Name:<input type="text" name="s_name"><br><br>
            Address:<input type="text" name="add">
            Street: <input type="text" name="street">
            City:<input type="text" name="city">
            Gallery:<input type="text" name="gallery">
          </fieldset><br>

          <fieldset>
            <legend>Privacy Details</legend>
            Change Password:<input type="text" name="s_name"><br><br>
            Confirm Password:<input type="text" name="add">
           Add Privacy Qustion:
          <select>
            <option>Name of your High School</option>
            <option>First Childhood Friend</option>
            <option>First Pet</option>
          </select>
          </fieldset>

          </form>
          </center>

