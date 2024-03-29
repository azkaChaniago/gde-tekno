<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		/*font: 13px/20px normal Helvetica, Arial, sans-serif;*/
		font-family: 'Roboto', sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.my-form {
		width: 50%;
		margin: 0 auto;
	}

	.none {
		list-style: none;

	}
	</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>

<div class="container">

	<div class="text-center">
		<h1>Google Developers Expert Sharing</h1>
		<h3>UNIVERSITAS TEKNOKRAT INDONESIA</h3>
		<p>13 Juli 2019</p>	
	</div>

	<div class="text-center"><h2>REGISTRASI ULANG</h2></div>
	
	
	<form class="my-form" action="<?= site_url('welcome/login')?>" method="POST">
	  <div class="form-group">
	    <label for="nama_peserta">Nama</label>
	    <input type="text" class="form-control" name="nama" id="nama_peserta" aria-describedby="emailHelp" placeholder="Nama Lengkap">
	  </div>
	  <div class="form-group">
	    <label for="email_peserta">Alamat Email</label>
	    <input type="email" class="form-control" name="email" id="email_peserta" placeholder="example@mail.com">
	  </div>
	  <button type="submit" class="btn btn-block btn-primary">Submit</button>
	</form>


	<br><br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<img src="<?= base_url('assets/img/gde.png')?>" class="img-fluid" width="200"/>
		</div>
		<div class="col-md-3">
			<img src="<?= base_url('assets/img/gdg.png')?>" class="img-fluid" width="200"/>
		</div>
	</div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>