<?php
require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PG seeKing - Live in a better space</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/effort.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid p-0" class="text-justify">

<style>
	.sha{
		-webkit-box-shadow: 0px 15px 54px 0px rgba(143,143,143,1);
		-moz-box-shadow: 0px 15px 54px 0px rgba(143,143,143,1);
		box-shadow: 0px 15px 54px 0px rgba(143,143,143,1);
	}
</style>

<script>
$(document).ready(function () {

var space = '<br><div class="alert text-center alert-dark alert-dismissible fade show col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Enter Area Or Street Name!</strong><br><i>Example:</i> Porur Or Shakthi Nagar</div>';

var lodSpin = '<center class="mt-5"><div class="spinner-grow text-muted mr-sm-5"></div><div class="spinner-grow text-primary mr-sm-5"></div><div class="spinner-grow text-success mr-sm-5"></div><div class="spinner-grow text-info mr-sm-5"></div><div class="spinner-grow text-warning mr-sm-5"></div><div class="spinner-grow text-danger mr-sm-5"></div><div class="spinner-grow text-secondary mr-sm-5"></div><div class="spinner-grow text-dark"></div></center>';

// form submit open
$('#form_id').on('submit', function (e) {
                //Stop the form from submitting itself to the server.
                e.preventDefault();
                var search = $('#search').val();
                var trimStr = $.trim(search);

                if (trimStr != null && trimStr != '') {
                	$("#result").html(lodSpin);
                	$.ajax({
                		type: "GET",
                		url: 'search.php',
                		data: { search: search },
                		success: function (data) {
                			$("#result").html(data);
                		}
                	});
                } else {
                	$("#result").html(space);
                }

            });
// form submit close
return false;
});
</script>

<div class="bg-light container-fluid">
	<img class="img-fluid pt-5 mx-auto d-block" src="img/1.jpg" width="200px" height="auto" alt="logo">
</div>
<!-- nav open -->
<nav class="navbar navbar-expand-sm bg-light justify-content-center sticky-top">
	<form action="search.php" id="form_id" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" method="GET">
		<div class="input-group mt-4 p-0 mb-4 bg-light sha">
			<div class="input-group-prepend">
				<button class="btn btn-info" type="button"><strong>Chennai</strong></button> 
			</div>
			<input type="text" id="search"  placeholder="Enter Area or Street Name" class="form-control form-control-lg text-capitalize text-monospace" autofocus/>
			<div class="input-group-append">
				<button class="btn btn-info" id="subm" type="submit"><img src="img/search.svg" width="32px" height="auto" class="img-fluid"></button> 
			</div>
		</div>
	</form>
</nav>
<!-- nav close -->

<!-- main content start -->
<div class="container mb-3 text-capitalize" id="result">

</div>
<!-- main content finish -->
<!-- footer open -->

<!-- footer close -->
</body>
</html>