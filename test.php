<?php

$myString = "t nagar ,north usman";

$myArray = explode(',', $myString);

print_r($myArray);
echo "<br><br>";

// select * from chn_areas where

$conQ = "";
$or = "";

foreach($myArray as $my_Array){
	// ((a_name like '%north%') or (a_name like '%usman%'))

	if( !next( $myArray ) ) {
        $or = "";
    }else {
    	$or = "or";
    }

	$conQ .= "((a_name like '%".$my_Array."%') or (a_sub like '%".$my_Array."%')) ".$or." ";

}

echo $conQ;


/*foreach($myArray as $my_Array){
	if($my_Array == '1'){
		$my_Array = 'g';
	}
	 if( !next( $myArray ) ) {
        echo 'Last Item';
    }
    echo $my_Array.', ';  
}*/

?>