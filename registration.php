<!DOCTYPE html>

<html>

<head> 
	<title>ȸ���α��� �Ϸ�</title>
	<meta charset="euc-kr"/>
</head>

<body>

<?php 

require_once("dbcon.php");

$dbc=mysqli_connect("localhost", "root","apmsetup","registration");

if (empty($_POST["name"])||empty($_POST["pass"])){
	exit('<a href="javascript:history.go(-1)"> �Է� ���� ä���ּ��� </a>');
}
$name=mysqli_real_escape_string($dbc,trim($_POST["name"]));
$pass=mysqli_real_escape_string($dbc,trim($_POST["pass"]));
$passconfirm=mysqli_real_escape_string($dbc,trim($_POST["passconfirm"]));




echo "���̵� :"; 
echo $name; 
echo "/n";
echo "��й�ȣ : ";
echo $passconfirm; 

mysqli_query($dbc,"set names utf8;");

$query1="insert into member values ('$name','$pass');";
$result=mysqli_query($dbc,$query1);

?>

</body>


</html>