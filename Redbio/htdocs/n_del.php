  <?php  include("header.php"); ?>

  
    <body>
   		 
   		 	<div id="centered">
<?php
//데이터 베이스 연결하기
$conn = mysql_connect("localhost", "admin", "admin");
mysql_select_db('redbio',$conn);

if(isset($_GET['id']) ){
$id = $_GET['id'];

$result=mysql_query("SELECT pass FROM news WHERE id=$id", $conn);
$row=@mysql_fetch_array($result);


    $query = "DELETE FROM news WHERE id=$id"; //데이터 삭제하는 쿼리문
    $result=mysql_query($query, $conn);


}
?>
<script>
  window.alert('정상적으로 삭제되었습니다.');
  location.href='n_list.php';
  </script>
</div>
    </body>
  <?php include("footer.php"); ?>