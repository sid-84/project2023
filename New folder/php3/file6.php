<html>
<head>
<link rel="stylesheet" href="style20.css">  
</head>
<body>
<?php
$fp=fopen("cont4.txt","r");
$fs=filesize("cont.txt");
$txt=fread($fp,$fs);
echo "$txt";
echo "<br>";    
echo "$fs"; 
?>
</body>
</html>    
    