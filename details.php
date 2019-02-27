<?php
require "conn.php";
if (!isset($_GET['pid'])) {
    header("location: index.php");
}
?>