  <?php  include("header.php"); ?>
  <title>NEWS</title>
  
    <body>
   		 
   		 	<div id="centered">
<style>

td { font-size : 11pt; }

</style>




<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action=n_update.php?id=<?php echo "$_GET[id]"; ?> method=post>
<table width=800 border=0 cellpadding=2 cellspacing=1 bgcolor=#FFFFF2>
    <tr>
        <td height=20 align=center bgcolor=#AACDAE>
            <font color=white><B>글 수 정 하 기</B></font>
        </td>
    </tr>
<?php
    //데이터 베이스 연결하기
    $conn = mysql_connect("localhost", "admin", "admin");
    mysql_select_db("redbio",$conn);
    
    if (isset($_GET['id'])){
        $id = $_GET['id'];
       
        // 먼저 쓴 글의 정보를 가져온다.
        $result=mysql_query("SELECT * FROM news WHERE id=$id", $conn);
        $row=mysql_fetch_array($result);
    }
    
?>
<!-- 입력 부분 -->
    <tr>
        <td bgcolor=white>&nbsp;
        <table>
            <tr>
                <td width=100 align=right>이름&nbsp;&nbsp;</td>
                <td align=left >
                     <?php echo $_SESSION['name']; ?>&nbsp;(<?php echo $_SESSION['user_id']; ?>)
                </td>
            </tr>
            <tr>
                <td width=100 align=right>제 목&nbsp;&nbsp;</td>
                <td align=left >
                    <INPUT type=text name=title size=100 
                    value="<?php if( isset($row['title']) ) echo $row['title']; ?>">

                </td>
            </tr>
            <tr>
                <td width=100 align=right>내용&nbsp;&nbsp;</td>
                <td align=left >
                    <TEXTAREA name=content cols=90 rows=20><?php if( isset($row['content']) ) echo $row['content']; ?></TEXTAREA>
                </td>
            </tr>
            <tr>
                <td colspan=10 align=center>
                   <form name="fr" onsubmit="return check()">
               		<INPUT type='submit' value="글 저장하기"> 
                    &nbsp;&nbsp;
                    <INPUT type='reset' value="다시 쓰기">
                    &nbsp;&nbsp;
                    <INPUT type='button' value="되돌아가기" 
                    onclick="history.back(-1)"></form> <!--버튼이 클릭되었을때 발생하는 이벤트로 자바스크립트를 실행함. 이렇게 하면 바로 이전페이지로 감-->
                </td>
                </td>
            </tr>
            </TABLE>
        </td>
    </tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</div>
    </body>
  <?php include("footer.php"); ?>