<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title></title>
</head>
<script type="text/javascript">
	function fanhui(){
		location.href="aticleUpdate.php";
	}
</script>
<?php
 if (isset($_GET['id'])) {
     $aticle_id=$_GET['id'];
     $con=mysql_connect("localhost","root","root");
     mysql_select_db('blog');
     mysql_query('set names utf8');
     $sql='select title,aticle from aticle where id='.$aticle_id.'';
     $result=mysql_query($sql);
     $row=mysql_fetch_array($result);
}
?>
<style type="text/css">
	.updata{
		width: 800px;
		height: 600px;
		margin-top: 20px;
		margin-left: 20%;
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
   .textArea{
  width: 700px;
  height: 350px;
 }
</style>
<body>
<div  class="updata">
   <header class="header">编辑文章</header><hr><br>
   <form action=/blog/doaction.php?action=updateAticle&aticle_id=<?=$aticle_id?> method="post" class="form">
     文章标题：<input type='text' name='title' value=<?=$row['title'];?>> <br><br>
                <textarea rows="15" name='aticle' class="textArea"><?=$row['aticle'];?></textarea><br><br>    
     请重新选择文章类型：
     <select name="type">
     <option value="feel">个人心情</option>
     <option value="life">人生轨迹</option>
     <option value="shi">诗词歌赋</option>
     </select><br>
     <input type='submit' value="更改" class="button">
     <input type='button' class="button" value="返回" onclick="fanhui()">
     </div>
   </body>
</html>