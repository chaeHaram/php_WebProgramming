<?php  include("header.php"); ?>
<title>REGISTER Completed!</title>


<?php

$user_id = $_POST['user_id'];
$pw_check = ($_POST['pw']);
$pw = md5($_POST['pw']);
$name = $_POST['name'];
$email = $_POST['email'];
$memo = $_POST['memo'];

$conn = mysql_connect("localhost", "admin", "admin") or die("연결 실패");
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
// 아스키코드표
// 영문자 41 ~ 7A
// 숫자 30 ~ 39
// 특수문자 21 ~ 2F
//    ``   3A ~ 40
//    ``   5B ~ 60
//    ``   7B ~ 7E
function IsComplexPassword($pw_check) {
    if(!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $pw_check)) 
    {
        ?>
        <script>
        alert('비밀번호 규칙을 지켜주세요.');
        </script>
        <?php
    }
    
}
  
mysql_close($conn);

?>

<script>
window.alert('<?php echo $user_id; ?>님의 회원가입이 정상적으로 처리되었습니다.');
location.href='login.php'; 
</script>

<?php include("footer.php"); ?>