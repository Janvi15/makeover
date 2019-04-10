<!DOCTYPE html>
<html>
<head>

  <?php include 'Connection.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include 'assets.php';
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


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
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewAllAppointments.php">View Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="manageaccount.php">Manage Account</a>
        </li>
          </ul>
      <form class="form-inline ml-auto">
   
          <button type="submit" class="btn btn-white btn-just-icon btn-round">
              <i class="material-icons"></i>
          </button>
</form>
</div>
</div>
</nav>
</BR>
</div>

<?php
    $query = "SELECT customer_id, facility, date_time, amount FROM appointment_detail LIMIT 3";

          $result = $conn->query($query);
      ?>

<table class="table">

	 
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Customer Name</th>
            <th>Facilities</th>
            <th>Date and Time</th>
            <th class="text-right">Amount</th>
        </tr>
    </thead>

    <?php 

        $i = 1;
		    while($total = mysqli_fetch_row($result))
		    {
	 ?>

    <tbody>
        <tr>
            <td class="text-center"><?php echo $i; ?></td>
            <td><?php echo $total[0]; ?></td>
            <td><?php echo $total[1]; ?></td>
            <td><?php echo $total[2]; ?></td>
            <td class="text-right"><?php echo $total[3]; ?></td>
         
        </tr>

         <?php
         $i++;

    }
        ?>
        <tr>
        	<td colspan="5" align="center"><a href="viewAllAppointments.php"> View All Appontments>></a></td>
        </tr>
    </tbody>

   
						
</table>

</body>
</html>

<?php
		
	mysqli_close($conn);
?>