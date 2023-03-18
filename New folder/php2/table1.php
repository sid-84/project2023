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
  
$sql = "create table emp8(id INT NOT NULL ,name VARCHAR(20) NOT NULL,salary INT NOT NULL)";  
if(mysqli_query( $conn,$sql))
{  
 echo "table emp8  created successfully.";  
}
else
{  
  echo "Sorry, table creation failed ".mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  