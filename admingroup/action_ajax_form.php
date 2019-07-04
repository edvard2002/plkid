<?php
	include("conf.php");

	echo $site_name = $_POST["site_name"];
	echo $site_desc = $_POST["site_desc"];
	echo $site_keywords = $_POST["site_keywords"];
	echo $site_contacts = $_POST["site_contacts"];
	echo $site_email = $_POST["site_email"];
	echo $site_instalink = $_POST["site_instalink"];
	echo $site_fblink = $_POST["site_fblink"];
	echo $site_address = $_POST["site_address"];
	echo $count_end = $_POST["count_end"];
	echo $count_start = $_POST["count_start"];
	
	$update_query = 'UPDATE `uc_tble_about` SET `title`="'.$site_name.'",`description`="'.$site_desc.'",`keywords`="'.$site_keywords.'",`phone1`="'.$site_contacts.'",`phone2`="'.$site_email.'",`instagram`="'.$site_instalink.'",`facebook`="'.$site_fblink.'",`address`="'.$site_address.'" WHERE 1';
	$result = mysql_query($update_query);
	
	$update_query_count = "UPDATE `uc_count_people` SET `count_start`=".$count_start.",`count_end`=".$count_end." WHERE 1";
	$result = mysql_query($update_query_count);
?>