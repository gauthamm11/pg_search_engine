<?php
require "conn.php";
if (!isset($_GET['search'])) {
    header("location: index.php");
}


$search = mysqli_real_escape_string($conn, $_GET['search']);

$myArray = explode(',', $search);

$conX = "SELECT chn_areas.a_id, chn_areas.a_name, chn_areas.a_sub, chn_areas.a_pin, chn_areas.landmarks, chn_pg.p_name, chn_pg.p_id, chn_pg.p_rent_min, chn_pg.p_rent_max, chn_pg.p_deposit, chn_pg.p_food, chn_pg.p_sharing, chn_pg.p_rating, chn_pg.p_dp FROM chn_areas INNER JOIN chn_pg ON chn_areas.a_id = chn_pg.a_id WHERE ";

$supp = " OR a_name IN (SELECT a_name FROM chn_areas WHERE";

$conY = "";
$conZ = "";
$or = "";

// query v1.1 stable open
// SELECT * FROM chn_areas WHERE ( (soundex(a_name) LIKE soundex('t nagar')) OR (soundex(a_sub) LIKE soundex('t nagar')) )OR ( (soundex(a_name) LIKE soundex(' usman')) OR (soundex(a_sub) LIKE soundex(' usman')) ) OR a_name IN (SELECT a_name FROM chn_areas WHERE (a_name LIKE '%t nagar%') OR (a_sub LIKE '%t nagar%') OR (a_name LIKE '% usman%') OR (a_sub LIKE '% usman%') ) ORDER BY a_rating;
// query v1.1 stable close

foreach($myArray as $my_Array){
	// ((a_name like '%north%') or (a_name like '%usman%'))
	// select * from chn_areas where (soundex(a_name) like soundex('poruur'))
	if( !next( $myArray ) ) {
        $or = "";
    }else {
    	$or = "OR";
    }
	$conY .= "( (soundex(a_name) LIKE soundex('".$my_Array."')) OR (soundex(a_sub) LIKE soundex('".$my_Array."')) ) ".$or." ";
	$conZ .= " (a_name LIKE '%".$my_Array."%') OR (a_sub LIKE '%".$my_Array."%') ".$or." ";

}

$searchQ = $conX.$conY.$supp.$conZ.") ORDER BY a_rating";

echo $searchQ;

?>