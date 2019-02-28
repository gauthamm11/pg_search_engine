<?php
error_reporting(0);
require "conn.php";
if (!isset($_GET['pid'])) {
    header("location: index.php");
}

$pid = mysqli_real_escape_string($conn, $_GET['pid']);

?>
<?php
// SELECT * FROM chn_pg_details WHERE p_id = "41-P";
// $row["id"]

$sql = "SELECT * FROM chn_pg_details WHERE p_id ='$pid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

	$direc = "pg_images/chn_pg/";


    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    	if($row["pic_1"] != '' || $row["pic_1"] != NULL){
    		$pic1 = $direc.$row["pic_1"];
    	}else{
    		$pic1 = $direc.'0load.png';
    	}
    	if($row["pic_2"] != '' || $row["pic_2"] != NULL){
    		$pic2 = $direc.$row["pic_2"];
    	}else{
    		$pic2 = $pic1;
    	}
    	if($row["pic_3"] != '' || $row["pic_3"] != NULL){
    		$pic3 = $direc.$row["pic_3"];
    	}else{
    		$pic3 = $pic1;
    	}
    	if($row["pic_4"] != '' || $row["pic_4"] != NULL){
    		$pic4 = $direc.$row["pic_4"];
    	}else{
    		$pic4 = $pic1;
    	}

echo '
<!-- carousel open -->
<div id="demo" class="carousel slide p-1" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner bg-light">
    <div class="carousel-item active">
      <img src="'.$pic1.'.png" alt="PG Images" class="img-fluid mx-auto d-block">
    </div>
    <div class="carousel-item">
      <img src="'.$pic2.'.png" alt="PG Images" class="img-fluid mx-auto d-block">
    </div>
    <div class="carousel-item">
      <img src="'.$pic3.'.png" alt="PG Images" class="img-fluid mx-auto d-block">
    </div>
    <div class="carousel-item">
      <img src="'.$pic4.'.png" alt="PG Images" class="img-fluid mx-auto d-block">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon bg-info p-3"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon bg-info p-3"></span>
  </a>
</div>
<!-- carousel close -->
';

echo '
<div class="card p-1">
  <div class="card-header"><b class="text-info"><i class="fas fa-clipboard-list"></i>&nbsp;Rules:</b></div>
  <div class="card-body">
<div class="d-flex justify-content-center">';
if($row["smoking"] != '' && $row["smoking"] != NULL && $row["smoking"] != '1'){    		
    		echo '<div class="mr-4"><img src="pg_images/rule_amens/nosmoke.svg" alt="No Smoking" class="img-fluid" width="100px"></div>';
}
if($row["alcohol"] != '' && $row["alcohol"] != NULL && $row["alcohol"] != '1'){    		
    		echo '<div class="mr-4"><img src="pg_images/rule_amens/nodrink.svg" alt="No Alcohol" class="img-fluid" width="100px"></div>';
}
if($row["visitors"] != '' && $row["visitors"] != NULL && $row["visitors"] != '1'){    	
    		echo '<div class="mr-4"><img src="pg_images/rule_amens/novisit.svg" alt="No Visitors" class="img-fluid" width="100px"></div>';
}
 if($row["pets"] != '' && $row["pets"] != NULL && $row["pets"] != '1'){    		
    		echo '<div class=""><img src="pg_images/rule_amens/nopet.svg" alt="No Pets" class="img-fluid" width="100px"></div>';
}
echo '  
</div>
  </div>
</div>
';

echo '
<div class="card p-1">
  <div class="card-header"><b class="text-info"><i class="fab fa-envira"></i>&nbsp;Amenties:</b></div>
  <div class="card-body">
<div class="row">';

if($row["laundry"] != '' && $row["laundry"] != NULL && $row["laundry"] != '0'){
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/wmachine.svg" alt="Laundry" class="" width="100px"></div>';
}
if($row["warden"] != '' && $row["warden"] != NULL && $row["warden"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/man2.svg" alt="Warden" class="" width="100px"></div>';
}
if($row["room_keeping"] != '' && $row["room_keeping"] != NULL && $row["room_keeping"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/clean2.svg" alt="Room keeping" class="" width="100px"></div>';
}
if($row["wifi"] != '' && $row["wifi"] != NULL && $row["wifi"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/wifi.svg" alt="WiFi" class="" width="100px"></div>';
}
///////
if($row["tv"] != '' && $row["tv"] != NULL && $row["tv"] != '0'){
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/tv.svg" alt="TV" class="" width="100px"></div>';
}
if($row["lift"] != '' && $row["lift"] != NULL && $row["lift"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/lift.svg" alt="Lift" class="" width="100px"></div>';
}
if($row["power_backup"] != '' && $row["power_backup"] != NULL && $row["power_backup"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/power.svg" alt="Power Backup" class="" width="100px"></div>';
}
if($row["fridge"] != '' && $row["fridge"] != NULL && $row["fridge"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/fridge.svg" alt="Fridge" class="" width="100px"></div>';
}
////////
if($row["heater"] != '' && $row["heater"] != NULL && $row["heater"] != '0'){
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/heater.svg" alt="Laundry" class="" width="100px"></div>';
}
if($row["locker"] != '' && $row["locker"] != NULL && $row["locker"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/locker.svg" alt="Warden" class="" width="100px"></div>';
}
if($row["parking"] != '' && $row["parking"] != NULL && $row["parking"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/parking.svg" alt="Room keeping" class="" width="100px"></div>';
}
if($row["spycam"] != '' && $row["spycam"] != NULL && $row["spycam"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/spycam.svg" alt="WiFi" class="" width="100px"></div>';
}
////////
if($row["firstaid"] != '' && $row["firstaid"] != NULL && $row["firstaid"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/firstaid2.svg" alt="First Aid" class="" width="100px"></div>';
}
if($row["security"] != '' && $row["security"] != NULL && $row["security"] != '0'){    		
    		echo '<div class="col p-2"><img src="pg_images/rule_amens/security.svg" alt="Security" class="" width="100px"></div>';
}

echo '
</div>
  </div> 
</div>
';

if ($row["map"] != '' || $row["map"] != NULL) {
	echo '
<div class="row p-1">
<div class="col">'.$row["map"].'</div>
</div>
';
}
if ($row["video"] != '' || $row["video"] != NULL) {
	echo '
<div class="row p-1">
<div class="col">'.$row["video"].'</div>
</div>
';
}

    }
} else {
    echo '<div class="display-4 text-center text-danger">Details Will Be Updated Soon..!</div>';
}


?>

<style>
iframe {
	width: inherit;
}
</style>