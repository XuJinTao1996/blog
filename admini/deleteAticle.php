<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<title>管理员界面</title>
	
<style type="text/css">
 .header{
     width: 1000px;
     height: 100px;
     background-color: black;
     margin-left: 155px;
     border: 1px solid red;
     text-align: center;
     border-radius: 10px;
     float: both;
 }
 .body{
 	width: 990px;
 	height: 500px;
 	margin-left: 160px;
 	border: 1px solid red;
 }
  .footer{
    background-color: black;
    color: white;
    border-radius: 5px;
    margin-left: 155px;
    width: 1000px;
    height: 40px;
    border: 1px solid #E3A869;
    }
  .part1{
  	width: 200px;
  	height: 100%;
  	float: left;
  	clear: left;
  	padding: 5px;
  	background-color: rgba(255,109,65,0.4);
  	border-top-right-radius: 1em;
  	border-bottom-right-radius: 1em;
  }
   .part2{
   	width: 700px;
   	height: 380px;
    float:right;
   	margin-right: 30px;
   	margin-top: 30px;
   	border-radius: 10px;
   }
   .font{
   	 float: left;
   	 margin-left: 400px;
   	 margin-top: 35px;
     font-size: 28px;
   	 color:white;
   	 font-family: '楷体';
   }
   .option{
   	width: 100px;
   	height: 20px;
   	background-color:rgba(192,192,192,0.4);
   }
   .select{
   	width: 90%;
   	height:20px;
   	background-color: #F72136;
   }
   .table{
   	text-align: center;
   	width: 100%;
   	border: 1px solid red; 
   	border-radius: 10px;
   }
   .fenye{
    text-align: center;
    margin-left: 35px;
    margin-top:10px; 
    float: left;
    border-radius: 10px;
 }
 </style>
</head>
<body>
<div  class="header">
    <font class="font">博客管理员界面</font>
</div>
<div  class="body">
	<div class="part1">
	  <ul>
	  	<li>管理员账号：<?=$_COOKIE['user']?><hr style="color: #FF99FF"></li>
	  	<li type="circle">账号管理
          <ul>
          	<li ><a href="admini.php">账号重置/删除</a></li>
          	<li><a href="insertuser.php">添加账号</a></li>
          	</ul>
      	  	</li>
	  	<li type="disc">文章管理</li>
	  	  <ul>
	  	   	<li type="disc"><div class="select"><a href="deleteAticle.php">文章删减</a></div></li>
	  	   	<li><a href="aticleUpdate.php">文章编辑</a></li>
	  	  </ul>
	  	<li type="circle">留言管理</li>
	  	   <ul>
            <li><a href="lydelete.php">留言删除</a></li>
            <li><a href="/blog/index.php">返回主页</a></li>
           </ul>
	  </ul>
	</div>
	<div class="part2">
		 <?php 
		   $total_pages;
		   if (isset($_GET['page'])) {
		   	   $page=$_GET['page'];
		   }else{
		   	   $page=1;
		   }		  
    	   $conn=mysql_connect("localhost","root","root");
           mysql_select_db('blog');
           mysql_query('set names utf8');
           $sql='select * from aticle LIMIT '.($page-1)*6 .' , 6';
           $result=mysql_query($sql);
           echo"<table class='table' border='1px'><tr><th>标题</th><th>作者</th><th>类型</th><th colspan=2>操作</th></tr>";
           while($row = mysql_fetch_assoc($result)) {
           	$id=$row['id'];
            echo '<tr><td>'.$row['title'].'</td><td>'.$row['author'].'</td><td>'.$row['type'].'</td>';?>
                  <td colspan="2">
                  <a href="javascript:if(confirm('确认删除嘛！'))location='/blog/doaction.php?action=deleteAticle&id=<?=$id?>'">删除文章</a></td>
                  </tr>
             <?php
          }
           echo "</tale>";
           $sql1='select COUNT(*) from user';
           $result1=mysql_query($sql1);
           $total=mysql_fetch_array($result1);
           $total_pages=ceil($total[0]/6);
           echo "<div class='fenye'>";
           if ($page>1) {
            echo '<a href="admini.php?page=1">首页</a> ';
            echo '<a href="admini.php?page='.($page-1).'">上一页</a> ';       
           }
           if ($page<$total_pages) {
           echo '<a href="admini.php?page='.($page+1).'">下一页</a> ';
           echo '<a href="admini.php?page='.$total_pages.'">末页</a>';
           echo "</div><br>";
           }
		 ?>
	</div>
</div>


</body>
</html>