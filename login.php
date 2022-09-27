<?php
session_start();
require_once "functionClass.php";
if ($_POST) 
{		
	$nama = $_POST["nama"];
	$date = $_POST["date"];
	$result1 = substr($date, 0, 4);
	$db = new functionClass();
	if(intval($result1) - intval(date('Y')) >= 0){
		echo "<script>alert('Maaf anda terlalu muda untuk melakukan voting');</script>";
	}
	else{
		if($date!=""){
			if ($db->insert($nama, $date))
			{
				$_SESSION['user_id']=$db->getId($nama,$date);
				header("Location: .");
				exit();
			}
			else
			{
				echo "<script>alert('Anda sudah vote');</script>";
			}
		}
		else{
			echo "<script>alert('Isi tangal lahir anda');</script>";
		}
	}
}
?>
<html>
	<head>
		<title>Login</title>
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/signin.css">

		<!--  jQuery -->
		<script type="text/javascript" src="js/jquery.min.js"></script>

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>

		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>

		<script>
    	$(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        	})
    	})
		</script>

		<style>

    	.button 
    	{
  		display: inline-block;
  		border-radius: 4px;
  		background-color: #f4511e;
  		border: none;
  		color: #FFFFFF;
  		text-align: center;
  		font-size: 28px;
  		padding: 5px;
  		width: 250px;
  		height: 75px;
  		transition: all 0.5s;
  		cursor: pointer;
  		margin: 5px;
		}

		.button span 
		{
  		cursor: pointer;
  		display: inline-block;
  		position: relative;
  		transition: 0.5s;
		}

		.button span:after 
		{
  		content: '';
  		position: absolute;
  		opacity: 0;
  		top: 0;
  		right: -50px;
  		transition: 1s;
		}

		.button:hover span 
		{
  		padding-right: 40px;
		}

		.button:hover span:after 
		{
  		opacity: 1;
  		right: 0;
		}
		</style>


	</head>

	<body >


	<div class="container">
		<form action="login.php" method="post" class="form-signin">

		<div align="center">
  			<img src="img/ew-logo.png" height="30%">
			
			<div>
				<label class="control-label" for="nama" class="sr-only"><font color="purple">Nama Lengkap</label>
				<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required autofocus>
				<label class="control-label" for="date"><font color=""></label>
			</div>

			

			<div class="form-group"> <!-- Date input -->
        		<label class="control-label" for="date"><font color="purple">Tanggal Lahir</label>
        		<input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text" readonly/>
        		<label class="control-label" for="date"><font color=""></label>
      		</div>


			<button class="button" style="vertical-align:middle" name="login" type="submit"><span>Login</span>
		</div>
					
		</form>
	</div>

	</body>
</html>