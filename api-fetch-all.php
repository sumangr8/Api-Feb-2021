<?php
header('Content-Type:application/json');
// header('Access-Control-Allow-Origin : *');
include("db.php");
$qry=mysqli_query($con,"select * from login");
if(mysqli_num_rows($qry) > 0)
{
	$output=mysqli_fetch_all($qry, MYSQLI_ASSOC);
	echo json_encode($output);
}
else
{
	echo json_encode(array("message"=>"No Any Record Fetch", "status"=>false));
}
?>