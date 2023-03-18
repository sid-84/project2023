<html>
<head>
<link rel="stylesheet" href="style20.css">  
</head>
<body>
<?php
$fp=fopen("cont1.txt","w");
fwrite($fp,"this is new content<br>");
echo "<br>" ;
$fp1=fopen("cont2.txt","a");   
fwrite($fp1,"this is php content<br>");    
echo "<br>";
$fp2=fopen("cont3.txt","a");   
fwrite($fp2,"this is ajax content<br>");    
echo "<br>";   
$fs=filesize("cont.txt");
echo "$fs";
echo "<br>"
$fs1=filesize("cont1.txt");  
echo "$fs1";
echo "<br>"
$fs1=filesize("cont2.txt");  
echo "$fs2";
echo "<br>"   
?>
</body>
</html>    
    