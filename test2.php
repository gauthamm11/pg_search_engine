

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PG seeKing - Live in a better space</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid p-0" class="text-justify">
<script>
$(function() {
    $("#skill_input").autocomplete({
        source: "test3.php",
    });
});
</script>
<div class="bg-light container-fluid">
	<img class="img-fluid mx-auto d-block" src="img/1.jpg" width="200px" height="auto" alt="logo">
</div>
<!-- form open -->
<!-- nav open -->
<form action="search.php" method="GET">
<nav class="navbar navbar-expand-sm bg-light justify-content-center sticky-top">
	<a class="navbar-brand" href="#!">PG seeKing</a>
	
	<div class="input-group mt-3 mb-3 col-xs-12 col-lg-6 col-md-12 col-sm-12">
		<div class="input-group-prepend">
			<button class="btn btn-outline-primary" type="button">Chennai</button> 
		</div>
		<div class="auto-widget">
    <p>Your Skills: <input type="text" id="skill_input" autocomplete="on" /></p>
</div>
		<div class="input-group-append">
			<button class="btn btn-info" id="subm" type="submit">Search</button> 
		</div>
	</div>
	
	<span class="text-light">PG seeKing</span>
</nav>
</form>
<!-- nav close -->
<!-- form close -->

<div class="bg-light container-fluid text-center">
	<span id="errd" class="col-xs-12 col-lg-6 col-md-12 col-sm-12"></span>
</div>
<!-- areas list open  -->
<!-- <template id="resultstemplate">
  
</template> -->
<!--  areas list close -->
<div class="container-fluid">

</div>

<script>
// jquery open
$(document).ready(function () {

return false;
});

</script>

</body>
</html>