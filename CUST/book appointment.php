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
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="SelectShop.php">Book Appointment <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="ManageAccount.php">History</a>
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
     <?php

          $amt1 = 0; 
          $query = "SELECT Hair_cut FROM facilities WHERE shop_id = 11";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc())
          {
            $amt1 = $row['Hair_cut'];
          }
        ?>
        <input class="form-check-input" type="checkbox" id="ch1" name="chkb[]" value="Hair-cut" onclick="display()">
        Hair&mdash;Cut............<?php echo $amt1; ?>

                <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">
      <?php

          $amt2 = 0; 
          $query = "SELECT Pedicure  FROM facilities WHERE shop_id = 11";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc())
          {
            $amt2 = $row['Pedicure'];
          }
        ?>
        <input class="form-check-input" type="checkbox" id="ch2" name="chkb[]" onclick="display()" value="Pedicure">
       Pedicure............<?php echo $amt2; ?>

              <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">
      <?php

          $amt3 = 0; 
          $query = "SELECT Facial_and_Clean_ups FROM facilities WHERE shop_id = 11";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc())
          {
            $amt3 = $row['Facial_and_Clean_ups'];
          }
        ?>
        <input class="form-check-input" type="checkbox" id="ch3" name="chkb[]" value="Facial & Clean Ups" onclick="display()">
    Facial & Clean&mdash;Ups............<?php echo $amt3; ?>

            <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">

        <?php

          $amt4 = 0; 
          $query = "SELECT Waxing_normal FROM facilities WHERE shop_id = 11";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc())
          {
            $amt4 = $row['Waxing_normal'];
          }
        ?>

        <input class="form-check-input" type="checkbox" id="ch4" name="chkb[]"  value="Waxing Normal" onclick="display()">

        Waxing Normal............<?php echo $amt4; ?>

              <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br><br>
    <label class="form-check-label">

        <?php

          $amt5 = 0; 
          $query = "SELECT Dettaning FROM facilities WHERE shop_id = 11";
          $result = $conn->query($query);
          while($row = $result->fetch_assoc())
          {
            $amt5 = $row['Dettaning'];
          }
        ?>
        <input class="form-check-input" type="checkbox" id="ch5" name="chkb[]"  value="Dettaning" onclick="display()">
        Dettaning............<?php echo $amt5; ?>

              <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label><br>
</div>
           </div>
                <div class="row">
                                    <div class="col">
                                        <label>Total Amount:&nbsp;</label>
                                       <input type="text" id="amut" value="00" name="amount">
                                    </div>
                                <div class="col">
                                <div class="row">
                                <div class="col">
                                <button class="btn btn-primary" name="add" style="width: 100px">
                                    <i class="fa fa-plus"></i> &nbsp;&nbsp;Book
                                </button><br>

                                <button type="button" class="btn btn-primary" name="add" style="width: 100px" onclick="location.reload(true)">
                                    <i class="fa fa-remove"></i>  &nbsp;&nbsp;Clear
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

   </script>

  <script type="text/javascript">
      
      function display() {
        
        var val1 = 0 ;
        var val2 = 0 ;
        var val3 = 0 ; 
        var val4 = 0 ;
        var val5 = 0 ;
        var value = 0 ;

        var checkBox1 = document.getElementById("ch1");
        var checkBox2 = document.getElementById("ch2");
        var checkBox3 = document.getElementById("ch3");
        var checkBox4 = document.getElementById("ch4");
        var checkBox5 = document.getElementById("ch5");
        
        var text = document.getElementById("amut");

        if (checkBox1.checked == true){
          val1 = <?php echo $amt1 ?>;
          value = value + val1;
          text.value = value ;
        } 

        if (checkBox2.checked == true){
          val2 = <?php echo $amt2 ?>;
          value = value + val2;
          text.value = value ;
        } 
        if (checkBox3.checked == true){
          val3 = <?php echo $amt3 ?>;
          value = value + val3;
          text.value = value ;
        } 
        if (checkBox4.checked == true){
          val4 = <?php echo $amt4 ?>;
          value = value + val4;
          text.value = value ;
        } 
        if (checkBox5.checked == true){
          val5 = <?php echo $amt5 ?>;
          value = value + val5;
          text.value = value ;
        } 
      }

    </script> 
</body>
</html>

