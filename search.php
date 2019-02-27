<?php
require "conn.php";
if (!isset($_GET['search'])) {
    header("location: index.php");
}
?>

<script>
$(document).ready(function () {

$(".viewc").click(function () {
$("#view").modal();
//alert($(this).attr('data-value'));
});

return false;
});
</script>


<?php
$search = mysqli_real_escape_string($conn, $_GET['search']);

$myArray = explode(',', $search);

$conX = "SELECT chn_areas.a_id, chn_areas.a_name, chn_areas.a_sub, chn_areas.a_pin, chn_areas.landmarks, chn_pg.p_name, chn_pg.p_type, chn_pg.p_landmark, chn_pg.p_id, chn_pg.p_rent_min, chn_pg.p_rent_max, chn_pg.p_food, chn_pg.p_sharing, chn_pg.p_rating, chn_pg.p_dp FROM chn_areas INNER JOIN chn_pg ON chn_areas.a_id = chn_pg.a_id WHERE ";

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
  $sh = '';

  echo '<div class="container">';
    
    while($row = mysqli_fetch_assoc($result)) {

      if ($row["p_type"] == '0') {
        $type = 'Girls';
      }else{
        $type = 'Boys';
      }
      if ($row["p_food"] < '5') {
        $food = 'Available';
      }else {
        $food = 'N/A';
      }
      if ($row["p_sharing"] == '1') {
        $sh = 'Single';
      }else{
        $sh = 'Sharing';
      }
        


        echo '<div class="card sha border border-info mb-3"><div class="card-body row">';
        echo '
        <div class="col-xl-3 col-lg-3">
        <img src="https://via.placeholder.com/300x175?text=Loading..." class="img-fluid mx-auto d-block" style="">
        </div>
        <div class="col-xl-9 col-lg-9" style="/*font-size:20px*/">
        
        <div class="row">
       
        <div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-building fa-fw"></i></div>
<div>&nbsp;'.$row["p_name"].'</div>
</div></div>


        <div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-venus-mars fa-fw"></i></div>
<div>&nbsp;<b>For:</b>&nbsp;</div>
<div>'.$type.'</div>
</div></div>

<div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-star fa-fw"></i></div>
<div>&nbsp;<b>Rating:</b>&nbsp;</div>
<div>'.$row["p_rating"].'</div>
</div></div>        

        </div><hr class="bg-info">

        <div class="row">
        
<div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-rupee-sign fa-fw"></i></div>
<div>&nbsp;<b>Rent:</b>&nbsp;</div>
<div>'.$row["p_rent_min"].'</div>
</div></div>

<div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-bed fa-fw"></i></div>
<div>&nbsp;<b>Type:</b>&nbsp;</div>
<div>'.$sh.'</div>
</div></div>

<div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-hard-hat fa-fw"></i></div>
<div>&nbsp;<b>Food:</b>&nbsp;</div>
<div>'.$food.'</div>
</div></div>

      </div>
        <hr class="bg-info">


        <div class="row mb-2">
        
        <div class="col"><i class="fas fa-map fa-fw"></i>&nbsp;<b>Area:</b>&nbsp;'.$row["a_name"].',&nbsp;'.$row["a_sub"].',&nbsp;<i>'.$row["a_pin"].'</i></div>

<div class="col">
<div class="d-inline-flex">
<div><i class="fas fa-map-marker-alt fa-fw"></i></div>
<div>&nbsp;<b>Landmark:</b>&nbsp;'.$row["p_landmark"].'</div>
</div></div>

        </div>
        
      <button type="button" class="btn btn-info btn-block viewc" data-value="'.$row["p_id"].'">View Full Details&nbsp;<i class="fas fa-eye"></i></button>
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

<!-- The Modal open -->
        <div class="modal fade" data-backdrop="static" id="view">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">PG Details:</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" id="viewbody">
                       <center class="my-5"><div class="spinner-grow text-muted mr-sm-5"></div><div class="spinner-grow text-primary mr-sm-5"></div><div class="spinner-grow text-success mr-sm-5"></div><div class="spinner-grow text-info mr-sm-5"></div><div class="spinner-grow text-warning mr-sm-5"></div><div class="spinner-grow text-danger mr-sm-5"></div><div class="spinner-grow text-secondary mr-sm-5"></div><div class="spinner-grow text-dark"></div></center>
                    </div>

                    <!-- Modal footer -->
                    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->
                </div>
            </div>
        </div>
<!-- The Modal close -->

<nav class="navbar justify-content-center">
<div class="bg-info text-center text-white sha">
&nbsp;
<i class="fa fa-copyright"></i>
&nbsp;
<?php
$copyYear = 2019; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?>
<span>&nbsp;Copyright @ Cruze Technologies.&nbsp;</span>
</div>
</nav>
