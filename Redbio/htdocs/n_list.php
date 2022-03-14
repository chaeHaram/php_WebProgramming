  <?php  include("header.php"); ?>
  
  

  
  <title>Q&A</title>
  
    <body>
   		 
   		 	<div id="centered">

<?php
//데이터 베이스 연결하기
$conn = mysql_connect("localhost", "admin", "admin") or die("연결 실패");
mysql_select_db("redbio",$conn);




# LIST 설정
// 데이터베이스에서 페이지의 첫번째 글($no)부터 
// $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM news ORDER BY id DESC";
$result = mysql_query($query, $conn);

// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM news",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];

?>
<html>
<head>
<title>NEWS</title>
<style>

td {font-size : 11pt;}

</style>
</head>
<center>
<BR>
<!-- 게시판 타이틀 -->

<BR>
<BR>
<!-- 게시물 리스트를 보이기 위한 테이블 -->
<table width=800 border=0 cellpadding=2 cellspacing=1
bgcolor=#AACDAE>
<!-- 리스트 타이틀 부분 -->
<tr height=20 bgcolor=#AACDAE>
    <td width=50 align=center>
        <font color=white><b>번 호</b></font>
    </td>
    <td width=400 align=center>
        <font color=white><b>제 목</b></font>
    </td>
    <td width=100 align=center>
        <font color=white><b>글쓴이</b></font>
    </td>
    <td width=100 align=center>
        <font color=white><b>날 짜</b></font>
    </td>
    <td width=50 align=center>
        <font color=white><b>조회수</b></font>
    </td>
</tr>
<!-- 리스트 타이틀 끝 -->
<!-- 리스트 부분 시작 -->
<?php
while($row=mysql_fetch_array($result))
{

?>
<!-- 행 시작 -->
<tr>
    <!-- 번호 -->
    <td height=20 bgcolor=white align=center>
        <a href="n_read.php?id=<?php echo $row['id']; ?>">
        <?php echo $row['id']; ?></a>
    </td>
    <!-- 번호 끝 -->
    <!-- 제목 -->
    <td height=20 bgcolor=white>&nbsp;
        <a href="n_read.php?id=<?php echo $row['id']; ?>">
        <?php echo $row['title']; ?></a>
    </td>
    <!-- 제목 끝 -->
    <!-- 이름 -->
    <td align=center height=20 bgcolor=white>
        <font color=black>
        <a href="n_read.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
        </font>
    </td>
    <!-- 이름 끝 -->
    <!-- 날짜 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?php echo $row['wdate'];?></font>
    </td>
    <!-- 날짜 끝 -->
    <!-- 조회수 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?php echo $row['view']; ?></font>
    </td>
    <!-- 조회수 끝 -->
</tr>
<!-- 행 끝 -->
<?php
} // end While
//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>
</table>
  <?php 
  // 관리자만 접근할 수 있도록
  if(isset($_SESSION['user_id']) ){
      if( $_SESSION['user_id'] == "admin" ){
       ?>   
      	<a href=n_write.php>▷ 글쓰기 ◁</a>
          <?php 
      }
  }
  ?>

</center>
</div>
    </body>
  <?php include("footer.php"); ?>