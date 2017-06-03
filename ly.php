<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title></title>
</head>
<script type="text/javascript">
	function fanhui(){
		location.href="/blog/index.php";
	}
</script>

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
   	height: 40px;
  	float: left;
    margin-left: 80px;
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
   <header class="header">发布留言</header><hr><br>
   <form action=/blog/doaction.php?action=ly method="post" class="form">
     <textarea rows="15" name='ly' class="textArea" placeholder="请输入留言内容"></textarea><br><br>    
     <input type='submit' value="发布留言" class="button">
     <input type='button' class="button" value="返回" onclick="fanhui()">
     </div>
   </body>
</html>