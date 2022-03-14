<?php include("header.php"); ?>

<body>
<div id="centered">
<center>

<hr>
(주)레드바이오는 다음과 같은 인재를 기다립니다.<br>
<b>01 창의성 02 원칙준수 03 도전정신 04 세계제일주의</b><br>
<hr>
<br>
<img src="recuit.PNG" width=50% >
<br>
<hr><br>
<b><font size="6">서류 제출</font></b><br>

 <form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" />
 <button type="submit" name="fileToUpload">upload</button>
 </form>


</div>
</center>
</body>




<?php include("footer.php"); ?>