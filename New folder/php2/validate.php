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
  
$sql = 'SELECT * FROM emp8 where name=$name';
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0)
{  
 while($row = mysqli_fetch_assoc($retval))
 {  
    echo "EMP ID :{$row['id']}  <br> ".  
         "EMP NAME : {$row['name']} <br> ".  
         "EMP SALARY : {$row['salary']} <br> ".  
         "--------------------------------<br>";  
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