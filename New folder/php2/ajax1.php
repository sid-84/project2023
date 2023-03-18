<html>
<head>
<link rel="stylesheet" href="style20.css">  
</head>
<body>
<script>  
function fun1()
{
   if(navigator.appName=="MicrosoftInternetExplorer") 
{
    obj=new ActiveXObject("msxml2.XMLHTTP");
  }
else
{
    obj=new XmlHttpRequest();
 }
    obj.open("get","page1.php",true);
    obj.send(null);
    obj.onreadystatechange=fun2();
    }
     function fun2()
    {
      alert(obj.readystate);
      if(obj.readystate==4)
    {
       alert(obj.responseText);
    }
  }
    </script>  
    <input type="button" value="check" onclick="fun1()">
    </body>
    </html>