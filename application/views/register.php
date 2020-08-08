<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	  <style type="text/css">
	  	/*.row {
      	display: flex;
    	}

	    .row > div {
	      flex: 1;
	      background: lightgrey;
	      border: 1px solid grey;
	    }*/
	  	#textbox{
	  		width: 80%;
	  	}
	  	body{
	  		margin-left: 10%;
	  		margin-right: 10%;
	  		background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(<?php echo base_url('img/kota-depok.jpg')?>);
	  		font-family: verdana;
	  		color: white;
	  		opacity: 0.9;	
	  	}
	  	.col-centered {
		  float: none;
		  margin-right: auto;
		  margin-left: auto;
		}
	  </style>
</head>
<body>
	<h2 style="text-align: center;margin-top: 5%">Register</h2>
	<div class="container-fluid" style="margin-top: 2%; border: 1px solid grey;background-color:#3598db">
		<div class="row" style="margin-top: 5%;width: 1200px">
			<div class="col-md-2"style="text-align: right;"><b>NIK</b></div>
			<div class="col-md-10" ><input type="text" id="textbox"> </div>
		</div>
		<div class="row" style="margin-top: 5%;width: 1200px">
			<div class="col-md-2" style="text-align: right;"><b>Username</b></div> 
			<div class="col-md-10"><input type="text" id="textbox"> </div>
		</div>
		<div class="row" style="margin-top: 5%;width: 1200px">
			<div class="col-md-2" style="text-align: right;"><b>Password</b></div> 
			<div class="col-md-10"><input type="text" id="textbox"> </div>
		</div>
		<div class="row" style="margin-top: 10%;margin-bottom: 2%">
			<div class="col-md-6 text-left">
				  <button onclick="location.href='<?php echo base_url();?>index.php/welcome/rakyat'" class="rounded" style="background-color:#00A3CC ;color: white;border: 2px solid black"><b>Kembali Ke Login</b></button>
			</div>
			<div class="col-md-6 text-right">
				 <button onclick="location.href='<?php echo base_url();?>index.php/welcome/form'" class="rounded" style="background-color:#00A3CC ;color: white;border: 2px solid black"><b>Register</b></button>
			</div>
		</div>
	</div>

<script>
	function redirect(url){
	window.location.href = url;
	return false;
	}
	</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>