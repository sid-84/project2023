<html>
<head>
<link rel="stylesheet" href="style20.css">  
</head>
<body>
<?php
$fp=fopen("cont4.txt","w");
fwrite($fp,"this is new content<br>");
echo "<br>" ;
$fp=fopen("cont4.txt","w");   
fwrite($fp,"this is php content<br>");    
echo "<br>";
$fp=fopen("cont4.txt","w");   
fwrite($fp,"this is ajax content<br>");    
echo "<br>";   
$fs=filesize("cont4.txt");
echo "$fs";
?>
</body>
</html>    