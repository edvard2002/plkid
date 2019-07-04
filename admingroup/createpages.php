<?php
	include("conf.php");
    session_start();
    if ( isset( $_SESSION['id'] ) ) {	
	$page_name_ru = $_POST["page_name_ru"];
	$page_name_en = $_POST["page_name_en"];
	$page_text = $_POST["page_text"];
	$page_keywords = $_POST["page_keywords"];
	
	$pagessql = "INSERT INTO 
	`uc_menu`(
		`menu_name`, 
		`menu_name_en`, 
		`menu_text`, 
		`menu_keywords`
	) 
	VALUES (
		'".$page_name_ru."', 
		'".$page_name_en."', 
		'".$page_text."', 
		'".$page_keywords."'
	)";
	$pagesres = mysql_query($pagessql);
}else{
	header("location: index.php")
}
?>
<script>
	window.location.href = 'pageslist.php';
</script>