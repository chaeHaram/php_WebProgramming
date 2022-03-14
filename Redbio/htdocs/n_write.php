  <?php  include("header.php"); ?>
<style>
td { font-size : 11pt; }
</style>

<title>NEWS</title>




<div id="centered">
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form method="post" action="n_insert.php">
<table width=800 border=0 cellpadding=2 cellspacing=1 bgcolor=#AACDAE>
    <tr>
        <td height=20 align=center bgcolor=#AACDAE>
        <font color=white><B>글 쓰 기</B></font>
        </td>
    </tr>
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
               		<INPUT type='submit' value="글 저장하기"> 
                    &nbsp;&nbsp;
                    <INPUT type='reset' value="다시 쓰기">
                    &nbsp;&nbsp;
                    <INPUT type='button' value="되돌아가기" 
                    onclick="history.back(-1)">
                </td>
            </tr>
        </TABLE>
</td>
</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>

  <?php  include("footer.php"); ?>

