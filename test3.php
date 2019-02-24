<?php
require "conn.php";
?>
<?php
  $sql = "SELECT a_id,a_name,a_sub,a_pin FROM chn_areas WHERE 1 ORDER BY a_rating ASC";
$result = $conn->query($sql);
$skillData = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        // <option>Ray2123</option>
    //    echo "<option class='text-monospace text-capitalize'>".$row["a_name"].",&nbsp".$row["a_sub"].",&nbsp".$row["a_pin"]."</option>";
      //  echo "<br>";
      $data['id'] = $row['a_id'];
        $data['value'] = $row['a_name'];
        array_push($skillData, $data);
    }
}else {
    echo "0 results";
}

echo json_encode($skillData);
  ?>