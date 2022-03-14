  <?php  include("header.php"); ?>
    
  
  <title>NEWS</title>
  
    <body>
   		 
   		 	<div id="centered">
<style>
td {font-size : 11pt;}
</style>

<center>
<BR>
<?php
    //데이터 베이스 연결하기
    $conn = mysql_connect("localhost", "admin", "admin") or die("연결 실패");
    mysql_select_db("redbio",$conn);
    
    

    if(isset($_GET['id']) ){
    $id = $_GET['id'];
    // 글 정보 가져오기
    $result=mysql_query("SELECT * FROM news WHERE id=$id", $conn);
    $row=mysql_fetch_array($result);
     }

    // 조회수 업데이트
    $result=mysql_query("UPDATE news SET view=view+1 WHERE id=$id",$conn);

    mysql_close($conn);
   
?>
<table width=800 border=0 cellpadding=2 cellspacing=1
bgcolor=#AACDAE>
<tr>
    <td height=20 colspan=4 align=center bgcolor=#AACDAE>
        <font color=white size=5><B><?php if(isset($row['title']) ) echo $row['title']; ?></B></font>
    </td>
</tr>
<tr>
    <td width=50 height=20 align=center bgcolor=#FFFFF2>글쓴이</td>
    <td width=240 bgcolor=white>&nbsp;<?php if(isset($row['name']) )echo $row['name']; ?></td>
</tr>
<tr>
    <td width=50 height=20 align=center bgcolor=#FFFFF2>
    날&nbsp;&nbsp;&nbsp;짜</td><td width=240
    bgcolor=white>&nbsp;<?php if(isset($row['wdate']) ) echo $row['wdate']; ?></td>
    <td width=50 height=20 align=center bgcolor=#FFFFF2>조회수</td>
    <td width=240 bgcolor=white>&nbsp;<?php if(isset($row['view']) ) echo $row['view']; ?></td>
</tr>
<tr>
    <td bgcolor=white colspan=4>
    <font color=black>
    <pre>&nbsp;<?php if(isset($row['content']) ) echo $row['content']; ?></pre>
    </font>
    </td>
</tr>
<!-- 기타 버튼 들 -->
<tr>
    <td colspan=4 bgcolor=#AACDAE>
    <table width=100%>
        <tr>
            <td width=500 align=center height=20>
                <a href=n_list.php><font color=white>
                [목록보기]&nbsp;</font></a>
                  <?php 
  // 관리자만 접근할 수 있도록
         if(isset($_SESSION['user_id'])=="admin" ){
          ?>                
                <a href=n_write.php><font color=white>
                [글쓰기]&nbsp;</font></a>
                <a href=n_edit.php?id=<?php if(isset($id)) echo $id; ?>><font color=white>
                [수정]&nbsp;</font></a>
                <a href=n_del.php?id=<?php if(isset($id)) echo $id; ?>>
                <font color=white>[삭제]</font></a>    
           <?php 
            }
         ?>
            </td>
     
        </tr>
    </table>
    </b></font>
    </td>
</tr>
</table>
</center>
</div>
    </body>
  <?php include("footer.php"); ?>


