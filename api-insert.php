<?php
header('Content-Type:application/json');
// header('Access-Control-Allow-Origin : *');
include("db.php");
$data=json_decode(file_get_contents("php://input"),true);
$id=$data["id"];
$name=$data["name"];
$email=$data["email"];
$password=$data["password"];
$qry=mysqli_query($con,"insert into login(name,email,password) values ('{$name}','{$email}','{$password}')");
if($qry)
{
	echo json_encode(array("message"=>"Record Insert Success","status"=>true));
}
else
{
	echo json_encode(array("message"=>"Record Insert Failed","status"=>false));
}
?>