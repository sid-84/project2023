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
  
$sql = 'SELECT * FROM emp8';
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0)
{  
 while($row = mysqli_fetch_assoc($retval))
 {  
    print_r($row);
    echo "<br>";  
 } 
}
else
{  
  echo "0 results";  
}  
mysqli_close($conn);  
?> 
</body> 
</html>    