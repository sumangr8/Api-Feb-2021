<?php
header('Content-Type:application/json');
// header('Access-Control-Allow-Origin : *');
include("db.php");
$data=json_decode(file_get_contents("php://input"),true);
$id=$data["id"];
$name=$data["name"];
$email=$data["email"];
$password=$data["password"];
$qry=mysqli_query($con,"update login set name='{$name}',email='{$email}',password='{$password}' where id='{$id}'");
if($qry)
{
	echo json_encode(array("message"=>"update success","status"=>false));
}
else
{
	echo json_encode(array("message"=>"update success","status"=>false));
}
?>