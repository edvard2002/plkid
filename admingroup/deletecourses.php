<?php

	include("conf.php");
	$pid = $_GET["pages_id"];


	$delete_sql = "DELETE FROM `courses_tbl` WHERE id=".$pid;
	$postresult = mysql_query($delete_sql);
?>
<script>
	window.location.href = 'courseslist.php';
</script>
