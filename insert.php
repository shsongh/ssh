<!DOCTYPE html>
<html>
<head>

 	<title>노래입력 결과</title>
	<meta charset="euc-kr" />
</head>
<body>
<?php
	require_once('dbcon.php');

	$dbc=mysqli_connect('localhost','root','apmsetup','mysong');
	//echo $_POST["name"];
	if (empty($_POST["name"])||empty($_POST["singer"])||empty($_POST["number"])){
		exit('<a href="javascript:history.go(-1)">입력 폼을 채워주세요. </a>');
	}
	
	$name=mysqli_real_escape_string($dbc,trim($_POST["name"]));
$singer=mysqli_real_escape_string($dbc,trim($_POST["singer"]));
	
$number=mysqli_real_escape_string($dbc,trim($_POST['number']));
	
	$favorite=mysqli_real_escape_string($dbc,trim($_POST['favorite']));
	

	mysqli_query($dbc,"set names utf8");
	$querry = "insert int song values('$name','$singer',$number','$favorite')";
	$result=mysqli_query($dbc,$querry);
	echo $querry;
	mysqli_close($dbc);
	echo "$number";
?>
</body>

</html>



