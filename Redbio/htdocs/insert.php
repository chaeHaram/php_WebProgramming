  <?php  include("header.php"); ?>

  
    <body>
   		 
   		 	<div id="centered">
<?php
    //데이터 베이스 연결하기
  //  include "db_info.php";


    $conn = mysql_connect("localhost", "admin", "admin");
    mysql_select_db('redbio',$conn);

    if ( isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['title']) && isset($_POST['content']))
    {
        // Instructions if $_POST['value'] exist
       
        $name = $_SESSION['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        
	$content = str_replace("<","&lt;",$content);
	$content = str_replace(">", "&gt;",$content);


        $query = "INSERT INTO board
       ( name, email, pass, title, content, wdate, view)
        VALUES ('$name', '$email', '$pass', '$title', '$content', date_format(now() ,GET_FORMAT(date, 'jis')) ,0)";
        $result=mysql_query($query, $conn) or die(mysql_error());
        
    }  
   
    
    
    
 


    //데이터베이스와의 연결 종료
    mysql_close($conn);

    // 새 글 쓰기인 경우 리스트로..
  //  echo "<meta http-equiv='refresh' content='1; URL=list.php'>";
    
   
?>

<script>
  window.alert('정상적으로 저장되었습니다.');
  location.href='list.php';
  </script>


          </div>
      
    </body>
  <?php include("footer.php"); ?>
