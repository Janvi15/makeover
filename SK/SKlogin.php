<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

     <!--  <?php include 'Connection.php'; ?> -->
</head>
<body>
  <?php
   include '../header.php';
  ?>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active" ><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Sign In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          
          
          <form id="Sign-UpForm" action="SKSignInProcess.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="SFname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="SLname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="SEmail" />
          </div>

           <div class="field-wrap">
              <label>
                Contact No
                <span class="req">*</span>
              </label>
              <input type="number" required autocomplete="off" name="SPNo" />
            </div>
          
           <div class="field-wrap">
              <label>
                Shop Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="shop_name" />
            </div>
          <div class="field-wrap">
            <label>
              Shop Street<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="shop_street" />
          </div>
            <div class="field-wrap">
              <label>
                Shop City<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="shop_City" />
            </div>
            <div class="field-wrap">
              <label>
                Shop State<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="shop_State" />
            </div>
         <input type="submit" class="button button-block" name="btnSignup" value="Get Started" />
        </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form id="Sign-inForm" action="SkSignInProcess.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="LEmail" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="LPsw" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <input type="submit" class="button button-block" value="Log In" name="SignIn">
          
        <!--   <button name="login" />Log In</button> -->
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

<?php
  if (!empty($_POST['Sign-inForm']))
  {
    if (isset($_POST['Sign-inForm'])) {
      alert("hii");
    }
    
  }
?>
