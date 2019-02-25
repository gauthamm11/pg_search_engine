<?php
require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PG seeKing - Live in a better space</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/velocity/2.0.3/velocity.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid p-0" class="text-justify">
<div class="bg-light container-fluid">
	<img class="img-fluid pt-5 mx-auto d-block" src="img/1.jpg" width="200px" height="auto" alt="logo">
</div>
<!-- nav open -->
<nav class="navbar navbar-expand-sm bg-light justify-content-center sticky-top">
	<form action="search.php"  class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" method="GET">
	<div class="input-group mt-4 shadow-lg p-0 mb-4 bg-light">

		<div class="input-group-prepend">
			<button class="btn btn-info" type="button"><strong>Chennai</strong></button> 
		</div>
		<input type="text" name="search" id="search"  placeholder="Enter Area, Street" class="form-control form-control-lg text-capitalize text-monospace" required autofocus/>
		<div class="input-group-append">
			<button class="btn btn-info" id="subm" type="submit"><img src="img/search.png" class="img-fluid"></button> 
		</div>
	</div>
	</form>
</nav>
<!-- nav close -->

<!-- main content start -->
<div class="container-fluid text-center">
<?php

$i = 1;
for($i = 1; $i<=100; $i++){
	echo $i."<hr>";
}

?>
</div>
<!-- main content finish -->

<script>
$(document).ready(function () {
// (getting top) of page open
var distance = $('#nid').offset().top;
$(window).scroll(function() {
	if ( $(this).scrollTop() >= distance ) {
		console.log('is in top');
	} else {
		console.log('is not in top');
	}
});
// (getting top) of page close
return false;
});
</script>

</body>
</html>