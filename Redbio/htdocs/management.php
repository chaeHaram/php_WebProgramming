<?php  include("header.php"); ?>
  <title>Users</title>

    <body>



    <div id="centered">

<?php
//데이터 베이스 연결하기
$conn = mysql_connect("localhost", "admin", "admin") or die("연결 실패");
mysql_select_db("redbio",$conn);
 // db에서 웹으로 데이터를 가져올 때 한글 깨짐을 방지
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");


# LIST 설정
$query = "SELECT * FROM users ORDER BY no ";
$result = mysql_query($query, $conn);


// 총 게시물 수 를 구한다.
$result_count=mysql_query("SELECT count(*) FROM users",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];



?>
<html>
<head>
<title>Q&A</title>
<style>

td {font-size : 11pt;}

</style>


<BR>
<BR>
<BR>
    <center>
    <!-- 게시물 리스트를 보이기 위한 테이블 -->
<table width=800 border=0 cellpadding=2 cellspacing=1
bgcolor=#AACDAE>
<!-- 리스트 타이틀 부분 -->
<tr height=20 bgcolor=#AACDAE>
    <td width=50 align=center>
        <font color=white><b>번 호</b></font>
    </td>
    <td width=60 align=center>
        <font color=white><b>이 름</b></font>
    </td>
    <td width=100 align=center>
        <font color=white><b>아이디</b></font>
    </td>
    <td width=120 align=center>
        <font color=white><b>이메일</b></font>
    </td>
    <td width=320 align=center>
        <font color=white><b>메 모</b></font>
    </td>
    <!--
    <td width=50 align=center><font color=white><b>탈 퇴</b></font></td>-->
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
        <?php echo $row['no']; ?>
    </td>
    <!-- 번호 끝 -->
    <!-- 이름 -->
    <td align=center height=20 bgcolor=white>&nbsp;
        <?php echo $row['name']; ?>
    </td>
    <!-- 이름 끝 -->
    <!-- 아이디 -->
    <td align=center height=20 bgcolor=white>
        <?php echo $row['user_id']; ?>
    </td>
    <!-- 아이디 끝 -->
    <!-- 이메일 -->
    <td align=center height=20 bgcolor=white>
        <?php echo $row['email']; ?>
    </td>
    <!-- 이메일 끝 -->
    <!-- 메모 -->
    <td align=center height=20 bgcolor=white>
        <?php echo $row['memo']; ?>
    </td>
    <!-- 메모 끝 -->
    <td align=center height=20 bgcolor=white>
    <button><b>Delete</b></button>	 
    </td>
    
</tr>
<!-- 행 끝 -->
<?php
} // end While
//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>
</table>


    </center>

    </div>

    </body>
<?php include("footer.php"); ?>
