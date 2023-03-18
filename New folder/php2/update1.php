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
  
$sql = "update  emp7 set name='rinku' where id=1001";  
if(mysqli_query( $conn,$sql))
{  
 echo "record updated successfully.";  
}
else
{  
  echo "Sorry, could not update record ".mysqli_error($conn);  
}  
mysqli_close($conn);  
?> 
</body> 
</html>    