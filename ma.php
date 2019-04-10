<!DOCTYPE html>
<html>
<head>
	<title>1223</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include 'assets.php';

?>
<style type="text/css">
  .input
  {
    border-radius: 9px; 
    width:90%; 
    background-color: rgba(0,0,0,0.1);
   border:#ccc 1px solid;
   color: #ccc;
   line-height: 28px;
   margin-top: 8px;
  }
</style>

</head>
<body>
	<div style="padding: 30px;background-color: #99003d;color: white;text-align: center;font-size: 40px;width: 100%;height: 165px">
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
          <a class="nav-link disabled" href="ManageAccount.php">History</a>
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

<div style="width:90%; margin-left: 5%; background-color: #333; height: 1200px;" >
	<div style="width:30%; background-color: rgba(0,0,0,0.4 ); float: left; height:800px; ">
		<div style="width:100%; background-color: white; padding:20px;">
hhhgg
			
		</div>
    
	</div>
  
  <div style="float: right; width: 65%; margin-right: 2.5%; height:300px; ">
    <div style="border:2px solid #666;margin-top: 4px; padding: 12px; ">
      <div id="c1"style="padding:8px; border-bottom: 1px solid; color:#f7f7f7;font-size: 26px; font-weight: bold; line-height: 40px; margin-bottom: 20px; ">Contact Information
      </div>
      <div style="width:50%; float: left;">
      <span style="color: #f7f7f7; font-size: 18px;">&nbsp;First name<br></span>
      <input type="text" name="fname" class="input">
       </div>
      <div style="float:right;width:50%;">
       <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Last name<br></span>
      <input type="text" name="lname" class="input">
    </div>
    <div style="float:left;width:50%; margin-top: 30px;">
       <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Email Address<br></span>
      <input type="text" name="eadd" class="input">
    </div>
     <div style="float:right;width:50%; margin-top: 30px;">
       <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Contact No<br></span>
      <input type="text" name="pass" class="input">
    </div>
    <div style="float:left; width:100%; margin-top: 30px; margin-bottom: 30px;">
       <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Password<br></span>
      <input type="text" name="cno" class="input" style="width: 45%;">
    </div>
    <div style="width:100%; ">
     <center> <input type="submit" name="Save" value="Save" style="border-radius: 8px; width: 100px;"></center>
    </div>
  </div>
 <div id="sc1"style="border:2px solid #666;margin-top: 4px; padding: 12px; margin-top: 30px;">
<div style="padding:8px; border-bottom: 1px solid; color:#f7f7f7;font-size: 26px; font-weight: bold; line-height: 40px; margin-bottom: 20px; margin-top: 3px;">Social Connection
      </div>
      <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Facebook &nbsp;&nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%"><br><br>
      </div>
       <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Twitter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%"><br><br>
      </div>
       <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Instagram &nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%; margin-bottom:20px;">
      </div>
      <div>
         <center> <input type="submit" name="Save" value="Save" style="border-radius: 8px; width: 100px;"></center>
      </div>
    </div>
 <div id="sc1"style="border:2px solid #666;margin-top: 4px; padding: 12px; margin-top: 30px;">
<div style="padding:8px; border-bottom: 1px solid; color:#f7f7f7;font-size: 26px; font-weight: bold; line-height: 40px; margin-bottom: 20px; margin-top: 3px;">Address
      </div>
      <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Street &nbsp;&nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%"><br><br>
      </div>
       <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%"><br><br>
      </div>
       <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;Pin Code &nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%; margin-bottom:20px;">
      </div>
      <div>
        <span style="color: #f7f7f7; font-size: 18px;">&nbsp;State &nbsp;&nbsp;</span>
        <input type="text" name="fc" class="input" style="width: 50%; margin-bottom:20px;">
      </div>
      <div>
         <center> <input type="submit" name="Save" value="Save" style="border-radius: 8px; width: 100px;"></center>
      </div>
    </div>
 
 

      </div>
      <div></div>
    </div>
</div>

</body>
</html>