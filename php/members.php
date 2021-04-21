<!DOCTYPE html>
<html>
<head>
	<title>LABORATORIO DE AUTOMATIZACION</title>
</head>
<body style="background:url('siemens.jpg') no-repeat; background-size: cover;">

</body>
</html>



<?php  

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
} 

