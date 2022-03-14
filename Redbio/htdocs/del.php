  <?php  include("header.php"); ?>

  
    <body>
   		 
   		 	<div id="centered">
<?php
//데이터 베이스 연결하기
$conn = mysql_connect("localhost", "admin", "admin");
mysql_select_db('redbio',$conn);

if(isset($_GET['id']) && isset($_POST['pass']) ){
$id = $_GET['id'];
$pass = $_POST['pass'];

$result=mysql_query("SELECT pass FROM board WHERE id=$id", $conn);
$row=mysql_fetch_array($result);

if ($pass==$row['pass'] )//비밀번호 맞는지 확인함.
{
    $query = "DELETE FROM board WHERE id=$id"; //데이터 삭제하는 쿼리문
    $result=mysql_query($query, $conn);
}
else
{
    echo ("
    <script>
    alert('비밀번호가 틀립니다.');
    history.go(-1);
    </script>
    ");
    exit;
}
}
?>
<script>
  window.alert('정상적으로 삭제되었습니다.');
  location.href='list.php';
  </script>
</div>
    </body>
  <?php include("footer.php"); ?>