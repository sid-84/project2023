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
    page="page1.php";
    obj.open("get","page",true);
    obj.send(null);
    obj.onreadystatechange=fun2();
  }
     function fun2()
    {
      if(obj.readystate==4)
    {
       
      document.getElementById('img1').style.visibility="hidden";
        alert(obj.responseText);
     }
        
    }
  
    </script>  
    <form id="frm1">
      <table align="center">
       <tr><td>username</td><td><input type="text" name="txtuname" id="txtuname"></td></tr> 
      <br>
      <tr><td>password</td><td><input type="password" name="txtpwd" id="txtpwd"></td></tr>
      <br> 
     <tr><input type="submit" name="btnsubmit" value="insert" onclick="fun1()"></tr>
    </table>
    </form>
    </body>
    </html>