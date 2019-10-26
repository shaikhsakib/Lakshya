<?php
include("config.php");

$id = $_POST["id"];
$name = $_POST["name"];
$standard = $_POST["standard"];
$gender = $_POST["gender"];
$school = $_POST["school"];
$birth = $_POST["birth"];

$sql=mysqli_query($db, "INSERT INTO students(id, name, standard, gender, school, birth) VALUES('$id', '$name', '$standard', '$gender', '$school', '$birth')");
        if(!$sql)
        {
            echo mysql_error();
        }else{
			         header("location: welcome.php");

		}

?>