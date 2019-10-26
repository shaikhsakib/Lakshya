<?php
include("config.php");
if(isset($_POST['submit']))
{
$search = $_POST["search"];
$sql = "SELECT * FROM volunteers WHERE id='$search'";
$result = mysqli_query($db,$sql) or die (mysqli_error($db)); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
while ($row = mysqli_fetch_array($result)){     // here too, you put a space between it
	$id=$row['id'];
    $name=$row['name'];
    $age=$row['age'];
	$address = $row['address'];
	$gender = $row['gender'];
	$mobile=$row['mobile'];
    }
}
?>