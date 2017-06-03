<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>注册</title>
<script type="text/javascript">
	function back(){
		var url="/blog/index.php";
		location.href=url;
	}
</script>

<style>
 
 #bodyheader{
   height: 40px;
   background-color: white;
 }
#body1{
   height: 500px;
   background: url(/blog/image/background.jpg);
   
 }
#footer
{
   height: 40px;
   background-color: white;
 }


 #a{

     width:370px;
     height: 400px;
     background-color: rgba(250,240,230,0.4);
     float: right;
     margin-top:30px;
     margin-bottom: 75px;
     margin-right: 100px;
     
     border-radius: 10px;

 }



 #header{
 	width:350px;
 	height: 50px;
 	font-size: 25px;
    text-align: center;
 	color: black;

 }
 #body{

    width:370px;
    height: 230px;
   margin-top: 15px;
    font-size: 20px;
    font-family: "楷体";
    margin-left: 15px;
}

.text{

	   margin-right:40px; 
     float: right;
     width:210px;
     height: 22px;
   
	 border-radius: 5px;

 }


.button{
	width: 200px;
	height: 35px;
	float: left;
	
	border-radius: 10px;
	font-size: 18px;
	font-family: "楷体";
	margin-top:10px;
	margin-left:80px; 
	background-color: rgba(250,240,230,0.5);
	
}
    




</style>
</head>
<body >
<header id="bodyheader"></header>


<div id="body1" >
 <div id="a">
   <header id="header"><font face="楷体">注册</font></header><hr size="1px" style="color: red">
   <div id="body">
   	<form action="doaction.php?action=zhuCe" method="post">
 
     账号：<input type="text" name="user" class="text"></input></li><br><br>
     密码：<input type="password" name="pwd"  class="text"></input></li><br><br> 
     确认密码：<input type="password" name="pwd2"  class="text"></input></li><br><br> 
     <input type="submit" name="tijiao" value="注册" class="button"></input><br><br>
     <input type="button" name="tuichu" value="返回" class="button" onclick="back()"></input>
  
   	</form>
  
  
 	 </div>
 </div>
 </div>

 <div id="footer"></div>
</body>
</html>