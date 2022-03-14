<!doctype html>
<html lang="ko">
    <meta charset="utf-8">

<?php
    session_start();
    
    $connect = mysql_connect("localhost","admin","admin") or die ("Connect Failed");
    mysql_select_db('redbio');
    
    if (!isset($_POST['user_id']) || !isset($_POST['pw']) ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 혹은 비밀번호를 입력해주세요.');";
        echo "window.location.replace(\"login.php\");</script>";
        exit;
    }
    $user_id = $_POST['user_id'];
    $pwd = md5($_POST['pw']);
    
   
    $query = "SELECT pw,name,user_id from users where user_id='$user_id'";
    $result = mysql_query($query, $connect);
    
    $row = @mysql_fetch_array($result);
   
        if( $pwd == $row['pw']){
            $_SESSION['user_id']=$user_id;
            $_SESSION['name']=$row['name'];
            $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

            echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\">";
        }    
        else {
            echo "<script>alert('아이디 혹은 비밀번호를 잘못 입력하셨습니다.');";
            echo "window.location.replace('login.php');</script>";
           
        }
    
        
    
    mysql_close($connect);
    

?>
</html>
