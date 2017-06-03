<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>主页</title>

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
     background-color: white;
    border-radius: 20px;
    margin-left: 155px;
    width: 990px;
    height: 900px;
    border: 1px solid #E3A869;
  }
  .footer{
    border-radius: 5px;
    text-align: center;
    margin-left: 150px;
    width: 1000px;
    height: 50px;
    background-color: black;
    color: white;
    font-family: "楷体";
    border: 1px solid #E3A869;
  }
    
   .part{
    background-color: rgba(250,240,230,0.1);
    width: 55%;
    height: 200px;
    float: left;
    margin-top:35px;
    margin-left:35px;
    border-radius: 10px;
    padding: 10px;
    border: 1px;
   }
    
  .part1{
    background-color: rgba(250,240,230,0.2);
    width: 30%;
    height: 300px;
    float: both;
    margin-top:35px;
    margin-left:68%;
    border-radius: 10px;
    border: 1px ;
   }

   .partheader{
    text-align: center;
    height:30px;
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
.gd{
	float: right;
    margin-right:10px;
}  
.table{
  width: 100%;
  font-size: 13px;
  text-align: center;
}

</style>
</head>
<body>
 <div class="header">
   <div class="txt">许金涛的个人博客</div>
   </div>
       <div class="footer1">
 	      <div class="txt2">
 	      	<a href="/blog/index.php">主页</a>
 	       		    
    <?php 
         if(isset($_COOKIE['user'])){
    ?>
       <a href="faBu.php">发布</a>
        欢迎用户[<?=$_COOKIE['user']?>]
        <?php 
          if ($_COOKIE['admini']==1){
            echo "<a href='/blog/admini/admini.php'>管理员界面</a>";
          }
        ?>
       <a href="/blog/doaction.php?action=zx">注销</a>       
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
  <?php
    $total_pages;
   if(isset($_GET['p'])){
                    $page = $_GET['p'];
                }else{
                    $page = 1;
                }
	  $con=mysql_connect("localhost","root","root");
    mysql_query('set names utf8');
    mysql_select_db('blog');
    $sql="SELECT title,aticle,id FROM aticle LIMIT ".($page-1)*3 ." , 3";
    $result = mysql_query($sql);
    while ($rows=mysql_fetch_assoc($result)) {
    $aticle=$rows['aticle'];
    $ati=mb_substr($aticle,0,150,"utf-8");
    $id=$rows['id'];
    echo "<div class='part'>";
    echo '<header class="partheader">'.$rows['title'].'</header><hr>';
    echo '<aticle>'.$ati.'</aticle>'.'…………<br><br>';
    echo '<a href="xq.php?id='.$id.'" class="gd">更多》</a>';
    echo "</div>";
    }   
    mysql_free_result($result);
    $total_sql="select COUNT(*) from aticle";
    $total_result=mysql_fetch_array(mysql_query($total_sql));
    $total=$total_result[0];
    $total_pages=ceil($total/3);
    mysql_close($con);
    $page_banner="";
    $prev = $page-1;
    $next = $page+1;
     if ($page>1) {
     $page_banner.= '<a href="index.php?p=1">首页&nbsp;&nbsp;</a>';
     $page_banner.= '<a href="index.php?p='.$prev.'" >上一页&nbsp;&nbsp;</a>'; 	
  }  
    if($page<$total_pages){
    $page_banner.= '<a href="index.php?p='.$next.'">下一页&nbsp;&nbsp;</a>';
    $page_banner.= '<a href="index.php?p='.$total_pages.'">末页&nbsp;&nbsp;</a>';}
    $page_banner.='当前为第&nbsp;'.$page.'&nbsp;页';
    $page_banner.= '共'.$total_pages.'页&nbsp;&nbsp;'; 
  
    ?>
 	<div class="part1">
 		  <header class="partheader">模块展示</header><hr>
 		  <ul style="list-style-type: circle;">
 		  	<li><a href="/blog/aticleType/feel.php">个人心情</a></li><br>
 		  	<li><a href="/blog/aticleType/life.php">人生轨迹</a></li><br>
 		  	<li><a href="/blog/aticleType/shi.php">诗词歌赋</a></li><br>
		  </ul>
 	</div>
 	<div class="part1">
 		  <header class="partheader">留言板</header><hr> 
      <?php
       $total_p;
       if (isset($_GET['p'])) {
           $p=$_GET['p'];
       }else{
           $p=1;
       }      
         $conn=mysql_connect("localhost","root","root");
           mysql_select_db('blog');
           mysql_query('set names utf8');
           $sql='select * from ly LIMIT '.($p-1)*4 .' , 4';
           $result=mysql_query($sql);
           echo"<table class='table'><tr><th>留言内容</th><th>作者</th></tr>";
           while($row = mysql_fetch_assoc($result)) {
            $id=$row['ly_id'];?>
            <tr><td><?=$row['ly_aticle']?></td><td><?=$row['ly_author']?></td></tr>
                                
        <?php
            }
           echo "</table>";
           if (isset($_COOKIE['user'])) {
              echo '<a href="ly.php">留言</a>';
           }
           $sql1='select COUNT(*) from ly';
           $result1=mysql_query($sql1);
           $total=mysql_fetch_array($result1);
           $total_p=ceil($total[0]/6);
           if ($page>1) {
            echo '<a href="admini.php?page=1">首页</a> ';
            echo '<a href="admini.php?page='.($p-1).'">上一页</a> ';       
           }
           if ($page<$total_p) {
           echo '<a href="admini.php?page='.($p+1).'">下一页</a> ';
           echo '<a href="admini.php?page='.$total_p.'">末页</a>';
              }
      ?>		 
 	</div> 
    <?php
     echo "<div class='fenye'>";
     echo $page_banner;
     echo "</div>";
    ?>
 </div>
 <div class="footer">许金涛的个人博客@1697684938</div>   
</body>
</html>