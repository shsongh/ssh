<?php 
header('Content-Type : image/jpg');
?>

<body>

<?php 

require_once("dbcon.php");

$dbc=mysqli_connect("localhost", "root","apmsetup","registration");


$name = $_GET('name');

$query500= "select image from member1 where name = '$name'";
$result500=mysqli_query($dbc,$query500);

$row=mysqli_fetch_row($result500);

echo $row[0];



mysqli_free_result($result1);
mysqli_close($dbc);




?>

