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

if (empty($_POST["name"])||empty($_POST["pass"])||empty($_POST["passconfirm"])){
	exit('<a href="javascript:history.go(-1)"> 입력 폼을 채워주세요 </a>');
}

if (!isset($_FILES["userimg"])){
	exit("<a href='javascript:history.go(-1)'> 이미지파일 업로드 에러가 발생하였습니다.</a>");
}

echo $_FILES["userimg"]["tmp_name"];

//$imagePath = "./images/".uniqid("img").'.'.pathinfo($_FILES["userimg"]["name"],PATHINFO_EXTENSION);
//if (!move_uploaded_file($_FILES["userimg"]["tmp_name"],$imagePath)){
//	exit("<a href='javascript:history.go(-1)'> 이미지파일 에러가 발생하였습니다.</a>");
//}


$name=mysqli_real_escape_string($dbc,trim($_POST["name"]));
$pass=mysqli_real_escape_string($dbc,trim($_POST["pass"]));
$passconfirm=mysqli_real_escape_string($dbc,trim($_POST["passconfirm"]));
$image=addslashes(file_get_contents($_FILES["userimg"]["tmp_name"]));



$query100= "select name from member1 where name = '$name'";
$result100=mysqli_query($dbc,$query100);

if (mysqli_num_rows($result100) != 0){

	exit('<a href="javascript:history.go(-1)"> 이미 가입된 아이디입니다.</a>');
}


echo $name;
echo " 님 로그인을 하였습니다".'<br/>';  


mysqli_query($dbc,"set names utf8;");

$query1="insert into member1 values ('$name','$pass',SHA('$passconfirm'),'$image');";

//$query1="insert into member1 values ('$name','$pass',SHA('$passconfirm'));";
$result=mysqli_query($dbc,$query1);

echo $pass;

$query2='select * from member1';
$result1=mysqli_query($dbc,$query2)
	or die("Error Querrying db");

while ($row = mysqli_fetch_assoc($result1)){
	echo $row["name"].' '.$row['pass'].'<br/>';
}

echo "<img src='userimage.php?name=$name' alt='User Image' style='width:80px; height:80px' /> ";
mysqli_free_result($result1);
mysqli_close($dbc);




?>

</body>


</html>