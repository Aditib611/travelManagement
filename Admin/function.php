<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost:3306","user","Aditi@6112","travel");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost:3306","user","Aditi@6112","travel");
?>
</body>
</html>