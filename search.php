<?php
require "conn.php";
if (!isset($_GET['search'])) {
    header("location: index.php");
}


$search = mysqli_real_escape_string($conn, $_GET['search']);

$myArray = explode(',', $search);

$conX = "SELECT * FROM chn_areas WHERE ";

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
	$conY .= "( (soundex(a_name) LIKE soundex('".$my_Array."')) OR (soundex(a_sub) LIKE soundex('".$my_Array."')) )".$or." ";
	$conZ .= " (a_name LIKE '%".$my_Array."%') OR (a_sub LIKE '%".$my_Array."%') ".$or." ";

}

$searchQ = $conX.$conY.$supp.$conZ.") ORDER BY a_rating";

echo $searchQ;

?>