<html>
<head>
	<title>노래 보기 </title>
	<meta charset="utf-8"/> 
</head>
<body>
<?php  
	$dbc=mysqli_connect("127.0.0.1","root","apmsetup","mysong")
           		or die("Error Connecting to mySQL Server");
	mysqli_query($dbc, "set names euckr");
	$query = "select * from song";
	$result = mysqli_query($dbc, $query) 
		or die("Error Q	uerrying db");
	while ($row=mysqli_fetch_assoc($result)){
		echo $row['name'].' '. $row['singer']. '</br>';
	}
	mysqli_free_result($result);
	echo "Song Title";
	

	mysqli_close($dbc);

?>
</body>