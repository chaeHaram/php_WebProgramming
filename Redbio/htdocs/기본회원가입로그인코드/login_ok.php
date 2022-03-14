<?php
    session_start();
    if (!isset($_POST['user_id']) || !isset($_POST['pw']) ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('Please check ID or PASSWORD');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    $user_id = $_POST['user_id'];
    $pw = $_POST['pw'];
    
    $connect = mysql_connect("localhost","root","root") or die ("Connect Failed");
    mysql_select_db('redbio');
    
    $query = "SELECT user_id,name from member where user_id='$user_id' && pw='$pw'";
    $result = mysql_query($query, $connect);
    $row = mysql_fetch_array($result);
    
    if(!$row){
        echo "<script>alert('Wrong ID or Wrong PWD');";
        echo "window.location.replace('login.php');</script>";
    }
    else{
        $_SESSION['user_id']=$user_id;
        $_SESSION['name']=$row['name'];
        
        echo "<meta http-equiv='refresh' content='1; URL=index.php'>";
    }
    
    mysql_close($connect);
    
    /*
    
    if( empty($query_id) ){
        echo "<script>alert('Wrong ID');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }

    if( empty($query_pw)){
        echo "<script>alert('Wrong PWD');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    if( !isset($members[$user_id]) || $members[$user_id]['password'] != $pw ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }*/
    /*  <meta http-equiv="refresh" content="0;url=index.php" /> */
    
   // $_SESSION['user_id'] = $user_id;
   // $_SESSION['name'] = $members[$user_id]['name'];
?>
