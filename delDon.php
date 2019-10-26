<?php
include("config.php");
error_reporting(0);
if(isset($_POST['delete']))
{
$search = $_POST["search"];
$sql = "DELETE * FROM donators WHERE id='$search'";
$result = mysqli_query($db,$sql) or die (mysqli_error($db)); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
if($result){
	echo "data deleted";
}else{
	echo "not deleted";
}
}

?>