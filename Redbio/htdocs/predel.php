  <?php  include("header.php"); ?>
  <title>Q&A</title>
  
    <body>
   		 
   		 	<div id="centered">
<style>

td {font-size : 11pt;}

</style>
</head>

<center>
<BR><BR><BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. 이때 post 방식을 사용하는 것을 -->
<form method="post" action="del.php?id=<?php echo $_GET['id']; ?>" >
<table width=800 border=0 cellpadding=2 cellspacing=1
bgcolor=#FFFFFF>
<tr>
    <td height=30 align=center bgcolor=#AACDAE>
        <font color=white><B>비 밀 번 호 확 인</B></font>
    </td>
</tr>
<tr>
    <td height=60 align=center >
        <font color=#AACDAE><B>비밀번호 : &nbsp;</b>
        <INPUT type=password name=pass size=40>&nbsp;&nbsp;
        <INPUT type=submit value="확 인">
        <INPUT type=button value="취 소" onclick="history.back(-1)">
    </td>
</tr>
</table>
</div>
    </body>
  <?php include("footer.php"); ?>