<!doctype html>
<html>
<head>
<title>REGISTER Completed!</title>
</head>

<?php

 $user_id = $_POST['user_id'];
 $pw = $_POST['pw'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $memo = $_POST['memo'];
 
 $connect = mysql_connect("localhost","root","root") or die ("연결 실패");
 mysql_select_db('redbio');
 mysql_query('set names utf8');
 
 
 $query = "insert into member(user_id,pw,name,email,memo)
    values('$user_id','$pw','$name','$email','$memo')";
 mysql_query($query, $connect);
 mysql_close($connect);

 echo $_POST['user_id']; ?>
 님 회원가입 완료!

</html>