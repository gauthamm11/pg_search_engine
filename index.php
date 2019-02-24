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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid" class="text-justify">

<div class="bg-light container-fluid">
	<img class="img-fluid mx-auto d-block" src="img/1.jpg" width="200px" height="auto" alt="logo">
</div>
<!-- nav open -->
<nav class="navbar navbar-expand-sm bg-light justify-content-center sticky-top">
	<a class="navbar-brand" href="#!">PG seeKing</a>
	<!-- form open -->
	<div class="input-group mt-3 mb-3 col-xs-12 col-lg-6 col-md-12 col-sm-12">
		<div class="input-group-prepend">
			<button class="btn btn-outline-primary" type="button">Chennai</button> 
		</div>
		<input type="text" name="search" id="search"  placeholder="Search Area, Street, Pincode.." list="searchresults" class="form-control form-control-lg text-capitalize text-monospace" autocomplete="off" />
		<datalist id="searchresults"></datalist>
		<div class="input-group-append">
			<button class="btn btn-info" type="submit">Search</button> 
		</div>
	</div>
	<!-- form close -->
	<span class="text-light">PG seeKing</span>
</nav>
<!-- nav close -->
<!-- areas list open  -->
<template id="resultstemplate">
  <?php
  $sql = "SELECT a_id,a_name,a_sub,a_pin FROM chn_areas WHERE 1 ORDER BY a_rating ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        // <option>Ray2123</option>
        echo "<option class='text-monospace text-capitalize'>".$row["a_name"].",&nbsp".$row["a_sub"].",&nbsp".$row["a_pin"]."</option>";
        echo "<br>";
    }
}else {
    echo "0 results";
}
  ?>
</template>
<!--  areas list close -->
<div class="container-fluid">

</div>

<script>
// jquery open
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
// jquery close
// search open
var search = document.querySelector('#search');
var results = document.querySelector('#searchresults');
var templateContent = document.querySelector('#resultstemplate').content;
search.addEventListener('keyup', function handler(event) {
	while (results.children.length) results.removeChild(results.firstChild);
	var inputVal = new RegExp(search.value.trim(), 'i');
	var set = Array.prototype.reduce.call(templateContent.cloneNode(true).children, function searchFilter(frag, item, i) {
		if (inputVal.test(item.textContent) && frag.children.length < 4) frag.appendChild(item);
		return frag;
	}, document.createDocumentFragment());
	results.appendChild(set);
});
// search close

</script>

</body>
</html>