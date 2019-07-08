<?php

	include("conf.php");
	$pid = $_GET["pages_id"];

	
	$delete_sql = "DELETE FROM `uc_menu` WHERE id=".$pid;
	$pagesresult = mysql_query($delete_sql);
?>
<script>
	window.location.href = 'pageslist.php';
</script>