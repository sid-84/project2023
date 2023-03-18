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
    page="validate.php?name="+val;
    obj.open("get","page",true);
    obj.send(null);
    obj.onreadystatechange=fun2();
    }
     function fun2()
    {
      if(obj.readystate==4)
    {
       if(obj.responseText==1)
      {
               document.getElementById('txtuname').style.color="red";
           }
        else
        {
            document.getElementById('txtuname').style.color="green"
        }
    }
  }
    </script>  
    <input type="text" id="txtuname" value= "check" onblur="fun1(this.value)">
    </body>
    </html>