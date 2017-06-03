<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>发布</title>


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
    width: 60%;
    height: 600px;
    float: left;
    margin-top:35px;
    margin-left:50px;
    border-radius: 10px;
    padding:50px;
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
 .button{
   width: 400px;
   height: 50px;
   float: left;
   border-radius: 10px;
   font-size: 18px;
   font-family: "楷体"; 
   margin-left: 20px;
   background-color:rgba(135,206,235,0.8); 
}
 .title{
  width: 400px;
  height: 25px;
 }
 .textArea{
  width: 450px;
  height: 400px;
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
 		</a>
 	</div>
 </div>
 <div class="body">

 	<div class="part">
     <form action="/blog/doaction.php?action=faBu" method="post" accept-charset="utf-8" >
              标题:  <input type="text" name="title" class="title" placeholder="标题" ><br><br>
              模块:  <select name="type">
              <option value="feel">个人心情</option>
              <option value="life">人生轨迹</option>
              <option value="shi">诗词歌赋</option>
              </select><br><br>
              <textarea rows="10" name="aticle" placeholder="文章内容" class="textArea"></textarea><br>
              <div >
              <button type="submit" class="button">发布</button>
              </div>                    
              </form>
 	</div>

 	<div class="part1">
 		  <header class="partheader">模块展示</header><hr>
 		  <ul>
 		  	<li><a href="/blog/aticleType/feel.php">个人心情</a></li><br>
 		  	<li><a href="/blog/aticleType/life.php">人生轨迹</a></li><br>
 		  	<li><a href="/blog/aticleType/shi.php">诗词歌赋</a></li><br>
		  </ul>
 	</div>

  <div class="part1">
      <header class="partheader">外部链接</header><hr>
  </div>
</div>
 <div class="footer">许金涛的个人博客@1697684938</div></div> 
</body>
</html>