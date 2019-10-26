<?php
include("config.php");
$myid = mysqli_real_escape_string($db,$_POST['id']);
$sql = "SELECT * FROM volunteers WHERE id='$myid'";
?>