<html>
<head>
<link rel="stylesheet" href="style20.css">  
</head>
<body>
<?php  
$host = 'localhost';  
$user = 'root';  
$pass = ''; 
$dbname = 'mydb';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
} 
else
{
echo 'Connected successfully';  
}
echo "<br>";  
  
$sql = "delete from emp8 where id=1002";  
if(mysqli_query( $conn,$sql))
{  
 echo "record deleted successfully.";  
}
else
{  
  echo "Sorry, could not delete record ".mysqli_error($conn);  
}  
mysqli_close($conn);  
?>
</body>
</html>    