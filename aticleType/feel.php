<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>个人心情</title>

<style type="text/css">
  .header{
    background: url(/blog/image/head.jpg);
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
    list-style-type:disc;
    width: 90%;
    height:30px;
    border-radius:5px;
    background-color: rgba(252,157,154,0.4);
 } 
 .gd{
  float: right;
    margin-right:10px;
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
          <a href="/blog/login.php">关于</a>
      
    <?php 
         if(isset($_COOKIE['user'])){

    ?>
       <a href="faBu.php">发布</a>
        欢迎用户[<?=$_COOKIE['user']?>]
       <a href="/blog/index.php?user=1">注销</a>       
    <?php   
       }else{    
    
     ?>

       <a href="/blog/login.php">登录</a>
       <a href="/blog/zc.php">注册</a>  
    <?php

      }    
       @$user=$_GET['user'];
       if ($user==1) {
          setcookie('user','');      
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
    $sql="SELECT title,aticle,type,id FROM aticle where type='feel' LIMIT ".($page-1)*3 ." , 3";
    $result = mysql_query($sql);
    while ($rows=mysql_fetch_assoc($result)) {
    $aticle=$rows['aticle'];
   $ati=mb_substr($aticle,0,150,"utf-8");
    $id=$rows['id'];
    echo "<div class='part'>";
    echo '<header class="partheader">'.$rows['title'].'</header><hr>';
    echo '<aticle>'.$ati.'</aticle>'.'…………<br><br>';
    echo '<a href="blog/xq.php?id='.$id.'" class="gd">更多》</a>';
    echo "</div>";

    }
   
    mysql_free_result($result);
    $total_sql="select COUNT(*) from aticle where type='feel'";
    $total_result=mysql_fetch_array(mysql_query($total_sql));
    $total=$total_result[0];
    $total_pages=ceil($total/3);
    mysql_close($con);
    $page_banner="";
    $prev = $page-1;
    $next = $page+1;
     if ($page>1) {
     $page_banner.= '<a href="/blog/feel.php?p=1">首页</a>';
     $page_banner.= '<a href="/blog/feel.php?p='.$prev.'" >上一页&nbsp;&nbsp;</a>';
    
  }  
    if($page<$total_pages){
    $page_banner.= '<a href="/blog/index.php?p='.$next.'">下一页&nbsp;&nbsp;</a>';
    $page_banner.= '<a href="/blog/aticleType/feel.php?p='.$total_pages.'">末页</a>';}
    $page_banner.='当前为第&nbsp;'.$page.'&nbsp;页';
    $page_banner.= '共'.$total_pages.'页&nbsp;&nbsp;'; 
    ?>
  
 
  <div class="part1">
      <header class="partheader">模块展示</header><hr>
      <ul type="circle">
        <li class="ul"><a href="">个人心情</a></li><br>
        <li><a href="/blog/aticleType/life.php">人生轨迹</a></li><br>
        <li><a href="/blog/aticleType/shi.php">诗词歌赋</a></li><br>
      </ul>
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