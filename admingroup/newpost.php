<?php
	include("conf.php");
	    session_start();
    if ( isset( $_SESSION['id'] ) ) {

	$uploadfile1 = "../uploads/".$_FILES['somename']['name'];
	$uploadfile2 = "../uploads/".$_FILES['somename1']['name'];
	$uploadfile3 = "../uploads/".$_FILES['somename2']['name'];
	$uploadfile4 = "../uploads/".$_FILES['somename3']['name'];
	$uploadfile5 = "../uploads/".$_FILES['somename4']['name'];
	$uploadfile6 = "../uploads/".$_FILES['somename5']['name'];
  	move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile1);
  	move_uploaded_file($_FILES['somename1']['tmp_name'], $uploadfile2);
  	move_uploaded_file($_FILES['somename2']['tmp_name'], $uploadfile3);
  	move_uploaded_file($_FILES['somename3']['tmp_name'], $uploadfile4);
  	move_uploaded_file($_FILES['somename4']['tmp_name'], $uploadfile5);
  	move_uploaded_file($_FILES['somename5']['tmp_name'], $uploadfile6);




	$post_name = $_POST["post_name"];
	$post_pic = $_FILES["somename"]["name"];
	$post_text = $_POST["post_text"];
	$post_small_text = $_POST["post_small_text"];
	$post_pic1 = $_FILES["somename1"]["name"];
	$post_pic2 = $_FILES["somename2"]["name"];
	$post_pic3 = $_FILES["somename3"]["name"];
	$post_pic4 = $_FILES["somename4"]["name"];
	$post_pic5 = $_FILES["somename5"]["name"];
	$post_date = $_POST["post_date"];
	$post_category = $_POST["post_category"];
	$post_keywords = $_POST["post_keywords"];
 	$post_slide = $_POST["post_slider"];


	$sql = "INSERT INTO 
				`uc_table_post`(
					`post_title`, 
					`post_desc`, 
					`post_img`, 
					`post_text`, 
					`post_img1`, 
					`post_img2`, 
					`post_img3`, 
					`post_img4`, 
					`post_img5`, 
					`post_category`, 
					`post_keywords`, 
					`post_date`, 
					`status`
				) 
			VALUES (
				'".$post_name."', 
				'".$post_small_text."', 
				'".$post_pic."', 
				'".$post_text."', 
				'".$post_pic1."', 
				'".$post_pic2."', 
				'".$post_pic3."', 
				'".$post_pic4."', 
				'".$post_pic5."', 
				'".$post_category."', 
				'".$post_keywords."', 
				'".$post_date."', 
				'".$post_slide."'
			)";
	$result = mysql_query($sql);
}else{
	header("location: index.php");
}
?>
<script>
	window.location.href = 'postlist.php';
</script>
