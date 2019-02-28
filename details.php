<?php
error_reporting(0);
require "conn.php";
if (!isset($_GET['pid'])) {
    header("location: index.php");
}

$pid = mysqli_real_escape_string($conn, $_GET['pid']);

echo $pid;
echo "<br>hi raja";
?>