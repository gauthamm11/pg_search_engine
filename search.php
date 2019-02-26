<?php
require "conn.php";
if (!isset($_GET['search'])) {
    header("location: index.php");
}


$search = mysqli_real_escape_string($conn, $_GET['search']);

$myArray = explode(',', $search);

$conX = "SELECT chn_areas.a_id, chn_areas.a_name, chn_areas.a_sub, chn_areas.a_pin, chn_areas.landmarks, chn_pg.p_name, chn_pg.p_type, chn_pg.p_landmark, chn_pg.p_id, chn_pg.p_rent_min, chn_pg.p_rent_max, chn_pg.p_deposit, chn_pg.p_food, chn_pg.p_sharing, chn_pg.p_rating, chn_pg.p_dp FROM chn_areas INNER JOIN chn_pg ON chn_areas.a_id = chn_pg.a_id WHERE ";

$supp = " OR a_name IN (SELECT a_name FROM chn_areas WHERE";

$conY = "";
$conZ = "";
$or = "";

// query v1.1 stable open
// SELECT * FROM chn_areas WHERE ( (soundex(a_name) LIKE soundex('t nagar')) OR (soundex(a_sub) LIKE soundex('t nagar')) )OR ( (soundex(a_name) LIKE soundex(' usman')) OR (soundex(a_sub) LIKE soundex(' usman')) ) OR a_name IN (SELECT a_name FROM chn_areas WHERE (a_name LIKE '%t nagar%') OR (a_sub LIKE '%t nagar%') OR (a_name LIKE '% usman%') OR (a_sub LIKE '% usman%') ) ORDER BY a_rating;
// query v1.1 stable close

foreach($myArray as $key => $my_Array){

   $value = trim($my_Array);

	if( !next( $myArray ) ) {
        $or = "";
    }else {
    	$or = "OR";
    }


  if (!empty($my_Array)){

    $conY .= "( (soundex(a_name) LIKE soundex('".$my_Array."')) OR (soundex(a_sub) LIKE soundex('".$my_Array."')) ) ".$or." ";
  $conZ .= " (a_name LIKE '%".$my_Array."%') OR (a_sub LIKE '%".$my_Array."%') ".$or." ";

  }

}

$searchQ = $conX.$conY.$supp.$conZ.") ORDER BY a_rating";

?>

<?php
//$sql = "SELECT * FROM chn_areas WHERE a_id = 'qwerty'";

$result = mysqli_query($conn, $searchQ);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
 /*   echo '<div class="row">
<div class="col-xl-3 col-lg-3">
    <div class="card sha border border-info">
  <div class="card-header">Header</div>
  <div class="card-body">Content</div> 
  <div class="card-footer">Footer</div>
</div>
  </div>
  <div class="col-xl-9 col-lg-9">
  ';
*/

  $type = '';
  $food = '';
  echo '<div class="container">';
    
    while($row = mysqli_fetch_assoc($result)) {

      if ($row["p_type"] == '0') {
        $type = 'Girls';
      }else{
        $type = 'Boys';
      }
      if ($row["p_food"] == '1') {
        $food = 'Breakfast';
      }elseif ($row["p_food"] == '2') {
        $food = 'Breakfast, Lunch';
      }elseif ($row["p_food"] == '3') {
        $food = 'Breakfast, Lunch, Dinner';
      }elseif ($row["p_food"] == '4') {
        $food = 'Breakfast, Dinner';
      }elseif ($row["p_food"] == '5') {
        $food = 'Lunch, Dinner';
      }elseif ($row["p_food"] == '6') {
        $food = 'Lunch';
      }elseif ($row["p_food"] == '7') {
        $food = 'Dinner';
      }else {
        $food = 'N/A';
      }
        


        echo '<div class="card sha border border-info mb-3"><div class="card-body row">';
        echo '
        <div class="col-xl-3 col-lg-3">
        <img src="https://via.placeholder.com/300x175?text=Loading..." class="img-fluid mx-auto d-block" style="">
        </div>
        <div class="col-xl-9 col-lg-9">
        <div class="row">
        <div class="col-6">'.$row["p_name"].'</div>
        <div class="col-3">'.$type.'</div>
        <div class="col-3">'.$row["p_rating"].'</div>
        </div><hr>
        <div class="row">
        <div class="col-8">Area:&nbsp;'.$row["a_name"].',&nbsp;'.$row["a_sub"].',&nbsp;<i>'.$row["a_pin"].'</i></div>
        <div class="col-4">Landmark:&nbsp;'.$row["p_landmark"].'</div>
        </div><hr class="bg-info">
        
      <div class="row">
        <div class="col">
          <div class="row">
          <div class="col">Rent:&nbsp;'.$row["p_rent_min"].' - '.$row["p_rent_max"].'</div>
          <div class="col">Deposit:&nbsp;'.$row["p_deposit"].' Months</div>
          </div>
        </div>
        <div class="col">
        <div class="row">
          <div class="col">Sharing:&nbsp;'.$row["p_sharing"].'</div>
          <div class="col">Food:&nbsp;'.$food.'</div>
        </div>
        </div>
      </div>

        
        </div>
        ';
        echo '</div></div>';
    }
    
    echo "</div>";

 //   echo "</div></div>";
} else {
    echo '<div class="card container border border-info shadow-lg p-0 mb-2 bg-white">
<img src="img/noresbw.svg" class="img-fluid mx-auto d-block" width="150px">
<p class="text-center mt-3">
<span class="text-danger" style="font-size: 24px;">No PG Found!</span><br>
<span class="text-info font-weight-bold">Try another Area or Street</span>
</p>
  </div>
</div>';
}

?>