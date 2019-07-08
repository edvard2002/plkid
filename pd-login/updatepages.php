<?php

	include("conf.php");
	session_start();
  	$post_id = $_GET["post_id"];
	$page_name_ru = $_POST["page_name_ru"];
	$page_name_en = $_POST["page_name_en"];
	$page_text = $_POST["page_text"];
	$page_keywords = $_POST["page_keywords"];

	$pagessql = "UPDATE `uc_menu` 
					SET `menu_name`='".$page_name_ru."',
						`menu_name_en`='".$page_name_en."',
						`menu_text`='".$page_text."',
						`menu_keywords`='".$page_keywords."' 
						WHERE id=".$post_id;
	$pagesres = mysql_query($pagessql);
?>
<script>
window.location.href = 'pageslist.php';
</script>
