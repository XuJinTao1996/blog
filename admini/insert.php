<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title></title>
</head>
<script type="text/javascript">
	function fanhui(){
		location.href="/blog/admini/insertuser.php";
	}
</script>

<style type="text/css">
	.updata{
		width: 350px;
		height: 280px;
		margin-top: 180px;
		margin-left: 38%;
		border: 1px solid red;
		border-radius:5px;
	}
  .header{
    height: 20x;
    font-family: '楷体';
    color: red;
    text-align: center;
    font-size: 25px;
    background-color: rgba(38,188,213,0.4);
      }
	.button{
  	width: 250px;
   	height: 30px;
  	float: left;
  	border-radius: 10px;
  	font-size: 18px;
   	font-family: "楷体"; 
  	margin-top: 10px;
  	background-color:rgba(135,206,235,0.4); 
}
   .form{
    margin-left: 50px;
   }
</style>
<body>
<div  class="updata">
   <header class="header">添加账号</header><hr><br>
   <form action=/blog/doaction.php?action=insertuser method="post" class="form">
     账号名：<input type='text' name='Name' ?><br><br>
     密码：  <input type='text' name='pwd' ?><br><br>
     选择权限：
     <select name="type"><option value=0 selected>普通用户</option>
     <option value=1>管理员</option>
     </select>
     <input type='submit' value="添加" class="button">
     <input type='button' class="button" value="返回" onclick="fanhui()">
     </div>
   </body>
</html>