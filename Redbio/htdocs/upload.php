<?php

	$conn = mysql_connect("localhost", "admin", "admin");
	mysql_select_db('redbio',$conn);

if(isset($_POST['fileToUpload']))
{

 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="C:/bitnami\wampstack-5.6.34-0/apache2/htdocs/uploads/";
 $file_name_extension = strtolower(pathinfo($file,PATHINFO_EXTENSION));

if($file_name_extension != 'hwp' && $file_name_extension != 'docx' && $file_name_extension != 'pdf' && $file_name_extension != 'xps')
{
 ?>
 <script>
 alert('Sorry, only hwp, docx, pdf, xps, files are allowed.');
 window.location.href='recuit.php';
 </script>
  <?php
 }

else
{

	// new file size in KB
  $new_size = $file_size/1024;
  // new file size in KB

  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case

  $final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	 {
	  $sql="INSERT INTO uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
	  mysql_query($sql);
	  ?>
	  <script>
	  alert('successfully uploaded');
	  window.location.href='recuit.php';
	  </script>
	  <?php
	 }

	 else
	 {
	  ?>
	  <script>
	  alert('error while uploading file');
		window.location.href='recuit.php';
	  </script>
	  <?php
	 }
}

}

?>
