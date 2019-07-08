<?php

	include("conf.php");
	$pid = $_GET["pages_id"];

	
	$delete_sql = "DELETE FROM `uc_table_post` WHERE id=".$pid;
	$postresult = mysql_query($delete_sql);
?>
<script>
	window.location.href = 'postlist.php';
</script>