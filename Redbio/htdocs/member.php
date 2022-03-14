<?php  include("header.php"); ?>


<script type="text/javascript">

  function checkForm(form)
  {
    if(form.user_id.value == "") {
      alert("아이디를 입력해 주세요!");
      form.user_id.focus();
      return false;
    }

    re = /^\w+$/;
    if(!re.test(form.user_id.value)) {
      alert("아이디는 문자와 숫자만 가능합니다!");
      form.user_id.focus();
      return false;
    }
     if(form.name.value == "") {
    		 alert("이름을 입력해 주세요.");
    		 form.name.focus();
    		 return false;
    	 }
      if(form.pw.value.length < 6) {
        alert("비밀번호는 6자 이상 입력해주세요!");
        form.pw.focus();
        return false;
      }
      if(form.pw.value == form.user_id.value) {
        alert("비밀번호와 아이디는 다르게 설정해주세요!");
        form.pwd1.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(form.pw.value)) {
        alert("비밀번호는 숫자를 포함해야합니다. (0-9)!");
        form.pw.focus();
        return false;
      }
      
      re = /[a-z]/;
      if(!re.test(form.pw.value)) {
        alert("비밀번호는 소문자를 포함해야 합니다.  (a-z)!");
        form.pw.focus();
        return false;
      }
      
      re = /[A-Z]/;
      if(!re.test(form.pw.value)) {
        alert("비밀번호는 대문자를 포함해야합니다. (A-Z)!");
        form.pw.focus();
        return false;
      }

      re = /[!@#$%^&*()?_~]/;
      if(!re.test(form.pw.value)) {
        alert("비밀번호는 특수문자를 포함해야합니다. (!@#$%^&*()?_~)!");
        form.pw.focus();
        return false;
      }
      if(form.email.value == "") {
        alert("이메일을 입력해 주세요.");
        form.email.focus();
        return false;
      }
      if(form.memo.value == "") {
        alert("기숙사를 입력해 주세요.");
        form.memo.focus();
        return false;
      }
    return true;
  }
</script>

<body>
 <div id="centered">
		<div class="content-center">
			<h1>Register HERE!</h1>
			 <form method="post" action="member_post.php" onsubmit="return checkForm(this)"  >
					<b>ID&nbsp;</b><input type="text" size=10 maxlength=10 name="user_id" ><br /><br>
					<b>Name&nbsp;</b><input type="text" size=10 maxlength=10 name="name" ><br /><br>
					<b>Password&nbsp;</b><input type="password" size=10 maxlength=20 name="pw" >(최소 6자 / 대소문자,숫자,특수문자 포함)<br /><br>
					<b>E-mail&nbsp;</b><input type="email" size=20 maxlength=20 name="email"><br /><br>
					<b>Dormitory&nbsp;</b><input type="text" size=30 maxlength=30 name="memo"><br /><br>

						 <input type="submit" value="가입" >
						 <input type='reset' value="다시 작성">

				</form>
			</div>
	 </div>
</body>

<?php include("footer.php"); ?>
