  <?php  include("header.php"); ?>
<title>REGISTER Completed!</title>


<?php

$user_id = $_POST['user_id'];
$pw = md5($_POST['pw']);
$name = $_POST['name'];
$email = $_POST['email'];
$memo = $_POST['memo'];

$conn = mysql_connect('localhost', 'admin', 'admin') or die("연결 실패");
mysql_select_db("redbio",$conn);

mysql_query('set names utf8');
 
 $result_ch=mysql_query("select user_id from users where user_id=$user_id", $conn);
 $row= @mysql_fetch_array($result_ch);
 
 if( isset($row['user_id']) ){?>
     <script>
     window.alert('이미 존재하는 아이디입니다.');
     </script> <?php 
    
 }
 else{
     $result=mysql_query("insert into users (name, user_id, pw, email, memo) values( '$name','$user_id','$pw','$email','$memo')", $conn);
 }
 mysql_close($conn);


 
 
 
?>

 <script>
  window.alert('<?php echo $user_id; ?>님의 회원가입이 정상적으로 처리되었습니다.');
  location.href='login.php'; 
  </script>

  <?php include("footer.php"); ?>