<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include 'assets.php';
include 'Connection.php';
?>
</head>
<body>

<div style="padding: 50px;background-color: black;color: white;text-align: center;font-size: 40px;width: 100%;height: 200px">
    MAKEOVER<BR><br>Salon & Beauty
      </div>
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
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SelectShop.php">Book Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="ManageAccount.php">Manage Account</a>
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

<div style="padding:10px;">
        <div style="width:100%;text-align:center;padding-left:30px;">
            <div class="row" style="width:100%;">

               <div class="col">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <!--Title-->
                            <div class="card-text">
                                <h4 class="card-title">Add Details</h4>
                            </div>
                        </div>
                        <!--Section Body-->
                        <div class="card-body">
                            <form method="post" action="bookApp.php" >
                                <div class="row">
                                    <div class="col-3">
                                       <input type="text" class="form-control datetimepicker" placeholder="Select Date and Time" name="dateTime" />
                                    </div>
                                                    
                                <div class="col">
                                        <div class="form-check" style="border: solid;">
                                  <fieldset><legend>Select Facilities</legend>


    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" id="ch1" name="chkb1" value="Hair-cut" onclick="amo()">
        Hair&mdash;Cut............
        <?php

          $amt = 0; 
          $query = "SELECT Hair_cut FROM facilities WHERE shop_id = 11";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc())
          {
            $amt = $row['Hair_cut'];
          }

          echo $amt;
        ?>
                <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" id="ch2" name="chkb2" onclick="amount()" value="Pedicure">
       Pedicure............200/-
              <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="chkb3" value="Facial & Clean Ups">
    Facial & Clean&mdash;Ups............200/-
            <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="chkb4"  value="Waxing Normal">
        Waxing Normal............200/-
              <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="chkb5"  value="Dettaning">
        Dettaning............200/-
              <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br>
</div>
                              </div>
                    <div class="row">
                                    <div class="col">
                                        <label>Total Amount:&nbsp;</label>
                                       <input type="text" id="amt" value="00" name="amount">
                                    </div>
                                <div class="col">
                                <div class="row">
                                <div class="col">
                                <button class="btn btn-primary" name="add" style="width: 100px">
                                    <i class="fa fa-plus"></i>  Book
                                </button>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
        </div>


            </div>
        </div>
    </div>

     <script type="text/javascript">
      $('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});

      function amo() {
        
        alert("Hii");
      }

    </script>
</body>
</html>

