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
$conn = mysqli_connect($host, $user,$pass,$dbname);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
} 
else
{
echo 'Connected successfully';  
}
echo "<br>";  
  
$sql = 'insert into emp8(id,name,salary) VALUES (1011,"sangram",24540)';  
if(mysqli_query( $conn,$sql))
{  
 echo "record inserted successfully.";  
}
else
{  
  echo "Sorry, could not insert record ".mysqli_error($conn);  
}  
mysqli_close($conn);  
?>
</body> 
</html>    