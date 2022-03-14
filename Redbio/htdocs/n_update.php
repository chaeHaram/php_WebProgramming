  <?php  include("header.php"); ?>
  
  
  <title>Q&A</title>
  
    <body>
   		 
   		 	<div id="centered">

<?php
    //데이터 베이스 연결하기
    $conn = mysql_connect("localhost", "admin", "admin");
    mysql_select_db("redbio",$conn);
    if(isset($_POST['title']) && isset($_POST['content'])  ){
    $id = $_GET['id'];
    $name = $_SESSION['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // 글의 비밀번호를 가져온다.
    $query = "SELECT pass FROM news WHERE id=$id";
    $result=mysql_query($query, $conn);
    $row=@mysql_fetch_array($result);

    
        $query = "UPDATE news SET name='$name',
        title='$title', content='$content' wdate=now() WHERE id=$id";//업데이트 쿼리문
        $result=mysql_query($query, $conn);
    
  
    }
    //데이터베이스와의 연결 종료
    mysql_close($conn);

    //수정하기인 경우 수정된 글로..
   // echo "<meta http-equiv='Refresh' content='1; URL=read.php?id=$id'>";
    
?>
<script>
  window.alert('정상적으로 수정되었습니다.');
  location.href='n_list.php';
  </script>
</div>
    </body>
  <?php include("footer.php"); ?>