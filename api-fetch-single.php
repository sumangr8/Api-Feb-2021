<?php
header('Content-Type:application/json');
// header('Access-Control-Allow-Origin : *');
include("db.php");
$data=json_decode(file_get_contents("php://input"),true);
$id=$data["id"];
$qry=mysqli_query($con,"select * from login where id='{$id}'");
if(mysqli_num_rows($qry) > 0)
{
	$output=mysqli_fetch_all($qry, MYSQLI_ASSOC);
	echo json_encode($output);
}
else
{
	echo json_encode(array("message"=>"No Any Record","status"=>false));
}
?>