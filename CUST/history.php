<!DOCTYPE html>
<html>
<head>
	<title>History</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include 'assets.php';
include 'Connection.php';
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SelectShop.php">Book Appointment</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link disabled" href="ManageAccount.php">History <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="ManageAccount.php">Manage Account</a>
        </li>

          </ul>
      <form class="form-inline ml-auto">
   
          <button type="submit" class="btn btn-white btn-just-icon btn-round" title="Log out">
              <i class="material-icons">settings_power</i>
          </button>
      </form>
    </div>
  </div>
</nav>
<table class="table">

   
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Appointment Date</th>
            <th>Facilities</th>
            <th>Shop Name</th>
            <th class="text-right">Amount</th>
        </tr>
    </thead>

    <tbody>
        <tr>
           
         
        </tr>
    </tbody>

   
            
</table>


</body>
</html>