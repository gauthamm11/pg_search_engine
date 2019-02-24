<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="container">


<div class="bg-light container-fluid">
  <img class="img-fluid mx-auto d-block" src="img/1.jpg" width="200px" height="auto" alt="logo">
</div>
<nav class="navbar navbar-expand-sm bg-light justify-content-center sticky-top">
  <a class="navbar-brand" href="#!">PG seeKing</a>
 <div class="input-group mt-3 mb-3 col-xs-12 col-lg-6 col-md-12 col-sm-12">
 	<div class="input-group-prepend">
    <button class="btn btn-outline-primary" type="button">Chennai</button> 
  </div>
  <input type="text" class="form-control form-control-lg" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-info" type="submit">Search</button> 
  </div>
</div>
<a class="navbar-brand text-light" href="#">PG seeKing</a>
</nav>

<div class="container-fluid">
 <?php
 $i = 0;
 for($i=1;$i<=100;$i++){
 	echo $i."<br>";
 }
 ?>
</div>

<script>

$(document).ready(function () {
    
var distance = $('#nid').offset().top;
$(window).scroll(function() {
    if ( $(this).scrollTop() >= distance ) {
        console.log('is in top');
    } else {
        console.log('is not in top');
    }
});

return false;
});
</script>

</body>
</html>