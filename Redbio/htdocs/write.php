  <?php  include("header.php"); ?>
<style>
td { font-size : 11pt; }
</style>

<title>Q&A</title>


<script>
function check() {
	if(fr.email.value == "") {
	    alert("이메일을 입력해 주세요.");
	    fr.email.focus();
	    return false;
	  }
  else if(fr.pass.value == "") {
	    alert("비밀번호을 입력해 주세요.");
	    fr.pass.focus();
	    return false;
	  }
  else if(fr.title.value == "") {
	    alert("제목을 입력해 주세요.");
	    fr.title.focus();
	    return false;
	  }
  else if(fr.content.value == "") {
    alert("내용을 입력해 주세요.");
    fr.content.focus();
    return false;
  }
  else return true;
}
</script>


<div id="centered">
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form method="post" action="insert.php">
<table width=800 border=0 cellpadding=2 cellspacing=1 bgcolor=#AACDAE>
    <tr>
        <td height=20 align=center bgcolor=#AACDAE>
        <font color=white><B>글 쓰 기</B></font>
        </td>
    </tr>
    <!-- 입력 부분 -->
	
        <td bgcolor=white>&nbsp;
        <table>
            <tr>
                <td  width=250 align=right>이름&nbsp;&nbsp;</td>
                <td align=left >
                    <?php echo $_SESSION['name']; ?>&nbsp;(<?php echo $_SESSION['user_id']; ?>)
                </td>
            </tr>
            <tr>
                <td width=250 align=right>email&nbsp;&nbsp;</td>
                <td align=left >
                    <INPUT type=text name=email size=50
                    value="<?php if( isset($row['email']) ) echo $row['email']; ?>">
                </td>
            </tr>
            <tr>
                <td width=250 align=right>pw&nbsp;&nbsp;</td>
                <td align=left >
                    <INPUT type=password name=pass size=15> 
                    &nbsp;&nbsp;(비밀번호를 설정해야 수정 가능합니다.)
                </td>
            </tr>
            <tr>
                <td width=250 align=right>제 목&nbsp;&nbsp;</td>
                <td align=left >
                    <INPUT type=text name=title size=100 
                    value="<?php if( isset($row['title']) ) echo $row['title']; ?>">

                </td>
            </tr>
            <tr>
                <td width=250 align=right>내용&nbsp;&nbsp;</td>
                <td align=left >
                    <TEXTAREA name=content cols=90 rows=15><?php if( isset($row['content']) ) echo $row['content']; ?></TEXTAREA>
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

