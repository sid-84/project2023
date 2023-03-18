<html>
<head>
<link rel="stylesheet" href="style20.css">  
</head>
<body>
<?php
$fp=fopen("cont.txt","r");
$fs=filesize("cont.txt");
$txt=fread($fp,$fs);
echo "$txt";
echo "<br>";    
echo "$fs";
echo "<br>";    
$fp1=fopen("cont1.txt","r");
$fs1=filesize("cont1.txt");
$txt1=fread($fp1,$fs1);
echo "$txt1";
echo "<br>";    
echo "$fs1"; 
echo "<br>";    
$fp2=fopen("cont2.txt","r");
$fs2=filesize("cont2.txt");
$txt2=fread($fp2,$fs2);
echo "$txt2";
echo "<br>";    
echo "$fs2"; 
echo "<br>";
$fp3=fopen("cont3.txt","r");
$fs3=filesize("cont3.txt");
$txt3=fread($fp3,$fs3);
echo "$txt3";
echo "<br>";    
echo "$fs3"; 
echo "<br>";
?>
</body>
</html>    
    