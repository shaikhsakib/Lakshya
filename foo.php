<?php
include("config.php");
$id = $_POST["id"];
$food = $_POST["food"];
$price = $_POST["price"];


$sql=mysqli_query($db, "INSERT INTO foods(id, food, price) VALUES('$id', '$food', '$price')");
        if(!$sql)
        {
            echo mysql_error();
        }else{
			         header("location: welcome.php");

		}

?>