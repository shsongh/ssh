<!DOCTYPE html>

<html>

<head> 
	<title>회원로그인 완료</title>
	<meta charset="euc-kr"/>
</head>

<body>

<?php 

require_once("dbcon.php");

$dbc=mysqli_connect("localhost", "root","apmsetup","registration");

if (empty($_POST["name"])||empty($_POST["pass"])){
	exit('<a href="javascript:history.go(-1)"> 입력 폼을 채워주세요 </a>');
}
$name=mysqli_real_escape_string($dbc,trim($_POST["name"]));
$pass=mysqli_real_escape_string($dbc,trim($_POST["pass"]));
$passconfirm=mysqli_real_escape_string($dbc,trim($_POST["passconfirm"]));




echo "아이디 :"; 
echo $name; 
echo "/n";
echo "비밀번호 : ";
echo $passconfirm; 

mysqli_query($dbc,"set names utf8;");

$query1="insert into member values ('$name','$pass');";
$result=mysqli_query($dbc,$query1);

?>

</body>


</html>