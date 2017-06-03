<?php
header('content-type:text/html;charset=utf8');
    
    @$action=$_GET['action']; //接收各表单传送的action值
    $con=mysql_connect("localhost","root","root");
    mysql_query('set names utf8');
    mysql_select_db('blog');
    if ($action=='zx') {
    	setcookie('user','');
    	echo '<script>parent.location.href="index.php";;</script>';  	
    }
	if (@$action=='login') {  //判断action的值，选择要操作的内容
       $user = $_POST['user'];
	     $pwd = $_POST['pwd'];
       $sql=mysql_query('select * from user') ;
	   while($result=mysql_fetch_array($sql)){
        $userName=$result['userName'];
        $password=$result['pwd'];
        $admini=$result['type'];
        if($user==$userName && $pwd==$password){
         setcookie('user',$user);
         setcookie('admini',$admini);
         @$value='true';
            }   
     }
         //将变量的值赋给cookie
         if(@$value=='true'){
         echo "<script>location.href='index.php';</script>"; //重新定位页面 
        }else{
         echo '<script>alert("请检查您的账号和密码！");parent.location.href="login.php";</script>';//弹出提示框
    }
	}
      
  if ($action=='zhuCe') {
    	@$user = $_POST['user'];
    	$pwd  = $_POST['pwd'];
    	$pwd2 = $_POST['pwd2'];
    	$sql=mysql_query('select * from user') ;
      	while($result=mysql_fetch_array($sql)){
         $userName=$result['userName'];
         if($user==$userName){
          echo '<script>alert("已经存在该账号，请直接登录");location.href="login.php";</script>';}}
         if ($user==''||$pwd=='') {
         	 echo '<script>alert("您的用户名或密码为空！");parent.location.href="zc.php";</script>';
         }
         elseif($pwd2!=$pwd){
          echo '<script>alert("请检查您的密码！");parent.location.href="zc.php";</script>';
             } else {
          $sql=mysql_query('insert into user (userName,pwd) values("'.$user.'",'.$pwd.')');
          echo '<script>alert("注册成功！用户名为：'.$user.'! 请登录");location.href="login.php";</script>';
       	       
  }}

   if($action=='faBu'){
   	$author=$_COOKIE['user'];
   	$type=$_POST['type'];
   	$title=$_POST['title'];
   	$aticle=$_POST['aticle'];
   	$sqltitle=mysql_query('select title from aticle');
    while($resultUser=mysql_fetch_assoc($sqltitle)){
    	$titles=$resultUser['title'];
    	 if ($title==$titles) {
    	 	 echo "<script>alert('已存在该文章！');parent.location.href='faBu.php'</script>";
    	 	   }
    }
   	if($title==""||$aticle==""){
   	 echo "<script>alert('请检查要发布的内容！');parent.location.href='faBu.php'</script>";
   	}else{
     $sql=mysql_query('insert into aticle (type,author,title,aticle) values("'.$type.'","'.$author.'","'.$title.'","'.$aticle.'")');
     echo "<script>location.href='index.php'</script>";
   }
}
    
   
    if ($action=='userupdata'){ 
     $user_id = $_COOKIE['id'];
     $name=$_POST['Name'];
     $pwd=$_POST['pwd'];
     $type=$_POST['type'];
     $sql=mysql_query('update user set userName="'.$name.'"  where id='.$user_id.'');
     $sql=mysql_query('update user set pwd="'.$pwd.'"  where id='.$user_id.'');
     $sql=mysql_query('update user set type="'.$type.'"  where id='.$user_id.'');
     echo"<script>alert('修改成功');location.href='/blog/admini/admini.php';</script>";      
   }

   if($action=='delete'){
    $user_id=$_GET['id'];
    $sql=mysql_query('delete from user where id='.$user_id.'');
     echo"<script>alert('删除成功！');location.href='/blog/admini/admini.php';</script>"; 
          }

   if($action=='insertuser'){
     $name=$_POST['Name'];
     $pwd=$_POST['pwd'];
     $type=$_POST['type'];
     if ($name!=''||$pwd!='') { 
     $sql=mysql_query('select * from user');     
      while($result=mysql_fetch_array($sql)){
        $userName=$result['userName'];
        $password=$result['pwd'];
        if($name==$userName){
         @$value=1;
            }   
     }
         if(@$value==1){
         echo '<script>alert("已存在该账号！");parent.location.href="/blog/admini/insert.php";</script>';//弹出提示框
           }else{
         $sql=mysql_query('insert into user (userName,pwd,type) values("'.$name.'","'.$pwd.'","'.$type.'")'); //重新定位页面 
         echo '<script>alert("插入成功！");parent.location.href="/blog/admini/insertuser.php";</script>';
    }
       }else{echo '<script>alert("请检查账号和密码！");parent.location.href="/blog/admini/insert.php";</script>';} 
 }
   if($action=='deleteAticle'){
      $id=$_GET['id'];
      $sql=mysql_query('delete from aticle where id='.$id.'');
      echo "<script>alert('删除成功！');location.href='/blog/admini/deleteAticle.php';</script>";
   }
   if ($action=='updateAticle') {
      $title;$aticle;$type;
      @$aticle_id=$_GET['aticle_id'];
      $title=$_POST['title'];
      $aticle=$_POST['aticle'];
      $type=$_POST['type'];
      $result=mysql_query('select * from aticle');
      while ($rows=mysql_fetch_array($result)) {
        if ($rows['id']!=$aticle_id && $title=$rows['title']) {
          $value=true;}
          else{
          $value=false;
        }
      }
      if($value){
      echo '<script>alert("已存在该账号！");parent.location.href="/blog/admini/aticleUpdate.php";</script>';
      }else{
      $sql=mysql_query('update aticle set title="'.$title.'",aticle="'.$aticle.'",type="'.$type.'" where id='.$aticle_id.'');
      echo '<script>alert("编辑成功！");parent.location.href="/blog/admini/aticleUpdate.php";</script>';}
   }
  if($action=='ly'){
    $ly;$ly_author;
    $ly=$_POST['ly'];
    $ly_author=$_COOKIE['user'];
    if ($ly=='') {
      echo '<script>alert("请输入留言内容");parent.location.href="ly.php"</script>';
    }else{
      $sql=mysql_query('insert into ly(ly_aticle,ly_author) values ("'.$ly.'","'.$ly_author.'")');
      echo '<script>alert("发布成功");location.href="index.php"</script>';
    }
  }

  if($action=='deletely'){
    $ly_id=$_GET['ly_id'];
    $sql=mysql_query('delete from ly where ly_id='.$ly_id.'');
    echo '<script>alert("删除成功");location.href="/blog/admini/lydelete.php"</script>';
  }
?>