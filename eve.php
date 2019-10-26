<?php
include("config.php");
$id = $_POST["id"];
$event = $_POST["event"];
$firstpr = $_POST["firstpr"];
$secondpr = $_POST["secondpr"];
$thirdpr = $_POST["thirdpr"];


$sql=mysqli_query($db, "INSERT INTO events(id, event, firstpr, secondpr, thirdpr) VALUES('$id', '$event', '$firstpr', '$secondpr', '$thirdpr')");
        if(!$sql)
        {
            echo mysql_error();
        }else{
			         header("location: welcome.php");

		}

?>