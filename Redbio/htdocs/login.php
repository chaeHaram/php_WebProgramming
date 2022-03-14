  <?php  include("header.php"); ?>
  <title>LOGIN HERE</title>
  
    <body>
   		 
   		 	<div id="centered">
   		 		<div class="content-center">
                <h1>Welcome to REDBIO !</h1>
               
                <h2>LOGIN</h2>
                <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) { ?>
                <form method="post" action="login_ok.php">
                    <p>ID: <input type="text" name="user_id" /></p>
                    <p>PWD: <input type="password" name="pw" /></p>
                    <p><input type="submit" value="LOGIN" /></p>
                </form>
                <?php } else {
                    $user_id = $_SESSION['user_id'];
                    $name = $_SESSION['name'];
                    echo "<p><strong></strong>$name($user_id) 님은 로그인 하셨습니다.";
                    echo "<a href=\"index.php\">[GO HOME]</a> ";
                    echo "<a href=\"logout.php\">[LOGOUT]</a></p>";
                } ?>
                </div>
          </div>
      
    </body>
  <?php include("footer.php"); ?>
