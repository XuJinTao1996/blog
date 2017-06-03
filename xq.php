<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>详情</title>

<style type="text/css">
.header{
    background: url(image/head.jpg);
    background-size: 100%;
    margin-left:150px;
    width: 1000px;
    float: both;
    height: 180px;
    border-radius: 20px;
    font-size: 30px;
    font-family: "楷体";
    border: 1px solid #E3A869;

  }
  .txt{
    float: left;
    width: 500px;
    height:50px;
    margin-top:50px;
    margin-left:50px;
  }
 .footer1{
    background-color: rgba(192,192,192,0.1);
    border-radius: 5px;
    margin-left: 155px;
    width: 990px;
    float: both;
    height: 40px;
    border: 1px solid #E3A869;
    }
 .txt2{
    font-family: "楷体";
    color: black;
    float: right;
    margin-right: 20px;
    margin-top: 5px;
    
    }
  .body{
    border-radius: 20px;
    margin-left: 155px;
    width: 990px;
    height: auto;
    background-color: white;
    border: 1px solid #E3A869;
  }
  .footer{
    border-radius: 5px;
    text-align: center;
    margin-left: 155px;
    width: 1000px;
    height: 50px;
    background-color: black;
    color: white;
    font-family: "楷体";
    border: 1px solid #E3A869;
  }
    
   .part{
    background-color:white;
    width: 100%;
    height:auto;
    float: both;
    border-radius: 10px;
    border: 1px solid red;
   }
   .partheader{
    text-align: center;
    height:30px;
    background: url(head.jpg);
   }
   .parthead{
    text-align: center;
    height:300px;
   }

  #x{
    width:320px;
    height: 300px;
    font-size: 20px;
    font-family: "楷体";
    margin-left: 15px;
   }
 .fenye{
    width: 500px;
    height: 40px;
    text-align: center;
    margin-left: 35px;
    margin-top:20px; 
    float: left;
    border-radius: 10px;
    background-color: rgba(192,192,192,0.4);
  
 }
 .ul{
    width: 70%;
    height:30px;
    border-radius:5px;
    background-color: rgba(252,157,154,0.4);
 }
.image{
   margin-top: 20px;
   width: 700px;
   height: 100%;
   border-radius:10px;
}
.table{
  width: 100%;
}
.th{
   font-family: '楷体';
   height: 50px;
   font-size: 23px;
   color: red;
}
.td{   
    text-indent: 25px;
    padding: 10px;
    font-family: '楷体';
    font-size: 20px;
}
 .hr{
   width: 100px;
   color: blue;
 }
</style>


</head>
<body>
 <div class="header">
   <div class="txt">许金涛的个人博客</div>
   </div>
       <div class="footer1">
 	      <div class="txt2">
 	      	<a href="index.php">主页</a>
 	       	<a href="login.php">关于</a>
    <?php 
         if(isset($_COOKIE['user'])){
    ?>
       <a href="faBu.php">发布</a>
        欢迎用户[<?=$_COOKIE['user']?>]
       <a href="dologin.php?action=zx">注销</a>       
    <?php   
       }else{    
     ?>
       <a href="login.php">登录</a>
       <a href="zc.php">注册</a>  
    <?php
      }                      
    ?>
		</a>
 	</div>
 </div>
 </div>

 </body>
 <div class="body">  
  <div class="part">
    <header class="parthead"><img src="image/5.jpg" class="image"></header><br>
    <table class="table">
   <?php
    $id=$_GET['id'];
    $total_pages;
   if(isset($_GET['p'])){
                    $page = $_GET['p'];
                }else{
                    $page = 1;
                }
  $con=mysql_connect("localhost","root","root");
    mysql_query('set names utf8');
    mysql_select_db('blog');
    $sql="SELECT title,aticle,author FROM aticle where id=".$id."";
    $result = mysql_query($sql);
    $rows=mysql_fetch_array($result);
    echo '<tr align="center"><td class="th">'.$rows['title'].'</td></tr>';
    echo '<tr align="center"><td>作者：'.$rows['author'].'<hr class="hr"></td></tr>';
    echo '<tr><td class="td">'.$rows['aticle'].'</td></tr>';
    ?>
   </table>  
  </div></div></div>
 <div class="footer">许金涛的个人博客@1697684938</div>
   
</body>
</html>