<?php
include("config.php");
$id = $_POST["id"];
$name = $_POST["name"];
$designation = $_POST["designation"];
$subject = $_POST["subject"];
$address = $_POST["address"];


$sql=mysqli_query($db, "INSERT INTO teachers(id, name, designation, subject, address) VALUES('$id', '$name', '$designation', $subject, '$address')");
        if(!$sql)
        {
            echo mysql_error();
        }else{
			         header("location: welcome.php");

		}

?>