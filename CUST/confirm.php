<!DOCTYPE html>
<html>
<head>
	<title>confirmation</title>
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
<div style="padding:10px;">
        <div style="width:100%;text-align:center;padding-left:30px;">
            <div class="row" style="width:100%;">

               <div class="col">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <!--Title-->
                            <div class="card-text">
                                <h4 class="card-title">CONFIRM</h4>
                            </div>
                        </div>
                        <!--Section Body-->
                        <div class="card-body">
                            <!-- <form method="post"> -->
                                <div class="row">
                                    <div class="col-3">
                                    	Date-Time : 
                                       <input type="text" name="time" disabled value=" <?php  echo $_COOKIE['time']; ?>">
                                    </div>
                                                    
                                <div class="col">
                                        Facilities :  
                                       <input type="text" name="facilities" disabled value=" <?php  echo $_COOKIE['facilities']; ?>">
                                </div>

                                <div class="col">
                                        Amount :  
                                       <input type="text" name="amount" disabled value=" <?php  echo $_COOKIE['amount']; ?>">
                                    </div>
                                  </div>
 
                                <div class="row">
                                    <div class="col">
                                    	<a href="confirmProcess.php">
                                    	<button class="btn btn-primary" name="confirm" style="width:200px">
                                    <i class="fa fa-check"></i>&nbsp;Confirm
                                        </button>
                                        </a>

                                   		<a href="index.php">
                                        <button class="btn btn-primary" name="cancel" style="width: 200px">
                                    <i class="fa fa-times"></i> &nbsp;&nbsp;Cancel
                                    </button>
                                    </a>


                                    </div>
                                 </div> 
                                 <!-- </form>   -->


</body>

<script type="text/javascript">
	
	function add() {
		location.href = "index.php";
	}
</script>
</html>