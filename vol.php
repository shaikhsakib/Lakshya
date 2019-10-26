<?php
include("config.php");

$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];

$sql=mysqli_query($db, "INSERT INTO volunteers(id, name, age, address, gender, mobile) VALUES('$id', '$name', '$age', '$address', '$gender', '$mobile')");
        if(!$sql)
        {
            echo mysql_error();
        }else{
			         header("location: welcome.php");

		}

?>