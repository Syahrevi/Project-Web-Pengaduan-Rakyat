<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	  		width: 90%;
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
	<h2 style="text-align: center;margin-top: 5%">Login</h2>
	<div class="container-fluid rounded" style="margin-top: 2%; border: 1px solid grey;background-color:#3598db">
		<div class="row" style="margin-top: 5%;width: 1200px">
			<div class="col-md-1"style="text-align: right;"><b>Username</b></div>
			<div class="col-md-11" ><input type="text" id="textbox"> </div>
		</div>
		<div class="row" style="margin-top: 5%;width: 1200px">
			<div class="col-md-1" style="text-align: right;"><b>Password</b></div> 
			<div class="col-md-11"><input type="text" id="textbox"> </div>
		</div>
		<div class="row" style="text-align: center;margin-top: 5%;margin-bottom: 1%">
			<div class="col-md-2 col-centered">
				 <button onclick="location.href='<?php echo base_url();?>index.php/welcome/form'" class="rounded" style="background-color:#00A3CC ;color: white;border: 2px solid black"><b>Lanjut</b></button>
			</div>
		</div>
		<div class="row" style="text-align: center;margin-top: 1%;margin-bottom: 1%;">
			<div class="col-md-2 col-centered">
				 <button onclick="location.href='<?php echo base_url();?>index.php/welcome/register'" class="rounded" style="background-color:#00A3CC ;color: white;border: 2px solid black"><b>Register</b></button>
			</div>
		</div>

	</div>

<script src="<?php echo base_url('https://code.jquery.com/jquery-3.5.1.min.js')?>" crossorigin="anonymous"></script>
<script>
	function redirect(url){
	window.location.href = url;
	return false;
	}
	</script>
        <script src="<?php echo base_url('assets/assets/js/bootstrap.bundle.min.js')?>" crossorigin="anonymous')?>"></script>
        <script src="<?php echo base_url('assets/assets/js/scripts.js')?>"></script>
        <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/assets/demo/chart-area-demo.js')?>"></script>
        <script src="<?php echo base_url('assets/assets/demo/chart-bar-demo.js')?>"></script>
        <script src="<?php echo base_url('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')?>" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/assets/demo/datatables-demo.js')?>"></script>
        <script src="<?php echo base_url('https://code.jquery.com/jquery-3.4.1.slim.min.js')?>" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')?>" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')?>" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>