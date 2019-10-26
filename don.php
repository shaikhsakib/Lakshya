<?php
include("config.php");

$id = $_POST["id"];
$name = $_POST["name"];
$donation = $_POST["donation"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];

$sql=mysqli_query($db, "INSERT INTO donators(id, name, donation, address, gender, mobile) VALUES('$id', '$name', '$donation', '$address', '$gender', '$mobile')");
        if(!$sql)
        {
            echo mysql_error();
        }else{
			         header("location: welcome.php");

		}

?>