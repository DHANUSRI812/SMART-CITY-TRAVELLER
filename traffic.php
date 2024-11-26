<?php 

$connect=mysql_connect("localhost","root","");
mysql_select_db("cityexplorer",$connect);


 $lat = $_GET['lat'];
 $lon = $_GET['lon'];


if($connect)
{
	$sql_register = mysql_query("INSERT INTO trafic VALUES ('','$lat','$lon')");

	if($sql_register)
	{
		echo "You are registered successfully";
	}	
	else
	{
		echo "Failed to register you account";
	}


}
else
{
echo "Connection Error";
}

?>
