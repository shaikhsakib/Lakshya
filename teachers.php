<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#birth" ).datepicker();
  } );
  </script>
</head>
<body>
<?php
include("config.php");
error_reporting(0);
$id = "";
$name = "";
$age = "";
$address = "";
$gender = "";
$mobile = "";

if(isset($_POST['submit']))
{
$search = $_POST["search"];
$sql = "SELECT * FROM teachers WHERE id='$search'";
$result = mysqli_query($db,$sql) or die (mysqli_error($db)); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
while ($row = mysqli_fetch_array($result)){     // here too, you put a space between it
	$id = $row['id'];
	$name = $row['name'];
    $designation=$row['designation'];
	$subject = $row['subject'];
	$address = $row['address'];
    }
}elseif(isset($_POST['delete']))
{
$search = $_POST["search"];
$sql = "DELETE FROM teachers WHERE id='$search'";
$result = mysqli_query($db,$sql) or die (mysqli_error($db)); // dont put spaces in between it, else your code wont recognize it the query that needs to be executed
if($result){
	echo "data deleted";
}else{
	echo "not deleted";
}
}
?>

<div class="container">
<h3 class="text-center"><img src="images/Lakshya.png" width="150" height="75"/></h3>
<h1 class="text-center">Teachers</h1>
<form action="" method="POST">
<input id="search" name="search" type="text" placeholder="Type here" value="<?php echo $id ?> " >
<input name="submit" type="submit" value="Search">
<input name="delete" type="submit" value="Delete">
</form>
<form action="teach.php" method="post">
  <div class="container">
  <div class="row">
  <div class="col-md-6">
    <label>Id</b></label>
    <input type="text" placeholder="Enter id" name="id" value="<?php echo $id ?> " >
	</div>
  <div class="col-md-6">
    <label>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" value="<?php echo $name ?> " >
</div>
    </div> 
<div class="row">
<div class="col-md-6">
    <label>Designation</b></label>
    <input type="text" placeholder="Enter designation" name="designation" value="<?php echo $designation ?> " >
	</div>
	<div class="col-md-6">
    <label>Subject</b></label>
    <input type="text" placeholder="Enter Subject" name="subject" value="<?php echo $subject ?> " >
	</div>
    </div> 
<div class="row">
  <div class="col-md-6">
    <label>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" value="<?php echo $address ?> " >
	
</div>
    </div> 	
  </div>
  <button type="submit">Add</button>
</form>
<a href="services.php"><button>Home</button></a>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
