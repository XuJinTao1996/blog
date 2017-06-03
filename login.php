<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>登录</title>

<script type="text/javascript">
	function back(){
		var url="index.php";
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
     background: url(image/background.jpg);
   }

#footer
{
     height: 40px;
     background-color: white;
 }

 #a{
     width:350px;
     height: 330px;
     background-color: rgba(250,240,230,0.4);
     float: right;
     margin-top:75px;
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

     width:320px;
     height: 300px;
     font-size: 20px;
     font-family: "楷体";
     margin-left: 15px;
}

.text{
	 margin-top:10px;
	 margin-left:20px; 
     width:210px;
     height: 25px;
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
         <header id="header"><font face="楷体">登录</font></header><hr size="1px" style="color: red">
       <div id="body">
         <form method="post" action = "doaction.php?action=login">
           账号：<input type="text" name="user" class="text"><br><br>
           密码：<input type="password" name="pwd"  class="text"><br><br> 
           <input type="submit" name="tijiao" value="登录" class="button"><br><br>
           <input type="button" name="tuichu" value="返回" class="button" onclick="back()"><br><br>
           <a href="zc.php" ><font color="red" size="4px">注册</font></a><br>
         </form>
  	 </div>
   </div>
 </div>

 <div id="footer"></div>
</body>
</html>