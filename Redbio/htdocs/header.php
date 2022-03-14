<!doctype html>
<?php  session_start();  ?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">


	<div id="row" >
		<div class="redbio">
			<font size="15"><a href="/index.php"><img class="logo" src="/redbio_logo.png"
border=0 width=20% align=center></a></font>
		</div>

		<br><br>

			<div class="menu-wrap">
   			  <nav class="menu">

   			     <ul class="clearfix">

       			     <li>
                  		<a href="">COMPANY <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/company.php">경영 철학</a></li>
                  		     <!--     <li><a href="#">CEO 인사말</a></li>
                 		           <li><a href="#">연혁 소개</a></li>-->
                             </ul>
                     </li>

                     <li>
                  		<a href="">BUSINESS <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/business.php">사업 전략</a></li>
                  		  <!--        <li><a href="#">사업 분야</a></li> -->
                             </ul>
                     </li>

                     <li>
                  		<a href="">PRODUCT <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/product.php">제품</a></li>
                  		    <!--      <li><a href="#">품질 관리</a></li>
                 		           <li><a href="#">생산 설비</a></li>  -->
                             </ul>
                     </li>

                     <li>
                  		<a href="">LABORATORY <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/lab.php">연구소</a></li>
                  		   <!--       <li><a href="/lab.php">연구 분야</a></li>
                 		           <li><a href="#">연구 성과</a></li>  -->
                             </ul>
                     </li>

                     <li>
                  		<a href="">RECUIT <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/recuit.php">일반 채용</a></li>
                  		   <!--       <li><a href="/news.php">보도 자료</a></li> -->
                             </ul>
                     </li>

                     <li>
                  		<a href="">IR <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/empl.php">주가 정보</a></li>
                  		     <!--     <li><a href="/">채용 공고</a></li>
                 		           <li><a href="#">채용 문의</a></li> -->
                             </ul>
                     </li>

                     <li>
                  		<a href="">Q&A <span class="arrow">&#9660;</span></a>
                   		     <ul class="sub-menu">
                   		         <li><a href="/list.php">고객센터</a></li>
                  		          <li><a href="/way.php">오시는 길</a></li>
                             </ul>
                     </li>

                     <li>
                      <?php

                            if(!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) {
                                echo "<a href=\"/login.php\">[LOGIN]</a>";
                            } else {
				$now = time();
				if($now > $_SESSION['expire']){
					session_destroy();
					echo "<script>alert('세션이 만료되었습니다. 다시 로그인 하십시오.');</script>";
				  echo "<script>window.location.replace('login.php');</script>";

				} else{
                                $user_id = $_SESSION['user_id'];
                                $user_name = $_SESSION['name'];
                                echo "<strong> $user_name</strong>님 환영합니다!&nbsp;&nbsp;";
                                // echo "Hi,<strong> $user_name</strong>($user_id)&nbsp;&nbsp;";
                                echo "<a href=\"/logout.php\">[LOGOUT]</a>";
				}
                            }
                        ?>


        			</li>


                     <li>
                     	<?php
                           // 관리자라면 회원 관리 탭
                            if( isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
                                if( $_SESSION['user_id']== 'admin' ){

                                echo "<a href=\"/management.php\">[회원 관리]</a>";
                                }
                            } // 가입안한 방문자라면
                             else{
                                 echo "<a href=\"/member.php\">회원가입</a>";
                             }
                        ?>


                     </li>


                 </ul>



               </nav>

          	</div>



	</div>

  </head>
